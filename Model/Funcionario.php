<?php
    require_once 'FuncionarioDAO.php';
    require_once 'LoginDAO.php';
    require_once 'Login.php';
    require_once 'Setor.php';

    class Funcionario extends Login
    {
        private $idFuncionario;
        private $txNomeFuncionario;
        private $txCPF;
        private $txEmail;
        private $setor;

        public function __construct() {
            parent::__construct();
        }

        public function incluirFuncionario()
        {
            $idLogin = LoginDAO::inserirLogin($this);
            $this->setIdLogin($idLogin);
            FuncionarioDAO::inserirFuncionario($this);
        }

        public function alterarFuncionario()
        {
            LoginDAO::alterarLogin($this);
            FuncionarioDAO::alterarFuncionario($this);
        }
    }
?>