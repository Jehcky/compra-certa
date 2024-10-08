<?php

require_once "Model/CarrinhoSession.php";
require_once "Model/ItemCarrinho.php";
require_once "Controller/IController.php";

class AlteraQtdController implements IController{
     private $carrinhoSession;     
     
     public function __construct($carrinhoSession){
         $this->carrinhoSession = $carrinhoSession;
     }

     public function processaRequisicao(){
        if (isset($_POST['id']) && preg_match("/^[0-9]+/",$_POST['id'])) {
            //cria o objeto itemCarrinho
            $itemCarrinho = new ItemCarrinho($_POST['id'],$_POST['quantidade']);
            //atualiza o itemCarrinho no carrinho
            $this->carrinhoSession->atualizar($itemCarrinho);
        }
    }
}

?>