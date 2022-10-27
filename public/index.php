<?php

    require __DIR__ . "/../vendor/autoload.php";

    use php\ListaConquistas\Controllers\Conquista\{UpdateTituloConquistaForm,DeleteAllConquista,DeleteConquista,InsertConquistaForm,InsertConquista,SelectConquista,SelectConquistaFromJogo,UpdateDescricaoConquistaForm,UpdateDescricaoConquista,UpdateTituloConquista};
    use php\ListaConquistas\Controllers\Jogo\{DeleteJogo,InsertJogo,SelectAllJogo,SelectJogo,UpdateGeneroJogo,UpdateTituloJogo,UpdateTituloJogoForm,UpdateGeneroJogoForm};
    use php\ListaConquistas\Controllers\{Error404,Error404view};


    $username = "root";
    $password = "mulhersapatona";
    $pdo = new PDO('mysql:host=localhost;dbname=controle_conquistas', $username, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    $routes = require __DIR__ . "/../src/routes/routes.php";
    $url = $_SERVER["PATH_INFO"];

    if(array_key_exists($url,$routes)){
        $controllerClass = $routes[$url];
        $class = new $controllerClass($pdo);
        $class->http();
    }else{
        $errorClass = new Error404();
        $errorClass->http();
    }