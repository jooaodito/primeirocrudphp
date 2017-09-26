<!DOCTYPE html>
<?php include ("php/conexao.php");

    $consulta = "select * from usuario";
    $con = $mysqli->query($consulta) or die ($mysqli->error);
           
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Painel</title>
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        <div class="container" id="Painel" style="width: 90%; margin-top: 2%;">
            <h1>Painel de Controle</h1>
            <div style="margin-left: 93%; margin-bottom: 10px;">
                <a href="painel.php" class="btn btn btn-warning" type="button" name="atualizar">Atualizar</a>
            </div>
            <table class="table table-bordered">
                <thead>
                  <tr>
                      <th><h5>Codigo</h5></th>
                      <th><h5>Email</h5></th>
                      <th><h5>Senha</h5></th>
                      <th><h5>Nome</h5></th>
                      <th><h5>Celular</h5></th>
                      <th><h5>Funções</h5></th>
                  </tr>
                </thead>
                <tbody>
                 <?php while($dado = $con->fetch_array()){?>
                  <tr>
                    <td><?php echo $dado["id"]; ?></td>
                    <td><?php echo $dado["email"]; ?></td>
                    <td><?php echo $dado["senha"]; ?></td>
                    <td><?php echo $dado["nome"]; ?></td>
                    <td><?php echo $dado["celular"]; ?></td>
                    <td><a class="btn btn btn-default" href="editar.php?id=<?php echo $dado['id']?>" name="editar">Editar</a>
                        <a class="btn btn btn-danger" href="php/excluir.php?id=<?php echo $dado['id']; ?>">Excluir</a></td>
                  </tr>
                 <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
