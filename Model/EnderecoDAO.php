<?php
    require_once 'Conexao.php';
    require_once 'Endereco.php';

    /**
     * EnderecoDAO
     */
    class EnderecoDAO
    {
        /**
         * Insere um Endereco no BD
         *
         * Insere um Endereco no Banco de Dados
         *
         * @param Endereco $endereco Endereco
         * @return Type
         * @throws PDOException
         **/
        public static function inserirEndereco(Endereco $endereco, $idCliente)
        {

            $conexao = null;
            $sql = null;
            try {
                $conexao = Conexao::getConexao();
                $comando = " INSERT INTO tbEndereco "
                    . " ( "
                    . " idCliente, "
                    . " flPrincipal, "
                    . " txCEP, "
                    . " txBairro, "
                    . " txRua, "
                    . " nuLogadouro, "
                    . " txComplemento "
                    . " ) "
                    . " VALUES ( "
                    . " {$idCliente}, "
                    . " {$endereco->getFlPrincipal()}, "
                    . " {$endereco->getTxCEP()}, "
                    . " {$endereco->getTxBairro()}, "
                    . " {$endereco->getTxRua()}, "
                    . " {$endereco->getNuLogradouro()}, "
                    . " {$endereco->getTxComplemento()} "
                    . " ) ";
                
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
         * Altera um Endereco existente no BD
         *
         * Altera um Endereco existente no Banco de Dados
         *
         * @param Endereco $var Description
         * @return type
         * @throws PDOException
         **/
        public static function alterarEndereco(Endereco $endereco)
        {
            $conexao = null;
            $sql = null;
            try {
                $conexao = Conexao::getConexao();
                $comando = " UPDATE tbEndereco "
                    . " SET "
                    . " flPrincipal = " . $endereco->getFlPrincipal() . ", "
                    . " txCEP = '" . $endereco->getTxCEP() . "', "
                    . " txBairro = '" . $endereco->getTxBairro() . "', "
                    . " txRua = '" . $endereco->getTxRua() . "', "
                    . " nuLogadouro = " . $endereco->getNuLogradouro() . ", "
                    . " txComplemento = '" . $endereco->getTxComplemento()
                    . " WHERE idEndereco = " . $endereco->getIdEndereco();
                $sql = $conexao->prepare($comando);
                $sql->execute();
            } catch (PDOException $e) {
                throw $e;
            }
            finally {
                $sql = null;
                $conexao = null;
            }
        }

        /**
         * Lista todos os Enderecos de um determinado Cliente
         *
         * Lista todos os Enderecos de um determinado Cliente
         *
         * @param Int $idCliente Id do Cliente
         * @return Array<Endereco>
         * @throws PDOException
         **/
        public static function listarEnderecosCliente($idCliente)
        {
            $listaEnderecos = null;
            $conexao = null;
            $sql = null;

            try {
                $conexao = Conexao::getConexao();
                $comando = " SELECT "
                    . " idEndereco, "
                    . " flPrincipal, "
                    . " txCEP, "
                    . " txBairro, "
                    . " txRua, "
                    . " nuLogadouro, "
                    . " txComplemento "
                    . " FROM tbEndereco "
                    . " WHERE idCliente = " . $idCliente;
                    $sql = $conexao->prepare($comando);
                    $sql->execute();
                    $listaEnderecos = $sql->fetchAll();
            }
            catch (PDOException $e) {
                throw $e;
            }
            finally {
                $sql = null;
                $conexao = null;
                return $listaEnderecos;
            }
        }
    }
    
?>