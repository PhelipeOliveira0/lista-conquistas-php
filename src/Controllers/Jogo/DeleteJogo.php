<?php

    namespace php\ListaConquistas\Controllers\Jogo;

    class DeleteJogo{

        protected \PDO $pdo;

        public function __construct(\PDO $pdo){
            $this->pdo = $pdo;
        }


        public function http(){
            $pdo = $this->pdo;
            $query = "DELETE FROM jogos WHERE id = ?;";
            $queryConquistas = "DELETE FROM conquistas WHERE id_jogo = ?;";
            $id = filter_input(INPUT_GET,"id",FILTER_VALIDATE_INT);

            $deleteConquistas = $pdo->prepare($queryConquistas);
            $deleteConquistas->bindValue(1, $id);
            $deleteConquistas->execute(); 
        
            $delete = $pdo->prepare($query);
            $delete->bindValue(1,$id);
            $delete->execute();
            header("Location: /home",false,302);
            
        }

    }


