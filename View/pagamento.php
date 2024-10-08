
<script type="text/javascript" src="View/js/pagamento.js"></script>

<div class="container">
    <div class="row">
        <div class="col-md-8">
          <h4 class="mb-3">Endereço de cobrança</h4>
          <form class="needs-validation was-validated" novalidate="" action="/Compra-Certa/index.php?pagina=finaliza" method="post">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="primeiroNome">Nome</label>
                <input type="text" class="form-control" id="primeiroNome" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  É obrigatório inserir um nome válido.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" class="form-control" id="sobrenome" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  É obrigatório inserir um sobre nome válido.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Opcional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="fulano@exemplo.com">
              <div class="invalid-feedback">
                Por favor, insira um endereço de e-mail válido, para atualizações de entrega.
              </div>
            </div>

            <br>
            <div class="mb-3">
                <select id="enderecoSelect" name="enderecoSelect" class="form-control" onchange="enderecoSelectHandler()">
                    <option selected value='0'>Escolha o endereço</option>
                    <option value="endereco1">Endereço cadastrado 1</option>
                    <option value="endereco2">Endereço cadastrado 2</option>
                    <option value="endereco3">Endereço cadastrado 3</option>
                </select>
              <div class="invalid-feedback">
                Por favor, insira seu endereço de entrega.
              </div>
            </div>

            <div class="mb-3" id='enderecoInput'>
              <label for="endereco">Endereço</label>
              <input type="text" class="form-control" id="endereco" placeholder="Rua dos bobos, nº 0" required="">
              <div class="invalid-feedback">
                Por favor, insira seu endereço de cobrança.
              </div>
            </div>

            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="mesmo-endereco">
              <label class="custom-control-label" for="mesmo-endereco">Endereço de entrega é o mesmo que o de cobrança.</label>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Pagamento</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credito" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                <label class="custom-control-label" for="credito">Cartão de crédito</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debito" name="paymentMethod" type="radio" class="custom-control-input" required="">
                <label class="custom-control-label" for="debito">Cartão de débito</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-nome">Nome no cartão</label>
                <input type="text" class="form-control" id="cc-nome" placeholder="" required="">
                <small class="text-muted">Nome completo, como mostrado no cartão.</small>
                <div class="invalid-feedback">
                  O nome que está no cartão é obrigatório.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-numero">Número do cartão de crédito</label>
                <input type="text" class="form-control" id="cc-numero" placeholder="" required="">
                <div class="invalid-feedback">
                  O número do cartão de crédito é obrigatório.
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiracao">Data de expiração</label>
                <input type="text" class="form-control" id="cc-expiracao" placeholder="" required="">
                <div class="invalid-feedback">
                  Data de expiração é obrigatória.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-cvv">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                <div class="invalid-feedback">
                  Código de segurança é obrigatório.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-success btn-lg btn-block" type="submit" href="?pagina=home">Efetuar Pagamento</button>
          </form>
        </div>

        <div class="col-md-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Seu carrinho</span>
            <span class="badge badge-secondary badge-pill"><?php echo count($itensCarrinho);?></span>
          </h4>
          <ul class="list-group mb-3">
            <?php foreach($itensCarrinho as $item) {?>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0"><?php echo $item->getProduto()->getTxNomeproduto(); ?></h6>
                <small class="text-muted">Quantidade: <?php echo $item->getQuantidade(); ?></small>
              </div>
              <span class="text-muted">R$ <?php echo number_format($item->getProduto()->getPreco() * $item->getQuantidade(),2,',','.');?></span>
            </li>
            <?php } ?>
              <span>Total </span>
              <strong>R$ <?php echo number_format($carrinho->getTotal(),2,',','.'); ?></strong>
            </li>
          </ul>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
</div>