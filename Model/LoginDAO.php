<?php
    require_once "Conexao.php";
    require_once "Login.php";

    class LoginDAO
    {
        public static function inserirLogin(Login $login)
        {
            try {
                $conexao = Conexao::getConexao();
                $comando = "/ INSERT INTO tbLogin (txLogin, txSenha) VALUES ({$login->getTxLogin()}, {$login->getTxSenha()})";
                //var_dump($comando);
                //die;
                $sql = $conexao->prepare($comando);
                $sql->execute();
            }
            catch (PDOException $ex) {
                throw $ex;
            }
        }

        public static function buscarLoginPorIdLogin($idLogin) {
            try {
                $conexao = Conexao::getConexao();
                $comando = " SELECT txLogin, txSenha FROM tbLogin "
                + " WHERE idLogin = {$idLogin}";
                $sql = $conexao->prepare($comando);
                $sql->execute();
            }
            catch (PDOException $ex) {
                return array();
            }
        }
    }
    
?>