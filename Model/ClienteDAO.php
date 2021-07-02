<?php

    require_once "Conexao.php";

class ClienteDAO{

    public static function incluirCliente(Cliente $cliente){
        try{
            $minhaConexao = Conexao::getConexao();
            $comando = "insert into db_compra_certa.cliente (usuario, nome, cpf, email, senha) values (:usuario, :nome, :cpf, :email, :senha)";
            $sql = $minhaConexao->prepare($comando);
            $sql->bindParam("usuario",$usuario);
            $sql->bindParam("nome",$nome);
            $sql->bindParam("cpf",$CPF);
            $sql->bindParam("email",$email);
            $sql->bindParam("senha",$senha);
            
            $sql->execute();
          }
        catch(PDOException $e){
            return array();
        }
    }

    public static function alterarCliente($cliente, $campo, $dado){
        try{
            $minhaConexao = Conexao::getConexao();
            $comando = "update db_compra_certa.cliente set :campo = :dado where clienteID=:id";
            $sql = $minhaConexao->prepare($comando);
            $sql->bindParam("campo", $campo);
            $sql->bindParam("dado", $dado);
            $sql->bindParam("id", $ID);
            $ID = $cliente->getID();
            $sql->execute();
          }
        catch(PDOException $e){
            return array();
        }
    }

    /**
     * Busca um cliente pelo seu $idCliente
     * @param $idCliente
     * @return object<Cliente>
     */
    public static function buscarCliente($idCliente) {
        // try {
        //     $minhaConexao = Conexao::getConexao();
        //     $comando = " SELECT * FROM tbCliente WHERE sqCliente = {$idCliente} ";
        //     $sql = $minhaConexao->prepare($comando);
        //     $resultado = $sql->execute();
        // }
        // catch (PDOException $e) {
        //     return array();
        // }
        // return $resultado;
    }
}

?>