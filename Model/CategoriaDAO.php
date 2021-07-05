<?php 
    require_once 'Conexao.php';
    require_once 'Categoria.php';

    /**
     * CategoriaDAO
     */
    class CategoriaDAO 
    {
        public static function listarCategorias() {
            $listaCategorias = null;
            $conexao = null;
            $sql = null; 

            try {
                $conexao = Conexao::getConexao();
                $comando = " SELECT "
                . " idCategoria, txNomeCategoria " 
                . " FROM "
                . " tbCategoria ";
                $sql = $conexao->prepare($comando);
                $sql->execute();
                $listaCategorias = $sql->fetchAll();
            } catch (PDOException $e) {
                throw $e;
            }
            finally {
                $sql = null;
                $conexao = null;
                return $listaCategorias;
            }
        }
    }
    
?>