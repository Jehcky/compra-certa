<?php

session_start();
//var_dump($_SESSION['carrinho2']);
//var_dump($_SESSION['login']);

if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
}
else{
    $pagina = 'home';
}
 
if($pagina == 'controleInterno'){
    //include 'View/controleLogin.php';
    require "Controller/Pedido/ExibirSetoresController.php";
    $controlador = new ExibirSetoresController();
    $pedidos = $controlador->processaRequisicao();
    include 'View/controleInterno.php';
}
else{
    if(!isset($_SESSION["login"])){
        include 'View/header.php';
    }
    else{
        include 'View/headerLogin.php';
    }
    
    switch ($pagina) {

        // -------- CLIENTE
        case 'inserir_cliente':
            require "../compra-certa/Controller/Cliente/IncluirClienteController.php";
            $controlador = new IncluirClienteController();
            $idCliente = $controlador->processaRequisicao();
            header('Location: ?pagina=perfil&idCliente=' . $idCliente);
            break;

        case 'alterar_cliente':
            require "../compra-certa/Controller/Cliente/AlterarClienteController.php";
            $controlador = new AlterarClienteController();
            $controlador->processaRequisicao();
            break;

        // ------- CARRINHO
        case "add_item_carrinho":
            require "Controller/Carrinho/AddItemController.php";
            require_once 'Model/CarrinhoSession.php';
            $carrinhoSession = new CarrinhoSession();
            $controlador = new AddItemController($carrinhoSession);
            $controlador->processaRequisicao();
            header('Location: ?pagina=produtos');
            break;
        break;

        case "carrinho_alt_quant":
            require "Controller/Carrinho/AlteraQtdController.php";
            require_once 'Model/CarrinhoSession.php';
            $carrinhoSession = new CarrinhoSession();
            $controlador = new AlteraQtdController($carrinhoSession);
            $controlador->processaRequisicao();
            header('Location: ?pagina=carrinho');            
            break;
        break;
        
        case "apaga_item_carrinho":
            require "Controller/Carrinho/ApagaItemController.php";
            require_once 'Model/CarrinhoSession.php';
            $carrinhoSession = new CarrinhoSession();
            $controlador = new ApagaItemController($carrinhoSession);
            $controlador->processaRequisicao();
            header('Location: ?pagina=carrinho');
            break;

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

        case 'descricaoProduto':
            require "Controller/Produto/BuscarProdutoController.php";
            $controlador = new BuscarProdutoController();
            $produto = $controlador->processaRequisicao();
            include 'View/descricaoProduto.php';
            break;
    
        case 'pagamento':
            require "Controller/Carrinho/ListaCarrinhoController.php";
            require_once 'Model/CarrinhoSession.php';
            $controlador = new ListaCarrinhoController();
            $carrinho = $controlador->processaRequisicao();
            $itensCarrinho = $carrinho->getItensCarrinho();
            include 'View/pagamento.php';
            break;

        case 'pedido':
            include 'View/pedido.php';
            break;
                    
        case 'perfil':
            include_once "Controller/Cliente/BuscarClienteController.php";
            include_once 'Controller/Endereco/ListarEnderecosClienteController.php';
            include_once 'Controller/Pedido/ListarPedidosClienteController.php';
            $buscarCliente = new BuscarClienteController();
            $cliente = $buscarCliente->processaRequisicao();
            $listarEnderecos = new ListarEnderecosClienteController();
            $enderecos = $listarEnderecos->processaRequisicao();
            $listarPedidos = new ListarPedidosClienteController();
            $pedidos = $listarPedidos->processaRequisicao();
            
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

        case 'finaliza':
            $_SESSION['carrinho2'] = NULL;
            header('Location: ?pagina=home');
            break;

        case 'login':
            require "Controller/Cliente/LoginController.php";
            require_once 'Model/LoginSession.php';
            $controlador = new LoginController();
            $cliente = $controlador->processaRequisicao();
            if(is_null($cliente)){
                $_SESSION['login'] = NULL;
                header('Location: ?pagina=home');
            }
            else{
                header('Location: ?pagina=perfil&idCliente=' . $cliente->getIdCliente());
            }
            break;
        
        case 'logout':
            $_SESSION['carrinho2'] = NULL;
            $_SESSION['login'] = NULL;
            header('Location: ?pagina=home');
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