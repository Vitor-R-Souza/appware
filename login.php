<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilos/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php
        require_once('requires/connect.php');
        require_once('requires/func.php');
        require_once('header.php');
    ?>
    <main>
        <form action="login-act.php" method="post" class="login">
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
                <div class="new-senha"><a href="rec-senha.php">Esqueceu a senha?</a></div>
            </div>
            <div class="login-sign">
                <div>
                    <input type="submit" value="Entrar" id="btn">
                </div>
                <div>
                    <p id="sign-in">Não tem uma conta? <a href="pre-register.php">Cadastrar agora</a></p>
                </div>
            </div>
        </form>
    </main>
    <?php
        require_once('footer.php');
    ?>
    <script src="scripts/mobile-navbar.js"></script>
</body>
</html>