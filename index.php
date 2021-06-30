<?php
/*
//-----------------CLIENTES
require "Controller/Cliente/IncluirClienteController.php";
$controlador = new IncluirController();
$controlador->processaRequisicao();

require "Controller/Cliente/AlterarClienteController.php";
$controlador = new AlterarClienteController();
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

require "Controller/Cliente/AlterarClienteController.php";
$controlador = new AlterarClienteController(3, "cpf", "11111111111");
$controlador->processaRequisicao();


$pagina = 'home';
 
if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
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