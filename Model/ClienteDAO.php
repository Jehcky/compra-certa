<?php

    require_once "Conexao.php";
    require_once "Cliente.php";
    require_once "Login.php";

class ClienteDAO {

    /**
     * Insere um Cliente
     * @param Cliente
     * @return idCliente
     */
    public static function inserirCliente(Cliente $cliente) {
        $conexao = null;
        $sql = null;
        $idCliente = null;
        try {
            $conexao = Conexao::getConexao();
            $conexao->beginTransaction();

            $comando = " INSERT INTO tbLogin "
                . " ( txLogin, txSenha ) "
                . " VALUES ( "
                . " '{$cliente->getTxLogin()}', "
                . " '{$cliente->getTxSenha()}' "
                . " ) ";

            $sql = $conexao->prepare($comando);
            $sql->execute();
            $idLogin = $conexao->lastInsertId();

            $comando = "";
            $comando = " INSERT INTO tbCliente "
            . " ( txNomeCliente, txCPF, txEmail, flReceberEmail, idLogin ) "
            . " VALUES ( "
            . "'{$cliente->getTxNomeCliente()}', "
            . "'{$cliente->getTxCPF()}', "
            . "'{$cliente->getTxEmail()}', "
            . " {$cliente->getFlReceberEmail()}, "
            . " {$idLogin} "
            . " ) ";
            $sql = $conexao->prepare($comando);
            $sql->execute();
            $idCliente = $conexao->lastInsertId();
            
            $conexao->commit();
        }
        catch(PDOException $e) {
            throw $e;
        }
        finally {
            $sql = null;
            $conexao = null;
            return $idCliente;
        }
    }

    /**
     * Altera um Cliente
     * @param Cliente
     */
    public static function alterarCliente(Cliente $cliente){
        $conexao = null;
        $sql = null;
        try {
            $conexao = Conexao::getConexao();
            $conexao->beginTransaction();

            $comando = " UPDATE tbLogin "
                . " SET "
                . " txLogin = '" . $cliente->getTxNomeCliente() . "', "
                . " txSenha = '" . $cliente->getTxSenha() . "' "
                . " WHERE "
                . " idLogin = " . $cliente->getIdLogin();

            $sql = $conexao->prepare($comando);
            $sql->execute();
            $comando = "";
            $comando = " UPDATE tbCliente "
                . " SET "
                . " txNomeCliente = '" . $cliente->getTxNomeCliente() . "', "
                . " txCPF = '" . $cliente->getTxCPF() . "', "
                . " txEmail = '" . $cliente->getTxEmail() . "', "
                . " flReceberEmail = " . $cliente->getFlReceberEmail()
                . " WHERE "
                . " idCliente = " . $cliente->getIdCliente();
            $sql = $conexao->prepare($comando);
            $sql->execute();
            $conexao->commit();
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
     * Busca um Cliente pelo seu idCliente
     * @param idCliente : int
     * @return Cliente
     */
    public static function buscarClientePorId($idCliente) : Cliente {
        $cliente = null;
        try {
            $cliente = new Cliente();
            $conexao = Conexao::getConexao();
            $comando = " SELECT "
                . " idCliente, "
                . " txNomeCliente, "
                . " txCPF, "
                . " txEmail, "
                . " flReceberEmail, "
                . " L.idLogin, "
                . " txLogin, "
                . " txSenha "
                . " FROM tbCliente C, tbLogin L "
                . " WHERE "
                . " C.idCliente = {$idCliente} "
                . " AND L.idLogin = C.idLogin ";
            $sql = $conexao->prepare($comando);
            $sql->execute();
            $resultado = $sql->fetchObject();
            
            $cliente->setIdCliente($resultado->idCliente);
            $cliente->setTxNomeCliente($resultado->txNomeCliente);
            $cliente->setTxCPF($resultado->txCPF);
            $cliente->setTxEmail($resultado->txEmail);
            $cliente->setFlReceberEmail($resultado->flReceberEmail);

            $cliente->setIdLogin($resultado->idLogin);
            $cliente->setTxLogin($resultado->txLogin);
            $cliente->setTxSenha($resultado->txSenha);
            //echo '<pre>';
            //var_dump($cliente);
            //die;
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
    /**
     * Busca um Cliente pelo seu idCliente
     * @param idCliente : int
     * @return Cliente
     */
    public static function buscarClientePorIdLogin($idLogin) : Cliente {
        $cliente = null;
        try {
            $cliente = new Cliente();
            $conexao = Conexao::getConexao();
            $comando = " SELECT "
                . " idCliente, "
                . " txNomeCliente, "
                . " txCPF, "
                . " txEmail, "
                . " flReceberEmail, "
                . " L.idLogin, "
                . " txLogin, "
                . " txSenha "
                . " FROM tbCliente C, tbLogin L "
                . " WHERE "
                . " L.idLogin = {$idLogin} "
                . " AND L.idLogin = C.idLogin ";
            $sql = $conexao->prepare($comando);
            $sql->execute();
            $resultado = $sql->fetchObject();
            
            $cliente->setIdCliente($resultado->idCliente);
            $cliente->setTxNomeCliente($resultado->txNomeCliente);
            $cliente->setTxCPF($resultado->txCPF);
            $cliente->setTxEmail($resultado->txEmail);
            $cliente->setFlReceberEmail($resultado->flReceberEmail);

            $cliente->setIdLogin($resultado->idLogin);
            $cliente->setTxLogin($resultado->txLogin);
            $cliente->setTxSenha($resultado->txSenha);
            //echo '<pre>';
            //var_dump($cliente);
            //die;
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