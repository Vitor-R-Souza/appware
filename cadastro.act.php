<?php 

require_once('connect.php');

extract($_POST);

$busca = mysqli_query($con,"SELECT * from `usuarios` where `email` = '$email'");
$buscaU = mysqli_query($con,"SELECT * from `usuarios` where `nome_usuario` = '$user'");

if($busca->num_rows != 0){

    echo "<script>
    
        alert('E-mail já possui uma conta.');
        window.location.href='register-user.html'

        </script>"; 

    
}else if($buscaU->num_rows != 0){

    echo "<script>
    
    alert('nome de usuário já em uso.');
    window.location.href='register-user.html'

    </script>"; 


}else{

    $sql_cadastro=mysqli_query( $con, "INSERT INTO usuarios (nome, nome_usuario, data_nascimento, email, senha)
    VALUES ('$nameUser', '$user', '$date', '$email', '$senha')");

    if($sql_cadastro == true){

        echo "<script>
    
        alert('Usuário cadastrado com Sucesso');
        window.location.href='register-user.html'

        </script>"; 

    }else {

        echo "<script>
    
        alert('Falha no Cadastro');
        window.location.href='cadastro.php'

        </script>";

    }
}

?>