<?php

require_once "Model/Produto.php";
require_once "Controller/Icontroller.php";

class BuscarProdutoController implements Icontroller{
    private $produto;

    public function __construct(){
        $this->produto = new Produto();
    }

    public function processaRequisicao(){
        return $this->produto->buscarProduto($_GET['idProduto']);
    }
}
?>