<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception; //recurso extra


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

    require_once('requires/connect.php'); //conectar BD
    require_once('requires/func.php');

    extract($_POST);//extraindo

    

    if(isset($_POST["bt"])){ //checando se foi enviado dados
        $mail = new PHPMailer(true);

        $senha = substr(md5(random_int(1, 999999)) ,0,6); //senha para o usuario
        $senhaF = gerarHash($senha); //senha no BD

        if($BD->query("UPDATE `usuarios` SET `Senha` = '$senhaF' WHERE `email` = '$user';")){ //update

            //todo o role do email
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'technology.ldr@gmail.com';
            $mail->Password = 'jfsgfkdlhstzrqxj';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom('technology.ldr@gmail.com');
            $mail->addAddress($user);
            $mail->isHTML(true);
            $mail->Subject = "recuperar senha";
            $mail->Body = "Essa é sua nova senha nova, recomendamos trocar assim que efetuar o login: " .$senha;

            $mail->send(); //enviando o email
            $_SESSION['msg'] = msgSucess('senha restaurada, cheque seu email.');
            header("location:rec-senha.php");
        }else{
            $_SESSION['msg'] = msgError('ocorreu um erro.');
            header("location:rec-senha.php");
        }
        

        

    }


?>