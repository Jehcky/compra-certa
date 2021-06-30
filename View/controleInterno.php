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
    <link rel="stylesheet" href="View/css/estiloInterno.css">
    <script src="View/js/scriptsInterno.js"></script>
</head>

<body>
    <button class="tablink" onclick="openPage('Prep', this, 'lightgray')">PREPARAÇÃO</button>
    <button class="tablink" onclick="openPage('Conf', this, 'lightgreen')" id="defaultOpen">CONFERENCIA</button>
    <button class="tablink" onclick="openPage('Embalagem', this, 'lightskyblue')">EMBALAGEM</button>
    <button class="tablink" onclick="openPage('Entrega', this, 'lightslategray')">ENTREGA</button>
    <button class="tablink" onclick="openPage('Busca', this, 'lightsalmon')">PEDIDOS</button>

    <div id="Prep" class="tabcontent">
        <div class="background-white container">
            <table class="table table-dark">
                <thead>
                <tr>
                    <th>PEDIDO</th>
                    <th>STATUS</th>
                    <th>DATA</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>031655</td>
                    <td>AGUARDANDO</td>
                    <td>21/03/201</td>
                    <td><a class="btn btn-button btn-success" data-toggle="modal" data-target="#searchModal">DETALHES</a></td>
                </tr>
                <tr>
                    <td>031655</td>
                    <td>AGUARDANDO</td>
                    <td>21/03/201</td>
                    <td><a class="btn btn-button btn-success" data-toggle="modal" data-target="#searchModal">DETALHES</a></td>
                </tr>
                <tr>
                    <td>031655</td>
                    <td>EM ATENDIMENTO...</td>
                    <td>21/03/201</td>
                    <td><a class="btn btn-button btn-danger" disabled="true">DETALHES</a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>

    <div id="Conf" class="tabcontent">
        <div class="background-white container">
            <table class="table table-dark">
                <thead>
                <tr>
                    <th>PEDIDO</th>
                    <th>STATUS</th>
                    <th>DATA</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>031655</td>
                    <td>AGUARDANDO</td>
                    <td>21/03/201</td>
                    <td><a class="btn btn-button btn-success" data-toggle="modal" data-target="#searchModal">DETALHES</a></td>
                </tr>
                <tr>
                    <td>031655</td>
                    <td>AGUARDANDO</td>
                    <td>21/03/201</td>
                    <td><a class="btn btn-button btn-success" data-toggle="modal" data-target="#searchModal">DETALHES</a></td>
                </tr>
                <tr>
                    <td>031655</td>
                    <td>EM ATENDIMENTO...</td>
                    <td>21/03/201</td>
                    <td><a class="btn btn-button btn-danger" disabled="true">DETALHES</a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>

    <div id="Embalagem" class="tabcontent">
        <div class="background-white container">
            <table class="table table-dark">
                <thead>
                <tr>
                    <th>PEDIDO</th>
                    <th>STATUS</th>
                    <th>DATA</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>031655</td>
                    <td>AGUARDANDO</td>
                    <td>21/03/201</td>
                    <td><a class="btn btn-button btn-success" data-toggle="modal" data-target="#searchModal">DETALHES</a></td>
                </tr>
                <tr>
                    <td>031655</td>
                    <td>AGUARDANDO</td>
                    <td>21/03/201</td>
                    <td><a class="btn btn-button btn-success" data-toggle="modal" data-target="#searchModal">DETALHES</a></td>
                </tr>
                <tr>
                    <td>031655</td>
                    <td>EM ATENDIMENTO...</td>
                    <td>21/03/201</td>
                    <td><a class="btn btn-button btn-danger" disabled="true">DETALHES</a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>

    <div id="Entrega" class="tabcontent">
        <div class="background-white container">
            <table class="table table-dark">
                <thead>
                <tr>
                    <th>PEDIDO</th>
                    <th>STATUS</th>
                    <th>DATA</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>031655</td>
                    <td>AGUARDANDO</td>
                    <td>21/03/201</td>
                    <td><a class="btn btn-button btn-success" data-toggle="modal" data-target="#searchModal">DETALHES</a></td>
                </tr>
                <tr>
                    <td>031655</td>
                    <td>AGUARDANDO</td>
                    <td>21/03/201</td>
                    <td><a class="btn btn-button btn-success" data-toggle="modal" data-target="#searchModal">DETALHES</a></td>
                </tr>
                <tr>
                    <td>031655</td>
                    <td>EM ATENDIMENTO...</td>
                    <td>21/03/201</td>
                    <td><a class="btn btn-button btn-danger" disabled="true">DETALHES</a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>

    <div id="Busca" class="tabcontent">
        <div class="background-white container text-center">
            <form class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="pedido">
                    <div class="input-group-btn">
                        <a class="btn btn-default" data-toggle="modal" data-target="#searchModal"><i class="glyphicon glyphicon-search"></i></a>
                    </div>
                </div>
            </form>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
</body>

<footer class="footer navbar-fixed-bottom text-center">
    <p>CompraCerta Copyright</p>
</footer>

<!-- Modal -->
<div id="searchModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">PEDIDO</h4>
      </div>
      <div class="modal-body">
        <h4>PEDIDO: 2306132</h4>
        <h4>CLIENTE: TAL TAL</h4>
        <h4>STATUS: ...</h4>
        <h4>PRODUTOS: ...</h4>
        <h4>VALOR: ...</h4>
        <h4>OBSERVAÇÃO: ...</h4>
        <h4>HISTORICO: ...</h4>
      </div>
      <div class="modal-footer">
        <a class="btn btn-button btn-danger ">DEVOLVER</a> <a class="btn btn-button btn-success">PROXIMO PASSO/CONFIRMAR ENTREGA</a>
      </div>
    </div>
  </div>
</div>