<?php

require_once "Model/Produto.php";
require_once "Controller/Icontroller.php";

class SelecionarPromocaoController implements Icontroller{
    private $produto;

    public function __construct(){
        $this->produto = new Produto();
    }

    public function processaRequisicao(){
        $listaProdutos = $this->produto->SelecionarPromocao();
        require 'View/teste.php';
    }
}
?>