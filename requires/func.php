<?php

session_start();

if(!isset($_SESSION['user'])){
    $_SESSION['user'] = "";
    $_SESSION['nome'] = "";
    $_SESSION['tipo'] = "";
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