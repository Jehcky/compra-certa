<?php

class Conexao {

    private static $minhaConexao;

    public static function getConexao() {
        $servername = "localhost:3306"; 
        $username = "root";
        $password = "";
        $dbname = "db_compra_certa";

        try {
            $minhaConexao = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $minhaConexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e) {
            throw $e;
        }
        finally {
            return $minhaConexao;
        }
    }
}
?>