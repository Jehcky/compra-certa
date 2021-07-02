<?php

class Perfil 
{
    private $idPerfil;
    private $txDescricao;

    /**
     * Construtor da Classe
     */
    public function __construct($dados) {
        $this->idPerfil = $dados['idPerfil'];
        $this->txDescricao = $dados['txDescricao'];
    }

    public function setIdPerfil($idPerfil)
    {
        $this->idPerfil = $idPerfil;
    }
    public function getIdPerfil()
    {
        return $this->idPerfil;
    }
    public function setTxDescricao($txDescricao)
    {
        $this->txDescricao = $txDescricao;
    }
    public function getTxDescricao()
    {
        return $this->txDescricao;
    }
}

?>