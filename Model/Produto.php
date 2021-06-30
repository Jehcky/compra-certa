<?php
    require_once "ProdutoDAO.php";

    class Produto{
        private $ID;
        private $nome;
        private $categoria;
        private $valor;
        private $promocao;
        private $valorPromocao;
        private $qtd;
        private $img;
        private $descricao;

        public function visualizarProdutos(){
            $produtoDAO = new ProdutoDAO();
            return $produtoDAO->visualizarProdutos();
        }

        public function selecionarCategoria($categoria){
            $produtoDAO = new ProdutoDAO();
            return $produtoDAO->selecionarCategoria($categoria);
        }

        public function selecionarpromocao(){
                $produtoDAO = new ProdutoDAO();
                return $produtoDAO->selecionarPromocao();
            }

        /** GETS AND SETS
         * Get the value of ID
         */ 
        public function getID()
        {
                return $this->ID;
        }

        /**
         * Set the value of ID
         *
         * @return  self
         */ 
        public function setID($ID)
        {
                $this->ID = $ID;

                return $this;
        }

        /**
         * Get the value of nome
         */ 
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         *
         * @return  self
         */ 
        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of categoria
         */ 
        public function getCategoria()
        {
                return $this->categoria;
        }

        /**
         * Set the value of categoria
         *
         * @return  self
         */ 
        public function setCategoria($categoria)
        {
                $this->categoria = $categoria;

                return $this;
        }

        /**
         * Get the value of valor
         */ 
        public function getValor()
        {
                return $this->valor;
        }

        /**
         * Set the value of valor
         *
         * @return  self
         */ 
        public function setValor($valor)
        {
                $this->valor = $valor;

                return $this;
        }

        /**
         * Get the value of promocao
         */ 
        public function getPromocao()
        {
                return $this->promocao;
        }

        /**
         * Set the value of promocao
         *
         * @return  self
         */ 
        public function setPromocao($promocao)
        {
                $this->promocao = $promocao;

                return $this;
        }

        /**
         * Get the value of qtd
         */ 
        public function getQtd()
        {
                return $this->qtd;
        }

        /**
         * Set the value of qtd
         *
         * @return  self
         */ 
        public function setQtd($qtd)
        {
                $this->qtd = $qtd;

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
         * Get the value of descricao
         */ 
        public function getDescricao()
        {
                return $this->descricao;
        }

        /**
         * Set the value of descricao
         *
         * @return  self
         */ 
        public function setDescricao($descricao)
        {
                $this->descricao = $descricao;

                return $this;
        }

        /**
         * Get the value of valorPromocao
         */ 
        public function getValorPromocao()
        {
                return $this->valorPromocao;
        }

        /**
         * Set the value of valorPromocao
         *
         * @return  self
         */ 
        public function setValorPromocao($valorPromocao)
        {
                $this->valorPromocao = $valorPromocao;

                return $this;
        }
    }

    
?>