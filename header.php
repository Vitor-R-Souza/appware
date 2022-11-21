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
<?php
    echo "<header>";
        echo "<input type='checkbox' name='' id='check'>";
        echo "<nav class='navbar'>";
            echo "<a href='index.php' class='logo'>AppWare</a>";

            echo "<form class='search_box' method='get' action='filter.php'>";
                echo "<input type='search' name='search' id='search' placeholder='Digite aqui...'>";
                echo "<button type='submit'><span class='fa fa-search'></span></button>";

            echo "</form>";
            /*
            <!-- <form action="list-catalog" method="get" id="search">
                <input type="text" name="key-order" id="key-order" size="10">
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
            </form> -->*/

            echo "<ul>
                <li><a href='index.php'>Início</a></li>
                <li><a href='about.php'>Sobre</a></li>
                <li><a href='contact.php'>Contato</a></li>
                <li><a href='filter.php'>Catalógo</a></li>
            </ul>";

            echo "<img src='imagens/profile.png' class='user-pic' onclick='toggleMenu()'>";

            echo "<label for='check' class='bar'>
                <span class='fa fa-bars' id='bars'></span>
                <span class='fa fa-times' id='times'></span>
            </label>";
            
                if(empty($_SESSION['nome_usuario'])){
                    echo "<div class='sub-menu-wrap' id='subMenu'>";
                    echo "<div class='sub-menu'>";
                        echo "<div class='user-info'>";
                        echo "<img src='imagens/user.png'>";
                        echo "<h3>" . $_SESSION['nome_usuario'] . "</h3>";
                        echo "</div>";
                    echo "<hr>
                    <a href='login.php' class='sub-menu-link'>
                        <i class='fa-solid fa-right-from-bracket'></i><p>Entrar</p><span>></span>
                    </a>
                    <a href='pre-register.php' class='sub-menu-link'>
                        <i class='fa-solid fa-address-card'></i><p>Cadastrar</p><span>></span>
                    </a>
                    <a href'contact.php' class='sub-menu-link'>
                        <i class='fa-solid fa-circle-question'></i><p>Suporte</p><span>></span>
                    </a>";
                    echo "</div>";
                    echo "</div>";
                } else{
                    echo "<div class='sub-menu-wrap' id='subMenu'>";
                    echo "<div class='sub-menu'>";
                    echo "<div class='user-info'>
                        <img src='imagens/user.png'>
                        <h3>...</h3>
                        </div>
                        <hr>";
                    if((is_dev()) || is_user() || is_adm()){
                        
                        echo "<a href='profile.php' class='sub-menu-link'>
                        <i class='fa-solid fa-user'></i><p>Perfil</p><span>></span>
                        </a>";
                        
                    }
                    echo "<a href='contact.php' class='sub-menu-link'>
                    <i class='fa-solid fa-circle-question'></i><p>Suporte</p><span>></span>
                    </a>
                    <a href='logout.php' class='sub-menu-link'>
                    <i class='fa-solid fa-right-from-bracket'></i><p>Sair</p><span>></span>
                    </a>";
                    echo "</div>";
                    echo "</div>";
                    }
                
                /*
                echo"
                    <div class='sub-menu-wrap' id='subMenu'>
                        <div class='sub-menu'>
                            <div class='user-info'>
                                <img src='imagens/user.png'>
                                <h3>Admin</h3>
                            </div>
                            <hr>
                            <a href='profile.php' class='sub-menu-link'>
                                <i class='fa-solid fa-user'></i><p>Perfil</p><span>></span>
                            </a>
                            <a href='contact.php' class='sub-menu-link'>
                                <i class='fa-solid fa-circle-question'></i><p>Suporte</p><span>></span>
                            </a>
                            <a href'#' class='sub-menu-link'>
                                <i class='fa-solid fa-right-from-bracket'></i><p>Logout</p><span>></span>
                            </a>
                            <!-- <a href='#' class='sub-menu-link'>
                                <p>Perfil</p><span>></span>
                            </a> -->
                        </div>
                    </div>"*/
        echo "</nav>";
    echo "</header>";
    ?>
</body>
</html>