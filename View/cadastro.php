<!DOCTYPE html>
<html lang="pt-br">

    <script>
        function validarFormulario(form) {
            console.log('entrou');
            if (form["txNomeCliente"].value == "") {
                form["txNomeCliente"].focus();
                alert("Preencha seu nome completo.");
                return false;
            }
            if (form["txCPF"].value == "") {
                form["txCPF"].focus();
                alert("Preencha seu CPF.");
                return false;
            }
            if (form["txEmail"].value == "") {
                form["txEmail"].focus();
                alert("Preencha seu E-mail.");
                return false;
            }
            if (form["txLogin"].value == "") {
                form["txLogin"].focus();
                alert("Preencha seu nome de Login.");
                return false;
            }
            if (form["txSenha"].value == "") {
                if (form["confirmasenha"].value != "") {
                    form["confirmasenha"].value = "";
                }
                form["txSenha"].focus();
                alert("Senha não preenchida. Preencha novamente a sua senha e a confirmação.");
                return false;
            }
            if (form["confirmasenha"].value == "") {
                form["senha"].value = "";
                form["confirmasenha"].value = "";
                form["senha"].focus();
                alert("Confirmação não preenchida. Preencha novamente a sua senha e a confirmação.");
                return false;
            }

            //alert("Cadastro realizado com sucesso!");
            return true;
        }
    </script>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading text-center"><h3>CADASTRO</h3></div>
                    <div class="panel-body">
                        <form id="formcadastro" class="form-horizontal" title="Cadastro" action="index.php?acao=inserir_cliente" method="POST"
                            onsubmit="return validarFormulario(this);">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="txNomeCliente">Nome Completo:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="txNomeCliente" name="txNomeCliente"
                                        placeholder="Digite seu Nome Completo">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="txCPF">CPF:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="txCPF" name="txCPF" placeholder="Digite seu CPF">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="txEmail">Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="txEmail" name="txEmail" placeholder="Digite seu e-mail">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="txLogin">Login:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="txLogin" name="txLogin" placeholder="Digite seu nome de Login">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="txSenha">Senha:</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="txSenha" name="txSenha"
                                        placeholder="Digite sua senha">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="confirmasenha">Confirme sua senha:</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="confirmasenha"
                                        placeholder="Confirme sua senha">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-12">
                                    <div class="checkbox">
                                        <label class="form-check-label" for="flReceberEmail">
                                            <input class="form-check-input" type="checkbox" id="flReceberEmail" name="flReceberEmail">Desejo receber promoções e novidades da
                                            Loja
                                            via
                                            e-mail</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <div>
                                    <button type="submit" class="btn btn-default panel-button-comprar" >Cadastrar</a>
                                    <!-- <a type="submit" class="btn btn-default panel-button-comprar" href="?pagina=perfil">Cadastrar</a> -->
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="panel-footer"></div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
</body>

</html>