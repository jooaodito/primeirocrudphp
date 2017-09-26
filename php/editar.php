<?php

include ("conexao.php");

$idd = $_POST['id'];
$alteremail = $_POST['email'];
$altersenha = $_POST['senha'];
$alternome = $_POST['nome'];
$altercelular = $_POST['celular'];

$alter = "UPDATE usuario SET email = '$alteremail', senha = '$altersenha', nome = '$alternome', celular = '$altercelular' WHERE id = '$idd'";
$execalter = mysqli_query($mysqli, $alter);

if($execalter){
  echo "<script>location.href='../painel.php'</script>";
}
else{
        echo "Cadastro não realizado";
}

