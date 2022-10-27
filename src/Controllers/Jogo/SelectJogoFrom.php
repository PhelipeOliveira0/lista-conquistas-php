<?php

    namespace php\ListaConquistas\Controllers\Jogo;
    use php\ListaConquistas\Models\Jogo;


    class SelectJogoFrom{
        
        protected \PDO $pdo;

        public function __construct(\PDO $pdo){
            $this->pdo = $pdo;
        }
        
        
        public function http(){
            
            $genero = filter_input(INPUT_GET, "genero",FILTER_SANITIZE_STRING);
            $pdo = $this->pdo;
            $query = "SELECT * FROM jogos WHERE genero = ?;";

            $select = $pdo->prepare($query);
            $select->bindValue(1,$genero);
            $select->execute();

            $fetch = $select->fetchAll();

            $jogos = [];

            foreach($fetch as $jogo){
                $jogos[] = new Jogo($jogo["id"],$jogo["titulo"],$jogo["genero"]);
            }

            $queryGenero = "SELECT genero FROM jogos GROUP BY genero;";
            
            $selectHeader = $pdo->query($queryGenero);
            $fetchHeader = $selectHeader->fetchAll();
            
            $generos = [];
            foreach($fetchHeader as $genero){
                $generos[] = $genero["genero"];
            }

            require __DIR__ . "/../../Views/jogo/home.php";
        }
    }