<?php 

require_once('requires/connect.php');
require_once('requires/func.php');

extract($_POST);


echo $tipo;

$busca = $BD->query("SELECT * from `usuarios` where `email` = '$email'");
$buscaU = $BD->query("SELECT * from `usuarios` where `nome_usuario` = '$user'");

if($busca->num_rows != 0){

    echo "<script>
    
        alert('E-mail já possui uma conta.');
        window.location.href='window.location.href='register-dev.php'

        </script>"; 

    
}else if($buscaU->num_rows != 0){

    echo "<script>
    
    alert('nome de usuário já em uso.');
    window.location.href='window.location.href='register-dev.php'

    </script>"; 


}else{

    $senhaF = gerarHash($senha);

    if($tipo == 'Dev'){

        $sql_cadastro=$BD->query("INSERT INTO `usuarios` (`id_usuario`, `nome`, `nome_usuario`, `email`, `tipos`, `data_nascimento`, `empresa`, `site_empresa`, `senha`, `icone`) VALUES (NULL, '$name', '$user', '$email', '$tipo', '$date', '$enterprise', '$sitedev', '$senhaF', '')");

        if($sql_cadastro == true){

            $_SESSION['user'] = $user;
            $_SESSION['tipo'] = $tipo;
            $_SESSION['senha'] = $senha;

            echo "<script>
        
            alert('Usuário cadastrado com Sucesso');
            window.location.href='index.php'

            </script>"; 

        }else {

            echo "<script>
        
            alert('Falha no Cadastro');
            window.location.href='register-dev.php'


            </script>";

        }
    }else{

        $sql_cadastro=$BD->query("INSERT INTO `usuarios` (`id_usuario`, `nome`, `nome_usuario`, `email`, `tipos`, `data_nascimento`, `senha`, `icone`) VALUES (NULL, '$name', '$user', '$email', '$tipo', '$date', '$senhaF', '')");

        if($sql_cadastro == true){

            $_SESSION['user'] = $user;
            $_SESSION['tipo'] = $tipo;
            $_SESSION['senha'] = $senha;

            echo "<script>
        
            alert('Usuário cadastrado com Sucesso');
            window.location.href='index.php'

            </script>"; 

        }else {

            echo "<script>
        
            alert('Falha no Cadastro');
            window.location.href='register-dev.php'


            </script>";

        }


    }
}

?>