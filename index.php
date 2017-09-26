<!DOCTYPE html>
<?php include ("php/conexao.php"); ?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Agenda Telefonica</title>
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        <div class="container" id="login" style="width: 400px; margin-top: 10%;">
            <form class="form-signin">
                <h2 class="form-signin-heading">Area de Login</h2>
                <label for="Email">E-mail</label>
                <input type="email" id="Email" class="form-control" placeholder="Digite seu endereço de E-mail" required autofocus>
                <label for="Password">Senha</label>
                <input type="password" id="Password" class="form-control" placeholder="Digite sua Senha" required>
                
                <br>
                <!--<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>-->
                <a href="painel.php" class="btn btn-lg btn-primary btn-block" >Entrar sem validar</a>
                <a href="registrar.php" class="btn btn-lg btn-primary btn-block" >Cadastrar</a>
            </form>
        </div>
    </body>
</html>
