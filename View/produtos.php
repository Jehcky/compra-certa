<?php 
    include_once '../compra-certa/Model/Produto.php';
    include_once '../compra-certa/Model/Categoria.php';

    include_once '../compra-certa/Controller/Categoria/ListarCategoriasController.php';
    include_once '../compra-certa/Controller/Produto/ListarProdutosController.php';

    $listar_categorias = new ListarCategoriasController();
    $categorias = $listar_categorias->processaRequisicao();
    $listar_produtos = new ListarProdutosController();
    $produtos = $listar_produtos->processaRequisicao();


    //var_dump($categorias);
?>

<div>
    <div class="row">
        <div class="container col-lg-10 col-lg-push-2 col-md-9 col-md-push-3 col-xs-12">
            <div class="container-fluid">
                <div class="row">
                    <h2 id="categoria">&emsp;Todas as Categorias</h2><br>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="panel panel-custom">
                            <div class="panel-heading text-center">
                                <span class="panel-nome-produto">PÃO DE QUEIJO - PERDIGÃO</span><br>
                                <span class="panel-preco-produto">R$ 0,00</span>
                            </div>
                            <div class="panel-body">
                                <img src="https://brf.my.salesforce.com/servlet/servlet.ImageServer?id=0154A000024CgwCQAS&oid=00D410000012TJaEAM"
                                    class="img-responsive" alt="Image"></div>
                            <div class="panel-footer text-center">
                            <a href="?pagina=descricaoProduto" class="btn panel-button-comprar">Comprar</a></div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="panel panel-custom">
                            <div class="panel-heading text-center">
                                <span class="panel-nome-produto">HOT POCKET X-PICANHA SADIA</span><br>
                                <span class="panel-preco-produto">R$ 0,00</span>
                            </div>
                            <div class="panel-body">
                                <img src="https://brf.my.salesforce.com/servlet/servlet.ImageServer?id=0154A000024Cgi0QAC&oid=00D410000012TJaEAM"
                                    class="img-responsive" alt="Image"></div>
                            <div class="panel-footer text-center"><button class="btn panel-button-comprar">Comprar</button></div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="panel panel-custom">
                            <div class="panel-heading text-center">
                                <span class="panel-nome-produto">NUGGETS FRANGO COM QUEIJO SADIA</span><br>
                                <span class="panel-preco-produto">R$ 0,00</span>
                            </div>
                            <div class="panel-body">
                                <img src="https://brf.my.salesforce.com/servlet/servlet.ImageServer?id=0154A000024CgjcQAC&oid=00D410000012TJaEAM"
                                    class="img-responsive" alt="Image"></div>
                            <div class="panel-footer text-center"><button class="btn panel-button-comprar">Comprar</button></div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="panel panel-custom">
                            <div class="panel-heading text-center">
                                <span class="panel-nome-produto">BISTECA (400G A 800G) - SADIA</span><br>
                                <span class="panel-preco-produto">R$ 0,00</span>
                            </div>
                            <div class="panel-body">
                                <img src="https://brf.my.salesforce.com/servlet/servlet.ImageServer?id=0154A000024CgorQAC&oid=00D410000012TJaEAM"
                                    class="img-responsive" alt="Image"></div>
                            <div class="panel-footer text-center"><button class="btn panel-button-comprar">Comprar</button></div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="panel panel-custom">
                            <div class="panel-heading text-center">
                                <span class="panel-nome-produto">BISTECA (400G A 800G) - SADIA</span><br>
                                <span class="panel-preco-produto">R$ 0,00</span>
                            </div>
                            <div class="panel-body">
                                <img src="https://brf.my.salesforce.com/servlet/servlet.ImageServer?id=0154A000024CgorQAC&oid=00D410000012TJaEAM"
                                    class="img-responsive" alt="Image">
                            </div>
                            <div class="panel-footer text-center">
                                <button class="btn panel-button-comprar btnGridProdutos">Comprar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="panel panel-custom">
                            <div class="panel-heading text-center">
                                <span class="panel-nome-produto">BISTECA (400G A 800G) - SADIA</span><br>
                                <span class="panel-preco-produto">R$ 0,00</span>
                            </div>
                            <div class="panel-body">
                                <img src="https://brf.my.salesforce.com/servlet/servlet.ImageServer?id=0154A000024CgorQAC&oid=00D410000012TJaEAM"
                                    class="img-responsive" alt="Image">
                            </div>
                            <div class="panel-footer text-center">
                                <button class="btn panel-button-comprar btnGridProdutos">Comprar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="panel panel-custom">
                            <div class="panel-heading text-center">
                                <span class="panel-nome-produto">MISS DAISY - CHOCOLATE...</span><br>
                                <span class="panel-preco-produto">R$ 0,00</span>
                            </div>
                            <div class="panel-body">
                                <img src="https://brf.my.salesforce.com/servlet/servlet.ImageServer?id=0154A000024CghlQAC&oid=00D410000012TJaEAM"
                                    class="img-responsive" alt="Image"></div>
                            <div class="panel-footer text-center"><button class="btn panel-button-comprar">Comprar</button></div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="panel panel-custom">
                            <div class="panel-heading text-center">
                                <span class="panel-nome-produto">CORAÇÃO TEMPERADO...</span><br>
                                <span class="panel-preco-produto">R$ 0,00</span>
                            </div>
                            <div class="panel-body">
                                <img src="https://brf.my.salesforce.com/servlet/servlet.ImageServer?id=0154A000024CgliQAC&oid=00D410000012TJaEAM"
                                    class="img-responsive" alt="Image"></div>
                            <div class="panel-footer text-center"><button class="btn panel-button-comprar">Comprar</button></div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="panel panel-custom">
                            <div class="panel-heading text-center">
                                <span class="panel-nome-produto">BISTECA (400G A 800G) - SADIA</span><br>
                                <span class="panel-preco-produto">R$ 0,00</span>
                            </div>
                            <div class="panel-body">
                                <img src="https://brf.my.salesforce.com/servlet/servlet.ImageServer?id=0154A000024CgorQAC&oid=00D410000012TJaEAM"
                                    class="img-responsive" alt="Image">
                            </div>
                            <div class="panel-footer text-center">
                                <span class="btn panel-button-comprar btnGridProdutos">Comprar</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="panel panel-custom">
                            <div class="panel-heading text-center">
                                <span class="panel-nome-produto">BISTECA (400G A 800G) - SADIA</span><br>
                                <span class="panel-preco-produto">R$ 0,00</span>
                            </div>
                            <div class="panel-body">
                                <img src="https://brf.my.salesforce.com/servlet/servlet.ImageServer?id=0154A000024CgorQAC&oid=00D410000012TJaEAM"
                                    class="img-responsive" alt="Image">
                            </div>
                            <div class="panel-footer text-center">
                                <button class="btn panel-button-comprar btnGridProdutos">Comprar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="panel panel-custom">
                            <div class="panel-heading text-center">
                                <span class="panel-nome-produto">BISTECA (400G A 800G) - SADIA</span><br>
                                <span class="panel-preco-produto">R$ 0,00</span>
                            </div>
                            <div class="panel-body">
                                <img src="https://brf.my.salesforce.com/servlet/servlet.ImageServer?id=0154A000024CgorQAC&oid=00D410000012TJaEAM"
                                    class="img-responsive" alt="Image">
                            </div>
                            <div class="panel-footer text-center">
                                <button class="btn panel-button-comprar btnGridProdutos">Comprar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="panel panel-custom">
                            <div class="panel-heading text-center">
                                <span class="panel-nome-produto">BISTECA (400G A 800G) - SADIA</span><br>
                                <span class="panel-preco-produto">R$ 0,00</span>
                            </div>
                            <div class="panel-body">
                                <img src="https://brf.my.salesforce.com/servlet/servlet.ImageServer?id=0154A000024CgorQAC&oid=00D410000012TJaEAM"
                                    class="img-responsive" alt="Image">
                            </div>
                            <div class="panel-footer text-center">
                                <button class="btn panel-button-comprar btnGridProdutos">Comprar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="panel panel-custom">
                            <div class="panel-heading text-center">
                                <span class="panel-nome-produto">MISS DAISY - CHOCOLATE...</span><br>
                                <span class="panel-preco-produto">R$ 0,00</span>
                            </div>
                            <div class="panel-body">
                                <img src="https://brf.my.salesforce.com/servlet/servlet.ImageServer?id=0154A000024CghlQAC&oid=00D410000012TJaEAM"
                                    class="img-responsive" alt="Image"></div>
                            <div class="panel-footer text-center"><button class="btn panel-button-comprar">Comprar</button></div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="panel panel-custom">
                            <div class="panel-heading text-center">
                                <span class="panel-nome-produto">CORAÇÃO TEMPERADO...</span><br>
                                <span class="panel-preco-produto">R$ 0,00</span>
                            </div>
                            <div class="panel-body">
                                <img src="https://brf.my.salesforce.com/servlet/servlet.ImageServer?id=0154A000024CgliQAC&oid=00D410000012TJaEAM"
                                    class="img-responsive" alt="Image"></div>
                            <div class="panel-footer text-center"><button class="btn panel-button-comprar">Comprar</button></div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="panel panel-custom">
                            <div class="panel-heading text-center">
                                <span class="panel-nome-produto">BISTECA (400G A 800G) - SADIA</span><br>
                                <span class="panel-preco-produto">R$ 0,00</span>
                            </div>
                            <div class="panel-body">
                                <img src="https://brf.my.salesforce.com/servlet/servlet.ImageServer?id=0154A000024CgorQAC&oid=00D410000012TJaEAM"
                                    class="img-responsive" alt="Image">
                            </div>
                            <div class="panel-footer text-center">
                                <span class="btn panel-button-comprar btnGridProdutos">Comprar</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="panel panel-custom">
                            <div class="panel-heading text-center">
                                <span class="panel-nome-produto">BISTECA (400G A 800G) - SADIA</span><br>
                                <span class="panel-preco-produto">R$ 0,00</span>
                            </div>
                            <div class="panel-body">
                                <img src="https://brf.my.salesforce.com/servlet/servlet.ImageServer?id=0154A000024CgorQAC&oid=00D410000012TJaEAM"
                                    class="img-responsive" alt="Image">
                            </div>
                            <div class="panel-footer text-center">
                                <button class="btn panel-button-comprar btnGridProdutos">Comprar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="panel panel-custom">
                            <div class="panel-heading text-center">
                                <span class="panel-nome-produto">BISTECA (400G A 800G) - SADIA</span><br>
                                <span class="panel-preco-produto">R$ 0,00</span>
                            </div>
                            <div class="panel-body">
                                <img src="https://brf.my.salesforce.com/servlet/servlet.ImageServer?id=0154A000024CgorQAC&oid=00D410000012TJaEAM"
                                    class="img-responsive" alt="Image">
                            </div>
                            <div class="panel-footer text-center">
                                <a href="?pagina=descricaoProduto" class="btn panel-button-comprar btnGridProdutos">Comprar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="panel panel-custom">
                            <div class="panel-heading text-center">
                                <span class="panel-nome-produto">BISTECA (400G A 800G) - SADIA</span><br>
                                <span class="panel-preco-produto">R$ 0,00</span>
                            </div>
                            <div class="panel-body">
                                <img src="https://brf.my.salesforce.com/servlet/servlet.ImageServer?id=0154A000024CgorQAC&oid=00D410000012TJaEAM"
                                    class="img-responsive" alt="Image">
                            </div>
                            <div class="panel-footer text-center">
                                <button class="btn panel-button-comprar btnGridProdutos">Comprar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <ul class="pagination pagination-md">
                        <li class="page-item"><a class="page-link" href="#">Previous</li></a>
                        <li class="page-item"><a class="page-link" href="#">1</li></a>
                        <li class="page-item"><a class="page-link" href="#">2</li></a>
                        <li class="page-item"><a class="page-link" href="#">3</li></a>
                        <li class="page-item"><a class="page-link" href="#">Next</li></a>
                    </ul>
                </div>
            </div>
            <div>
                
            </div>
        </div>
        <div class="container col-lg-2 col-lg-pull-10 col-md-3 col-md-pull-9 col-xs-12">
            <div class="container">
                <br>
                <ul class="list-unstyled">
                    <h4>DEPARTAMENTOS</h4>
                    <a class="btn btn-button texto-cor-custom menu-esq-botao" href="index.php?pagina=produtos&idCategoria=0"><li>TODAS AS CATEGORIAS</li></a><br>
                    <?php foreach ($categorias as $categoria) { ?>
                        <a class="btn btn-button texto-cor-custom menu-esq-botao" href="index.php?pagina=produtos&idCategoria=<?php echo $categoria['idCategoria'] ?>"><li><?php echo $categoria['txNomeCategoria'] ?></li></a><br>
                    <?php } ?>
                    <!-- <a class="btn btn-button texto-cor-custom menu-esq-botao"><li>Bebidas</li></a><br>
                    <a class="btn btn-button texto-cor-custom menu-esq-botao"><li>Beleza, Higiene e Saúde</li></a><br>
                    <a class="btn btn-button texto-cor-custom menu-esq-botao"><li>Carnes e Embutidos</li></a><br>
                    <a class="btn btn-button texto-cor-custom menu-esq-botao"><li>Chocolate, Doces e Guloseimas</li></a><br>
                    <a class="btn btn-button texto-cor-custom menu-esq-botao"><li>Congelados</li></a><br>
                    <a class="btn btn-button texto-cor-custom menu-esq-botao"><li>Frios e Laticínios</li></a><br>
                    <a class="btn btn-button texto-cor-custom menu-esq-botao"><li>Horti-fruti</li></a><br>
                    <a class="btn btn-button texto-cor-custom menu-esq-botao"><li>Limpeza</li></a><br>
                    <a class="btn btn-button texto-cor-custom menu-esq-botao"><li>Padaria</li></a><br>
                    <a class="btn btn-button texto-cor-custom menu-esq-botao"><li>Vinhos, Cervejas e Destilados</li></a><br> -->
                    
                    <li>
                        <div class="checkbox">
                            <label class="form-check-label" for="itensPromocao">
                            <input class="form-check-input" type="checkbox" value="" id="itensPromocao">
                            Promoções
                            </label>
                        </div> 
                    </li>    
                </ul>
            </div>
            
        </div>
    </div>
</div>
<br>
<br>
<br>