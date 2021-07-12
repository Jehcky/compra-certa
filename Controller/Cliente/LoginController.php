<?php

require_once "Model/LoginSession.php";
require_once "Model/Login.php";
require_once "Controller/IController.php";

class LoginController implements IController{
     private $loginSession; 
     
     public function __construct(){
        $this->loginSession = new LoginSession();
     }

     public function processaRequisicao(){
        if (isset($_POST['login'])){
            $cliente = new Cliente();
            $cliente->setTxLogin($_POST['login']);
            $cliente->setTxSenha($_POST['senha']);
            $cliente = $this->loginSession->login($cliente);
            if(is_null($cliente)){
               $this->loginSession->logout();
            }
            else{
               return $cliente;               
            }
        }
     }
}

?>