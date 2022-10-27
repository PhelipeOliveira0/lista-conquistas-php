<?php

    namespace php\ListaConquistas\Controllers\Conquista;
    use php\ListaConquistas\Models\Conquista;


    class SelectConquistaFromJogo{

        protected \PDO $pdo;

        public function __construct(\PDO $pdo){
            $this->pdo = $pdo;
        }


        public function http(int $id){
            $pdo = $this->pdo;
            $query = "SELECT * FROM conquistas WHERE id_jogo = ?;";
        
            $select = $pdo->prepare($query);
            $select->bindValue(1,$id);
            $select->execute();
            $fetch = $select->fetchAll();
        
            $jogos = [];
        
            foreach($fetch as $jogo){
                $jogos[] = new Conquista($jogo["id"], $jogo["titulo"], $jogo["descricao"], $jogo["id_jogo"]);
            }
            return $jogos;
        }
    }
