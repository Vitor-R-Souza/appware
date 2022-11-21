<?php

session_start();

if(!isset($_SESSION['user'])){
    $_SESSION['user'] = "";
    $_SESSION['nome'] = "";
    $_SESSION['tipos'] = "";
}


// gerar hash de senhas e testar
function gerarHash($senha){ // gerar
    $hash = password_hash($senha, PASSWORD_DEFAULT);
    return $hash;
}

function testarS($senha , $hash){ // teste
    $ok = password_verify($senha, $hash);
    return $ok;
}

function logout(){
    unset($_SESSION['nome_usuario']);
    unset($_SESSION['nome']);
    unset($_SESSION['tipos']);
}

function is_logado(){
    if(empty($_SESSION['nome_usuario'])){
        return false;
    } else{
        return true;
    }
}

function voltar(){
    return "<a href='index.php'></a>";
}

// verificar tipos de contas
function is_adm(){ //admin
    $t = $_SESSION['tipos'] ?? null;
    if(is_null($t)){
        return false;
    }elseif($t == 'Admin'){
        return true;
    }else{
        return false;
    }
}

function is_dev(){ // dev
    $t = $_SESSION['tipos'] ?? null;
    if(is_null($t)){
        return false;
    }elseif($t == 'Dev'){
        return true;
    }else{
        return false;
    }
}

function is_user(){ // user
    $t = $_SESSION['tipos'] ?? null;
    if(is_null($t)){
        return false;
    }elseif($t == 'User'){
        return true;
    }else{
        return false;
    }
}

?>