<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo</title>
    <link rel="stylesheet" href="estilos/game.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <script defer src="scripts/star-avaliation.js"></script>
    <script defer src="scripts/favorite.js"></script>
</head>
<body>
<?php
        require('header.php');
        require_once('requires/connect.php');
        require_once('requires/func.php');
    ?>
    <main>
        <section class="section1">
            <div class="title-game">
                <div class="titles">
                    <h1>S.T.A.L.K.E.R 2</h1>
                </div>
                <div id="favorite">
                    <i class="fas fa-heart"></i>
                </div>
            </div>
            <div class="img-infos">
                <div class="img-game">
                    <img src="imagens/stalker-2-1.jpg" alt="S.t.a.l.k.e.r 2">
                </div>
                <div class="infos-game">
                    <div class="sinopse">
                        <div class="title-sinopse">
                            <h4>Sinopse</h4>
                        </div>
                        <div class="text-sinopse">
                            <p>Explore a vasta Zona de Exclusão de Tchornóbil, repleta de inimigos perigosos, anomalias letais e artefatos poderosos. Viva a sua própria história épica enquanto tenta alcançar o Coração de Tchornóbil.</p>
                        </div>
                    </div>
                    <div class="year-note">
                        <div class="year">
                            <div class="title-year">Ano de lançamento:</div>
                            <div class="year-lanced">2022</div>
                        </div>
                        <div class="notes">
                            <div class="title-note">Nota:</div>
                            <div class="star-notes">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="theme-dev">
                        <div class="theme">
                            <div class="title-theme">Gênero:</div>
                            <div class="genero">Sobrevivência</div>
                        </div>
                        <div class="dev">
                            <div class="title-dev">Desenvolvedor:</div>
                            <div class="dev-name">GSC Game World</div>
                        </div>
                    </div>
                    <div class="btn-analise">
                        <a href="" download><button>Analisar</button></a>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <section class="section2">
            <div class="results">
                <div class="title-results">
                    <h2>Seu Sistema</h2>
                </div>
                <div class="component operationSystem">
                    <div class="title-component">
                        <h5>Sistema Operacional</h5>
                    </div>
                    <div class="result-component">
                        <p>Windows 10</p>
                    </div>
                </div>
                <div class="component processor">
                    <div class="title-component">
                        <h5>Processador</h5>
                    </div>
                    <div class="result-component">
                        <p>-</p>
                    </div>
                </div>
                <div class="component ramMemory">
                    <div class="title-component">
                        <h5>Memória RAM</h5>
                    </div>
                    <div class="result-component">
                        <p>-</p>
                    </div>
                </div>
                <div class="component storageMemory">
                    <div class="title-component">
                        <h5>Capacidade de Armazenamento</h5>
                    </div>
                    <div class="result-component">
                        <p>-</p>
                    </div>
                </div>
                <div class="component videoCard">
                    <div class="title-component">
                        <h5>Placa de Vídeo</h5>
                    </div>
                    <div class="result-component">
                        <p>-</p>
                    </div>
                </div>
                <!--<div class="component videoCardInteg">
                    <div class="title-component">
                        <h5>Placa de Vídeo Integrada</h5>
                    </div>
                    <div class="result-component">
                        <p>-</p>
                    </div>
                </div>-->
                <div class="percentage">
                    <h4>00%</h4>
                    <h5>Compatível</h5>
                </div>
                <hr>
                <div class="avaliation">
                    <div class="aval-title">
                        <p>Qual sua avaliação para o jogo?</p>
                    </div>
                    <div class="aval-star">
                        <ul class="avaliacao">
                            <li class="star-icon ativo" data-avaliacao="1"></li>
                            <li class="star-icon" data-avaliacao="2"></li>
                            <li class="star-icon" data-avaliacao="3"></li>
                            <li class="star-icon" data-avaliacao="4"></li>
                            <li class="star-icon" data-avaliacao="5"></li>
                          </ul>
                    </div>
                </div>
            </div>
            <div class="requireds">
                <div class="title-requireds" id="minimum-req">
                    <div class="req-min">
                        <h3>Requisitos Mínimos</h3>
                    </div>
                    <div class="req-rec">

                    </div>
                </div>
                <div class="minimum-recommended">
                    <!-- <div class="req">
                        <h3>Requisitos Mínimos</h3>
                    </div> -->
                    <div class="requireds-game">
                        <div class="title-requisit first-component">
                            <h6>Sistema Operacional:</h6>
                        </div>
                        <div class="component-requisit">
                            <p>Windows 10</p>
                        </div>
                    </div>
                    <div class="requireds-game">
                        <div class="title-requisit">
                            <h6>Processador:</h6>
                        </div>
                        <div class="component-requisit">
                            <p>AMD Ryzen 5 1600X ou Intel Core i5-7600k</p>
                        </div>
                    </div>
                    <div class="requireds-game">
                        <div class="title-requisit">
                            <h6>Memória RAM:</h6>
                        </div>
                        <div class="component-requisit">
                            <p>8 <span>GB</span></p>
                        </div>
                    </div>
                    <div class="requireds-game">
                        <div class="title-requisit">
                            <h6>Capacidade de Armazenamento:</h6>
                        </div>
                        <div class="component-requisit">
                            <p>150 <span>GB</span></p>
                        </div>
                    </div>
                    <div class="requireds-game">
                        <div class="title-requisit">
                            <h6>Placa de Vídeo:</h6>
                        </div>
                        <div class="component-requisit last-component">
                            <p>AMD Radeon RX 580 8GB ou NVIDIA GeForce GTX 1060 6GB</p>
                        </div>
                    </div>
                    <!--<div class="requireds-game">
                        <div class="title-requisit">
                            <h6>Placa de Vídeo Integrada:</h6>
                        </div>
                        <div class="component-requisit">
                            <p>-</p>
                        </div>
                    </div>-->
                </div>
                <!-- <hr> -->
                <div class="title-requireds">
                    <div class="req-min">
                        <h3>Requisitos Recomendados</h3>
                    </div>
                    <div class="req-rec">

                    </div>
                </div>
                <div class="minimum-recommended">
                    <div class="requireds-game">
                        <div class="title-requisit first-component">
                            <h6>Sistema Operacional:</h6>
                        </div>
                        <div class="component-requisit">
                            <p>Windows 10</p>
                        </div>
                    </div>
                    <div class="requireds-game">
                        <div class="title-requisit">
                            <h6>Processador:</h6>
                        </div>
                        <div class="component-requisit">
                            <p>AMD Ryzen 7 3700X / Intel Core i7-9700K</p>
                        </div>
                    </div>
                    <div class="requireds-game">
                        <div class="title-requisit">
                            <h6>Memória RAM:</h6>
                        </div>
                        <div class="component-requisit">
                            <p>16 <span>GB</span></p>
                        </div>
                    </div>
                    <div class="requireds-game">
                        <div class="title-requisit">
                            <h6>Capacidade de Armazenamento:</h6>
                        </div>
                        <div class="component-requisit">
                            <p>150 <span>GB</span></p>
                        </div>
                    </div>
                    <div class="requireds-game">
                        <div class="title-requisit">
                            <h6>Placa de Vídeo:</h6>
                        </div>
                        <div class="component-requisit last-component">
                            <p>AMD Radeon RX 5700 XT 8GB / NVIDIA GeForce RTX 2070 SUPER 8GB / NVIDIA GeForce GTX 1080 Ti 11GB</p>
                        </div>
                    </div>
                    <!--<div class="requireds-game">
                        <div class="title-requisit">
                            <h6>Placa de Vídeo Integrada:</h6>
                        </div>
                        <div class="component-requisit">
                            <p>-</p>
                        </div>
                    </div>-->
                </div>
            </div>
        </section>
    </main>
</body>
</html>