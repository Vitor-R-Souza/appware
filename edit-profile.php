<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="estilos/edit-profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
</head>

<body>
    <?php
        require_once('requires/connect.php');
        require_once('requires/func.php');
    ?>
    <main>
        <form action="cadastro-act.php" method="post" class="signin" autocomplete="off">
        <input type="hidden" name="tipo" value="Dev">
            <h2>Atualizar informações</h2>
            <div class="data-user">
                <div class="box-user">
                    <input type="text" name="name" id="name" class="required" oninput="nameValidate()" required placeholder="Novo nome">
                    <!-- <label for="name" class="label-error">Nome</label> -->
                    <span class="span-required">Nome deve ter no mínimo 3 caracteres</span>
                </div>
                <div class="box-user">
                    <input type="text" name="user" id="user" class="required" oninput="userValidate()" required placeholder="Novo usuário">
                    <!-- <label for="user" class="label-error">Usuário</label> -->
                    <span class="span-required">Mínimo 5 caracteres e separação usar underline</span>
                </div>
            </div>
            <div class="data-user">
                <div class="box-user">
                    <input type="text" name="enterprise" id="enterprise" class="required" oninput="enterpriseValidate()" required placeholder="Empresa/Estúdio">
                    <!-- <label for="enterprise" class="label-error">Empresa/Estúdio</label> -->
                    <span class="span-required">Nome deve ter no mínimo 3 caracteres</span>
                </div>
                <div class="box-user">
                    <input type="text" name="site-dev" id="site-dev" class="required" oninput="siteValidate()" required placeholder="Site/Página da Empresa/Estúdio">
                    <!-- <label for="site-dev" class="label-error">Site ou Página da Empresa/Estúdio</label> -->
                    <span class="span-required">Site deve ter o endereço correto</span>
                </div>
            </div>
            <div class="data-user">
                <div class="box-user">
                    <input type="text" name="email" id="email" class="required" oninput="emailValidate()" required placeholder="Novo e-mail">
                    <!-- <label for="email" class="label-error">E-mail</label> -->
                    <span class="span-required">Digite um e-mail válido</span>
                </div>
                <div class="box-user">
                    <input type="password" name="senha" id="senha" class="required" oninput="passwordValidate()" required placeholder="Nova senha">
                    <!-- <i class="fa-solid fa-eye" id="btn-eye"></i> -->
                    <!-- <label for="senha" class="label-error">Senha</label> -->
                    <img src="imagens/icon-eye-open.png" id="btn-eye">
                    <span class="span-required">Digite uma senha válida</span>
                </div>
            </div>

            <div class="sign-up">
                <div>
                    <input type="submit" value="Confirmar Alterações" id="btn">
                </div>
            </div>
        </form>
    </main>
    <script src="scripts/edit-profile.js"></script>
</body>

</html>