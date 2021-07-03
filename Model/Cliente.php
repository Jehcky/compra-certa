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
    private $flReceberEmail;

    /**
     * Construtor da Classe
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Insere um novo Cliente
     */
    public function incluirCliente()
    {
        $idLogin = LoginDAO::inserirLogin($this);
        $this->setIdLogin($idLogin);
        ClienteDAO::inserirCliente($this);
    }

    /**
     * Altera o Cliente
     */
    public function alterarCliente()
    {
        LoginDAO::alterarLogin($this);
        ClienteDAO::alterarCliente($this);
    }

    /**
     * Busca um cliente pelo seu idCliente
     * @param $idCliente
     * @return Cliente
     */
    public static function buscarClientePorId($idCliente) : Cliente {
        $cliente = null;
        $cliente = ClienteDAO::buscarClientePorId($idCliente);
        return $cliente;
    }
    /**
     * Pega o valor de idCliente
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Seta o valor de idCliente
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;
    }

    /**
     * Pega o valor de txNomeCliente
     */
    public function getTxNomeCliente()
    {
        return $this->txNomeCliente;
    }

    /**
     * Seta o valor de txNomeCliente
     */
    public function setTxNomeCliente($txNomeCliente)
    {
        $this->txNomeCliente = $txNomeCliente;
    }

    /**
     * Pega o valor de txCPF
     */
    public function getTxCPF()
    {
        return $this->txCPF;
    }

    /**
     * Seta o valor de txCPF
     */
    public function setTxCPF($txCPF)
    {
        $this->txCPF = $txCPF;
    }

    /**
     * Pega o valor de txEmail
     */
    public function getTxEmail()
    {
        return $this->txEmail;
    }

    /**
     * Seta o valor de txEmail
     */
    public function setTxEmail($txEmail)
    {
        $this->txEmail = $txEmail;
    }

    /**
     * Seta o valor de flReceberEmail
     */
    public function setFlReceberEmail($flReceberEmail) 
    {
        $this->$flReceberEmail = $flReceberEmail;
    }

    /**
     * Pega o valor de flReceberEmail
     */
    public function getFlReceberEmail()
    {
        return $this->flReceberEmail;
    }
}
