<?php

require_once "Model/Categoria.php";
require_once "Controller/Icontroller.php";

class ListarCategoriasController implements Icontroller{
    private $categorias;

    public function __construct(){  
    }

    public function processaRequisicao() {
        $this->categorias = Categoria::listarCategorias();
        return $this->categorias;
    }
}
?>