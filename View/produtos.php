<div>
    <div class="row">
        <div class="container col-lg-10 col-lg-push-2 col-md-9 col-md-push-3 col-xs-12">
            <div class="container-fluid">
                <div class="row">
                    <h2 id="categoria">&emsp;Todas as Categorias</h2><br>
                </div>
                <div class="row">
                <?php for($i=0;$i<count($listaProdutos);$i++){ ?>
                    <div class="col-sm-2">
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
            <div>
                
            </div>
        </div>
        <div class="col-lg-2 col-lg-pull-10 col-md-3 col-md-pull-9 col-xs-12">
            <br>
            <ul class="list-unstyled">
                <h4>DEPARTAMENTOS</h4><br>
                <a class="btn btn-button texto-cor-custom menu-esq-botao" href="index.php?pagina=produtos&idCategoria=0"><li>TODAS AS CATEGORIAS</li></a><br>
                <?php foreach ($categorias as $categoria) { ?>
                    <a class="btn btn-button texto-cor-custom menu-esq-botao" href="index.php?pagina=produtos&idCategoria=<?php echo $categoria['idCategoria'] ?>"><li><?php echo $categoria['txNomeCategoria'] ?></li></a><br>
                <?php } ?>
                <li>
                <a class="btn btn-button texto-cor-custom menu-esq-botao" href="index.php?pagina=produtos&idPromocao=1"><li>PROMOÇÕES</li></a>
                </li>    
            </ul>
        </div>
    </div>
</div>
<br>
<br>
<br>