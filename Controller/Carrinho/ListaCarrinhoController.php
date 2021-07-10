<?php

//require "Model/ItemCarrinho.php";
require_once "Model/CarrinhoSession.php";
require_once "Model/ItemCarrinho.php";
require_once "Controller/IController.php";

class ListaCarrinhoController implements IController{
    private $carrinho;

    public function __construct(){
        $this->carrinho = new CarrinhoSession();  
    }

    public function processaRequisicao(){
        $itensCarrinho = $this->carrinho->getItensCarrinho();
        return $this->carrinho;
    }
}

?>