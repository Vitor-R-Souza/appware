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
                <p>O Appware serve para facilitar a vida do jogador, principalmente para aqueles que não conhecem sobre hardware, simplificando o modo de testar se determinado jogo irá executar em sua máquina, antes mesmo de instalá-lo, evitando assim que prejudiquem o computador do usuário.</p>
                <p>Otimizando assim, tempo e evitando possíveis problema, trazendo de forma rápida e eficiente o resultado, o quanto sua máquina é compatível com o jogo desejado.</p>
            </div>
        </section>
    </main>
    <?php
        require_once('footer.php')
    ?>
</body>
</html>