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
    $_SESSION['tipo'] = $reg->tipos;
    $_SESSION['senha'] = $senha;
    $_SESSION['email'] = $reg->email;
    $_SESSION['icon'] = $reg->icone;
    
    
    header('location:index.php');

}else {
    $_SESSION['msg'] = msgError('usuario ou senha invalidos.');

    header("location:login.php");

}

?>