<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        require __DIR__ ."/../../css/reset.html";
        require __DIR__ ."/../../css/header.html";
        require __DIR__ ."/../../css/infoJogo.html";
        require __DIR__ ."/../../css/main.html";
        require __DIR__ ."/../../css/header-info.html";
    ?>
    <title>Informações jogo</title>
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


    <section class="informacoes__jogo">
        <div class="links">
            <a href=editar-titulo?id=<?=$jogo->id;?> class="link">Editar Titulo</a>
            <a href=editar-genero?id=<?=$jogo->id;?> class="link">Editar genero</a>
        </div>
        <div class="subheader">
            <div class="apresentacao">
                <h1 class="titulo"><?= $jogo->titulo;?></h1>
            </div>
            <div class="genero">
                <p><?= $jogo->genero;?></p>
            </div>
        </div>
    </section>

    <section class="area">


        <ul class="lista">
            <div class="alinhamento__botao">
                <a href=/inserir-conquista?id=<?= $jogo->id;?> class="adiciona">ADICIONAR JOGO</a href="/adicionar-jogo">
            </div>
            
            <?php 
                foreach($conquistas as $conquista){
             ?>
            <li class="item-lista">
                <p class="titulo"><?= $conquista->titulo; ?></p>
                <div class="botoes">
                    <a href=info-conquista?id=<?=$conquista->id; ?> class="info">informações</a>
                    <a href=deletar-conquista?id=<?=$conquista->id; ?> class="delete">apagar</a>
                </div>

            </li>
            <?php }?>
        </ul>
    </section>

    <?php         require __DIR__ . "/../../javascript/header.php"; ?>
</body>
</html>