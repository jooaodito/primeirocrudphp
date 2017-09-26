<!DOCTYPE html>
<?php include ("php/conexao.php");
   
    $id = $_GET['id'];
    $consulta = "select * from usuario WHERE id = '$id'";
    $resultadouser = mysqli_query($mysqli, $consulta);
    $linha_user = mysqli_fetch_assoc($resultadouser);
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Editar</title>
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        <div class="container" id="Registra" style="width: 400px; margin-top: 10%;">
            <h2 class="form-signin-heading">Editar</h2>
            <form class="form-signin" action="php/editar.php" method="post">
                            <label style="margin-top: 5px;">Cod</label>
                            <input type="text" name="id" id="email" class="form-control" value="<?php echo $linha_user['id'];?>">
                            <label style="margin-top: 5px;">E-mail</label>
                            <input type="email" name="email" id="email" class="form-control" value="<?php echo $linha_user['email'];?>">
                            <label style="margin-top: 5px;">Senha</label>
                            <input type="text" name="senha" id="senha" class="form-control" value="<?php echo $linha_user['senha'];?>">
                            <label style="margin-top: 5px;">Nome</label>
                            <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $linha_user['nome'];?>">
                            <label style="margin-top: 5px;">Celular</label>
                            <input type="text" name="celular" id="celular" class="form-control" value="<?php echo $linha_user['celular'];?>">

                            <br>
                            <button type="submit" class="btn btn-lg btn-primary btn-block" >Alterar</button>
                        </form>
        </div>
    </body>
</html>