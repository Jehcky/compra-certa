<?php

  require_once "Conexao.php";
  class ProdutoDAO {
      public static function buscarProduto($idProduto){
        try{
          $minhaConexao = Conexao::getConexao();
          $comando = "select * from db_compra_certa.tbProduto where idProduto=" . $idProduto;
          $sql = $minhaConexao->prepare($comando);

          $sql->execute();
          $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
          $linha = $sql->fetch(PDO::FETCH_ASSOC);

          $produto = new Produto();
          $produto->setIdProduto($linha['idProduto']);
          $produto->setTxNomeProduto($linha['txNomeProduto']);
          $produto->setIdCategoria($linha['idCategoria']);
          $produto->setVlPreco($linha['vlPreco']);
          $produto->setFlPromocao($linha['flPromocao']);
          $produto->setVlPrecoPromocao($linha['vlPreco_promocao']);
          $produto->setTxImgUrl($linha['txImg_url']);
          $produto->setTxDescricao($linha['txDescricao']); 

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
              $produto->setTxNomeProduto($linha['txNomeProduto']);
              $produto->setIdCategoria($linha['idCategoria']);
              $produto->setVlPreco($linha['vlPreco']);
              $produto->setFlPromocao($linha['flPromocao']);
              $produto->setVlPrecoPromocao($linha['vlPreco_promocao']);
              $produto->setTxImgUrl($linha['txImg_url']);
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
            $produto->setTxNomeProduto($linha['txNomeProduto']);
            $produto->setIdCategoria($linha['idCategoria']);
            $produto->setVlPreco($linha['vlPreco']);
            $produto->setFlPromocao($linha['flPromocao']);
            $produto->setVlPrecoPromocao($linha['vlPreco_promocao']);
            $produto->setTxImgUrl($linha['txImg_url']);
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
          $comando = "select * from db_compra_certa.tbproduto where flPromocao=1";
          $sql = $minhaConexao->prepare($comando);
      
              
        $sql->execute();
        $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
        
        $listaProdutos=array();
        $i=0;

        while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
          $produto = new Produto();
          $produto->setIdProduto($linha['idProduto']);
          $produto->setTxNomeProduto($linha['txNomeProduto']);
          $produto->setIdCategoria($linha['idCategoria']);
          $produto->setVlPreco($linha['vlPreco']);
          $produto->setFlPromocao($linha['flPromocao']);
          $produto->setVlPrecoPromocao($linha['vlPreco_promocao']);
          $produto->setTxImgUrl($linha['txImg_url']);
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