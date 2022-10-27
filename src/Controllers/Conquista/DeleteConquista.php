<?php

    namespace php\ListaConquistas\Controllers\Conquista;


    class DeleteConquista{

        protected \PDO $pdo;

        public function __construct(\PDO $pdo){
            $this->pdo = $pdo;
        }

        
        public function http(){
            
            $id = filter_input(INPUT_GET,"id",FILTER_VALIDATE_INT);
            $pdo = $this->pdo;
            $query = "DELETE FROM conquistas WHERE id = ?";
        
            $delete = $pdo->prepare($query);
            $delete->bindValue(1, $id);
            $delete->execute(); 
            header("Location: /home",false,302);
        }
    }
