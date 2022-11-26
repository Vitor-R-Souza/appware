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
    ?>
    <main>
        <section class="container">
            <section class="wrapper">
                <div class="profile-indicator">
                    <div class="profile">
                        <img src="imagens/profile.png" alt="Profile">
                        <h2>Admin</h2>
                        <div class="type"><h3>Admin</h3></div>
                        <div class="dados">
                            <div class="icon-dado">
                                <i class="fa-solid fa-file-signature"></i>
                                <h4>Admin LDR</h4>
                            </div>
                            <div class="icon-dado">
                                <i class="fa-solid fa-envelope"></i>
                                <input type="text" name="email" id="email" size="12" value="admin-ldr@gmail.com" disabled>
                            </div>
                            <div class="icon-dado">
                                <i class="fa-solid fa-building"></i>
                                <h4>LDR Technology</h4>
                            </div>
                            <div class="icon-dado">
                                <i class="fa-solid fa-circle-info"></i>
                                <h4>ldr-tech.com.br</h4>
                            </div>
                        </div>
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
                        <h1>Home</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error molestias quasi est expedita, a pariatur deleniti cum reiciendis similique cupiditate?</p>
                        <p>Lorem, ipsum dolor sit, amet consectetur adipisicing elit. A deserunt fugiat, consequatur tenetur earum doloribus amet repellat quae illum dolore laborum voluptatum, autem, praesentium sunt soluta natus. Voluptates, quas tenetur.</p>
                        <p>Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus velit alias facere ducimus quidem tenetur facilis cum architecto exercitationem ratione suscipit vel dignissimos totam qui ex error cupiditate rem, ipsa, quam magnam veniam inventore. Porro iure, nobis officia similique minima eaque obcaecati eos magnam, nisi quos aut, ipsam recusandae laudantium!</p>
                    </li>
                    <li id="history">
                        <div id="historico-favoritos">
                            <h1>Histórico</h1>
                            <iframe src="history.php" frameborder="0"></iframe>
                        </div>
                    </li>
                    <li id="favorites" style="background-color: #770808;">
                        <div id="historico-favoritos">
                            <h1>Favoritos</h1>
                            <iframe src="favorites.php" frameborder="0"></iframe>
                        </div>
                    </li>
                    <li id="machines">
                        <h1>Settings</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Velit quaerat magnam sit, nobis sed cum eius voluptatem quis facilis sunt, quia? Non atque, facere obcaecati veniam! Impedit atque, facilis similique doloribus quidem quibusdam quod! Quam odit quasi quia accusantium natus eos accusamus sequi repellat modi reiciendis vitae provident tenetur sint tempora quaerat expedita facere, assumenda quos consequatur minima quod deleniti.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, sapiente.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error molestias quasi est expedita, a pariatur deleniti cum reiciendis similique cupiditate?</p>
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