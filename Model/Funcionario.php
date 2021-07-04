<?php
    require_once 'FuncionarioDAO.php';
    require_once 'LoginDAO.php';
    require_once 'Login.php';

    class Funcionario extends Login
    {
        private $idFuncionario;
        private $txNomeFuncionario;
        private $flGerente;

        public function __construct() {
            parent::__construct();
        }

        public function incluirFuncionario()
        {
            FuncionarioDAO::inserirFuncionario($this);
        }

        public function alterarFuncionario()
        {
            FuncionarioDAO::alterarFuncionario($this);
        }

        public function buscarFuncionarioPorId($idFuncionario)
        {
            $funcionario = null;
            $funcionario = FuncionarioDAO::buscarFuncionarioPorId($idFuncionario);
            return $funcionario;
        }

        public function getIdFuncionario()
        {
            return $this->idFuncionario;
        }

        public function setIdFuncionario($idFuncionario)
        {
            $this->idFuncionario = $idFuncionario;
        }

        public function getTxNomeFuncionario()
        {
            return $this->txNomeFuncionario;
        }
        
        public function setTxNomeFuncionario($txNomeFuncionario)
        {
            $this->txNomeFuncionario = $txNomeFuncionario;
        }

        public function getFlGerente()
        {
            return $this->flGerente;
        }

        public function setFlGerente($flGerente)
        {
            $this->flGerente = $flGerente;
        }
        
    }
?>