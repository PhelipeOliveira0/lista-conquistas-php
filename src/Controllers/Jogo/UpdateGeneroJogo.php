<?php

    namespace php\ListaConquistas\Controllers\Jogo;

    class UpdateGeneroJogo{

        protected \PDO $pdo;

        public function __construct(\PDO $pdo){
            $this->pdo = $pdo;
        }


        public function http(){
            
            $id = filter_input(INPUT_GET,"id",FILTER_VALIDATE_INT);
            $genero = filter_input(INPUT_POST,"genero",FILTER_SANITIZE_STRING);
            $pdo = $this->pdo;
            $query = "UPDATE jogos SET genero = :genero WHERE id = :id";
            
            $upadate = $pdo->prepare($query);
            $upadate->bindValue(":genero", $genero);
            $upadate->bindValue(":id",$id);
            $upadate->execute();
            header("Location: /home",false,302);
        }


    }