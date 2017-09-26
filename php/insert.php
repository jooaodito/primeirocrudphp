<?php

    include ("conexao.php");
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $celular = $_POST['celular'];
    
    $result = "INSERT INTO usuario (email, senha, nome, celular) VALUES ('$email', '$senha', '$nome', '$celular')";
    $resultado= mysqli_query($mysqli,$result);
    
    if($resultado){
        echo "<script>location.href='../index.php'</script>";
    }
    else{
        echo "Cadastro não realizado";
    }
    
?>
