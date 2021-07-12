<?php

require_once "Model/Pedido.php";
require_once "Controller/Icontroller.php";

class InserirPedidoController implements Icontroller{
    private $pedido;

    public function __construct($pedido){
        $this->pedido = new Pedido();
        $this->pedido->setTxCliente($pedido->getTxCliente());
        $this->pedido->setVlValor($pedido->getVlValor());
        $this->pedido->setLstProdutos($pedido->getLstProdutos());
    }

    public function processaRequisicao(){
        $realizaPedido = $this->pedido->realizaPedido($this->pedido);
        return $realizaPedido;
    }
}
?>