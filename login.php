<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilos/login.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
    <?php
        require('header.php');
    ?>
    <main>
        <form action="#" class="login">
            <h2>Login</h2> 
            <div class="box-user">
                <input type="text" name="user" id="user" required>
                <label for="user">Usuário</label>
            </div>
            <div class="box-user">
                <input type="password" name="senha" id="senha" required>
                <label for="">Senha</label>
            </div>

            <div class="connected-remember">
                <div class="check">
                    <input type="checkbox" name="connected" id="connected">
                    <span class="checkmark"></span>
                    <label for="connected" class="checkmark">Lembrar-me</label>
                </div>
                <div class="new-senha"><a href="#">Esqueceu a senha?</a></div>
            </div>
            <div class="login-sign">
                <div>
                    <input type="submit" value="Entrar" id="btn">
                </div>
                <div>
                    <p id="sign-in">Não tem uma conta? <a href="pre-register.html">Cadastrar agora</a></p>
                </div>
            </div>
        </form>
    </main>
    <script src="scripts/mobile-navbar.js"></script>
</body>
</html>