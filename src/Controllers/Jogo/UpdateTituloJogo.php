<?php

    namespace php\ListaConquistas\Controllers\Jogo;

    class UpdateTituloJogo{

        protected \PDO $pdo;

        public function __construct(\PDO $pdo){
            $this->pdo = $pdo;
        }

        public function http(){

            $id = filter_input(INPUT_GET,"id",FILTER_VALIDATE_INT);
            $titulo = filter_input(INPUT_POST,"titulo",FILTER_SANITIZE_STRING);
            $pdo = $this->pdo;
            $query = "UPDATE jogos SET titulo = :titulo WHERE id = :id;";
        
            $update = $pdo->prepare($query);
            $update->bindValue(":titulo",$titulo);
            $update->bindValue(":id",$id);
            $update->execute();
            
            header("Location: /home",false,302);
        }

    }


