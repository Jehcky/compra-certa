<?php

  require_once "Conexao.php";
  class ProdutoDAO {
      public static function buscarProduto($idProduto){
        try{
          $minhaConexao = Conexao::getConexao();
          $comando = "select * from db_compra_certa.tbProduto where id=" . $idProduto;
          $sql = $minhaConexao->prepare($comando);

          $sql->execute();
          $result = $sql->setFetchMode(PDO::FETCH_ASSOC);

          $produto = new Produto();
          $produto->setIdProduto($result['idProduto']);
          $produto->setNomeProduto($result['txNomeProduto']);
          $produto->setIdCategoria($result['idCategoria']);
          $produto->setVlProduto($result['vlPreco']);
          $produto->setFlPromocao($result['flPromocao']);
          $produto->setVlPromocao($result['vlPreco_promocao']);
          $produto->setImg($result['txImg_url']);
          $produto->setTxDescricao($result['txDescricao']); 

          return $produto;
        }
        catch(PDOException $e){
          throw $e;
        }
      }
      public static function visualizarProdutos(){
          try{
            $minhaConexao = Conexao::getConexao();
            $comando = "select * from db_compra_certa.tbProduto";
            $sql = $minhaConexao->prepare($comando);
          
                  
            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            
            $listaProdutos=array();
            $i=0;

            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
              $produto = new Produto();
              $produto->setIdProduto($linha['idProduto']);
              $produto->setNomeProduto($linha['txNomeProduto']);
              $produto->setIdCategoria($linha['idCategoria']);
              $produto->setVlProduto($linha['vlPreco']);
              $produto->setFlPromocao($linha['flPromocao']);
              $produto->setVlPromocao($linha['vlPreco_promocao']);
              $produto->setImg($linha['txImg_url']);
              $produto->setTxDescricao($linha['txDescricao']);     
              $listaProdutos[$i] = $produto;
              $i++;
            }
          return $listaProdutos;
        }
        catch(PDOException $e){
            throw $e;
        }
      }

      public static function buscarProdutosPorCategoria($idCategoria){
        try{
            $minhaConexao = Conexao::getConexao();
            $comando = "select * from db_compra_certa.tbProduto where idCategoria=" . $idCategoria;
            $sql = $minhaConexao->prepare($comando);
        
                
          $sql->execute();
          $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
          
          $listaProdutos=array();
          $i=0;

          while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
            $produto = new Produto();
            $produto->setIdProduto($linha['idProduto']);
            $produto->setNomeProduto($linha['txNomeProduto']);
            $produto->setIdCategoria($linha['idCategoria']);
            $produto->setVlProduto($linha['vlPreco']);
            $produto->setFlPromocao($linha['flPromocao']);
            $produto->setVlPromocao($linha['vlPreco_promocao']);
            $produto->setImg($linha['txImg_url']);
            $produto->setTxDescricao($linha['txDescricao']);     
            $listaProdutos[$i] = $produto;
            $i++;
          }
          
        return $listaProdutos;
      }
      catch(PDOException $e){
        return array();
      }
    }

    public static function selecionarPromocao(){
      try{
          $minhaConexao = Conexao::getConexao();
          $comando = "select * from db_compra_certa.tbProduto where promocao=1";
          $sql = $minhaConexao->prepare($comando);
      
              
        $sql->execute();
        $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
        
        $listaProdutos=array();
        $i=0;

        while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
          $produto = new Produto();
          $produto->setIdProduto($linha['idProduto']);
          $produto->setNomeProduto($linha['txNomeProduto']);
          $produto->setIdCategoria($linha['idCategoria']);
          $produto->setVlProduto($linha['vlPreco']);
          $produto->setFlPromocao($linha['flPromocao']);
          $produto->setVlPromocao($linha['vlPreco_promocao']);
          $produto->setImg($linha['txImg_url']);
          $produto->setTxDescricao($linha['txDescricao']);     
          $listaProdutos[$i] = $produto;
          $i++;
        }
      return $listaProdutos;
    }
    catch(PDOException $e){
      return array();
    }
  }
}
?>