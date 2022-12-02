<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pré-Cadastro</title>
    <link rel="stylesheet" href="estilos/pre-register.css">
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
        <section class="pre-form">
            <h2>Pré-Cadastro</h2>
            <div class="text-apresentation">
                <p>Bem-vindo! Aqui você irá definir se irá se cadastrar como um usuário comum, ou em caso de desenvolvedor, utilize o modo Dev.</p>
            </div>
            <div class="switch-btn">
                <div class="toggle">
                    <!-- <span class="onoff">OFF</span> -->
                    <input type="checkbox" id="foo">
                    <label for="foo" onclick="switchToggle()"></label>
                </div>
            </div>
            <div class="text-apresentation mode-dev-user">
                <h3 id="mode" class="mode">Modo Usuário</h3>
                <p id="text-mode">Nesse modo você poderá analisar a compatibilidade de todos os jogos.</p>
            </div>
            <div class="next-btn">
                <a href="register-user.php" id="btnNextRegister"><input type="button" value="Próximo"></a>
            </div>
        </section>
    </main>
    <?php
        require_once('footer.php');
    ?>
    <script type="text/javascript" src="scripts/alterate-text.js"></script>
</body>

</html>