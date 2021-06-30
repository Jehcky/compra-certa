<?php

require_once "Model/Cliente.php";
require_once "Controller/Icontroller.php";

class IncluirClienteController implements Icontroller{
    private $cliente;

    public function __construct(){
        $this->cliente = new Cliente();
    }

    public function processaRequisicao(){
        
        $this->cliente->setUsuario("Lucas");
        $this->cliente->setNome("Lucas Barboza");
        $this->cliente->setCPF("12345678900");
        $this->cliente->setEmail("lucas@email.com");
        $this->cliente->setSenha("12345");

        $this->cliente->incluirCliente();
        require 'View/teste.php';
    }
}
?>