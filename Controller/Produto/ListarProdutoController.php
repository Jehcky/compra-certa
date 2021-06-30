<?php

require_once "Model/Produto.php";
require_once "Controller/Icontroller.php";

class ListarProdutoController implements Icontroller{
    private $produto;

    public function __construct(){
        $this->produto = new Produto();
    }

    public function processaRequisicao(){
        $listaProdutos = $this->produto->visualizarProdutos();
        require 'View/teste.php';
    }
}
?>