<?php
//esta classe cria um carrinho contendo uma lista de itens do carrinho
require_once "ILogin.php";
require_once "Cliente.php";
require_once "Login.php";
require_once "Conexao.php";

class LoginSession implements ILogin{
    private $cliente;

    public function __construct(){
        $this->cliente = $this->restaura();
    }

    public function login($login){
        try{
            $minhaConexao = Conexao::getConexao();
            $comando = '
                SELECT * 
                FROM tblogin A, tbcliente B
                WHERE A.idLogin = B.idLogin
                AND A.txLogin = "' . $login->getTxLogin() . '"
                AND A.txSenha = "' . $login->getTxSenha() . '"';
            $sql = $minhaConexao->prepare($comando);

            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            $linha = $sql->fetch(PDO::FETCH_ASSOC);
            $cliente = new Cliente();
            if($linha){
                $cliente->setIdCliente($linha['idCliente']);
                $cliente->setTxNomeCliente($linha['txNomeCliente']);
                $cliente->setTxCPF($linha['txCpf']);
                $cliente->setTxEmail($linha['txEmail']);
                $this->cliente = $cliente;
            }
            else{
                $cliente = NULL;
            }
            return $cliente;
        }
        catch(PDOException $e){
            throw $e;
        }
    }

    public function logout(){
        $_SESSION['Login'] = NULL;
        return NULL;
    }

    public function __destruct(){
        $_SESSION['login'] = serialize($this->cliente);
    }

    public function restaura(){
        if (isset($_SESSION['login'])){
            return unserialize($_SESSION['login']);
        }
        else
            return NULL;
    }
}