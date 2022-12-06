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

        $busc = $BD->query("SELECT * FROM usuarios WHERE nome_usuario='$_SESSION[user]' LIMIT 1");
        $reg = $busc->fetch_object();
        
    ?>
    <main>
        
        <form action="e-profile-act.php" method="post" class="signin" enctype="multipart/form-data" autocomplete="off">
            
            <?php
                echo "<input type='hidden' name='id' value='$reg->id_usuario'>";
                echo "<input type='hidden' name='tipo' value='Dev'>
                    <h2>Atualizar informações</h2>
                    <div class='data-user'>
                        <div class='box-user'>
                            <input type='text' name='name' id='name' class='required' oninput='nameValidate()' value='$reg->nome' required placeholder='Novo nome'>
                            <!-- <label for='name' class='label-error'>Nome</label> -->
                            <span class='span-required'>Nome deve ter no mínimo 3 caracteres</span>
                        </div>
                        <div class='box-user'>
                            <input type='text' name='user' id='user' class='required' oninput='userValidate()' value='$reg->nome_usuario' required placeholder='Novo usuário'>
                            <!-- <label for='user' class='label-error'>Usuário</label> -->
                            <span class='span-required'>Mínimo 5 caracteres e separação usar underline</span>
                        </div>
                    </div>
                    <div class='data-user'>";
                
                    if(is_dev() or is_adm()){

                        echo"<div class='box-user'>
                                <input type='text' name='enterprise' id='enterprise' class='required' oninput='enterpriseValidate()' value='$reg->empresa' required placeholder='Empresa/Estúdio'>
                                <!-- <label for='enterprise' class='label-error'>Empresa/Estúdio</label> -->
                                <span class='span-required'>Nome deve ter no mínimo 3 caracteres</span>
                            </div>
                            <div class='box-user'>
                                <input type='text' name='web' id='site-dev' class='required' oninput='siteValidate()' value='$reg->site_empresa' required placeholder='Site/Página da Empresa/Estúdio'>
                                <!-- <label for='site-dev' class='label-error'>Site ou Página da Empresa/Estúdio</label> -->
                                <span class='span-required'>Site deve ter o endereço correto</span>
                            </div>";
                    }
                
                echo "</div>
                    <div class='data-user'>
                        <div class='box-user'>
                            <input type='text' name='email' id='email' class='required' oninput='emailValidate()' value='$reg->email' required placeholder='Novo e-mail'>
                            <!-- <label for='email' class='label-error'>E-mail</label> -->
                            <span class='span-required'>Digite um e-mail válido</span>
                        </div>
                        <div class='box-user'>
                            <input type='password' name='senha' id='senha' class='required' oninput='passwordValidate()' placeholder='Nova senha'>
                            <!-- <i class='fa-solid fa-eye' id='btn-eye'></i> -->
                            <!-- <label for='senha' class='label-error'>Senha</label> -->
                            <img src='imagens/icon-eye-open.png' id='btn-eye'>
                            <span class='span-required'>Digite uma senha válida</span>
                        </div>
                    </div>
                    <div class='data-user'>
                        <div class='box-user'>
                            <label for='icon'><i class='fa-solid fa-upload'></i>Adicionar foto de perfil</label>
                            <input type='file' name='icon' id='icon' class='required' /*oninput='emailValidate()'*/ value='$reg->icone' required>
                            <!-- <label for='email' class='label-error'>E-mail</label> -->
                            <span class='span-required'>Digite um e-mail válido</span>
                        </div>
                        <div class='box-user'>
                            <input type='submit' value='Confirmar Alterações' id='btn'>
                        </div>
                    </div>";
            ?>
        </form>
        
    </main>
    <script src="scripts/edit-profile.js"></script>
</body>

</html>