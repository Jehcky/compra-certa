<?php

    require_once 'CategoriaDAO.php';
    /**
     * Categoria class
     */
    class Categoria 
    {
        /** @var Int $idCategoria IdCategoria */
        protected $idCategoria = null;

        /** @var String $txCategoria Nome da Categoria */
        protected $txCategoria = null;

        public function __construct()
        {
            
        }

        /**
         * Lista todas as Categorias
         *
         * Busca todas as Categorias no Banco de Dados e retorna uma lista de Categorias
         *
         * @param Void 
         * @return List<Categoria>
         * @throws Void
         **/
        public static function listarCategorias()
        {
            return CategoriaDAO::listarCategorias();
        }

        public function getIdCategoria()
        {
            return $this->idCategoria;
        }
        public function setIdCategoria($idCategoria)
        {
            $this->idCategoria = $idCategoria;
        }

        public function getTxCategoria()
        {
            return $this->txCategoria;
        }
        public function setTxCategoria($txCategoria)
        {
            $this->txCategoria = $txCategoria;
        }
    }

    
?>