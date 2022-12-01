<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="estilos/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <script defer src="scripts/profile.js"></script>
    <script defer src="scripts/profile-validation.js"></script>
</head>
<body>
    <?php
        require_once('requires/connect.php');
        require_once('requires/func.php');
        require_once('header.php');

        $busc = $BD->query("SELECT * FROM usuarios WHERE nome_usuario='$_SESSION[user]' LIMIT 1");
        $reg = $busc->fetch_object();
    ?>
    <main>
        <section class="container">
            <section class="wrapper">
                <div class="profile-indicator">
                    <div class="profile">
                        <!-- <form action="#" method="post"> -->
                        <?php
                            //echo "<form action='#' method='post'>";
                            if(empty($_SESSION['icon'])){
                                /*echo "<div class='photo-profile'>
                                    <input type='file' name='icon' id='ft-perfil' class='my_photo' value='imagens/profile.png'>
                                    <img src='imagens/profile.png' width='150px'>
                                </div>";*/
                                echo "<img src='imagens/profile.png' alt='Profile'>";
                                //<input type='file' name='icon' id='ft-perfil'>
                                //<input type='submit' value=''>
                            }else{
                                echo "<img src='$_SESSION[icon]' alt='Profile'>";
                            }
                            //echo "</form>";
                            echo "<h2>$_SESSION[user]</h2>
                                    <div class='type'><h3>$_SESSION[tipo]</h3></div>";
                        
                            echo "<div class='dados'>
                                    <div class='icon-dado'>
                                        <i class='fa-solid fa-file-signature'></i>
                                        <h4>$reg->nome</h4>
                                    </div>
                                    <div class='icon-dado'>
                                        <i class='fa-solid fa-envelope'></i>
                                        <input type='text' name='email' id='email' size='12' value='$reg->email' disabled>
                                    </div>";
                            if(is_dev() or is_adm()){    
                                echo"<div class='icon-dado'>
                                        <i class='fa-solid fa-building'></i>
                                        <input type='text' name='email' id='email' size='12' value='$reg->empresa' disabled>
                                    </div>
                                    <div class='icon-dado'>
                                        <i class='fa-solid fa-circle-info'></i>
                                        <input type='text' name='email' id='email' size='12' value='$reg->site_empresa' disabled>
                                    </div>
                                </div>";
                            }else{
                                echo"</div>";
                            }
                        ?>
                        <!-- </form> -->
                    </div>
                    <hr>
                    <ul class="indicator">
                        <li class="active" data-target="#edit"><i class="fa-solid fa-pen-to-square"></i> Editar Perfil</li>
                        <li data-target="#history"><i class="fa-solid fa-list"></i> Histórico</li>
                        <li data-target="#favorites"><i class="fa-solid fa-heart"></i> Favoritos</li>
                        <li data-target="#machines"><i class="fa-solid fa-computer"></i> Máquinas</li>
                        <li data-target="#publicateds"><i class="fa-solid fa-gamepad"></i> Publicados</li>
                    </ul>
                </div>
                <ul class="content">
                    <li class="active" id="edit">
                        <div id="historico-favoritos">
                            <h1>Editar Perfil</h1>
                            <iframe src="edit-profile.php" frameborder="0"></iframe>
                        </div>
                    </li>
                    <li id="history">
                        <div id="historico-favoritos">
                            <h1>Histórico</h1>
                            <iframe src="history.php" frameborder="0"></iframe>
                        </div>
                    </li>
                    <li id="favorites">
                        <div id="historico-favoritos">
                            <h1>Favoritos</h1>
                            <iframe src="favorites.php" frameborder="0"></iframe>
                        </div>
                    </li>
                    <li id="machines">
                        <div id="historico-favoritos">
                            <h1>Máquinas</h1>
                            <iframe src="machines.php" frameborder="0"></iframe>
                        </div>
                    </li>
                    <li id="publicateds">
                        <h1>Settings</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Velit quaerat magnam sit, nobis sed cum eius voluptatem quis facilis sunt, quia? Non atque, facere obcaecati veniam! Impedit atque, facilis similique doloribus quidem quibusdam quod! Quam odit quasi quia accusantium natus eos accusamus sequi repellat modi reiciendis vitae provident tenetur sint tempora quaerat expedita facere, assumenda quos consequatur minima quod deleniti.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, sapiente.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error molestias quasi est expedita, a pariatur deleniti cum reiciendis similique cupiditate?</p>
                    </li>
                </ul>
            </section>
        </section>
    </main>
    
</body>
</html>