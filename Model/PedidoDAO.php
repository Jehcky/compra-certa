<?php
  require_once "Conexao.php";

  class PedidoDAO{

  /*
      SELECT E.pedidoID AS pedido, A.nome AS cliente, B.rua AS endereco, E.valor, E.avaliação, E.obs 
      FROM cliente A, endereco B, pedido E 
      WHERE A.clienteID = B.cliente
      AND E.cliente = A.clienteID
      AND E.endereco = B.enderecoID
      AND E.pedidoID = ''

      SELECT A.data AS data, A.setor AS setor, A.funcionario AS funcionario 
      FROM historico A, pedido B 
      WHERE A.pedido = B.pedidoID
      AND B.pedidoID = ''
      ORDER BY A.data

      SELECT A.nome AS produto, 
      CASE 
          WHEN A.promocao = 1 THEN A.valor_promocao
          WHEN A.promocao = 0 THEN A.valor
      END AS valor,
      B.qtd AS quantidade
      FROM produto A, item_pedido B, pedido C
      WHERE C.pedidoID = B.pedidoID
      AND B.produtoID = A.produtoID
      AND C.pedidoID = ''

      UPDATE pedido
      SET avaliação = '', obs = ''
      WHERE pedidoID = ''
      */

    public function visualizaPedido(){
      try{
        $minhaConexao = Conexao::getConexao();
        $comando = "";
        $sql = $minhaConexao->prepare($comando);
                      
        $sql->execute();
        $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
        
        $pedido=new Pedido();
        $i=0;

        while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
          $produto = new Produto();
          $produto->setID($linha['produtoID']);
          $produto->setNome($linha['nome']);
          $produto->setCategoria($linha['categoria']);
          $produto->setValor($linha['valor']);
          $produto->setPromocao($linha['promocao']);
          $produto->setValorPromocao($linha['valor_promocao']);
          $produto->setQtd($linha['quantidade']);
          $produto->setImg($linha['img_url']);
          $produto->setDescricao($linha['descricao']);     
          $listaProdutos[$i] = $produto;
          $i++;
        }
        return $pedido;
      }
      catch(PDOException $e){
        return array();
      }
    }

    public function visualizaProdutos(){
      try{
        $minhaConexao = Conexao::getConexao();
        $comando = "";
        $sql = $minhaConexao->prepare($comando);
                      
        $sql->execute();
        $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
        
        $listaProdutos=array();
        $i=0;

        while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
          $produto = new Produto();
          $produto->setID($linha['produtoID']);
          $produto->setNome($linha['nome']);
          $produto->setCategoria($linha['categoria']);
          $produto->setValor($linha['valor']);
          $produto->setPromocao($linha['promocao']);
          $produto->setValorPromocao($linha['valor_promocao']);
          $produto->setQtd($linha['quantidade']);
          $produto->setImg($linha['img_url']);
          $produto->setDescricao($linha['descricao']);     
          $listaProdutos[$i] = $produto;
          $i++;
        }
        return $listaProdutos;
      }
      catch(PDOException $e){
        return array();
      }
    }

    public function acompanhaPedido(){
      try{
        $minhaConexao = Conexao::getConexao();
        $comando = "";
        $sql = $minhaConexao->prepare($comando);
                      
        $sql->execute();
        $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
        
        $historicoPedido=array();
        $i=0;

        while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
          $produto = new Produto();
          $produto->setID($linha['produtoID']);
          $produto->setNome($linha['nome']);
          $produto->setCategoria($linha['categoria']);
          $produto->setValor($linha['valor']);
          $produto->setPromocao($linha['promocao']);
          $produto->setValorPromocao($linha['valor_promocao']);
          $produto->setQtd($linha['quantidade']);
          $produto->setImg($linha['img_url']);
          $produto->setDescricao($linha['descricao']);     
          $historicoPedido[$i] = $produto;
          $i++;
        }
        return $historicoPedido;
      }
      catch(PDOException $e){
        return array();
      }
    }

    public function avaliaPedido(){
      try{
        $minhaConexao = Conexao::getConexao();
        $comando = "";
        $sql = $minhaConexao->prepare($comando);
                      
        $sql->execute();
        $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
        
        $listaProdutos=array();
        $i=0;

        while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
          $produto = new Produto();
          $produto->setID($linha['produtoID']);
          $produto->setNome($linha['nome']);
          $produto->setCategoria($linha['categoria']);
          $produto->setValor($linha['valor']);
          $produto->setPromocao($linha['promocao']);
          $produto->setValorPromocao($linha['valor_promocao']);
          $produto->setQtd($linha['quantidade']);
          $produto->setImg($linha['img_url']);
          $produto->setDescricao($linha['descricao']);     
          $listaProdutos[$i] = $produto;
          $i++;
        }
        return $listaProdutos;
      }
      catch(PDOException $e){
        return array();
      }
    }
  }
?>

