<?php

    namespace php\ListaConquistas\Controllers\Conquista;


    class UpdateDescricaoConquista{

        protected \PDO $pdo;

        public function __construct(\PDO $pdo){
            $this->pdo = $pdo;
        }

        
        public function http(){
            $id = filter_input(INPUT_GET,"id",FILTER_VALIDATE_INT);
            $descricao = filter_input(INPUT_POST,"descricao",FILTER_SANITIZE_STRING);
            $pdo = $this->pdo;
            $query = "UPDATE conquistas SET descricao = :descricao WHERE id = :id;";

            $update = $pdo->prepare($query);
            $update->bindValue(":descricao", $descricao);
            $update->bindValue(":id", $id);
            $update->execute();
            header("Location: /home",false,302);
        }
    }