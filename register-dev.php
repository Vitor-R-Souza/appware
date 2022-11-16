<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="estilos/register-dev.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
</head>

<body>
    <?php
        require_once('header.php');
    ?>
    <main>
        <form action="cadastro-act.php" method="post" class="signin" autocomplete="off">
            <h2>Cadastro de Desenvolvedor</h2>
            <div class="data-user">
                <div class="box-user">
                    <input type="text" name="name" id="name" class="required" oninput="nameValidate()" required>
                    <label for="name" class="label-error">Nome</label>
                    <span class="span-required">Nome deve ter no mínimo 3 caracteres</span>
                </div>
                <div class="box-user">
                    <input type="text" name="user" id="user" class="required" oninput="userValidate()" required>
                    <label for="user" class="label-error">Usuário</label>
                    <span class="span-required">Mínimo 5 caracteres e separação usar underline</span>
                </div>
            </div>
            <div class="data-user">
                <div class="box-user">
                    <input type="text" name="enterprise" id="enterprise" class="required" oninput="enterpriseValidate()" required>
                    <label for="enterprise" class="label-error">Empresa/Estúdio</label>
                    <span class="span-required">Nome deve ter no mínimo 3 caracteres</span>
                </div>
                <div class="box-user">
                    <input type="text" name="site-dev" id="site-dev" class="required" oninput="siteValidate()" required>
                    <label for="site-dev" class="label-error">Site ou Página da Empresa/Estúdio</label>
                    <span class="span-required">Site deve ter o endereço correto</span>
                </div>
            </div>
            <div class="data-user">
                <div class="box-user">
                    <input type="date" name="date" id="date" class="required" oninput="dateValidate()" required>
                    <label for="date" class="label-error" id="date">Data de Nascimento</label>
                    <span class="span-required">Coloque uma data válida</span>
                </div>
                <div class="box-user">
                    <input type="text" name="email" id="email" class="required" oninput="emailValidate()" required>
                    <label for="email" class="label-error">E-mail</label>
                    <span class="span-required">Digite um e-mail válido</span>
                </div>
            </div>
            <div class="data-user">
                <div class="box-user">
                    <input type="password" name="senha" id="senha" class="required" oninput="passwordValidate()" required>
                    <!-- <i class="fa-solid fa-eye" id="btn-eye"></i> -->
                    <label for="senha" class="label-error">Senha</label>
                    <img src="imagens/icon-eye-open.png" id="btn-eye">
                    <span class="span-required">Digite uma senha com no mínimo 8 caracteres</span>
                </div>
                <div class="box-user">
                    <input type="password" name="repeat-senha" id="repeat-senha" class="required" oninput="comparePassword()" required>
                    <label for="repeat-senha" class="label-error">Confirmar senha</label>
                    <img src="imagens/icon-eye-open.png" id="btn-eye2">
                    <span class="span-required">Senhas devem ser compatíveis</span>
                </div>
            </div>

            <div class="sign-up">
                <div class="check">
                    <input type="checkbox" name="connected" id="connected">
                    <span class="checkmark"></span>
                    <label for="connected" class="checkmark">Li e concordo com os <a href="#">Termos de Uso</a> e <a
                            href="#">Política de Privacidade</a></label>
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
    <script src="scripts/form-dev.js"></script>
</body>

</html>