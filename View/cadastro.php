<!DOCTYPE html>
<html lang="pt-br">

    <script>
        function validarFormulario(form) {
            if (form["nome"].value == "") {
                form["nome"].focus();
                alert("Preencha seu nome completo.");
                return false;
            }
            if (form["cpf"].value == "") {
                form["cpf"].focus();
                alert("Preencha seu CPF.");
                return false;
            }
            if (form["email"].value == "") {
                form["email"].focus();
                alert("Preencha seu E-mail.");
                return false;
            }
            if (form["senha"].value == "") {
                if (form["confirmasenha"].value != "") {
                    form["confirmasenha"].value = "";
                }
                form["senha"].focus();
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

            alert("Cadastro realizado com sucesso!");
            return true;
        }
    </script>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading text-center"><h3>CADASTRO</h3></div>
                    <div class="panel-body">
                        <form id="formcadastro" class="form-horizontal" title="Cadastro" action="../Controller/Cliente/IncluirClienteController.php?acao=inserir" method="POST"
                            onsubmit="return validarFormulario(this);">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="nome">Nome:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nome" 
                                        placeholder="Digite seu Nome Completo">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="cpf">CPF:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="cpf" placeholder="Digite seu CPF">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="senha">Senha:</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="senha"
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
                                        <label class="form-check-label" for="checkboxpromo">
                                            <input class="form-check-input" type="checkbox" id="checkboxpromo">Desejo receber promoções e novidades da
                                            Loja
                                            via
                                            e-mail</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <div>
                                    <a type="submit" class="btn btn-default panel-button-comprar" href="?pagina=perfil">Cadastrar</a>
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