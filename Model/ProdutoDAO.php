<?php

  require_once "Conexao.php";
  class ProdutoDAO{

      public function visualizarProdutos(){
          try{
              $minhaConexao = Conexao::getConexao();
              $comando = "select * from db_compra_certa.produto";
              $sql = $minhaConexao->prepare($comando);
          
                  
            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            
            $listaProdutos=array();
            $i=0;

            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
              $produto = new Produto();
              $produto->setID($linha['produtoID']);
              $produto->setNome($linha['nome']);
              $produto->setCategoria($linha['categoria']);
              $produto->setValor($linha['valor']);
              $produto->setPromocao($linha['promocao']);
              $produto->setValorPromocao($linha['valor_promocao']);
              $produto->setQtd($linha['quantidade']);
              $produto->setImg($linha['img_url']);
              $produto->setDescricao($linha['descricao']);     
              $listaProdutos[$i] = $produto;
              $i++;
            }
          return $listaProdutos;
        }
        catch(PDOException $e){
          return array();
        }
      }

      public function selecionarCategoria($categoria){
        try{
            $minhaConexao = Conexao::getConexao();
            $comando = "select * from db_compra_certa.produto where categoria=" . $categoria;
            $sql = $minhaConexao->prepare($comando);
        
                
          $sql->execute();
          $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
          
          $listaProdutos=array();
          $i=0;

          while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
            $produto = new Produto();
            $produto->setID($linha['produtoID']);
            $produto->setNome($linha['nome']);
            $produto->setCategoria($linha['categoria']);
            $produto->setValor($linha['valor']);
            $produto->setPromocao($linha['promocao']);
            $produto->setValorPromocao($linha['valor_promocao']);
            $produto->setQtd($linha['quantidade']);
            $produto->setImg($linha['img_url']);
            $produto->setDescricao($linha['descricao']);     
            $listaProdutos[$i] = $produto;
            $i++;
          }
        return $listaProdutos;
      }
      catch(PDOException $e){
        return array();
      }
    }

    public function selecionarPromocao(){
      try{
          $minhaConexao = Conexao::getConexao();
          $comando = "select * from db_compra_certa.produto where promocao=1";
          $sql = $minhaConexao->prepare($comando);
      
              
        $sql->execute();
        $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
        
        $listaProdutos=array();
        $i=0;

        while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
          $produto = new Produto();
          $produto->setID($linha['produtoID']);
          $produto->setNome($linha['nome']);
          $produto->setCategoria($linha['categoria']);
          $produto->setValor($linha['valor']);
          $produto->setPromocao($linha['promocao']);
          $produto->setValorPromocao($linha['valor_promocao']);
          $produto->setQtd($linha['quantidade']);
          $produto->setImg($linha['img_url']);
          $produto->setDescricao($linha['descricao']);     
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