<?php
  require_once "Conexao.php";

  class PedidoDAO{

    public static function realizaPedido($pedido){
      try{
        $minhaConexao = Conexao::getConexao();
        $comando = "CREATE  PROCEDURE
        BEGIN
        DECLARE ID INT
        INSERT INTO `tbpedido` (`idPedido`, `idCliente`, `idEndereco`, `vlTotal`, `nuAvaliacao`, `txObs`) VALUES (NULL,'" . $pedido->getTxCliente() . "', 1, '". $pedido->getVlValor() . "', NULL, NULL);";
        for($j=0;$j<count($pedido->getLstProdutos());$j++) {
          $comando = $comando . "INSERT INTO `tbitem_pedido` (`idItem`, `idPedido`, `idProduto`, `nuQuantidade`) VALUES (NULL, ," . $pedido->getLstProdutos()[$j]['produto'] . "," . $pedido->getLstProdutos()[$j]['quantidade'] . ");";
        }
        $comando = $comando . "INSERT INTO `tbhistorico` (`idHistorico`, `idPedido`, `dtEncaminhamento`, `idSetor`, `idFuncionario`) VALUES (NULL, , CURRENT_DATE(), '1', NULL);
        END";
        $sql = $minhaConexao->prepare($comando);
        $sql->execute();
     }
     catch(PDOException $e){
         return 0;
     }
    }

    public static function listaPedidos(){
      try{
        $minhaConexao = Conexao::getConexao();
        $comando = '
          SELECT A.idPedido AS pedido, C.txNomeCliente AS nome, CONCAT(B.txBairro, ", ", B.txRua, ", nº ",B.nuLogadouro, ", ", B.txCep) AS endereco, A.vltotal AS valor, A.nuAvaliacao AS avaliacao, A.txObs AS obs
          FROM tbpedido A, tbendereco B, tbcliente C
          WHERE A.idCliente = C.idCliente
          AND A.idEndereco = B.idEndereco
        ';
        $sql = $minhaConexao->prepare($comando);
    
        $sql->execute();
        $result = $sql->setFetchMode(PDO::FETCH_ASSOC);

        $listaPedidos=array();
        $i=0;

        while($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
          $pedido = new Pedido();
          $pedido->setIdPedido($linha['pedido']);
          $pedido->setTxCliente($linha['nome']);
          $pedido->setTxEndereco($linha['endereco']);
          $pedido->setVlValor($linha['valor']);
          $pedido->setNuAvaliacao($linha['avaliacao']);
          $pedido->setTxObs($linha['obs']);
          $pedido->setLstHistorico(NULL);
          $pedido->setLstProdutos(NULL);
          $listaPedidos[$i] = $pedido;
          $i++;
        }
        return $listaPedidos; 
      }
      catch(PDOException $e){
        throw $e;
      }
    }

    public static function visualizaProdutos($idPedido){
      try{
        $minhaConexao = Conexao::getConexao();
        $comando = '
          SELECT C.txNomeProduto AS produto, 
          CASE 
              WHEN C.flPromocao = 1 THEN C.vlPreco_promocao
              WHEN C.flPromocao = 0 THEN C.vlPreco
          END AS valor,
          B.nuQuantidade AS quantidade
          FROM  tbpedido A, tbitem_pedido B, tbproduto C
          WHERE A.idPedido = B.idPedido
          AND B.idProduto = C.idProduto
          AND A.idPedido = ' . $idPedido;
        $sql = $minhaConexao->prepare($comando);
    
        $sql->execute();
        $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
        $pedido = new Pedido();
        while($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
          $pedido->addLstProdutos(array('produto'=>$linha['produto'], 'valor'=>$linha['valor'], 'quantidade'=>$linha['quantidade']));
        }
        return $pedido->getLstProdutos(); 
      }
      catch(PDOException $e){
        throw $e;
      }
    }

    public static function acompanhaPedido($idPedido){
      try{
        $minhaConexao = Conexao::getConexao();
        $comando = '
        SELECT B.dtEncaminhamento AS data, B.idSetor AS setor, B.idFuncionario AS funcionario 
        FROM tbpedido A, tbhistorico B
        WHERE A.idPedido = B.idPedido
        AND A.idPedido =' . $idPedido . '
        ORDER BY B.dtEncaminhamento';
        $sql = $minhaConexao->prepare($comando);
    
        $sql->execute();
        $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
        $pedido = new Pedido();
        while($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
          $pedido->addLstHistorico(array('data'=>$linha['data'], 'setor'=>$linha['setor'], 'funcionario'=>$linha['funcionario']));
        }
        return $pedido->getLstHistorico(); 
      }
      catch(PDOException $e){
        throw $e;
      }
    }

    public static function avaliaPedido($idPedido){
      /*
      UPDATE tbpedido
      SET txAvaliacao = '', txObs = ''
      WHERE idPedido = ''
      */
    }

    public static function refazPedido($idPedido){

    }

    /**
     * Lista todos os pedidos de um determinado Cliente
     *
     * @param Int $idCliente Id do Cliente
     * @return Array<Pedido>
     * @throws PDOException
     **/
    public static function listarPedidosCliente($idCliente)
    {
        $listaPedidos = array();
        $conexao = null;
        $sql = null;
        try {
            $conexao = Conexao::getConexao();
            $comando = " SELECT "
                . " idPedido, "
                //. " idEndereco, "
                . " vlTotal, "
                . " nuAvaliacao, "
                . " txObs "
                . " FROM tbPedido "
                . " WHERE idCliente = " . $idCliente;
            $sql = $conexao->prepare($comando);
            $sql->execute();
            $dados = $sql->fetchAll();

            $contador = 0;
            foreach ($dados as $dado) {
                $pedido = new Pedido();
                $pedido->setIdPedido($dado['idPedido']);
                $pedido->setVlValor($dado['vlTotal']);
                $pedido->setNuAvaliacao($dado['nuAvaliacao']);
                $pedido->setTxObs($dado['txObs']);
                $listaPedidos[$contador] = $pedido;
                $contador++;
            }
        }
        catch (PDOException $e) {
            throw $e;
        }
        finally {
            $conexao = null;
            $sql = null;
            return $listaPedidos;
        }
    }
  }
?>

