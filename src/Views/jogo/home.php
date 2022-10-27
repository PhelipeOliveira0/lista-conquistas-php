<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        require __DIR__ ."/../../css/reset.html";
        require __DIR__ ."/../../css/header.html";
        require __DIR__ ."/../../css/main.html";
        require __DIR__ ."/../../css/filtro.html";
    ?>
    <title>HOME</title>
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
       
        <div class="pesquisa__header">
            <input type="search" id="filtro" class="herder__busca" placeholder="Qual jogo esta procurando ?">
        </div>
    </header>

    <section class="area">
            <ul class="lista">
                <div class="alinhamento__botao">
                    <a href="/adicionar-jogo" class="adiciona">ADICIONAR JOGO</a href="/adicionar-jogo">
                </div>
                        
                <?php
                    foreach($jogos as $jogo){
                ?>
                <li class="item-lista jogos">
                    <p class="titulo"><?= $jogo->titulo?></p>
                    <div class="botoes">
                        <a href=/info-jogo?id=<?=$jogo->id;?> class="info" id="info-jogo<?= $jogo->id ?>"> informações</a>
                        <a href=/apagar-jogo?id=<?= $jogo->id ?> class="delete" id="apaga-jogo<?= $jogo->id?>" onclick="apagarItemHome()">apagar</a>
                    </div>
                    
                    <?php }?>
                </li>                 
               
            </ul>
    </section>
   
    <?php
        require __DIR__ . "/../../javascript/header.php";
        require __DIR__ . "/../../javascript/filtro.php";
    ?>


</body>
</html>