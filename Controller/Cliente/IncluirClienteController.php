<?php

require_once "Model/Cliente.php";
require_once "Controller/Icontroller.php";

class IncluirClienteController implements Icontroller{
    private $cliente;

    public function __construct(){
        $this->cliente = new Cliente();
    }

    public function processaRequisicao(){
        
        if ($_GET['acao'] == 'inserir') {
            $this->cliente->setTxNomeCliente("Lucas");
            $this->cliente->setTxSenha("12345678900");
            $this->cliente->setTxEmail("lucas@email.com");
            $this->cliente->incluirCliente();
            require 'View/teste.php';
        }
        
    }
}
?>