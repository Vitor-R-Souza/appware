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
    ?>
    <main>
        <aside class="categ">
            <form action="filter.php" method="post">
                <div class="category">

                </div>
                <div class="age">

                </div>
                <div class="favorites">

                </div>
            </form>
        </aside>
        <div class="catalog">

        </div>
    </main>
    <?php
        require_once('footer.php');
    ?>
</body>
</html>