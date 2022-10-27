<?php

    namespace php\ListaConquistas\Controllers\Conquista;


    class UpdateTituloConquista{
    
        protected \PDO $pdo;

        public function __construct(\PDO $pdo){
            $this->pdo = $pdo;
        }


        public function http(){
            $id = filter_input(INPUT_GET,"id",FILTER_VALIDATE_INT);
            $titulo = filter_input(INPUT_POST,"titulo",FILTER_SANITIZE_STRING);
            $pdo = $this->pdo;
            $query = "UPDATE conquistas SET titulo = :titulo WHERE id = :id;";
        
            $update = $pdo->prepare($query);
            $update->bindValue(":id", $id);
            $update->bindValue(":titulo", $titulo);
            $update->execute();
            header("Location: /home",false,302);
        }
    }


