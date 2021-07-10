<!DOCTYPE html>
<html lang="pt-br">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="View/img/hortifruti.png" alt="Horti-fruti">
                            <div class="carousel-caption">
                                <h3>Frutas</h3>
                                <p>Fresquinhas</p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="View/img/frios.png" alt="Frios">
                            <div class="carousel-caption">
                                <h3>Promoção de Frios</h3>
                                <p>Até 10% de desconto</p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="View/img/padaria.png" alt="Padaria">
                            <div class="carousel-caption">
                                <h3>Padaria</h3>
                                <p>Levando pão fresquinho pra sua casa.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <hr>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="text-center"><h1>PROMOÇÕES</h1><br></div>
        <div class="row">
        <?php for($i=0;$i<count($listaProdutos);$i++){ ?>
            <div class="col-sm-3">
                <div class="panel panel-custom">
                    <div class="panel-heading text-center">
                        <span class="panel-nome-produto"><?php echo $listaProdutos[$i]->getTxNomeProduto();?></span><br>
                        <p>
                        <?php if($listaProdutos[$i]->getFlPromocao() == 1){?>
                        de: R$ <?php echo $listaProdutos[$i]->getVlPreco() . " por:"; ?>
                        <?php } ?>
                        <span class="panel-preco-produto">R$ <?php echo number_format($listaProdutos[$i]->getPreco(),2,',','.');?></span>
                        </p>
                    </div>
                    <div class="panel-body">
                        <img src="<?php echo $listaProdutos[$i]->getTxImgUrl();?>"
                            class="img-responsive" alt="Image"></div>
                    <div class="panel-footer text-center"><a href="?pagina=descricaoProduto&idProduto=<?php echo $listaProdutos[$i]->getIdProduto();?>" class="btn panel-button-comprar">Comprar</a></div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
    <br>
    <br>
    <br>
</body>

</html>