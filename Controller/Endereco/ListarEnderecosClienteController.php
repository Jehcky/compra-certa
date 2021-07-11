<?php
    require_once 'Model/Endereco.php';
    require_once 'Controller/IController.php';

    /**
     * undocumented class
     */
    class ListarEnderecosClienteController implements IController
    {
        private $enderecos;
        
        public function __construct() {
            
        }

        public function processaRequisicao()
        {
            $this->enderecos = Endereco::listarEnderecosCliente($_GET['idCliente']);
            return $this->enderecos;
        }
    }
    
?>