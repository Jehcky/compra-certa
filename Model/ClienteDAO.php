<?php

    require_once "Conexao.php";
    require_once "Cliente.php";

class ClienteDAO {

    /**
     * Insere um Cliente
     * @param Cliente
     */
    public static function inserirCliente(Cliente $cliente) {
        try {
            $conexao = Conexao::getConexao();
            $comando = " INSERT INTO tbCliente "
            . " (txNomeCliente, txCPF, txEmail, flReceberEmail, idLogin) "
            . " VALUES ("
            . "'{$cliente->getTxNomeCliente()}', "
            . "'{$cliente->getTxCPF()}', "
            . "'{$cliente->getTxEmail()}', "
            . " {$cliente->getFlReceberEmail()}, "
            . " {$cliente->getIdLogin()} "
            . ")";
            $sql = $conexao->prepare($comando);
            $sql->execute();
            $idCliente = $conexao->lastInsertId();
        }
        catch(PDOException $e) {
            throw $e;
        }
        finally {
            $conexao = null;
            return $idCliente;
        }
    }

    /**
     * Altera um Cliente
     * @param Cliente
     */
    public static function alterarCliente(Cliente $cliente){
        try {
            $conexao = Conexao::getConexao();
            $comando = " UPDATE tbCliente "
                . " SET "
                . " txNomeCliente = " . $cliente->getTxNomeCliente() . ", "
                . " txCPF = '" . $cliente->getTxCPF() . "', "
                . " txEmail = '" . $cliente->getTxEmail() . "', "
                . " flReceberEmail = " . $cliente->getFlReceberEmail()
                . " WHERE "
                . " idCliente = " . $cliente->getIdCliente();
            $sql = $conexao->prepare($comando);
            $sql->execute();
        }
        catch(PDOException $e) {
            throw $e;
        }
        finally {
            $sql = null;
            $conexao = null;
        }
    }

    /**
     * Busca um cliente pelo seu idCliente
     * @param $idCliente
     * @return Cliente
     */
    public static function buscarClientePorId($idCliente) : Cliente {
        $cliente = null;
        try {
            $cliente = new Cliente();
            $conexao = Conexao::getConexao();
            $comando = " SELECT "
                . " (txNomeCliente, txCPF, txEmail, flReceberEmail) "
                . " FROM tbCliente "
                . " WHERE idCliente = {$idCliente}";
            $sql = $conexao->prepare($comando);
            $sql->execute();
        }
        catch (PDOException $e) {
            throw $e;
        }
        finally {
            $sql = null;
            $conexao = null;
            return $cliente;
        }
    }
}

?>