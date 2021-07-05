<?php 
    require_once 'Conexao.php';
    require_once 'Funcionario.php';
    require_once 'Login.php';

    class FuncionarioDAO {
        

        public function rastreiaPedido($idPedido){
            /*
            SELECT E.idPedido AS pedido, A.txNomeCliente AS cliente, B.txRua AS endereco, E.vlTotal, E.nuAvaliacao, E.txObs 
            FROM tbcliente A, tbendereco B, tbpedido E 
            WHERE A.idCliente = B.idCliente
            AND E.idCliente = A.idCliente
            AND E.idEndereco = B.idEndereco
            AND E.idPedido = $idPedido
            */
        }

        public function exibeSetores(){
            /*
            */
        }

        public function avancaSetor(){
            /*
            */
        }

        public function retornatSetor(){
            /*
            */
        }
 
        /**
         * Insere um Funcionario
         *
         * Insere um Funcionario no Banco de Dados
         *
         * @param Funcionario $funcionario Funcionario.php
         * @return Int
         * @throws PDOException
         **/
        public static function inserirFuncionario(Funcionario $funcionario)
        {
            $conexao = null;
            $idFuncionario = null;
            try {
                $conexao = Conexao::getConexao();
                $conexao->beginTransaction();

                $comando = " INSERT INTO tbLogin "
                    . " ( txLogin, txSenha ) "
                    . " VALUES ( "
                    . " '{$funcionario->getTxLogin()}', "
                    . " '{$funcionario->getTxSenha()}' "
                    . " ) ";
                $sql = $conexao->prepare($comando);
                $sql->execute();
                $idLogin = $conexao->lastInsertId();

                $comando = "";
                $comando = " INSERT INTO tbFuncionario "
                    . " ( txNomeFuncionario, flGerente, idLogin ) "
                    . " VALUES ( "
                    . " '{$funcionario->getTxNomeFuncionario()}', "
                    . " {$funcionario->getFlGerente()}, "
                    . " {$idLogin} "
                    . " ) ";
                $sql = $conexao->prepare($comando);
                $sql->execute();
                $idFuncionario = $conexao->lastInsertId();
                $conexao->commit();
            } 
            catch (PDOException $e) {
                throw $e;
            }
            finally {
                $sql = null;
                $conexao = null;
                return $idFuncionario;
            }
        }

        /**
         * Altera um Funcionário
         *
         * Altera um Funcionário no Banco de Dados
         *
         * @param Funcionario $funcionario Funcionario.php
         * @return Void
         * @throws PDOException
         **/
        public static function alterarFuncionario(Funcionario $funcionario)
        {
            try {
                $conexao = Conexao::getConexao();
                $conexao->beginTransaction();

                $comando = " UPDATE tbLogin "
                    . " SET "
                    . " txLogin = '" . $funcionario->getTxNomeFuncionario() . "', "
                    . " txSenha = '" . $funcionario->getTxSenha() . "' "
                    . " WHERE "
                    . " idLogin = " . $funcionario->getIdLogin();

                $sql = $conexao->prepare($comando);
                $sql->execute();
                $comando = "";
                $comando = " UPDATE tbFuncionario "
                    . " SET "
                    . " txNomeFuncionario = '" . $funcionario->getTxNomeFuncionario() . "', "
                    . " flGerente = " . $funcionario->getFlGerente() . ", "
                    . " idLogin = " . $funcionario->getIdLogin() . " "
                    . " WHERE "
                    . " idFuncionario = " . $funcionario->getIdFuncionario();
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
         * Busca um Funcionario pelo seu idFuncionario
         *
         * Busca um Funcionario pelo seu idFuncionario no Banco de Dados
         *
         * @param Int $idFuncionario Id do Funcionario
         * @return Funcionario
         * @throws PDOException
         **/
        public static function buscarFuncionarioPorId($idFuncionario) : Funcionario
        {
            $funcionario = null;
            $conexao = null;
            $sql = null;
            try {
                $funcionario = new Funcionario();
                $conexao = Conexao::getConexao();
                $comando = " SELECT "
                    . " F.idFuncionario, "
                    . " F.txNomeFuncionario, "
                    . " F.flGerente, "
                    . " L.idLogin, "
                    . " L.txLogin, "
                    . " L.txSenha "
                    . " FROM tbFuncionario F, tbLogin L"
                    . " WHERE idFuncionario = {$idFuncionario}"; 
                $sql = $conexao->prepare($comando);
                $sql->execute();
                $resultado = $sql->fetchObject();

                $funcionario->setIdFuncionario($resultado->idFuncionario);
                $funcionario->setTxNomeFuncionario($resultado->txNomeFuncionario);
                $funcionario->setFlGerente($resultado->flGerente);

                $funcionario->setIdLogin($resultado->idLogin);
                $funcionario->setTxLogin($resultado->txLogin);
                $funcionario->setTxSenha($resultado->txSenha);
            }
            catch (PDOException $e) {
                throw $e;
            }
            finally {
                $sql = null;
                $conexao = null;
                return $funcionario;
            }
        }
    }
?>