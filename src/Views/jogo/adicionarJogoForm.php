<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        require __DIR__ ."/../../css/reset.html";
        require __DIR__ ."/../../css/header.html";
        require __DIR__ ."/../../css/formularioJogo.html";
        require __DIR__ ."/../../css/header-att.html";
    ?>
    <title>Adicionar Jogo</title>
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

    <section class="formulario">
        <form action="/criarJogo" method="post" class="formulario__enviar-jogo">

            <label for="titulo" class="formulario__label">Titulo:</label>
            <input type="text" name="titulo" id="titulo" class="formulario__input formulario__input-titulo" placeholder="super marcio bross" required>
            <label for="genero" class="formulario__label">Genero:</label>
            <input type="text" name="genero" id="genero" class="formulario__input formulario__input-genero" placeholder="plataforma 2D" required>
            

            <input type="submit" value="Enviar" class="formulario__botao">
        </form>
                    
    </section>
    

    <?php         require __DIR__ . "/../../javascript/header.php"; ?>
</body>
</html>