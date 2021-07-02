<?php
    require_once "Conexao.php";
    require_once "Login.php";

    class LoginDAO
    {
        public static function inserirLogin(Login $login)
        {
            try {
                $conexao = Conexao::getConexao();
                $comando = " INSERT INTO tbLogin (txLogin, txSenha) " 
                    . " VALUES ('{$login->getTxLogin()}', '{$login->getTxSenha()}')";
                $sql = $conexao->prepare($comando);
                $sql->execute();
            }
            catch (PDOException $e) {
                throw $e;
            }
            finally {
                return $conexao->lastInsertId();
            }
        }

        public static function buscarLoginPorIdLogin($idLogin) {
            try {
                $conexao = Conexao::getConexao();
                $comando = " SELECT (txLogin, txSenha) FROM tbLogin "
                . " WHERE idLogin = {$idLogin}";
                $sql = $conexao->prepare($comando);
                $sql->execute();
                $resultado = $sql->fetchAll();
                var_dump($resultado);
                die;
                $login = new Login();
                $login->setIdLogin($resultado['idLogin']);
            } 
            catch (PDOException $e) {
                throw $e;
            }
            finally {
                return $login;
            }
        }
    }
    
?>