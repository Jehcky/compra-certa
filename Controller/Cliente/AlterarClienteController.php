<?php

require_once "Model/Cliente.php";
require_once "Controller/Icontroller.php";

class AlterarClienteController implements Icontroller{
    private $cliente;

    public function __construct($id){
        $this->cliente = new Cliente();
        $this->cliente->getidCliente($id);
    }

    public function processaRequisicao(){
        
    }
}
?>