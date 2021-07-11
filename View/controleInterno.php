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
    <button class="tablink" onclick="openPage('Embalagem', this, 'lightskyblue')">EMBALAGEM</button>
    <button class="tablink" onclick="openPage('Entrega', this, 'lightslategray')">ENTREGA</button>
    <button class="tablink" onclick="openPage('Busca', this, 'lightsalmon')">PEDIDOS</button>
    <button class="tablink" onclick="openPage('Relatorios', this, 'crimson')">RELATORIOS</button>

    <div id="Prep" class="tabcontent">
        <div class="background-white container">
            <table class="table table-dark">
                <thead>
                <tr>
                    <th>PEDIDO</th>
                    <th>CLIENTE</th>
                    <th>VALOR</th>
                    <th>DATA</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php for($i=0;$i<count($pedidos);$i++) {
                $atual = $pedidos[$i]->getLstHistorico(); 
                if(end($atual)['setor'] == 1){ ?>
                <tr>
                    <td><?php echo $pedidos[$i]->getIdPedido(); ?></td>
                    <td><?php echo $pedidos[$i]->getTxCliente(); ?></td>
                    <td><?php echo number_format($pedidos[$i]->getVlValor(),2,',','.'); ?></td>
                    <td><?php echo $pedidos[$i]->getLstHistorico()[0]['data']; ?></td>
                    <td><a class="btn btn-button btn-success" data-toggle="modal" data-target="#searchModal<?php echo $pedidos[$i]->getIdPedido();?>">DETALHES</a></td>
                </tr>
                </tbody>
                <?php }} ?>
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
                    <th>CLIENTE</th>
                    <th>VALOR</th>
                    <th>DATA</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php for($i=0;$i<count($pedidos);$i++) {
                $atual = $pedidos[$i]->getLstHistorico(); 
                if(end($atual)['setor'] == 2){ ?>
                <tr>
                    <td><?php echo $pedidos[$i]->getIdPedido(); ?></td>
                    <td><?php echo $pedidos[$i]->getTxCliente(); ?></td>
                    <td><?php echo number_format($pedidos[$i]->getVlValor(),2,',','.'); ?></td>
                    <td><?php echo $pedidos[$i]->getLstHistorico()[0]['data']; ?></td>
                    <td><a class="btn btn-button btn-success" data-toggle="modal" data-target="#searchModal<?php echo $pedidos[$i]->getIdPedido();?>">DETALHES</a></td>
                </tr>
                </tbody>
                <?php }} ?>
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
                    <th>CLIENTE</th>
                    <th>VALOR</th>
                    <th>DATA</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php for($i=0;$i<count($pedidos);$i++) {
                $atual = $pedidos[$i]->getLstHistorico(); 
                if(end($atual)['setor'] == 3){ ?>
                <tr>
                    <td><?php echo $pedidos[$i]->getIdPedido(); ?></td>
                    <td><?php echo $pedidos[$i]->getTxCliente(); ?></td>
                    <td><?php echo number_format($pedidos[$i]->getVlValor(),2,',','.'); ?></td>
                    <td><?php echo $pedidos[$i]->getLstHistorico()[0]['data']; ?></td>
                    <td><a class="btn btn-button btn-success" data-toggle="modal" data-target="#searchModal<?php echo $pedidos[$i]->getIdPedido();?>">DETALHES</a></td>
                </tr>
                </tbody>
                <?php }} ?>
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
                    <input type="number" class="form-control" placeholder="Search" name="pedido">
                    <div class="input-group-btn">
                        <a class="btn btn-default" data-toggle="modal" id="searchPedido"><i class="glyphicon glyphicon-search"></i></a>
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

    <div id="Relatorios" class="tabcontent">
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
<?php for($i=0;$i<count($pedidos);$i++) { ?>
    <div id="searchModal<?php echo $pedidos[$i]->getIdPedido();?>" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">PEDIDO</h4>
            </div>
            <div class="modal-body">
                <h4>PEDIDO: <?php echo $pedidos[$i]->getIdPedido(); ?></h4>
                <h4>CLIENTE: <?php echo $pedidos[$i]->getTxCliente(); ?></h4>
                <h4>VALOR: <?php echo number_format($pedidos[$i]->getVlValor(),2,',','.'); ?></h4>
                <h4>OBSERVAÇÃO: <?php echo $pedidos[$i]->getTxObs(); ?></h4>
                <h4>PRODUTOS: </h4>
                <div class="background-white container-fluid">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th>PRODUTO</th>
                                <th>QUANTIDADE</th>
                                <th>VALOR</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php for($j=0;$j<count($pedidos[$i]->getLstProdutos());$j++) { ?>
                            <tr>
                                <td><?php echo $pedidos[$i]->getLstProdutos()[$j]['produto']; ?></td>
                                <td>x<?php echo $pedidos[$i]->getLstProdutos()[$j]['quantidade']; ?></td>
                                <td><?php echo number_format($pedidos[$i]->getLstProdutos()[$j]['valor']*$pedidos[$i]->getLstProdutos()[$j]['quantidade'],2,',','.'); ?></td>
                            </tr>
                        <?php } ?>
                            <tr>
                                <td></td>
                                <td>TOTAL:</td>
                                <td><?php echo number_format($pedidos[$i]->getVlValor(),2,',','.'); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h4>HISTORICO: </h4>
                <div class="background-white container-fluid">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th>DATA</th>
                                <th>OPERACAO</th>
                                <th>FUNCIONARIO</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php for($j=0;$j<count($pedidos[$i]->getLstHistorico());$j++) { ?>
                            <tr>
                                <td><?php echo $pedidos[$i]->getLstHistorico()[$j]['data']; ?></td>
                                <td><?php
                                switch($pedidos[$i]->getLstHistorico()[$j]['setor']){
                                    case 1:
                                        echo 'PREPARAÇÃO';
                                        break;
                                    case 2:
                                        echo 'EMBALAGEM';
                                        break;
                                    case 3:
                                        echo 'ENTREGA';
                                        break;
                                    case 4:
                                        echo 'FINALIZADO';
                                        break;
                                }
                                ?></td>
                                <td><?php echo $pedidos[$i]->getLstHistorico()[$j]['funcionario']; ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <?php
                $atual = $pedidos[$i]->getLstHistorico(); 
                if(end($atual)['setor'] <> 1){ ?>
                <a class="btn btn-button btn-danger ">DEVOLVER</a>
                <?php } ?>
                <a class="btn btn-button btn-success">PROXIMO PASSO/CONFIRMAR ENTREGA</a>
            </div>
            </div>
        </div>
    </div>
<?php } ?>