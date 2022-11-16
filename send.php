<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception; //recurso extra


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

    require_once('connect.php'); //conectar BD

    extract($_POST);//extraindo

    

    if(isset($_POST["bt"])){ //checando se foi enviado dados
        $mail = new PHPMailer(true);

        $senha = substr(md5(random_int(1, 999999)) ,0,6); //senha para o usuario
        $senhaF = substr(md5($senha),0,6) ; //senha no BD

        if(mysqli_query($con, "UPDATE `usuarios` SET `Senha` = '$senhaF' WHERE `Email` = '$user';")){ //update

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
            echo"<script>
                    alert('FOI CARALHO');
                    window.location.href='rec-senha.php'
                </script>";
        }else{
            echo"<script>
                    alert('FUDEU DEU ERRO');
                    window.location.href='rec-senha.php'
                </script>";
        }
        

        

    }


?>