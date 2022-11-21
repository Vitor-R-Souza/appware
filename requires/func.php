<?php

@session_start();
if(!isset($_SESSION['user'])){
    $_SESSION['user'] = "";
    $_SESSION['tipo'] = "";
    $_SESSION['senha'] = "";
}

function thumb($foto){
    $arquivo = "mini-capas/$foto";
    if(is_null($foto) || !file_exists($arquivo)){
        return "indisponivel";
    }else{
        return $arquivo;
    }
}

function msgError($m){
    $r = "alert('$m');";
    return $r;
}

function msgAviso($m){
    $r = "alert('$m');";
    return $r;
}

function msgSucess($m){
    $r = "alert('$m');";
    return $r;
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

function logout(){
    $_SESSION['user'] = null;
    $_SESSION['tipo'] = null;
    $_SESSION['senha'] = null;
}

?>