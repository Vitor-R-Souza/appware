<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require_once('requires/connect.php');
        $id = $_GET['id'];

        $busc = $BD->query("SELECT * FROM `jogos` WHERE `id_jogos` = $id");
        $r = $busc->fetch_object();
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        echo "<title>$r->nome_jogo</title>";
    ?>
    <link rel="stylesheet" href="estilos/game.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <script defer src="scripts/star-avaliation.js"></script>
    <script defer src="scripts/favorite.js"></script>
</head>
<body>
    <?php
        
        require_once('requires/func.php');
        require_once('header.php');

        if($b2 = $BD->query("SELECT * FROM `requisitos_recomendados` WHERE `id_R` = $r->id_R")){
            $rr = $b2->fetch_object();
        }
        
        if($bs2 = $BD->query("SELECT * FROM `sistema_operacional` WHERE `id_sistema` = 1")){//$rr->id_sistema trocar pelo 1
            $sr = $bs2->fetch_object();
        }

        if($b1 = $BD->query("SELECT * FROM `requisitos_minimos` WHERE `id_M` = $r->id_M")){
            $rm = $b1->fetch_object();
        }
        
        if($bs1 = $BD->query("SELECT * FROM `sistema_operacional` WHERE `id_sistema` = 1")){//$rm->id_sistema trocar pelo 1
            $sm = $bs1->fetch_object();
        }

    ?>
    <main>
        <section class="section1">
            <div class="title-game">
                <div class="titles">
                    <?php
                        echo "<h1>$r->nome_jogo</h1>";
                    ?>
                </div>
                <div id="favorite">
                    <i class="fas fa-heart"></i>
                </div>
            </div>
            <div class="img-infos">
                <div class="img-game">
                    <?php
                        echo "<img src='capas/$r->capa_jogo' alt='$r->nome_jogo'>";
                    ?>
                </div>
                <div class="infos-game">
                    <div class="sinopse">
                        <div class="title-sinopse">
                            <h4>Sinopse</h4>
                        </div>
                        <div class="text-sinopse">
                            <?php
                               echo "<p>$r->sinopse</p>";
                            ?>
                        </div>
                    </div>
                    <div class="year-note">
                        <div class="year">
                            <div class="title-year">Ano de lançamento:</div>
                            <?php
                            $A = explode("-", $r->ano_lancamento);
                                echo "<div class='year-lanced'>$A[0]</div>";
                            ?>
                            
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
                            <div class="title-theme">Classificação indicativa:</div>
                            <?php
                                echo "<div class='genero'>$r->classificacao_indi</div>";
                            ?>
                        </div>
                        <div class="dev">
                            <div class="title-dev">Desenvolvedor:</div>
                            <?php
                                echo "<div class='dev-name'>$r->desenvolvedora</div>";
                            ?>
                        </div>
                    </div>
                    <div class="btn-analise">
                        <a href="DetectorAPPWARE.exe" download><button>Analisar</button></a>
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
                    <?php
                        if($_SESSION['teste']){
                            echo"<div class='component operationSystem'>
                                    <div class='title-component'>
                                        <h5>Sistema Operacional</h5>
                                    </div>
                                    <div class='result-component'>
                                        <p>Windows 10</p>
                                    </div>
                                </div>
                                <div class='component processor'>
                                    <div class='title-component'>
                                        <h5>Processador</h5>
                                    </div>
                                    <div class='result-component'>
                                        <p>-</p>
                                    </div>
                                </div>
                                <div class='component ramMemory'>
                                    <div class='title-component'>
                                        <h5>Memória RAM</h5>
                                    </div>
                                    <div class='result-component'>
                                        <p>-</p>
                                    </div>
                                </div>
                                <div class='component storageMemory'>
                                    <div class='title-component'>
                                        <h5>Capacidade de Armazenamento</h5>
                                    </div>
                                    <div class='result-component'>
                                        <p>-</p>
                                    </div>
                                </div>
                                <div class='component videoCard'>
                                    <div class='title-component'>
                                        <h5>Placa de Vídeo</h5>
                                    </div>
                                    <div class='result-component'>
                                        <p>-</p>
                                    </div>
                                </div>";
                            }else{
                                echo"<div class='component operationSystem'>
                                    <div class='title-component'>
                                        <h5>Sistema Operacional</h5>
                                    </div>
                                    <div class='result-component'>
                                        <p>Windows 10</p>
                                    </div>
                                </div>
                                <div class='component processor'>
                                    <div class='title-component'>
                                        <h5>Processador</h5>
                                    </div>
                                    <div class='result-component'>
                                        <p>-</p>
                                    </div>
                                </div>
                                <div class='component ramMemory'>
                                    <div class='title-component'>
                                        <h5>Memória RAM</h5>
                                    </div>
                                    <div class='result-component'>
                                        <p>-</p>
                                    </div>
                                </div>
                                <div class='component storageMemory'>
                                    <div class='title-component'>
                                        <h5>Capacidade de Armazenamento</h5>
                                    </div>
                                    <div class='result-component'>
                                        <p>-</p>
                                    </div>
                                </div>
                                <div class='component videoCard'>
                                    <div class='title-component'>
                                        <h5>Placa de Vídeo</h5>
                                    </div>
                                    <div class='result-component'>
                                        <p>-</p>
                                    </div>
                                </div>";
                            }
                    ?>
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
                        <?php
                        echo"<div class='requireds-game'>
                                <div class='title-requisit first-component'>
                                    <h6>Sistema Operacional:</h6>
                                </div>
                                <div class='component-requisit'>
                                    <p>$sm->NomeSistema</p>
                                </div>
                            </div>
                            <div class='requireds-game'>
                                <div class='title-requisit'>
                                    <h6>Processador:</h6>
                                </div>
                                <div class='component-requisit'>
                                    <p>$rm->processador</p>
                                </div>
                            </div>
                            <div class='requireds-game'>
                                <div class='title-requisit'>
                                    <h6>Memória RAM:</h6>
                                </div>
                                <div class='component-requisit'>
                                    <p>$rm->memoria_ram <span>GB</span></p>
                                </div>
                            </div>
                            <div class='requireds-game'>
                                <div class='title-requisit'>
                                    <h6>Capacidade de Armazenamento:</h6>
                                </div>
                                <div class='component-requisit'>
                                    <p>$rm->espaco_armazenamento <span>GB</span></p>
                                </div>
                            </div>
                            <div class='requireds-game'>
                                <div class='title-requisit'>
                                    <h6>Placa de Vídeo:</h6>
                                </div>
                                <div class='component-requisit last-component'>
                                    <p>$rm->placa_video</p>
                                </div>
                            </div>";
                    ?>
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
                    <?php
                        echo"<div class='requireds-game'>
                                <div class='title-requisit first-component'>
                                    <h6>Sistema Operacional:</h6>
                                </div>
                                <div class='component-requisit'>
                                    <p>$sr->NomeSistema</p>
                                </div>
                            </div>
                            <div class='requireds-game'>
                                <div class='title-requisit'>
                                    <h6>Processador:</h6>
                                </div>
                                <div class='component-requisit'>
                                    <p>$rr->processador</p>
                                </div>
                            </div>
                            <div class='requireds-game'>
                                <div class='title-requisit'>
                                    <h6>Memória RAM:</h6>
                                </div>
                                <div class='component-requisit'>
                                    <p>$rr->memoria_ram <span>GB</span></p>
                                </div>
                            </div>
                            <div class='requireds-game'>
                                <div class='title-requisit'>
                                    <h6>Capacidade de Armazenamento:</h6>
                                </div>
                                <div class='component-requisit'>
                                    <p>$rr->espaco_armazenamento <span>GB</span></p>
                                </div>
                            </div>
                            <div class='requireds-game'>
                                <div class='title-requisit'>
                                    <h6>Placa de Vídeo:</h6>
                                </div>
                                <div class='component-requisit last-component'>
                                    <p>$rr->placa_video</p>
                                </div>
                            </div>";
                    ?>
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
    <?php
        require_once('footer.php');
    ?>
</body>
</html>