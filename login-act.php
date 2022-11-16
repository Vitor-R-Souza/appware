<?php

require_once('requires/connect.php');
session_start();

extract($_POST);

$senhaF = md5($senha);

$sql_login=$BD->query("SELECT * FROM usuarios WHERE nome_usuario='$user' and senha='$senhaF'");

if(mysqli_num_rows($sql_login) !=0){
   
    $_SESSION['logado_user'] = $usuario;
    $_SESSION['logado_senha'] = $senha;
    
    header('location:index.php');

}else {
    
    echo "<script>
    
    alert('Nome de usuário ou senha estão incorretos');
    window.location.href='login.php'

    </script>";

}

?>