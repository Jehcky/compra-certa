<?php

require_once "../compra-certa/Model/Cliente.php";
require_once '../compra-certa/Controller/IController.php';

class IncluirClienteController implements Icontroller{
    private $cliente;
    
    public function __construct(){
        $this->cliente = new Cliente();
        $this->processaRequisicao();
    }

    public function processaRequisicao(){
        //echo '<pre>';
        //var_dump($_POST);
        //die;
        $this->cliente->setTxLogin($_POST['txLogin']);
        $this->cliente->setTxSenha($_POST['txSenha']);
        $this->cliente->setTxNomeCliente($_POST['txNomeCliente']);
        $this->cliente->setTxCPF($_POST['txCPF']);
        $this->cliente->setTxEmail($_POST['txEmail']);
        $this->cliente->incluirCliente($this);
        require 'View/teste.php';
        
    }
}
?>