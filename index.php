<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./estilos/estilo.css">
    <title>Início</title>
</head>

<body>
    <?php
        require_once('requires/connect.php');
        require_once('requires/func.php');
        require_once('header.php');
    ?>
    <div class="box">
        <div class="slide-wrapper" data-slide="wrapper">
            <button class="slide-nav-button slide-nav-previous fas fa-chevron-left" data-slide="previous-button"></button>
            <button class="slide-nav-button slide-nav-next fas fa-chevron-right" data-slide="next-button"></button>
            <div class="slide-list" data-slide="list">
                <div class="slide-item" data-slide="item" data-index="0">
                    <div class="slide-content">
                        <a href="game.php?id=1">
                            <img src="./capas/red-dead-redemption2.png" alt="Red Dead Redemption 2" />
                            <div class="slide-description">
                                <h6>Mais populares - #1</h6>
                                <h3>Red Dead Redemption 2</h3>
                                <p>Seja um fora da lei sobrevivendo a perseguições no Velho Oeste.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="slide-item" data-slide="item" data-index="1">
                    <div class="slide-content">
                        <a href="game.php?id=53">
                            <img src="./capas/league-of-legends.png" alt="League of Legends" />
                            <div class="slide-description">
                                <h6>Lançamentos - #1</h6>
                                <h3>League of Legends</h3>
                                <p>Escolha um campeão e ajude sua equipe a destruir a base inimiga.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="slide-item" data-slide="item" data-index="2">
                    <div class="slide-content">
                        <a href="game.php?id=39">
                            <img src="./capas/gta5.png" alt="GTA" />
                            <div class="slide-description">
                                <h6>Indies - #1</h6>
                                <h3>Grand Theft Auto V</h3>
                                <p>Controle três criminosos na grande cidade de Los Santos.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="slide-item" data-slide="item" data-index="3">
                    <div class="slide-content">
                        <a href="game.php?id=55">
                            <img src="capas/hitman2.jpg" alt="Hitman" />
                            <div class="slide-description">
                                <h6>Mais populares - #2</h6>
                                <h3>Hitman 2</h3>
                                <p>Acompanhe o assassino Agente 47 em sua viagem para defender a Providence.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="slide-item" data-slide="item" data-index="4">
                    <div class="slide-content">
                        <a href="game.php?id=9">
                            <img src="capas/halo5.png" alt="Halo" />
                            <div class="slide-description">
                                <h6>Lançamentos - #2</h6>
                                <h3>Halo 5: Guardians</h3>
                                <p>Elimine a ameaça de alienígenas através do 2º capítulo da história de Master Chief.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="slide-controls" data-slide="controls-wrapper">
            </div>
            <br>
            <div class="heading">
                <h2 class="heading-title">Lançamentos</h2>
                <div class="swiper-btn">
                    <div class="swiper-button-prev data"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="popular-content swiper mini-carousel1">
                <div class="swiper-wrapper">
                <?php
                    $busca = $BD->query("select * from jogos");
                    if(!$busca){
                        echo "<h1>falha de query</h1>";
                    }else{
                        while($reg = $busca->fetch_object()){
                            $D = explode("-", $reg->ano_lancamento);
                            if($D[0] == date("Y")){
                                $t = thumb($reg->capa_filtragem);
                                echo"<div class='swiper-slide'>
                                        <a href='game.php?id=$reg->id_jogos'>
                                            <div class='movie-box'>
                                                <img src='$t' alt='' class='movie-box-img'>
                                            </div>
                                        </a>
                                    </div>";
                            }      
                        }
                    }
                                    
                ?>
                </div>
                <br>
            </div>
            <br>
            <div class="heading" id="populares">
                <h2 class="heading-title">Populares</h2>
                <div class="swiper-btn">
                    <div class="swiper-button-prev prev2"></div>
                    <div class="swiper-button-next next2"></div>
                </div>
            </div>
            <div class="popular-content swiper mini-carousel2">
                <div class="swiper-wrapper">
                <?php
                    $busca = $BD->query("select * from jogos");
                    if(!$busca){
                        echo "<h1>falha de query</h1>";
                    }else{
                        while($reg = $busca->fetch_object()){
                            $t = thumb($reg->capa_filtragem);
                            if($reg->qts_analisados >= 100){
                                echo"<div class='swiper-slide'>
                                        <a href='game.php?id=$reg->id_jogos'>
                                            <div class='movie-box'>
                                                <img src='$t' alt='' class='movie-box-img'>
                                            </div>
                                        </a>
                                    </div>";      
                            }
                        }
                    }
                                    
                ?>
                </div>
                <br>
            </div>
            <br>
            <div class="heading" id="indies">
                <h2 class="heading-title">Jogos Indies</h2>
                <div class="swiper-btn">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="popular-content swiper mini-carousel3">
                <div class="swiper-wrapper">
                <?php
                    $busca = $BD->query("select * from jogos");
                    if(!$busca){
                        echo "<h1>falha de query</h1>";
                    }else{
                        while($reg = $busca->fetch_object()){
                            $t = thumb($reg->capa_filtragem);
                            if($reg->indie == 1){
                                echo"<div class='swiper-slide'>
                                        <a href='game.php?id=$reg->id_jogos'>
                                            <div class='movie-box'>
                                                <img src='$t' alt='' class='movie-box-img'>
                                            </div>
                                        </a>
                                    </div>";      
                            }
                        }
                    }
                                    
                ?>
                </div>
                <br>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="scripts/collection.js"></script>
    <script src="scripts/slides.js"></script>
    <script>
        initSlider({
            autoPlay: true,
            startAtIndex: 0,
            timeInterval: 2000
        })
    </script>
</body>

</html>