<?php

    require_once "Conexao.php";
    require_once "Cliente.php";

class ClienteDAO {

    public static function inserirCliente(Cliente $cliente){
        try {
            $conexao = Conexao::getConexao();
            $comando=" INSERT INTO tbCliente (txNomeCliente, txCPF, txEmail, idLogin) "
            . " VALUES ('{$cliente->getTxNomeCliente()}','{$cliente->getTxCPF()}','{$cliente->getTxEmail()}', {$cliente->getIdLogin()})";
            $sql = $conexao->prepare($comando);
            $sql->execute();
        }
        catch(PDOException $e){
            throw $e;
        }
        finally {
            return $conexao->lastInsertId();
        }
    }

    public static function alterarCliente(Cliente $cliente){
        try {
            $conexao = Conexao::getConexao();
            $comando = " UPDATE ";
            // $minhaConexao = Conexao::getConexao();
            // $comando = "update db_compra_certa.cliente set :campo = :dado where clienteID=:id";
            // $sql = $minhaConexao->prepare($comando);
            // $sql->bindParam("campo", $campo);
            // $sql->bindParam("dado", $dado);
            // $sql->bindParam("id", $ID);
            // $ID = $cliente->getID();
            // $sql->execute();
          }
        catch(PDOException $e){
            throw $e;
        }
    }

    /**
     * Busca um cliente pelo seu $idCliente
     * @param $idCliente
     * @return $resultado
     */
    public static function buscarCliente($idCliente) {
        return $resultado = "";
    }
}

?>