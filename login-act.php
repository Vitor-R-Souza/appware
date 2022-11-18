<?php

require_once('requires/connect.php');
require_once('requires/func.php');

session_start();

extract($_POST);

$senhaF = gerarHash($senha);

$sql_login=$BD->query("SELECT * FROM usuarios WHERE nome_usuario='$user' and senha='$senhaF'");

if(mysqli_num_rows($sql_login) !=0){
   
    $_SESSION['user'] = $usuario;
    $_SESSION['senha'] = $senha;
    
    header('location:index.php');

}else {
    
    echo "<script>
    
    alert('Nome de usuário ou senha estão incorretos');
    window.location.href='login.php'

    </script>";

}

?>