<?php

if(isset($_GET['acao'])){
    $acao = $_GET['acao'];

    switch($acao) {
        // -------- CLIENTE
        case 'inserir_cliente':
            require "../compra-certa/Controller/Cliente/IncluirClienteController.php";
            $controlador = new IncluirClienteController();
            break;
        case 'alterar_cliente':
            require "../compra-certa/Controller/Cliente/AlterarClienteController.php";
            $controlador = new AlterarClienteController();
            break;
        default:
            break;
    }
}

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
            require "Controller/Carrinho/ListaCarrinhoController.php";
            require_once 'Model/CarrinhoSession.php';
            $controlador = new ListaCarrinhoController();
			$carrinho = $controlador->processaRequisicao();
            $itensCarrinho = $carrinho->getItensCarrinho();
            include 'View/carrinho.php';
            break;
        
        case "AdditemCarrinho":
            require "Controller/AddItemController.php";
            require_once 'Model/CarrinhoSession.php';
            $carrinhoSession = new CarrinhoSession();
            $controlador = new AddItemController($carrinhoSession);
            $controlador->processaRequisicao();
        break;

        case "CarrinhoAltQuant":
            require "Controller/AlteraQtdController.php";
            require_once 'Model/CarrinhoSession.php';
            $carrinhoSession = new CarrinhoSession();
            $controlador = new AlteraQtdController($carrinhoSession);
            $controlador->processaRequisicao();
        break;

        case "ApagaItemCarrinho":
            require "Controller/ApagaItemController.php";
            require_once 'Model/CarrinhoSession.php';
            $carrinhoSession = new CarrinhoSession();
            $controlador = new ApagaItemController($carrinhoSession);
            $controlador->processaRequisicao();
        break;

        case 'descricaoProduto':
            require "Controller/Produto/BuscarProdutoController.php";
            $controlador = new BuscarProdutoController();
            $produto = $controlador->processaRequisicao();
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
            include_once '../compra-certa/Controller/Categoria/ListarCategoriasController.php';
            include_once '../compra-certa/Controller/Produto/ListarProdutosController.php';
            $controlador = new ListarCategoriasController();
            $categorias = $controlador->processaRequisicao();
            $controlador = new ListarProdutosController();
            $listaProdutos = $controlador->processaRequisicao();
            include 'View/produtos.php';
            break;

        default:
            require "Controller/Produto/SelecionarPromocaoController.php";
            $controlador = new SelecionarPromocaoController();
            $listaProdutos = $controlador->processaRequisicao();
            include 'View/Home.php';
            break;
    }

    include 'view/footer.php';
}