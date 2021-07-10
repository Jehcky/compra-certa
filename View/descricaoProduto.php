<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-6 text-center">
                <img src="<?php echo $produto->getTxImgUrl();?>" style="width:500px;height:500px;"> 
                </div>
                <div class="col-sm-6">
                    <br>
                    <br>
                    <h2><?php echo $produto->getTxNomeProduto();?></h2>
                    <br>
                    <p><?php echo $produto->getTxDescricao();?></p>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
                <br><br><br><br>
                <?php if($produto->getFlPromocao() == 1){?>
                de: R$ <?php echo number_format($produto->getVlPreco(),2,',','.') . " por:"; ?>
                <?php } ?>
                <h1 class="text-right">R$ <?php echo number_format($produto->getPreco(),2,',','.');?></h1>
                <h3 class="text-center">QUANTIDADE:</h3>
            <br>
            <form method="post" action="index.php?pagina=add_item_carrinho" >
                <div class="form-group text-center">
                <input type="number" name="quantidade" id="quantidade" class="form-control" min="1" max="100" value="1">
                </div>
                <br>
                <br>
                <input type="hidden" name="id" value="<?php echo $produto->getIdProduto();?>">
                <input type="submit" class="btn btn-block panel-button-comprar" value= "ADICIONAR AO CARRINHO">
            </form>
        </div>
    </div>
</div>
<br>
<br>
<br>