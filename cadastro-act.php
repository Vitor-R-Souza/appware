<?php 

require_once('requires/connect.php');
require_once('requires/func.php');

extract($_POST);


echo $tipo;

$busca = $BD->query("SELECT * from `usuarios` where `email` = '$email'");
$buscaU = $BD->query("SELECT * from `usuarios` where `nome_usuario` = '$user'");

if($busca->num_rows != 0){

    if($tipo == 'Dev'){

        echo "<script>
            alert('E-mail já possui uma conta.');
            </script>";
            header("location:register-dev.php");
    }elseif($tipo == 'User'){
        echo "<script>
            alert('E-mail já possui uma conta.');
            </script>";
            header("location:register-user.php");
    }
    
}else if($buscaU->num_rows != 0){

    if($tipo == 'Dev'){

        $_SESSION['msg'] = msgError('nome de usuario já em uso.');
        header("location:register-dev.php");

    }elseif($tipo == 'User'){
        
        $_SESSION['msg'] = msgError('nome de usuario já em uso.');
        header("location:register-user.php");

    }

}else{

    $senhaF = gerarHash($senha);

    if($tipo == 'Dev'){

        $sql_cadastro=$BD->query("INSERT INTO `usuarios` (`id_usuario`, `nome`, `nome_usuario`, `email`, `tipos`, `data_nascimento`, `empresa`, `site_empresa`, `senha`, `icone`) VALUES (NULL, '$name', '$user', '$email', '$tipo', '$date', '$enterprise', '$sitedev', '$senhaF', '')");

        if($sql_cadastro == true){

            $_SESSION['user'] = $user;
            $_SESSION['tipo'] = $tipo;
            $_SESSION['senha'] = $senha;
            $_SESSION['email'] = $email;

            $_SESSION['msg'] = msgSucess('cadastrado com sucesso.');
            header("location:index.php");

        }else {

            $_SESSION['msg'] = msgError('erro ao cadastrar.');
            header("location:register-dev.php");

        }
    }else{

        $sql_cadastro=$BD->query("INSERT INTO `usuarios` (`id_usuario`, `nome`, `nome_usuario`, `email`, `tipos`, `data_nascimento`, `senha`, `icone`) VALUES (NULL, '$name', '$user', '$email', '$tipo', '$date', '$senhaF', '')");

        if($sql_cadastro == true){

            $_SESSION['user'] = $user;
            $_SESSION['tipo'] = $tipo;
            $_SESSION['senha'] = $senha;
            $_SESSION['email'] = $email;

            $_SESSION['msg'] = msgSucess('cadastrado com sucesso.');
            header("location:index.php");

        }else {

            $_SESSION['msg'] = msgError('erro ao cadastrar.');

            header("location:register-user.php");

        }


    }
}

?>