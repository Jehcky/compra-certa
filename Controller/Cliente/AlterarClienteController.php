<?php

require_once "Model/Cliente.php";
require_once "Controller/Icontroller.php";

class AlterarClienteController implements Icontroller{
    private $cliente;
    private $campo;
    private $dado;

    public function __construct($id, $campo, $dado){
        $this->cliente = new Cliente();
        $this->cliente->setID($id);
        $this->campo = $campo;
        $this->dado = $dado;
    }

    public function processaRequisicao(){
        if($this->campo=="nome"||$this->campo=="cpf"||$this->campo=="email"||$this->campo=="senha"){
            $this->cliente->AlterarCliente($this->campo, $this->dado);
            require 'View/teste.php';
        }
    }
}
?>