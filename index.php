<?php

if(isset($_GET['acao'])){
    $acao = $_GET['acao'];

    switch($acao) {
        case 'inserir_cliente':
            require "../compra-certa/Controller/Cliente/IncluirClienteController.php";
            $controlador = new IncluirClienteController();
            //$controlador->processaRequisicao();
            break;
        case 'alterar_cliente':
            require "../compra-certa/Controller/Cliente/AlterarClienteController.php";
            $controlador = new AlterarClienteController(1);
            break;
        default:
            break;
    }
}
//-----------------CLIENTES

//$controlador->processaRequisicao();

/*

$controlador->processaRequisicao();


//-----------------PEDIDOS
require "Controller/Produto/ListarProdutoController.php";
$controlador = new ListarProdutoController();

require "Controller/Produto/SelecionarCategoriaController.php";
$controlador = new SelecionarCategoriaController(1);
$controlador->processaRequisicao();

require "Controller/Produto/SelecionarPromocaoController.php";
$controlador = new SelecionarpromocaoController();
$controlador->processaRequisicao();
*/


if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
} else {
    $pagina = 'home';
}
 
if($pagina == 'controleInterno'){
    include 'View/controleInterno.php';
}

else{
    include 'View/header.php';
    
    switch ($pagina) {
        case 'cadastro':
            include 'View/cadastro.php';
            break;

        case 'carrinho':
            include 'View/carrinho.php';
            break;

        case 'descricaoProduto':
            include 'View/descricaoProduto.php';
            break;
    
        case 'pagamento':
            include 'View/pagamento.php';
            break;

        case 'pedido':
            include 'View/pedido.php';
            break;
                    
        case 'perfil':
            include 'View/perfil.php';
            break;
                    
        case 'produtos':
            include 'View/produtos.php';
            break;

        default:
            include 'View/home.php';
            break;
    }

    include 'view/footer.php';
}