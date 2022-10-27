<?php

    namespace php\ListaConquistas\Controllers\Conquista;


    class DeleteAllConquista{

        protected \PDO $pdo;

        public function __construct(\PDO $pdo){
            $this->pdo = $pdo;
        }


        public function http(int $id){
            $pdo = $this->pdo;
            $query = "DELETE FROM conquistas WHERE id_jogo = ?;";
        
            $delete = $pdo->prepare($query);
            $delete->bindValue(1, $id);
            $delete->execute();
        }

    }
