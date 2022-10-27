<?php

    namespace php\ListaConquistas\Controllers\Jogo;

    class InsertJogo{

        protected \PDO $pdo;

        public function __construct(\PDO $pdo){
            $this->pdo = $pdo;
        }


        public function http(){
            $titulo = filter_input(INPUT_POST, "titulo",FILTER_SANITIZE_STRING);
            $genero = filter_input(INPUT_POST, "genero",FILTER_SANITIZE_STRING);

            $pdo = $this->pdo;
            $query = "INSERT INTO jogos(titulo, genero) VALUES (:titulo, :genero);";


            $insert = $pdo->prepare($query);
            $insert->bindValue(":titulo", $titulo);
            $insert->bindValue(":genero", $genero);
        
            $insert->execute();

            header("Location: /home",false,302);
        }

    }

