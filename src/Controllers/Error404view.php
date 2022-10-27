<?php

    namespace php\ListaConquistas\Controllers;

    class Error404view{
        
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
        
            require __DIR__ . "/../Views/error404.php";
        }
    }


?>