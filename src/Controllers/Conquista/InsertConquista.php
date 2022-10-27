<?php

    namespace php\ListaConquistas\Controllers\Conquista;

    class InsertConquista{

        protected \PDO $pdo;

        public function __construct(\PDO $pdo){
            $this->pdo = $pdo;
        }
        
        public function http(){
            $pdo = $this->pdo;
            $query = "INSERT INTO conquistas(titulo, descricao, id_jogo) VALUES(:titulo, :descricao, :id_jogo);";
            $id_jogo = filter_input(INPUT_POST,"jogoId",FILTER_VALIDATE_INT);
            $titulo = filter_input(INPUT_POST, "titulo",FILTER_SANITIZE_STRING);
            $descricao = filter_input(INPUT_POST, "descricao",FILTER_SANITIZE_STRING);

            $insert = $pdo->prepare($query);
            $insert->bindValue(":titulo", $titulo);
            $insert->bindValue(":descricao", $descricao);
            $insert->bindValue(":id_jogo", $id_jogo);
            $insert->execute();
        
            header("Location: /home",false,302);
        }    
    }
