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
    public function inserirCliente()
    {
        return ClienteDAO::inserirCliente($this);
    }

    /**
     * Altera o Cliente
     */
    public function alterarCliente()
    {
        ClienteDAO::alterarCliente($this);
    }

 
    /**
     * Busca um Cliente pelo seu Id
     *
     * Busca no Banco de Dados um Cliente pelo seu Id
     *
     * @param Int $idCliente Id do Cliente
     * @return Cliente
     **/
    public static function buscarClientePorId($idCliente) : Cliente {
        $cliente = null;
        $cliente = ClienteDAO::buscarClientePorId($idCliente);
        return $cliente;
    }
    
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;
    }

    public function getTxNomeCliente()
    {
        return $this->txNomeCliente;
    }

    public function setTxNomeCliente($txNomeCliente)
    {
        $this->txNomeCliente = $txNomeCliente;
    }

    public function getTxCPF()
    {
        return $this->txCPF;
    }

    public function setTxCPF($txCPF)
    {
        $this->txCPF = $txCPF;
    }

    public function getTxEmail()
    {
        return $this->txEmail;
    }

    public function setTxEmail($txEmail)
    {
        $this->txEmail = $txEmail;
    }

    public function setFlReceberEmail($flReceberEmail) 
    {
        $this->flReceberEmail = $flReceberEmail;
    }

    public function getFlReceberEmail()
    {
        return $this->flReceberEmail;
    }
}
