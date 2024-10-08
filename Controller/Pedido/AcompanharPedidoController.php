<?php

require_once "Model/Pedido.php";
require_once "Controller/Icontroller.php";

class SelecionarCategoriaController implements Icontroller{
    private $pedido;

    public function __construct($idPedido){
        $this->pedido = new Pedido();
        $this->pedido->setIdPedido($idPedido);
        $this->processaRequisicao();
    }

    public function processaRequisicao(){
        $historicoPedido = $this->pedido->acompanhaPedido($this->pedido->getIdPedido());
    }
}
?>