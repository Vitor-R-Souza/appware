<?php
    require_once('requires/connect.php');
    require_once('requires/func.php');
    
    extract($_POST);

    if(is_user()){
        if(!isset($senha)){
            $senhaF = gerarHash($senha);

            $BD->query("UPDATE `usuarios` SET `nome` = '$name', `nome_usuario` = '$user', `email` = '$email', `senha` = '$senhaF' WHERE `usuarios`.`id_usuario` = $id");
        }else{
            $BD->query("UPDATE `usuarios` SET `nome` = '$name', `nome_usuario` = '$user', `email` = '$email' WHERE `usuarios`.`id_usuario` = $id");
        }
        header("location:edit-profile.php");
    }else{
        if(!isset($senha)){
            $senhaF = gerarHash($senha);

            $BD->query("UPDATE `usuarios` SET `nome` = '$name', `nome_usuario` = '$user', `email` = '$email', `empresa` = '$enterprise', `site_empresa` = '$site', `senha` = '$senhaF' WHERE `usuarios`.`id_usuario` = $id");
        }else{
            $BD->query("UPDATE `usuarios` SET `nome` = '$name', `nome_usuario` = '$user', `email` = '$email', `empresa` = '$enterprise', `site_empresa` = '$site' WHERE `usuarios`.`id_usuario` = $id");
        }
        header("location:edit-profile.php");
    }
        

?>