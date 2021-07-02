<?php

require_once 'ClienteDAO.php';
require_once 'LoginDAO.php';
require_once 'Login.php';

class Cliente extends Login
{
    private $idCliente;
    private $txNomeCliente;
    private $txCPF;
    private $txEmail;

    public function __construct() {
        parent::__construct();
    }

    /**
     * Insere um novo Cliente no Banco
     */
    public function incluirCliente()
    {
        $idLogin = LoginDAO::inserirLogin($this);
        $this->setIdLogin($idLogin);
        ClienteDAO::inserirCliente($this);
    }

    /**
     * Funcao para alterar os dados do Cliente
     */
    public function alterarCliente()
    {
        ClienteDAO::alterarCliente($this);
    }

    /**
     * Busca um cliente pelo seu id
     */
    public static function buscarCliente($idCliente) {
        $cliente = ClienteDAO::buscarCliente($idCliente);
    }
    /**
     * Pegar o valor de idCliente
     */
    public function getidCliente()
    {
        return $this->idCliente;
    }

    /**
     * Setar o valor de idCliente
     */
    public function setidCliente($idCliente)
    {
        $this->idCliente = $idCliente;
    }

    /**
     * Pegar o valor de txNomeCliente
     */
    public function getTxNomeCliente()
    {
        return $this->txNomeCliente;
    }

    /**
     * Setar o valor de txNomeCliente
     */
    public function setTxNomeCliente($txNomeCliente)
    {
        $this->txNomeCliente = $txNomeCliente;
    }

    /**
     * Pegar o valor de txCPF
     */
    public function getTxCPF()
    {
        return $this->txCPF;
    }

    /**
     * Setar o valor de txCPF
     */
    public function setTxCPF($txCPF)
    {
        $this->txCPF = $txCPF;
        return $this;
    }

    /**
     * Get the value of txEmail
     */
    public function getTxEmail()
    {
        return $this->txEmail;
    }

    /**
     * Set the value of txEmail
     *
     * @return  self
     */
    public function setTxEmail($txEmail)
    {
        $this->txEmail = $txEmail;
        return $this;
    }
}
