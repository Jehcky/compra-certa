<?php
    require_once "Conexao.php";
    require_once "Login.php";

    class LoginDAO
    {
        /**
         * Insere um novo Login
         * @param Login
         * @return $idLogin
         */
        public static function inserirLogin(Login $login)
        {
            try {
                $conexao = Conexao::getConexao();
                $comando = " INSERT INTO tbLogin "
                    . " (txLogin, txSenha) " 
                    . " VALUES ( "
                    . "'{$login->getTxLogin()}', "
                    . "'{$login->getTxSenha()}'"
                    . ")";
                $sql = $conexao->prepare($comando);
                $sql->execute();
                $idLogin = $conexao->lastInsertId();
            }
            catch (PDOException $e) {
                throw $e;
            }
            finally {
                $sql = null;
                $conexao = null;
                return $idLogin;
            }
        }

        /**
         * Altera um Login
         * @param Login
         */
        public static function alterarLogin(Login $login) 
        {
            try {
                $conexao = Conexao::getConexao();
                $comando = " UPDATE tbCliente "
                . " SET "
                . " txLogin = '" . $login->getTxLogin() . "', "
                . " txSenha = '" . $login->getTxSenha() . "'"
                . " WHERE "
                . " idCliente = " . $login->getIdLogin();
                $sql = $conexao->prepare($comando);
                $sql->execute();
            }
            catch (PDOException $e) {
                throw $e;
            }
            finally {
                $sql = null;
                $conexao = null;
            }
        }

        /**
         * Busca um Login por seu idLogin
         * @param idLogin
         * @throws PDOException
         * @return Login
         */
        public static function buscarLoginPorId($idLogin) {
            $login = null;
            try {
                $login = new Login();
                $conexao = Conexao::getConexao();
                $comando = " SELECT "
                    . " (idLogin, txLogin, txSenha) "
                    . " FROM tbLogin "
                    . " WHERE idLogin = {$idLogin}";
                $sql = $conexao->prepare($comando);
                $sql->execute();
                $resultado = $sql->fetchObject();

                $login->setIdLogin($resultado->idLogin);
                $login->setTxLogin($resultado->txLogin);
                $login->setTxSenha($resultado->txSenha);
            } 
            catch (PDOException $e) {
                throw $e;
            }
            finally {
                $sql = null;
                $conexao = null;
                return $login;
            }
        }
    }
    
?>