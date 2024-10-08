<div class="text-center"><h3>CARRINHO</h3></div>
<div class="container">
    <div class="row">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th class="text-left">Produto</th>
                        <th class="text-center">Quantidade</th>
                        <th class="text-right">Preço</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($itensCarrinho as $item): ?>
                    <tr>
                        <td><img src="<?php echo $item->getProduto()->getTxImgUrl(); ?>" style="width:auto;height:75px;"> </td>
                        <td><?php echo $item->getProduto()->getTxNomeproduto(); ?></td>
                        <td class="text-center">
                        <form action="index.php?pagina=carrinho_alt_quant" method="post">
                            <input type="hidden" name="id" value="<?php echo $item->getProduto()->getIdProduto(); ?>">
                            <input type="text" name="quantidade" value="<?php echo $item->getQuantidade(); ?>" size="1" ><br>
                            <button type="submit" class="btn btn-sm btn-danger">Alterar</button>
                        </form>
                        </td>
                        <td class="text-right">R$ <?php echo number_format($item->getProduto()->getPreco() * $item->getQuantidade(),2,',','.');?></td>
                        <td>
                        <form method="post" action="index.php?pagina=apaga_item_carrinho">
                            <input type="hidden" name="id" value="<?php echo $item->getProduto()->getIdProduto(); ?>">
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                        </form>
                         </td>
                    </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><strong>Total</strong></td>
                        <td class="text-right"><strong>R$ <?php echo number_format($carrinho->getTotal(),2,',','.'); ?></strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col mb-2">
        <div class="row">
            <div class="col-sm-12  col-md-6">
                
            </div>
            <div class="col-sm-12 col-md-6 text-right">
                <a class="btn btn-lg btn-block text-uppercase panel-button-comprar" href="?pagina=pagamento">FAZER PAGAMENTO</a>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
</body>

</html>