<?php
//interface criada para padronizar os métodos da classe LoginSession
interface ILogin{
    public function login($cliente);
    public function logout();
}
?>