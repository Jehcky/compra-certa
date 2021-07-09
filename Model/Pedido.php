<?php
    require_once "PedidoDAO.php";

    class Pedido{
        private $idPedido;
        private $txCliente;
        private $txEndereco;
        private $vlValor;
        private $nuAvaliacao;
        private $txObs;
        private $lstProdutos = array();
        private $lstHistorico = array();

        public function visualizaPedidos($idPedido){
            $pedido = PedidoDAO::visualizaPedido($idPedido);
            $this->idPedido = $pedido->getIdPedido();
            $this->txObs = $pedido->getTxObs();
            $this->vlValor = $pedido->getVlValor();
            $this->txCliente = $pedido->getTxCliente();
            $this->txEndereco = $pedido->getTxEndereco();
            $this->nuAvaliacao = $pedido->getNuAvaliacao();
            $this->setLstProdutos(PedidoDAO::visualizaProdutos($idPedido));
            $this->setLstHistorico(PedidoDAO::acompanhaPedido($idPedido));
            return $this;
        }

        public function visualizaProdutos($idPedido){
            return PedidoDAO::visualizaProdutos($idPedido);
        }

        public function acompanhaPedido($idPedido){
            return PedidoDAO::acompanhaPedido($idPedido);
        }

        public function avaliaPedido($idPedido){
            return PedidoDAO::avaliaPedido($idPedido);
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

        /**
         * Get the value of nuAvaliacao
         */ 
        public function getNuAvaliacao()
        {
                return $this->nuAvaliacao;
        }

        /**
         * Set the value of nuAvaliacao
         *
         * @return  self
         */ 
        public function setNuAvaliacao($nuAvaliacao)
        {
                $this->nuAvaliacao = $nuAvaliacao;

                return $this;
        }
    }
?>