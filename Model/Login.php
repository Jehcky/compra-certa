<?php
    require_once 'LoginDAO.php';

    class Login //extends AnotherClass implements Interface
    {
        private $idLogin;
        private $txLogin;
        private $txSenha;

        /**
         * Construtor da Classe
         */
        public function __construct($dados) {
            $this->idLogin = $dados['idLogin'];
            $this->txLogin = $dados['txLogin'];
            $this->txSenha = $dados['txSenha'];
        }

        public function setIdLogin($idLogin) {
            $this->idLogin = $idLogin;
        }

        public function getIdLogin() {
            return $this->idLogin;
        }

        public function setTxLogin($txLogin) 
        {
            $this->txLogin = $txLogin;
        }

        public function getTxLogin()
        {
            return $this->txLogin;
        }

        public function setTxSenha($txSenha)
        {
            $this->txSenha = $txSenha;
        }
        
        public function getTxSenha($txSenha)
        {
            return $this->txSenha;
        }
    }
?>