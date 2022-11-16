<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./fontawesome/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- <link rel="stylesheet" href="./estilos/carousel.css"> -->
    <link rel="stylesheet" href="./estilos/estilo.css">
    <title>Início</title>
</head>

<body>
    <?php
        require('header.php');
    ?>
    <div class="box">
        <div class="slide-wrapper" data-slide="wrapper">
            <button class="slide-nav-button slide-nav-previous fas fa-chevron-left" data-slide="previous-button"></button>
            <button class="slide-nav-button slide-nav-next fas fa-chevron-right" data-slide="next-button"></button>
            <div class="slide-list" data-slide="list">
                <div class="slide-item" data-slide="item" data-index="0">
                    <div class="slide-content">
                        <img src="./assets/imgs/red dead .png" alt="Red Dead Redemption 2" />
                        <div class="slide-description">
                            <h3>Red Dead Redemption 2</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="slide-item" data-slide="item" data-index="1">
                    <div class="slide-content">
                        <img src="./assets/imgs/league-of-legends.png" alt="League of Legends" />
                        <div class="slide-description">
                            <h3>League of Legends</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="slide-item" data-slide="item" data-index="2">
                    <div class="slide-content">
                        <img src="./assets/imgs/GTA-V.png" alt="GTA" />
                        <div class="slide-description">
                            <h3>GTA V</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="slide-item" data-slide="item" data-index="3">
                    <div class="slide-content">
                        <img src="./assets/imgs/hitman.png" alt="Hitman" />
                        <div class="slide-description">
                            <h3>Hitman 2</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="slide-item" data-slide="item" data-index="4">
                    <div class="slide-content">
                        <img src="./assets/imgs/halo-5.png" alt="Halo" />
                        <div class="slide-description">
                            <h3>Halo 5</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-controls" data-slide="controls-wrapper">
            </div>
            <br>
            <div class="heading">
                <h2 class="heading-title">Populares</h2>
                <div class="swiper-btn">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="popular-content swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="movie-box">
                            <img src="./mini-capas/bayonetta.jpg" alt="" class="movie-box-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="movie-box">
                            <img src="./mini-capas/bully.jpg" alt="" class="movie-box-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="movie-box">
                            <img src="./mini-capas/dying-light2.jpg" alt="" class="movie-box-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="movie-box">
                            <a href="/">
                                <img src="./mini-capas/csgo.jpg" alt="" class="movie-box-img">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="movie-box">
                            <img src="./mini-capas/farcry6.jpg" alt="" class="movie-box-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="movie-box">
                            <img src="./mini-capas/marvel-spiderman.jpg" alt="" class="movie-box-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="movie-box">
                            <img src="./mini-capas/cod-warzone.jpg" alt="" class="movie-box-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="movie-box">
                            <img src="./mini-capas/gow.jpg" alt="" class="movie-box-img">
                        </div>
                    </div>
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