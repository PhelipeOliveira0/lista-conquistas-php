<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        require __DIR__ ."/../../css/reset.html";
        require __DIR__ ."/../../css/header.html";
        require __DIR__ ."/../../css/formularioConquista.html";
        require __DIR__ ."/../../css/header-att.html";
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

<section class="principal">
    <form action="/criarConquista" method="post" class="formulario">
        <label for="titulo">Titulo:</label>
        <input hidden type="number" name="jogoId" id="" value=<?=$id;?>>
        <input type="text" name="titulo" id="titulo" placeholder="pulador" required>
        <label for="descricao">Descricao:</label>
        <textarea name="descricao" id="descricao" cols="30" rows="10" placeholder="Vá até o castelo, pule 30 vezes seguida e mate 3 inimigos" required></textarea>
        <input type="submit" value="enviar">
    </form>
</section>
<?php         require __DIR__ . "/../../javascript/header.php"; ?>
</body>
</html>