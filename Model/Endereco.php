<?php
    require_once 'EnderecoDAO.php';

    /**
     * Endereco class
     */
    class Endereco
    {
        /** @var Int $idEndereco IdEndereco */
        protected $idEndereco;

        /** @var Int $idCliente IdCliente */
        protected $idCliente;

        /** @var Boolean $flPrincipal Flag de Endereço Principal */
        protected $flPrincipal;

        /** @var String $txCEP CEP */
        protected $txCEP;

        /** @var String $txBairro Bairro */
        protected $txBairro;

        /** @var String $txRua Rua */
        protected $txRua;

        /** @var Int $nuLogradouro Numero */
        protected $nuLogradouro;

        /** @var String $txComplemento Complemento */
        protected $txComplemento;
        
        public function __construct() {
            
        }

        public function getIdEndereco()
        {
            return $this->idEndereco;
        }
        
        public function setIdEndereco($idEndereco)
        {
            $this->idEndereco = $idEndereco;
        }

        public function getIdCliente()
        {
            return $this->idCliente;
        }

        public function setIdCliente($idCliente)
        {
            $this->idCliente = $idCliente;
        }

        public function getFlPrincipal()
        {
            return $this->flPrincipal;
        }

        public function setFlPrincipal($flPrincipal)
        {
            $this->flPrincipal = $flPrincipal;
        }

        public function getTxCEP()
        {
            return $this->txCEP;
        }

        public function setTxCEP($txCEP)
        {
            $this->txCEP = $txCEP;
        }

        public function getTxBairro()
        {
            return $this->txBairro;
        }

        public function setTxBairro($txBairro)
        {
            $this->txBairro = $txBairro;
        }

        public function getTxRua()
        {
            return $this->txRua;
        }

        public function setTxRua($txRua)
        {
            $this->txRua = $txRua;
        }

        public function getNuLogradouro()
        {
            return $this->nuLogradouro;
        }

        public function setNuLogradouro($nuLogradouro)
        {
            $this->nuLogradouro = $nuLogradouro;
        }

        public function getTxComplemento()
        {
            return $this->txComplemento;
        }

        public function setTxComplemento($txComplemento)
        {
            $this->txComplemento = $txComplemento;
        }

        /**
         * Lista todos os Enderecos do Cliente
         *
         * @param Int $idCliente Id do Cliente
         * @return Array<Endereco>
         **/
        public static function listarEnderecosCliente($idCliente)
        {
            return EnderecoDAO::listarEnderecosCliente($idCliente);
        }
    }
    
?>