<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="estilos/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <script defer src="scripts/contact.js"></script>
</head>

<body>
    <?php
        require_once('requires/connect.php');
        require_once('requires/func.php');
        require_once('header.php');
    ?>
    <main>
        <section>
            <div class="contact">
                <h1>Fale Conosco</h1>
                <h3>Dúvidas, críticas, sugestões...</h3>
                <p>Deseja suporte para alguma informação, resolução de dúvidas, críticas ou sugestões?</p>
                <p>Preencha o formulário que entraremos em contato via e-mail para prestar o melhor suporte possível.</p>
                <div class="img">
                    <img src="imagens/undraw_team_up_re_84ok.svg" alt="">
                </div>
                <div class="icons">
                    <a href="#" class="btn-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="btn-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="btn-icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="btn-icon">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
            <div class="contact-form">
                <form action="https://formsubmit.co/ajax/technology.ldr@gmail.com" method="POST" data-form>
                    <!--b7f73330b717a65c90358ec1b1ea3a58 Código p/ trocar o e-mail de recebimento-->
                    <h1>Contato</h1>
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name" required>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" required>
                    <label for="message">Mensagem</label>
                    <textarea name="message" id="message" required></textarea>
                    <button type="submit" data-button id="btn">Enviar</button>
                </form>
            </div>
        </section>
    </main>
    <?php
        require_once('footer.php');
    ?>
</body>

</html>