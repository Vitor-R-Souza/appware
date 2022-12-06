<?php
    require_once('requires/connect.php');
    require_once('requires/func.php');
    
    extract($_POST);
    extract($_FILES);

    if($icon['name'] != ""){
    
        $url = "profilepic/".md5(time().$icon['name']).".jpg";
    
    }else{
    
        $url = "";
    
    }

    if(is_user()){
        if(!isset($senha)){
            $senhaF = gerarHash($senha);

            $BD->query("UPDATE `usuarios` SET `nome` = '$name', `nome_usuario` = '$user', `email` = '$email', `senha` = '$senhaF', `icone` = '$url' WHERE `usuarios`.`id_usuario` = $id");

            move_uploaded_file($icon['tmp_name'],$url);

            $_SESSION['user'] = $user;
            $_SESSION['senha'] = $senhaF;
            $_SESSION['email'] = $email;
            $_SESSION['icon'] = $url;

        }else{
            $BD->query("UPDATE `usuarios` SET `nome` = '$name', `nome_usuario` = '$user', `email` = '$email', `icone` = '$url' WHERE `usuarios`.`id_usuario` = $id");

            move_uploaded_file($icon['tmp_name'],$url);

            $_SESSION['user'] = $user;
            $_SESSION['senha'] = $senhaF;
            $_SESSION['email'] = $email;
            $_SESSION['icon'] = $url;
        }
        header("location:edit-profile.php");
    }else{
        if(!isset($senha)){
            $senhaF = gerarHash($senha);

            $BD->query("UPDATE `usuarios` SET `nome` = '$name', `nome_usuario` = '$user', `email` = '$email', `empresa` = '$enterprise', `site_empresa` = '$web', `senha` = '$senhaF', `icone` = '$url' WHERE `usuarios`.`id_usuario` = $id");

            move_uploaded_file($icon['tmp_name'],$url);

            $_SESSION['user'] = $user;
            $_SESSION['senha'] = $senhaF;
            $_SESSION['email'] = $email;
            $_SESSION['icon'] = $url;

        }else{
            $BD->query("UPDATE `usuarios` SET `nome` = '$name', `nome_usuario` = '$user', `email` = '$email', `empresa` = '$enterprise', `site_empresa` = '$web', `icone` = '$url' WHERE `usuarios`.`id_usuario` = $id");

            move_uploaded_file($icon['tmp_name'],$url);

            $_SESSION['user'] = $user;
            $_SESSION['senha'] = $senhaF;
            $_SESSION['email'] = $email;
            $_SESSION['icon'] = $url;

        }
        header("location:edit-profile.php");
    }
        

?>