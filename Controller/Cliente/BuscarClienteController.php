<?php

require_once "Model/Cliente.php";
require_once "Controller/Icontroller.php";

class BuscarClienteController implements Icontroller{
    private $cliente;

    public function __construct(){
        $this->cliente = new Cliente();
    }
    
    public function processaRequisicao() : Cliente {
        $this->cliente = Cliente::buscarClientePorId($_GET['idCliente']);
        return $this->cliente;
    }
}
?>