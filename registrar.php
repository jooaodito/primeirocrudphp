<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Registrar</title>
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        <div class="container" id="Registra" style="width: 400px; margin-top: 10%;">
            <h2 class="form-signin-heading">Registrar-se</h2>
            <form class="form-signin" action="php/insert.php" method="post">
                            <label style="margin-top: 5px;">E-mail</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu endereço de E-mail">
                            <label style="margin-top: 5px;">Senha</label>
                            <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite sua Senha">
                            <label style="margin-top: 5px;">Nome</label>
                            <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite seu nome">
                            <label style="margin-top: 5px;">Celular</label>
                            <input type="text" name="celular" id="celular" class="form-control" placeholder="Digite seu Nº de Cell">

                            <br>
                            <input type="submit" class="btn btn-lg btn-primary btn-block" name="btnCad" value="Cadastrar">
                        </form>
        </div>
    </body>
</html>
