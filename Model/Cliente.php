<?php
    require_once "ClienteDAO.php";

    class Cliente{
        private $ID;
        private $usuario;
        private $nome;
        private $CPF;
        private $email;
        private $senha;

        public function incluirCliente(){
            $clienteDAO = new ClienteDAO();
            $clienteDAO->incluirCliente($this);
        }

        public function alterarCliente($campo, $dado){
            $clienteDAO = new ClienteDAO();
            $clienteDAO->alterarCliente($this, $campo, $dado);
        }

        /**
         * Get the value of ID
         */ 
        public function getID()
        {
                return $this->ID;
        }

        /**
         * Set the value of ID
         *
         * @return  self
         */ 
        public function setID($ID)
        {
                $this->ID = $ID;

                return $this;
        }

        /**
         * Get the value of usuario
         */ 
        public function getUsuario()
        {
                return $this->usuario;
        }

        /**
         * Set the value of usuario
         *
         * @return  self
         */ 
        public function setUsuario($usuario)
        {
                $this->usuario = $usuario;

                return $this;
        }

        /**
         * Get the value of nome
         */ 
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         *
         * @return  self
         */ 
        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of CPF
         */ 
        public function getCPF()
        {
                return $this->CPF;
        }

        /**
         * Set the value of CPF
         *
         * @return  self
         */ 
        public function setCPF($CPF)
        {
                $this->CPF = $CPF;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of senha
         */ 
        public function getSenha()
        {
                return $this->senha;
        }

        /**
         * Set the value of senha
         *
         * @return  self
         */ 
        public function setSenha($senha)
        {
                $this->senha = $senha;

                return $this;
        }
    }

    
?>