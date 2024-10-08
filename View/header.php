<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>CompraCerta</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="View/css/estilo.css">
</head>

<body>
    <div id="nav">
        <nav class="navbar navbar-inverse bg-dark">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="?pagina=home">CC</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="?pagina=home">Principal</a></li>
                        <li><a href="?pagina=produtos">Produtos</a></li>
                        <li><a href="?pagina=produtos&idPromocao=1">Promoções</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="?pagina=cadastro"><span class="glyphicon glyphicon-user"></span> Cadastre-se</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a href="?pagina=carrinho"><span class="glyphicon glyphicon-shopping-cart"></span> Carrinho</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- Modal -->
    <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">LOGIN</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="index.php?pagina=login">
                        <div class="form-group">
                            <input type="text" class="form-control" id="login" name="login" placeholder="Seu usuario..." required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Sua senha..." required>
                        </div>
                        <input type="submit" class="btn btn-block panel-button-comprar" value="Login">
                    </form>
                    <div class="modal-footer d-flex justify-content-center">
                        <div class="signup-section text-center">Não é cadastrado ainda? <a href="?pagina=cadastro" class="text-info"> Cadastre-se aqui</a>.</div>
                    </div>
                </div>
            </div>

        </div>
    </div>