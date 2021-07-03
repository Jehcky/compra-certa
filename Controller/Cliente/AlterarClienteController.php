<?php

require_once "Model/Cliente.php";
require_once "Controller/Icontroller.php";

class AlterarClienteController implements Icontroller{
    private $cliente;

    public function __construct(){
        $this->cliente = new Cliente();
    }
    
    public function processaRequisicao(){
        $this->cliente = Cliente::buscarClientePorId($_POST['idCliente']);
    }
}
?>