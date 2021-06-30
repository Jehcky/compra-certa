<!-- Centered Pills -->
<div class="container-fluid">
    <ul class="nav nav-pills nav-justified">
    <li class="active"><a data-toggle="tab" href="#meusDados">Meus Dados</a></li>
    <li><a data-toggle="tab" href="#meusEnderecos">Meus Endereços</a></li>
    <li><a data-toggle="tab" href="#meusPedidos">Meus Pedidos</a></li>
    </ul>

    <div class="tab-content">
        <div id="meusDados" class="tab-pane fade in active container">
            <br>
            <div class="panel-body">
            <form id="formcadastro" class="form-horizontal" title="Cadastro" action="#" method="POST" onsubmit="return validarFormulario(this);">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="nome">Nome:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nome" 
                            value="NOME COMPLETO" disabled=true;>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="cpf">CPF:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cpf" value="000000000-00" disabled=true;>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" value="EMAIL@EMAIL.EMAIL" disabled=true;>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="senha">Senha:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="senha"
                        value="PASSWORD" disabled=true;>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="form-group text-center col-sm-4"></div>
                    <div class="form-group text-center col-sm-2">
                        <div>
                            <a class="btn btn-default btn-danger" href="?pagina=perfil">Editar</a>
                        </div>
                    </div>
                    <div class="form-group text-center col-sm-2">
                        <div>
                            <a type="submit" class="btn btn-default btn-success" href="?pagina=perfil">Alterar</a>
                        </div>
                    </div>
                    <div class="form-group text-center col-sm-4"></div>
                </div>
            </form>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
        <div id="meusEnderecos" class="tab-pane fade">
            <br>
            <div class="container">
                <div class="row text-center">
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>ENDEREÇO 1</h3>
                                <p>Rua tal, nº 000, Centro, Salvador-BA</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="enderecoRadios" id="endereco1" checked>
                                    <label class="form-check-label" for="endereco1">
                                        Endereço principal
                                    </label>
                                </div>
                                <p><a href="#" data-toggle="modal" data-target="#enderecoModal" class="btn btn-primary" role="button">Editar</a> <a href="#" class="btn btn-danger" role="button">Excluir</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>ENDEREÇO 2</h3>
                                <p>Rua tal, nº 000, Centro, Salvador-BA</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="enderecoRadios" id="endereco2">
                                    <label class="form-check-label" for="endereco2">
                                        Endereço principal
                                    </label>
                                </div>
                                <p><a href="#" data-toggle="modal" data-target="#enderecoModal" class="btn btn-primary" role="button">Editar</a> <a href="#" class="btn btn-danger" role="button">Excluir</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>ENDEREÇO 3</h3>
                                <p>...</p>
                                <p><a href="#" class="btn btn-success" role="button">Cadastrar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
        <div id="meusPedidos" class="tab-pane fade">
            <br>
            <div class="container">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <div class="row" data-toggle="collapse" data-parent="#accordion" href="#pedido1">
                                    <div class="col-sm-4">
                                        <p>Pedido entregue</p>
                                    </div>
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-2 text-center">
                                        <p>21/03/2021</p>
                                    </div>
                                </div>
                            </h4>
                        </div>
                        <div id="pedido1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="col-md-4">
                                    <h5>Pedido 12-265387</h5>
                                        <p>2x Bistecas      R$ 24,00</p>
                                        <p>18x Pães         R$ 15,60</p>
                                        <p>1x Escova        R$  9,00</p>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4 text-center">
                                    <div class="row">
                                        <h4>TOTAL: R$ 48,60</h4>
                                        <br>
                                        <br>
                                        <h4>Avaliação: Muito bom!</h4>
                                        <p>obs: Muito bom, entrega rapido, tudo certinho, adorei!</p>
                                        <a class="btn btn-button btn-primary">Repetir pedido</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <div class="row" data-toggle="collapse" data-parent="#accordion" href="#pedido1">
                                    <div class="col-sm-4">
                                        <p>Pedido entregue</p>
                                    </div>
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-2 text-center">
                                        <p>01/04/2021</p>
                                    </div>
                                </div>
                            </h4>
                        </div>
                        <div id="pedido1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="col-md-4">
                                    <h5>Pedido 12-265351</h5>
                                        <p>2x Bistecas      R$ 24,00</p>
                                        <p>18x Pães         R$ 15,60</p>
                                        <p>1x Escova        R$  9,00</p>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4 text-center">
                                    <div class="row">
                                        <h4>TOTAL: R$ 48,60</h4>
                                        <br>
                                        <br>
                                        <br>
                                        <a class="btn btn-button btn-success" data-toggle="modal" data-target="#avaliacaoModal">Avaliar</a> <a class="btn btn-button btn-primary">Repetir pedido</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <div class="row" data-toggle="collapse" data-parent="#accordion" href="#pedido2">
                                    <div class="col-sm-4">
                                        <p>Pedido encaminhado</p>
                                    </div>
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-2 text-center">
                                        <p>12/03/2021</p>
                                    </div>
                                </div>
                            </h4>
                        </div>
                        <div id="pedido2" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="col-md-4">
                                    <h5>Pedido 12-265306</h5>
                                    <p>2x Bistecas      R$ 24,00</p>
                                    <p>18x Pães         R$ 15,60</p>
                                    <p>1x Escova        R$  9,00</p>
                                </div>
                                <div class="col-sm-4"></div>
                                <div class="col-md-4 text-center">
                                    <div class="row">
                                        <h4>TOTAL: R$ 48,60</h4>
                                        <br>
                                        <br>
                                        <br>
                                        <a class="btn btn-button btn-danger">Cancelar</a> <a class="btn btn-button btn-success">Rastreiar</a> <a class="btn btn-button btn-primary">Repetir pedido</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="enderecoModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">ENDEREÇO</h4>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
                <label for="inputAddress">Endereço</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Apartamento, hotel, casa, etc.">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Cidade</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEstado">Estado</label>
                    <label for="inputEstado">Cidade</label>
                    <input type="text" class="form-control" id="inputState">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputCEP">CEP</label>
                    <input type="text" class="form-control" id="inputCEP">
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Endereço Principal
                </label>
                </div>
            </div>
            <a class="btn btn-block btn-danger" href="?pagina=perfil">Cancelar</a> <a type="submit" class="btn btn-block btn-success" href="?pagina=perfil">Salvar</a>
        </form>
      </div>
    </div>

    <!-- Modal -->
    <div id="avaliacaoModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">AVALIAÇÃO</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <select name="Avaliacao" class="form-control">
                            <option selected>Escolha o endereço</option>
                            <option value="avaliacao1">Ruim</option>
                            <option value="avaliacao2">Bom</option>
                            <option value="avaliacao3">Muito bom</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Observações</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                    <a class="btn btn-block btn-danger" href="#">Cancelar</a> <a type="submit" class="btn btn-block btn-success" href="#">Salvar</a>
                </form>
            </div>
        </div>
    </div>