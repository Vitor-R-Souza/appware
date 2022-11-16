<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar senha</title>
    <link rel="stylesheet" href="estilos/nav.css">
    <link rel="stylesheet" href="estilos/rec-senha.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav>
            <input type="checkbox" name="" id="check">
            <a href="#" class="logo">AppWare</a>
            <div class="box-search">
                <section class="caixa-search">
                    <input class="caixa-texto" type="text" name="" placeholder="Pesquisar...">
                    <a class="botao-search" href="#">
                        <i class="fas fa-search"></i>
                    </a>
                </section>
            </div>
            <!-- <div class="mobile-menu">
                <div class="l1"></div>
                <div class="l2"></div>
                <div class="l3"></div>
            </div> -->
            <ul class="nav-list">
                <li class="nav-link" style="--i: .6s"><a href="home.html">Início</a></li>
                <li class="nav-link" style="--i: .6s"><a href="about.html">Sobre</a></li>
                <li class="nav-link" style="--i: .6s">
                    <a href="#">Conta<i class="fas fa-caret-down"></i></a>
                    <div class="dropdown">
                        <ul>
                            <li class="dropdown-link"><a href="login.html"><button id="login"><i class="fa-solid fa-right-to-bracket" id="icon-login"></i>Entrar</button></a></li>

                            <li class="dropdown-link"><a href="#" class="link-icon"><i class="fa-solid fa-user"></i>Perfil</a></li><!--TENTAR PADRONIZAR ICONE E FUNCAO-->

                            <li class="dropdown-link"><a href="#" class="link-icon"><i class="fa-solid fa-circle-question"></i>Suporte</a></li>

                            <li class="dropdown-link"><a href="pre-register.html" class="link-icon"><i class="fa-regular fa-address-card"></i>Cadastrar</a></li>

                            <div class="arrow"></div>
                        </ul>
                    </div>
                </li>
                <li class="nav-link" style="--i: .6s"><a href="#">Catálogo</a></li>
            </ul>
            <div class="hamburger-menu-container">
                <div class="hamburger-menu">
                    <div></div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <form action="send.php" method="post" class="login">
            <h2>Recuperar senha</h2>
            <p>Digite o e-mail na qual vinculou sua senha para mandarmos a nova senha de sua conta.</p> 
            <div class="box-user">
                <input type="text" name="user" id="user" required>
                <label for="user">E-mail</label>
            </div>
            
            <!--<div class="box-user">
                <input type="password" name="senha" id="senha" required>
                <label for="">Senha</label>
            </div>

            <div class="connected-remember">
                <div class="check">
                    <input type="checkbox" name="connected" id="connected">
                    <span class="checkmark"></span>
                    <label for="connected" class="checkmark">Lembrar-me</label>
                </div>
                <div class="new-senha"><a href="#">Esqueceu a senha?</a></div>
            </div>-->
            <div class="login-sign">
                <div>
                    <input type="submit" value="Enviar" id="btn" name="bt">
                </div>
                <!--<div>
                    <p id="sign-in">Não tem uma conta? <a href="pre-register.html">Cadastrar agora</a></p>
                </div>-->
            </div>
        </form>
    </main>
    <script src="scripts/mobile-navbar.js"></script>
</body>
</html>