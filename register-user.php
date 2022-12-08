<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="estilos/register-user.css">
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
        <form action="cadastro-act.php" method="post" class="signin" autocomplete="off">
            <h2>Cadastro de Usuário</h2>
            <div class="data-user">
                <input type="hidden" name="tipo" value="User">
                <div class="box-user">
                    <input type="text" name="name" id="nameUser" class="required" oninput="nameValidate()" required>
                    <label for="nameUser" class="label-error">Nome</label>
                    <span class="span-required">Nome deve ter no mínimo 3 caracteres</span>
                    <!-- <i><img class="img-success" src="imagens/success-icon.svg" alt=""></i> -->
                    <!-- <i><img class="img-error" src="imagens/error-icon.svg" alt=""></i> -->
                    <!-- <small>Error message</small> -->
                </div>
                <div class="box-user">
                    <input type="text" name="user" id="user" class="required" oninput="userValidate()" required>
                    <label for="user" class="label-error">Usuário</label>
                    <span class="span-required">Mínimo 5 caracteres e separação usar underline</span>
                    <!-- <i><img class="img-success" src="imagens/success-icon.svg" alt=""></i> -->
                    <!-- <i><img class="img-error" src="imagens/error-icon.svg" alt=""></i> -->
                    <!-- <small>Error message</small> -->
                </div>
            </div>
            <div class="data-user">
                <div class="box-user">
                    <input type="date" name="date" id="date" class="required" oninput="dateValidate()" required>
                    <label for="date" id="date" class="label-error">Data de Nascimento</label>
                    <span class="span-required">Coloque uma data válida</span>
                    <!-- <i><img class="img-success" src="imagens/success-icon.svg" alt=""></i> -->
                    <!-- <i><img class="img-error" src="imagens/error-icon.svg" alt=""></i> -->
                    <!-- <small>Error message</small> -->
                </div>
                <div class="box-user">
                    <input type="text" name="email" id="email" class="required" oninput="emailValidate()" required>
                    <label for="email" class="label-error">E-mail</label>
                    <span class="span-required">Digite um e-mail válido</span>
                    <!-- <i><img class="img-success" src="imagens/success-icon.svg" alt=""></i> -->
                    <!-- <i><img class="img-error" src="imagens/error-icon.svg" alt=""></i> -->
                    <!-- <small>Error message</small> -->
                </div>
            </div>
            <div class="data-user">
                <div class="box-user">
                    <input type="password" name="senha" id="senha" class="required" oninput="passwordValidate()" required>
                    <label for="senha" class="label-error">Senha</label>
                    <span class="span-required">Digite uma senha com no mínimo 8 caracteres</span>
                    <img src="imagens/icon-eye-open.png" id="btn-eye">
                    <!-- <i><img class="img-success" src="imagens/success-icon.svg" alt=""></i> -->
                    <!-- <i><img class="img-error" src="imagens/error-icon.svg" alt=""></i> -->
                    <!-- <small>Error message</small> -->
                </div>
                <div class="box-user">
                    <input type="password" name="repeat-senha" id="repeat-senha" class="required" oninput="comparePassword()" required>
                    <label for="repeat-senha" class="label-error">Confirmar senha</label>
                    <span class="span-required">Senhas devem ser compatíveis</span>
                    <img src="imagens/icon-eye-open.png" id="btn-eye2">
                    <!-- <i><img class="img-success" src="imagens/success-icon.svg" alt=""></i> -->
                    <!-- <i><img class="img-error" src="imagens/error-icon.svg" alt=""></i> -->
                    <!-- <small>Error message</small> -->
                </div>
            </div>

            <div class="sign-up">
                <div class="check">
                    <input type="checkbox" name="connected" id="connected" required>
                    <span class="checkmark"></span>
                    <label for="connected" class="checkmark">Li e concordo com os <a href="terms.php">Termos de Uso</a> e <a
                            href="politic-privacy.php">Política de Privacidade</a></label>
                </div>
                <div>
                    <input type="submit" value="Cadastrar" id="btn">
                </div>
                <div>
                    <p id="sign-in">Já tem uma conta? <a href="login.php">Entrar agora</a> ou <a href="pre-register.php">Voltar</a></p>
                </div>
            </div>
        </form>
    </main>
    <?php
        require_once('footer.php');
    ?>
    <script src="scripts/form-user.js"></script>
</body>

</html>