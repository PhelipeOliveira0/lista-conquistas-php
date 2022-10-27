<?php

    namespace php\ListaConquistas\Controllers\Jogo;
    use php\ListaConquistas\Models\Jogo;

    class SelectAllJogo{

        protected \PDO $pdo;

        public function __construct(\PDO $pdo){
            $this->pdo = $pdo;
        }

        public function http(){
            $pdo = $this->pdo;
            $query = "SELECT * FROM jogos";

            $select = $pdo->query($query);
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

