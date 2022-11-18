<?php 

require_once('requires/connect.php');

extract($_POST);


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

    $senhaF = md5($senha);

    $sql_cadastro=$BD->query("INSERT INTO usuarios (nome, nome_usuario, data_nascimento, email, senha)
    VALUES ('$name', '$user', '$date', '$email', '$senhaF')");

    if($sql_cadastro == true){

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

?>