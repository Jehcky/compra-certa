<?php
    require_once "ProdutoDAO.php";

    class Produto{
        private $idProduto;
        private $txNomeProduto;
        private $idCategoria;
        private $vlPreco;
        private $flPromocao;
        private $vlPrecoPromocao;
        private $txImgUrl;
        private $txDescricao;

        public function getPreco(){
            if($this->getFlPromocao() == 1){
                return $this->getVlPrecoPromocao();
            }
            return $this->getVlPreco();
        }

        public static function buscarProduto($idProduto){
            return ProdutoDAO::buscarProduto($idProduto);
        }

        public static function visualizarProdutos(){
            return ProdutoDAO::visualizarProdutos();
        }

        public static function buscarProdutosPorCategoria($idCategoria){
            return ProdutoDAO::buscarProdutosPorCategoria($idCategoria);
        }

        public static function selecionarPromocao(){
            return ProdutoDAO::selecionarPromocao();
            
        }

        /** GETS AND SETS
         * Get the value of idProduto
         */ 
        public function getIdProduto()
        {
                return $this->idProduto;
        }

        /**
         * Set the value of idProduto
         *
         * @return  self
         */ 
        public function setIdProduto($idProduto)
        {
                $this->idProduto = $idProduto;

                return $this;
        }

        /**
         * Get the value of idCategoria
         */ 
        public function getIdCategoria()
        {
                return $this->idCategoria;
        }

        /**
         * Set the value of idCategoria
         *
         * @return  self
         */ 
        public function setIdCategoria($idCategoria)
        {
                $this->idCategoria = $idCategoria;

                return $this;
        }

        /**
         * Get the value of flPromocao
         */ 
        public function getFlPromocao()
        {
                return $this->flPromocao;
        }

        /**
         * Set the value of flPromocao
         *
         * @return  self
         */ 
        public function setFlPromocao($flPromocao)
        {
                $this->flPromocao = $flPromocao;

                return $this;
        }

        /**
         * Get the value of txDescricao
         */ 
        public function getTxDescricao()
        {
                return $this->txDescricao;
        }

        /**
         * Set the value of txDescricao
         *
         * @return  self
         */ 
        public function setTxDescricao($txDescricao)
        {
                $this->txDescricao = $txDescricao;

                return $this;
        }

        /**
         * Get the value of vlPromocao
         */ 
        public function getVlPrecoPromocao()
        {
                return $this->vlPrecoPromocao;
        }

        /**
         * Set the value of vlPromocao
         *
         * @return  self
         */ 
        public function setVlPrecoPromocao($vlPrecoPromocao)
        {
                $this->vlPrecoPromocao = $vlPrecoPromocao;

                return $this;
        }

        /**
         * Get the value of vlPreco
         */ 
        public function getVlPreco()
        {
                return $this->vlPreco;
        }

        /**
         * Set the value of vlPreco
         *
         * @return  self
         */ 
        public function setVlPreco($vlPreco)
        {
                $this->vlPreco = $vlPreco;

                return $this;
        }

        /**
         * Get the value of txImgUrl
         */ 
        public function getTxImgUrl()
        {
                return $this->txImgUrl;
        }

        /**
         * Set the value of txImgUrl
         *
         * @return  self
         */ 
        public function setTxImgUrl($txImgUrl)
        {
                $this->txImgUrl = $txImgUrl;

                return $this;
        }

        /**
         * Get the value of txNomeProduto
         */ 
        public function getTxNomeProduto()
        {
                return $this->txNomeProduto;
        }

        /**
         * Set the value of txNomeProduto
         *
         * @return  self
         */ 
        public function setTxNomeProduto($txNomeProduto)
        {
                $this->txNomeProduto = $txNomeProduto;

                return $this;
        }
    }

    
?>