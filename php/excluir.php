<?php

include ("conexao.php");

if(mysqli_connect_errno($mysqli)){
    echo 'Erro de conexão!';
}
 else {
     
     $id = $_GET['id'];
     
     $selectexcluir = "DELETE FROM usuario WHERE id = '$id'";
     $execexcluir = mysqli_query($mysqli, $selectexcluir);
     
     if($execexcluir){
         echo "<script>location.href='../painel.php'</script>";
     }
}