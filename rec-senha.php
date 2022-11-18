<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar senha</title>
    <link rel="stylesheet" href="estilos/rec-senha.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <?php
        require('header.php');
        require_once('requires/connect.php');
        require_once('requires/func.php');
    ?>
    <main>
        <form action="send.php" method="post" class="login">
            <h2>Recuperar senha</h2>
            <p>Digite o e-mail na qual vinculou sua senha para enviarmos a nova senha de sua conta.</p> 
            <div class="box-user">
                <input type="text" name="user" id="user" required>
                <label for="user">E-mail</label>
            </div>
            <div class="login-sign">
                <div>
                    <input type="submit" value="Enviar" id="btn" name="bt">
                </div>
                <div>
                    <p id="sign-in">Lembrou da senha? <a href="login.php">Entrar agora</a></p>
                </div>
            </div>
        </form>
    </main>
    <script src="scripts/mobile-navbar.js"></script>
</body>
</html>