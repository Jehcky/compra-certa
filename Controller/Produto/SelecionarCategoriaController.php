<?php

require_once "Model/Produto.php";
require_once "Controller/Icontroller.php";

class SelecionarCategoriaController implements Icontroller{
    private $produto;

    public function __construct($categoria){
        $this->produto = new Produto();
        $this->produto->setCategoria($categoria);
        $this->processaRequisicao();
    }

    public function processaRequisicao(){
        $listaProdutos = $this->produto->SelecionarCategoria($this->produto->getCategoria());
        require 'View/teste.php';
    }
}
?>