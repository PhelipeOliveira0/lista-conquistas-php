<?php


    use php\ListaConquistas\Controllers\Conquista\{UpdateTituloConquistaForm,UpdateDescricaoConquistaForm,DeleteAllConquista,DeleteConquista,InsertConquista,InsertConquistaForm,SelectConquista,SelectConquistaFromJogo,UpdateDescricaoConquista,UpdateTituloConquista};
    use php\ListaConquistas\Controllers\Jogo\{DeleteJogo,InsertJogo,InsertJogoForm,SelectAllJogo,SelectJogo,SelectJogoFrom,UpdateGeneroJogo,UpdateTituloJogo,UpdateTituloJogoForm,UpdateGeneroJogoForm};
    use php\ListaConquistas\Controllers\Error404view;

    $routes = [
        "/home" => SelectAllJogo::class,
        "/adicionar-jogo" => InsertJogoForm::class,
        "/listarPor" => SelectJogoFrom::class,
        "/criarJogo" => InsertJogo::class,
        "/info-jogo" => SelectJogo::class,
        "/apagar-jogo" => DeleteJogo::class,
        "/inserir-conquista" => InsertConquistaForm::class,
        "/criarConquista" => InsertConquista::class,
        "/editar-titulo" => UpdateTituloJogoForm::class,
        "/editar-genero" => UpdateGeneroJogoForm::class,
        "/update-titulo" => UpdateTituloJogo::class,
        "/editar-genero" => UpdateGeneroJogoForm::class,
        "/update-genero" => UpdateGeneroJogo::class,
        "/deletar-conquista" => DeleteConquista::class,
        "/info-conquista" => SelectConquista::class,
        "/editar-descricao-conquista" => UpdateDescricaoConquistaForm::class,
        "/update-descricao-conquista" => UpdateDescricaoConquista::class,
        "/editar-titulo-conquista" => UpdateTituloConquistaForm::class,
        "/update-titulo-conquista" => UpdateTituloConquista::class,
        "/error404" => Error404view::class,
    ];

    return $routes;