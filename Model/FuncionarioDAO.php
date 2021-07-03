<?php 
    require_once 'Conexao.php';
    require_once 'Funcionario.php';

    class FuncionarioDAO {

        public static function inserirFuncionario(Funcionario $funcionario)
        {
            try {
                $conexao = Conexao::getConexao();
                $comando = " INSERT INTO tbFuncionario ()";
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

        public static function alterarFuncionario(Funcionario $funcionario)
        {
            try {

            }
            catch (PDOException $e) {

            }
            finally {
                
            }
        }
    }
?>