<?php

    namespace php\ListaConquistas\Controllers\Conquista;

    class UpdateDescricaoConquistaForm{

        protected \PDO $pdo;

        public function __construct(\PDO $pdo){
            $this->pdo = $pdo;
        }

        public function http(){

            $id = filter_input(INPUT_GET,"id",FILTER_VALIDATE_INT);

            $pdo = $this->pdo;
            $queryGenero = "SELECT genero FROM jogos GROUP BY genero;";
            
            $selectHeader = $pdo->query($queryGenero);
            $fetchHeader = $selectHeader->fetchAll();
            
            $generos = [];
            foreach($fetchHeader as $genero){
                $generos[] = $genero["genero"];
            }

            require __DIR__ . "/../../Views/conquista/editarDescricaoJogo.php";

        }
    }