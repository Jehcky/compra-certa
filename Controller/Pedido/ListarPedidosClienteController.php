<?php 
    require_once 'Model/Pedido.php';
    require_once 'Controller/IController.php';

    /**
     * undocumented class
     */
    class ListarPedidosClienteController implements IController
    {
        private $pedidos;

        public function __construct() {
            
        }

        public function processaRequisicao()
        {
            $this->pedidos = Pedido::listarPedidosCliente($_GET['idCliente']);
            return $this->pedidos;
        }
    }
    
?>