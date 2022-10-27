<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        require __DIR__ ."/../css/reset.html";
        require __DIR__ ."/../css/header.html";
        require __DIR__ ."/../css/error.html";
        require __DIR__ ."/../css/header-att.html";
    ?>
    <title>Adicionar conquista</title>
</head>
<body>
<header>
    <ul class="opcoes__header">
        <li class="categorias__header" onclick="tiraMostraMenu()">CATEGORIAS</li>
        <li class="categorias__header"><a href="/home" class="link__header">HOME</a></li>
        <ul class="lista-menu">
            <?php foreach($generos as $genero){ ?>
                <a href=/listarPor?genero=<?= $genero; ?> class="lista-menu__link"><li class="lista-menu__item"><?= $genero; ?></li></a>
            <?php }?>
        </ul>
        
    </ul>
</header>
<body>
    <div class="error__div">
        <h1 class="error">ERROR 404</h1>
    </div>

    <?php require __DIR__ . "/../javascript/header.php"; ?>
</body>