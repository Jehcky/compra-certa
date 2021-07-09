<?php
  require_once "Conexao.php";

  class PedidoDAO{

    public static function visualizaPedido($idPedido){
      /*
      SELECT E.idPedido AS pedido, A.txNomeCliente AS cliente, B.txRua AS endereco, E.vlTotal, E.nuAvaliacao, E.txObs 
      FROM tbcliente A, tbendereco B, tbpedido E 
      WHERE A.idCliente = B.idCliente
      AND E.idCliente = A.idCliente
      AND E.idEndereco = B.idEndereco
      AND E.idPedido = ''
      */
      $pedido = new Pedido();
      return $pedido;
    }

    public static function visualizaProdutos($idPedido){
      /*
      SELECT A.txNomeProduto AS produto, 
      CASE 
          WHEN A.flPromocao = 1 THEN A.vlPreco_promocao
          WHEN A.flPromocao = 0 THEN A.vlPreco
      END AS valor,
      B.nuQuantidade AS quantidade
      FROM tbproduto A, tbitem_pedido B, tbpedido C
      WHERE C.idPedido = B.idPedido
      AND B.idProduto = A.idProduto
      AND C.idPedido = ''
      */
    }

    public static function acompanhaPedido($idPedido){
      /*
      SELECT A.dtEncaminhamento AS data, A.idSetor AS setor, A.idFuncionario AS funcionario 
      FROM tbhistorico A, tbpedido B 
      WHERE A.idPedido = B.idPedido
      AND B.idPedido = ''
      ORDER BY A.dtEncaminhamento
      */
    }

    public static function avaliaPedido($idPedido){
      /*
      UPDATE tbpedido
      SET txAvaliacao = '', txObs = ''
      WHERE idPedido = ''
      */
    }
  }
?>

