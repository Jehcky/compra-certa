<?php
    require_once "PedidoDAO.php";

    class Pedido{
        private $idPedido;
        private $txCliente;
        private $txEndereco;
        private $vlValor;
        private $txAvaliacao;
        private $txObs;
        private $lstProdutos = array();
        private $lstHistorico = array();

        public function visualizaPedidos($idPedido){
            $pedidoDAO = new PedidoDAO();
            $this = $pedidoDAO->visualizaPedido($idPedido);
            $this->setLstProdutos($pedidoDAO->visualizaProdutos($idPedido));
            $this->setLstHistorico($pedidoDAO->acompanhaPedido($idPedido));
            return $this;
        }

        public function visualizaProdutos($idPedido){
            $pedidoDAO = new PedidoDAO();
            return $pedidoDAO->visualizaProdutos($idPedido);
        }

        public function acompanhaPedido($idPedido){
            $pedidoDAO = new PedidoDAO();
            return $pedidoDAO->acompanhaPedido($idPedido);
        }

        public function avaliaPedido($idPedido){
            $pedidoDAO = new PedidoDAO();
            return $pedidoDAO->avaliaPedido($idPedido);
        }
        /**
         * Get the value of idPedido
         */ 
        public function getIdPedido()
        {
                return $this->idPedido;
        }

        /**
         * Set the value of idPedido
         *
         * @return  self
         */ 
        public function setIdPedido($idPedido)
        {
                $this->idPedido = $idPedido;

                return $this;
        }

        /**
         * Get the value of txAvaliacao
         */ 
        public function getTxAvaliacao()
        {
                return $this->txAvaliacao;
        }

        /**
         * Set the value of txAvaliacao
         *
         * @return  self
         */ 
        public function setTxAvaliacao($txAvaliacao)
        {
                $this->txAvaliacao = $txAvaliacao;

                return $this;
        }

        /**
         * Get the value of txObs
         */ 
        public function getTxObs()
        {
                return $this->txObs;
        }

        /**
         * Set the value of txObs
         *
         * @return  self
         */ 
        public function setTxObs($txObs)
        {
                $this->txObs = $txObs;

                return $this;
        }

        /**
         * Get the value of vlValor
         */ 
        public function getVlValor()
        {
                return $this->vlValor;
        }

        /**
         * Set the value of vlValor
         *
         * @return  self
         */ 
        public function setVlValor($vlValor)
        {
                $this->vlValor = $vlValor;

                return $this;
        }

        /**
         * Get the value of lstProdutos
         */ 
        public function getLstProdutos()
        {
                return $this->lstProdutos;
        }

        /**
         * Set the value of lstProdutos
         *
         * @return  self
         */ 
        public function setLstProdutos($lstProdutos)
        {
                $this->lstProdutos = $lstProdutos;

                return $this;
        }

        /**
         * Get the value of lstHistorico
         */ 
        public function getLstHistorico()
        {
                return $this->lstHistorico;
        }

        /**
         * Set the value of lstHistorico
         *
         * @return  self
         */ 
        public function setLstHistorico($lstHistorico)
        {
                $this->lstHistorico = $lstHistorico;

                return $this;
        }

        /**
         * Get the value of txCliente
         */ 
        public function getTxCliente()
        {
                return $this->txCliente;
        }

        /**
         * Set the value of txCliente
         *
         * @return  self
         */ 
        public function setTxCliente($txCliente)
        {
                $this->txCliente = $txCliente;

                return $this;
        }

        /**
         * Get the value of txEndereco
         */ 
        public function getTxEndereco()
        {
                return $this->txEndereco;
        }

        /**
         * Set the value of txEndereco
         *
         * @return  self
         */ 
        public function setTxEndereco($txEndereco)
        {
                $this->txEndereco = $txEndereco;

                return $this;
        }
    }
?>