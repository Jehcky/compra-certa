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
        
        $this->cliente->setTxLogin($_POST['txLogin']);
        $this->cliente->setTxSenha($_POST['txSenha']);
        $this->cliente->setTxNomeCliente($_POST['txNomeCliente']);
        $this->cliente->setTxCPF($_POST['txCPF']);
        $this->cliente->setTxEmail($_POST['txEmail']);
        if (isset($_POST['flReceberEmail'])) {
            $_POST['flReceberEmail'] == "on" ? 
            $this->cliente->setFlReceberEmail("1") : $this->cliente->setFlReceberEmail("0");
        } else {
            $this->cliente->setFlReceberEmail("0");
        }
        $this->cliente->inserirCliente($this);
        require 'View/perfil.php';
        
    }
}
?>