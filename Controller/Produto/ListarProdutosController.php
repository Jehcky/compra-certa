<?php

require_once "Model/Produto.php";
require_once "Controller/Icontroller.php";

class ListarProdutosController implements Icontroller{
    private $produtos;

    public function __construct(){
        
    }


    public function processaRequisicao(){
        if (isset($_GET['idCategoria']) && $_GET['idCategoria'] != 0) {
            $this->produtos = Produto::buscarProdutosPorCategoria($_GET['idCategoria']);
        }
        else {
            $this->produtos = Produto::visualizarProdutos();
        }
        return $this->produtos;
    }
}
?>