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

        $ordem = $_GET['o'] ?? "padrao";
        $chave = $_GET['search'] ?? null;

        if($ordem == "padrao"){
            $q = "select * from jogos";
        }else{
            switch($ordem){
                case "Ação":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 1 OR `id_catego2` = 1 OR `id_catego3` = 1";
                    break;
                case "Aventura":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 2 OR `id_catego2` = 2 OR `id_catego3` = 2";
                    break;
                case "Terror":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 3 OR `id_catego2` = 3 OR `id_catego3` = 3";
                    break;
                case "Simulador":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 15 OR `id_catego2` = 15 OR `id_catego2` = 15";
                    break;
                case "Esportes":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 5 OR `id_catego2` = 5 OR `id_catego3` = 5";
                    break;
                case "RPG":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 6 OR `id_catego2` = 6 OR `id_catego3` = 6";
                    break;
                case "FPS":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 7 OR `id_catego2` = 7 OR `id_catego3` = 7";
                    break;
                case "TPS":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 8 OR `id_catego2` = 8 OR `id_catego3` = 8";
                    break;
                case "RTS":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 9 OR `id_catego2` = 9 OR `id_catego3` = 9";
                    break;
                case "PVP":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 10 OR `id_catego2` = 10 OR `id_catego3` = 10";
                    break;
                case "MMORPG":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego3` = 11 OR `id_catego3` = 11 OR `id_catego3` = 11";
                    break;
                case "MOBA":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 12 OR `id_catego2` = 12 OR `id_catego3` = 12";
                    break;
                case "BattleRoyale":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 13 OR `id_catego2` = 13 OR `id_catego3` = 13";
                    break;
                case "HacknSlash":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 14 OR `id_catego2` = 14 OR `id_catego3` = 14";
                    break;
                case "Luta":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 16 OR `id_catego2` = 16 OR `id_catego3` = 16";
                    break;
                case "Puzzle":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 17 OR `id_catego2` = 17 OR `id_catego3` = 17";
                    break;
                case "Estratégia":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 18 OR `id_catego2` = 18 OR `id_catego3` = 18";
                    break;
                case "Plataforma":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 19 OR `id_catego2` = 19 OR `id_catego3` = 19";
                    break;
                case "Corrida":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 4 OR `id_catego2` = 4 OR `id_catego3` = 4";
                    break;
                case "Beatemup":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 20 OR `id_catego2` = 20 OR `id_catego3` = 20";
                    break;
                case "Stealth":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 21 OR `id_catego2` = 21 OR `id_catego3` = 21";
                    break;
                case "Sobrevivência":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 22 OR `id_catego2` = 22 OR `id_catego3` = 22";
                    break;
                case "Ritmo":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 23 OR `id_catego2` = 23 OR `id_catego3` = 23";
                    break;
                case "Sandbox":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 24 OR `id_catego2` = 24 OR `id_catego3` = 24";
                    break;
                case "Militar":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 25 OR `id_catego2` = 25 OR `id_catego3` = 25";
                    break;
                case "Text-Adventure":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 26 OR `id_catego2` = 26 OR `id_catego3` = 26";
                    break;
                case "GraphicAdventure":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 27 OR `id_catego2` = 27 OR `id_catego3` = 27";
                    break;
                case "VisualNovel":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 28 OR `id_catego2` = 28 OR `id_catego3` = 28";
                    break;
                case "FilmesInterativos":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 29 OR `id_catego2` = 29 OR `id_catego3` = 29";
                    break;
                case "RunNGuns":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 30 OR `id_catego2` = 30 OR `id_catego3` = 30";
                    break;
                case "Metroidvania":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 31 OR `id_catego2` = 31 OR `id_catego3` = 31";
                    break;
                case "Anime":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 32 OR `id_catego2` = 32 OR `id_catego3` = 32";
                    break;
                case "JRPG":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 33 OR `id_catego2` = 33 OR `id_catego3` = 33";
                    break;
                case "RTT":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 34 OR `id_catego2` = 34 OR `id_catego3` = 34";
                    break;
                case "TorreDefensiva":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 35 OR `id_catego2` = 35 OR `id_catego3` = 35";
                    break;
                case "MundoAberto":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 36 OR `id_catego2` = 36 OR `id_catego3` = 36";
                    break;
                case "PartyGames":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 37 OR `id_catego2` = 37 OR `id_catego3` = 37";
                    break;
                case "Roguelike":
                    $q = "SELECT * FROM `jogos` WHERE `id_catego` = 38 OR `id_catego2` = 38 OR `id_catego3` = 38";
                    break;
                case "Livre":
                    $q = "SELECT * FROM `jogos` WHERE `classificacao_indi` LIKE 'L'";
                    break;
                case "10":
                    $q = "SELECT * FROM `jogos` WHERE `classificacao_indi` LIKE '10'";
                    break;
                case "12":
                    $q = "SELECT * FROM `jogos` WHERE `classificacao_indi` LIKE '12'";
                    break;
                case "14":
                    $q = "SELECT * FROM `jogos` WHERE `classificacao_indi` LIKE '14'";
                    break;
                case "16":
                    $q = "SELECT * FROM `jogos` WHERE `classificacao_indi` LIKE '16'";
                    break;
                case "18":
                    $q = "SELECT * FROM `jogos` WHERE `classificacao_indi` LIKE '18'";
                    break;
                case "Indies":
                    $q = "SELECT * FROM `jogos` WHERE `indies` = 1";
                    break;
            }
        }

        if(!empty($chave)){
            $q = "SELECT * FROM `jogos` WHERE `nome_jogo` LIKE '%$chave%'";
        }

    ?>
    <main>
        <aside class="categ">
            <div class="category">
                <h2>Categorias</h2>
                <form action="filter.php" method="get" id="busca">
                    <a href="filter.php?o=Ação">Ação</a>
                    <a href="filter.php?o=Aventura">Aventura</a>
                    <a href="filter.php?o=Terror">Terror</a>
                    <a href="filter.php?o=Simulador">Simulador</a>
                    <a href="filter.php?o=Esportes">Esportes</a>
                    <a href="filter.php?o=RPG">RPG</a>
                    <a href="filter.php?o=FPS">FPS</a>
                    <a href="filter.php?o=TPS">TPS</a>
                    <a href="filter.php?o=RTS">RTS</a>
                    <a href="filter.php?o=PVP">PVP</a>
                    <a href="filter.php?o=MMORPG">MMORPG</a>
                    <a href="filter.php?o=MOBA">MOBA</a>
                    <a href="filter.php?o=BattleRoyale">Battle Royale</a>
                    <a href="filter.php?o=HacknSlash">Hack'n Slash</a>
                    <a href="filter.php?o=Luta">Luta</a>
                    <a href="filter.php?o=Puzzle">Puzzle</a>
                    <a href="filter.php?o=Estratégia">Estratégia</a>
                    <a href="filter.php?o=Plataforma">Plataforma</a>
                    <a href="filter.php?o=Corrida">Corrida</a>
                    <a href="filter.php?o=Beatemup">Beat 'em up</a>
                    <a href="filter.php?o=Stealth">Stealth</a>
                    <a href="filter.php?o=Sobrevivência">Sobrevivência</a>
                    <a href="filter.php?o=Ritmo">Ritmo</a>
                    <a href="filter.php?o=Sandbox">Sandbox</a>
                    <a href="filter.php?o=Militar">Militar</a>
                    <a href="filter.php?o=Text-Adventure">Text-Adventure</a>
                    <a href="filter.php?o=GraphicAdventure">Graphic Adventure</a>
                    <a href="filter.php?o=VisualNovel">Visual Novel</a>
                    <a href="filter.php?o=FilmesInterativos">Filmes Interativos</a>
                    <a href="filter.php?o=RunNGuns">Run'N Guns</a>
                    <a href="filter.php?o=Metroidvania">Metroidvania</a>
                    <a href="filter.php?o=Anime">Anime</a>
                    <a href="filter.php?o=JRPG">JRPG</a>
                    <a href="filter.php?o=RTT">RTT</a>
                    <a href="filter.php?o=TorreDefensiva">Torre Defensiva</a>
                    <a href="filter.php?o=MundoAberto">Mundo Aberto</a>
                    <a href="filter.php?o=PartyGames">Party Games</a>
                    <a href="filter.php?o=Roguelike">Roguelike</a>
                </form>
            </div>
            <div class="age">
                <h2>Classificação Indicativa</h2>
                <form action="filter.php" method="get" id="busca">
                    <a href="filter.php?o=Livre">Livre</a>
                    <a href="filter.php?o=10">+10</a>
                    <a href="filter.php?o=12">+12</a>
                    <a href="filter.php?o=14">+14</a>
                    <a href="filter.php?o=16">+16</a>
                    <a href="filter.php?o=18">+18</a>
                </form>
            </div>
            <div class="indies">
                <h2>Jogos Indies</h2>
                <form action="filter.php" method="get" id="busca">
                    <a href="filter.php?o=Indies">Indies</a>
                </form>
            </div>
            <div class="favorites">
                <h2>Favoritos</h2>
                <form action="filter.php" method="get" id="busca">
                    <a href="filter.php?o=Favoritos">Favoritos</a>
                </form>
            </div>
            <div class="dev-mode">
                <h2>Modo Desenvolvedor</h2>
                <form action="filter.php" method="get" id="busca">
                    <a href="filter.php?o=MeusProjetos">Meus Projetos</a>
                </form>
            </div>
        </aside>
        <section class="catalog">
                <?php
                    $busca = $BD->query($q);
                    if(!$busca){
                        echo "<h1>falha de query</h1>";
                    }else{
                        while($r = $busca->fetch_object()){
                            $t = thumb($r->capa_filtragem);
                            echo"<a href='game.php?id=$r->id_jogos'>
                                    <div class='game'>
                                        <div class='capa'>
                                            <img src='$t' alt='$r->nome_jogo'>
                                        </div>
                                        <div class='name-game'>
                                            <h3>$r->nome_jogo</h3>
                                        </div>
                                    </div>
                                </a>";
                                  
                        }
                    }
                                    
                ?>
            
        </section>
    </main>
    <?php
        require_once('footer.php');
    ?>
</body>
</html>