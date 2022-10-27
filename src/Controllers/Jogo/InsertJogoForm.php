<?php

    namespace php\ListaConquistas\Controllers\Jogo;
    use php\ListaConquistas\Models\Jogo;


    class InsertJogoForm{
        
        protected \PDO $pdo;

        public function __construct(\PDO $pdo){
            $this->pdo = $pdo;
        }
        
        public function http(){

            $pdo = $this->pdo;
            $queryGenero = "SELECT genero FROM jogos GROUP BY genero;";
            
            $selectHeader = $pdo->query($queryGenero);
            $fetchHeader = $selectHeader->fetchAll();
            
            $generos = [];
            foreach($fetchHeader as $genero){
                $generos[] = $genero["genero"];
            }

            require __DIR__ . "/../../Views/Jogo/adicionarJogoForm.php";
        }
    }