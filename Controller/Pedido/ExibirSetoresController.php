<?php

require_once "Model/Pedido.php";
require_once "Controller/Icontroller.php";

class ExibirSetoresController implements Icontroller{
    private $pedido;

    public function __construct(){
        $this->pedido = new Pedido();
    }

    public function processaRequisicao(){
        $pedidos = $this->pedido->listaPedidos();
        $i=0;
        foreach($pedidos as $id){
            $pedidos[$i]->setLstHistorico($this->pedido->acompanhaPedido($pedidos[$i]->getIdPedido()));
            $pedidos[$i]->setLstProdutos($this->pedido->visualizaProdutos($pedidos[$i]->getIdPedido()));
            $i++;
        }
        return $pedidos;
    }
}
?>