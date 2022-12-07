<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="estilos/about.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<body>
    <?php
        require_once('requires/connect.php');
        require_once('requires/func.php');
        require_once('header.php');
    ?>
    <main>
        <section class="about-origin">
            <div class="origin">
                <h1>Como surgiu o AppWare?</h1>
                <p>A ideia surgiu após muito tempo discutindo sobre como seria o projeto. Após vermos um site auxiliando compradores a comprar suas máquinas, verificamos que todas as lojas onlines de jogos vendem os games apresentando os requisitos mínimos e os recomendados como um mero detalhe, onde muitos usuários não possuem conhecimento suficiente para distinguir alguns dos componentes.</p>
                <p>Com isso o projeto AppWare foi iniciado pela equipe da empresa LDR Technology, uma empresa voltada para inovar e facilitar a vida dos usuários com o uso da tecnologia. Misturando tecnologias para criar um sistema de fácil uso.</p>
            </div>
            <div class="logo-enterprise">
                <img src="imagens/ldr-technology.png" alt="Logo da LDR Technology">
            </div>
        </section>
        <section class="about-objective">
            <div class="ware">
                <img src="imagens/ware-mascote.png" alt="Mascote do AppWare">
            </div>
            <div class="objective">
                <h1>Para que serve o AppWare?</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente voluptatem possimus pariatur fugiat eveniet tenetur ipsam. Odio, dolor amet itaque placeat ducimus natus in pariatur consectetur perspiciatis facilis assumenda illo.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quo sequi odit tenetur ab quam! Reiciendis, similique! Unde perferendis voluptas, quaerat iure libero eos reiciendis ea odio nulla tempore minus.</p>
            </div>
        </section>
    </main>
    <?php
        require_once('footer.php')
    ?>
</body>
</html>