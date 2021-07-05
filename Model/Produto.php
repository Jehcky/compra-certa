<?php
    require_once "ProdutoDAO.php";

    class Produto{
        private $idProduto;
        private $txNomeProduto;
        private $idCategoria;
        private $vlProduto;
        private $flPromocao;
        private $vlPromocao;
        private $img;
        private $txDescricao;

        public static function visualizarProdutos(){
            $listaProdutos = null;
            $listaProdutos = ProdutoDAO::visualizarProdutos();
            return $listaProdutos;
        }

        public static function buscarProdutosPorCategoria($idCategoria){
            $listaProdutos = null;
            $listaProdutos = ProdutoDAO::buscarProdutosPorCategoria($idCategoria);
            return $listaProdutos;
        }

        public function selecionarpromocao(){
            $produtoDAO = new ProdutoDAO();
            return $produtoDAO->selecionarPromocao();
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
         * Get the value of txNomeProduto
         */ 
        public function getNomeProduto()
        {
                return $this->txNomeProduto;
        }

        /**
         * Set the value of txNomeProduto
         *
         * @return  self
         */ 
        public function setNomeProduto($txNomeProduto)
        {
                $this->txNomeProduto = $txNomeProduto;

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
         * Get the value of vlProduto
         */ 
        public function getVlProduto()
        {
                return $this->vlProduto;
        }

        /**
         * Set the value of vlProduto
         *
         * @return  self
         */ 
        public function setVlProduto($vlProduto)
        {
                $this->vlProduto = $vlProduto;

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
         * Get the value of img
         */ 
        public function getImg()
        {
                return $this->img;
        }

        /**
         * Set the value of img
         *
         * @return  self
         */ 
        public function setImg($img)
        {
                $this->img = $img;

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
        public function getVlPromocao()
        {
                return $this->vlPromocao;
        }

        /**
         * Set the value of vlPromocao
         *
         * @return  self
         */ 
        public function setVlPromocao($vlPromocao)
        {
                $this->vlPromocao = $vlPromocao;

                return $this;
        }
    }

    
?>