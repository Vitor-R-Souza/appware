<?php

require_once('requires/connect.php');
require_once('requires/func.php');

@session_start();

extract($_POST);

$senhaF = gerarHash($senha);

$busc = $BD->query("SELECT * FROM usuarios WHERE nome_usuario='$user' LIMIT 1");

$reg = $busc->fetch_object();

if(testarS($senha, $reg->senha)){
   
    $_SESSION['user'] = $user;
    $_SESSION['senha'] = $senha;
    
    header('location:index.php');

}else {
    
    echo "<script>
    
    alert('Nome de usuário ou senha estão incorretos');
    window.location.href='login.php'

    </script>";

}

?>