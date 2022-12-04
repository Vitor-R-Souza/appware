<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo</title>
    <link rel="stylesheet" href="estilos/filter.css">
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
        <aside class="categ">
            <div class="category">
                <h2>Categorias</h2>
                <form action="filter.php" method="get" id="busca">
                    <a href="filter.php">Ação</a>
                    <a href="filter.php">Aventura</a>
                    <a href="filter.php">Terror</a>
                    <a href="filter.php">Corrida</a>
                    <a href="filter.php">Esportes</a>
                    <a href="filter.php">RPG</a>
                    <a href="filter.php">FPS</a>
                    <a href="filter.php">TPS</a>
                    <a href="filter.php">RTS</a>
                    <a href="filter.php">PVP</a>
                    <a href="filter.php">MMORPG</a>
                    <a href="filter.php">MOBA</a>
                    <a href="filter.php">Battle Royale</a>
                    <a href="filter.php">Hack'n Slash</a>
                    <a href="filter.php">Simulador</a>
                    <a href="filter.php">Luta</a>
                    <a href="filter.php">Puzzle</a>
                    <a href="filter.php">Estratégia</a>
                    <a href="filter.php">Plataforma</a>
                    <a href="filter.php">Beat 'em up</a>
                    <a href="filter.php">Stealth</a>
                    <a href="filter.php">Sobrevivência</a>
                    <a href="filter.php">Ritmo</a>
                    <a href="filter.php">Sandbox</a>
                    <a href="filter.php">Militar</a>
                    <a href="filter.php">Text-Adventure</a><a href="filter.php">Graphic Adventure</a>
                    <a href="filter.php">Visual Novel</a>
                    <a href="filter.php">Filmes Interativos</a>
                    <a href="filter.php">Run'N Guns</a>
                    <a href="filter.php">Metroidvania</a>
                    <a href="filter.php">Anime</a>
                    <a href="filter.php">JRPG</a>
                    <a href="filter.php">RTT</a>
                    <a href="filter.php">Torre Defensiva</a>
                    <a href="filter.php">Mundo Aberto</a>
                    <a href="filter.php">Party Games</a>
                    <a href="filter.php">Roguelike</a>
                </form>
            </div>
            <div class="age">
                <h2>Classificação Indicativa</h2>
                <form action="filter.php" method="get" id="busca">
                    <a href="filter.php">Livre</a>
                    <a href="filter.php">+10</a>
                    <a href="filter.php">+12</a>
                    <a href="filter.php">+14</a>
                    <a href="filter.php">+16</a>
                    <a href="filter.php">+18</a>
                </form>
            </div>
            <div class="indies">
                <h2>Jogos Indies</h2>
                <form action="filter.php" method="get" id="busca">
                    <a href="filter.php">Indies</a>
                </form>
            </div>
            <div class="favorites">
                <h2>Favoritos</h2>
                <form action="filter.php" method="get" id="busca">
                    <a href="filter.php">Favoritos</a>
                </form>
            </div>
            <div class="dev-mode">
                <h2>Modo Desenvolvedor</h2>
                <form action="filter.php" method="get" id="busca">
                    <a href="filter.php">Meus Projetos</a>
                </form>
            </div>
        </aside>
        <section class="catalog">
            <div class="game">
                <div class="capa">
                    <img src="mini-capas/red-dead-redemption2.jpg" alt="Read Dead Redemption 2">
                </div>
                <div class="name-game">
                    <h3>Read Dead Redemption 2</h3>
                </div>
            </div>
            <div class="game">
                <div class="capa">
                    <img src="mini-capas/elden-ring.jpg" alt="Elden Ring">
                </div>
                <div class="name-game">
                    <h3>Elden Ring</h3>
                </div>
            </div>
            <div class="game">
                <div class="capa">
                    <img src="mini-capas/marvel-spiderman.jpg" alt="Marvel Spider-Man">
                </div>
                <div class="name-game">
                    <h3>Marvel Spider-Man Remastered</h3>
                </div>
            </div>
            <div class="game">
                <div class="capa">
                    <img src="mini-capas/csgo.jpg" alt="">
                </div>
                <div class="name-game">
                    <h3>Counter Strike: Global Offensive</h3>
                </div>
            </div>
            <div class="game">
                <div class="capa">
                    <img src="mini-capas/age-of-empires3.jpg" alt="">
                </div>
                <div class="name-game">
                    <h3>Age of Empires III: Definitive Edition</h3>
                </div>
            </div>
            <div class="game">
                <div class="capa">
                    <img src="mini-capas/splinter-cell-blacklist.jpg" alt="">
                </div>
                <div class="name-game">
                    <h3>Tom Clancy: Splinter Cell Blacklist</h3>
                </div>
            </div>
            <div class="game">
                <div class="capa">
                    <img src="mini-capas/splinter-cell-blacklist.jpg" alt="">
                </div>
                <div class="name-game">
                    <h3>Tom Clancy: Splinter Cell Blacklist</h3>
                </div>
            </div>
            <div class="game">
                <div class="capa">
                    <img src="mini-capas/splinter-cell-blacklist.jpg" alt="">
                </div>
                <div class="name-game">
                    <h3>Tom Clancy: Splinter Cell Blacklist</h3>
                </div>
            </div>
            <div class="game">
                <div class="capa">
                    <img src="mini-capas/splinter-cell-blacklist.jpg" alt="">
                </div>
                <div class="name-game">
                    <h3>Tom Clancy: Splinter Cell Blacklist</h3>
                </div>
            </div>
            <div class="game">
                <div class="capa">
                    <img src="mini-capas/splinter-cell-blacklist.jpg" alt="">
                </div>
                <div class="name-game">
                    <h3>Tom Clancy: Splinter Cell Blacklist</h3>
                </div>
            </div>
            
        </section>
    </main>
    <?php
        require_once('footer.php');
    ?>
</body>
</html>