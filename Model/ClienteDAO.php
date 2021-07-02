<?php

    require_once "Conexao.php";
    require_once "Cliente.php";

class ClienteDAO {

    public static function incluirCliente(Cliente $cliente){
        try {
            $conexao = Conexao::getConexao();
            $comando=" INSERT INTO tbCliente (txNomeCliente, txCPF, txEmail) "
            . " VALUES ('{$cliente->getTxNomeCliente()}','{$cliente->getTxCPF()}','{$cliente->getTxEmail()}')";
            //var_dump($comando);
            //die;
            $sql = $conexao->prepare($comando);
            $sql->execute();
        }
        catch(PDOException $e){
            throw $e;
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
            throw $e;
        }
    }

    /**
     * Busca um cliente pelo seu $idCliente
     * @param $idCliente
     * @return object<Cliente>
     */
    public static function buscarCliente($idCliente) {
        return $resultado = "";
    }
}

?>