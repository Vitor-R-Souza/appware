<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="estilos/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <script defer src="scripts/toggle-menu.js"></script>
</head>
<body>
    <header>
        <input type="checkbox" name="" id="check">
        <nav class="navbar">
            <a href="index.php" class="logo">AppWare</a>
            <form class="search_box" method="get" action="filter.php">
                <input type="search" name="search" id="search" placeholder="Digite aqui...">
                <button type="submit"><span class="fa fa-search"></span></button>
            </form>
            
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="about.php">Sobre</a></li>
                <li><a href="contact.php">Contato</a></li>
                <li><a href="filter.php">Catalógo</a></li>
            </ul>
            <img src="imagens/profile.png" class="user-pic" onclick="toggleMenu()">
            <label for="check" class="bar">
                <span class="fa fa-bars" id="bars"></span>
                <span class="fa fa-times" id="times"></span>
            </label>
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <?php
                        if(empty($_SESSION['user'])){
                            echo "<div class='user-info'>
                                    <img src='imagens/user.png'>
                                    <h3>Conecte-se</h3>
                                </div>
                                <hr>
                                <a href='login.php' class='sub-menu-link'>
                                    <i class='fa-solid fa-right-from-bracket'></i><p>Entrar</p><span>></span>
                                </a>
                                <a href='pre-register.php' class='sub-menu-link'>
                                    <i class='fa-solid fa-address-card'></i><p>Cadastrar</p><span>></span>
                                </a>
                                <a href='contact.php' class='sub-menu-link'>
                                    <i class='fa-solid fa-circle-question'></i><p>Suporte</p><span>></span>
                                </a>";
                        }else{
                            echo" <div class='user-info'>
                                    <img src='imagens/user.png'>
                                    <h3>$_SESSION[user]</h3>
                                </div>
                                    <hr>
                                    <a href='profile.php' class='sub-menu-link'>
                                        <i class='fa-solid fa-user'></i><p>Perfil</p><span>></span>
                                    </a>
                                    <a href='contact.php' class='sub-menu-link'>
                                        <i class='fa-solid fa-circle-question'></i><p>Suporte</p><span>></span>
                                    </a>
                                    <a href='logout.php' class='sub-menu-link'>
                                        <i class='fa-solid fa-right-from-bracket'></i><p>Logout</p><span>></span>
                                    </a>";
                        }
                    ?>
                    <!-- <a href="#" class="sub-menu-link">
                        <p>Perfil</p><span>></span>
                    </a> -->
                </div>
            </div>
        </nav>
    </header>
</body>
</html>

