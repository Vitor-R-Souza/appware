<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico</title>
    <link rel="stylesheet" href="estilos/historic.css">
</head>
<body>
    <?php
            require_once('./requires/connect.php');
            require_once('./requires/func.php');
            require_once('./header.php');
    ?>
    <main>
        <section class="historic">
            <div class="game">
                <img src="mini-capas/mortal-kombat11.jpg" alt="Mortal Kombat 11">
            </div>
            <div class="game">
                <img src="mini-capas/marvel-spiderman.jpg" alt="Marvel Spider-Man">
            </div>
            <div class="game">
                <img src="mini-capas/the-witcher3.jpg" alt="The Witcher 3: Wild Hunt">
            </div>
            <div class="game">
                <img src="mini-capas/valorant.jpg" alt="Valorant">
            </div>
            <div class="game">
                <img src="mini-capas/gow.jpg" alt="God of War">
            </div>
        </section>
    </main>
</body>
</html>