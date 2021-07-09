<?php

require_once "Model/Produto.php";
require_once "Controller/Icontroller.php";

class SelecionarCategoriaController implements Icontroller{
    private $produto;

    public function __construct($categoria){
        $this->produto = new Produto();
        $this->produto->setIdCategoria($categoria);
        $this->processaRequisicao();
    }

    public function processaRequisicao(){
        $listaProdutos = $this->produto->buscarProdutosPorCategoria($this->produto->getIdCategoria());
        require 'View/teste.php';
    }
}
?>