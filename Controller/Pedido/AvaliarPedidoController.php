<?php

require_once "Model/Pedido.php";
require_once "Controller/Icontroller.php";

class SelecionarCategoriaController implements Icontroller{
    private $pedido;

    public function __construct($idPedido, $nuAvaliacao, $txObs){
        $this->pedido = new Pedido();
        $this->pedido->setIdPedido($idPedido);
        $this->pedido->setNuAvaliacao($nuAvaliacao);
        $this->pedido->setTxObs($txObs);
        $this->processaRequisicao();
    }

    public function processaRequisicao(){
        $this->pedido->setNuAvaliacao($_POST['nuAvaliacao']);
        $this->pedido->setTxObs($_POST['txObs']);
        require 'View/teste.php';
    }
}
?>