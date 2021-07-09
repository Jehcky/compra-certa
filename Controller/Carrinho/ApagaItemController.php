<?php

require_once "Model/CarrinhoSession.php";
require_once "Model/ItemCarrinho.php";
require_once "IController.php";

class ApagaItemController implements IController{
     private $carrinhoSession;     
     
     public function __construct($carrinhoSession){
         $this->carrinhoSession = $carrinhoSession;
         $this->processaRequisicao();
     }

     public function processaRequisicao(){
        if (isset($_POST['id']) && preg_match("/^[0-9]+/",$_POST['id'])){
            //apaga do carrinho
            $this->carrinhoSession->apagar($_POST['id']);
        }
        header('Location:Carrinho', true,302);
     }

}

?>