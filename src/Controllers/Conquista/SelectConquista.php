<?php

    namespace php\ListaConquistas\Controllers\Conquista;
    use php\ListaConquistas\Models\Conquista;

    class SelectConquista{
    
        protected \PDO $pdo;

        public function __construct(\PDO $pdo){
            $this->pdo = $pdo;
        }
     
     
        public function http(){
            
            $id = filter_input(INPUT_GET,"id",FILTER_VALIDATE_INT);
            $pdo = $this->pdo;
            $query = "SELECT * FROM conquistas WHERE id = ?;";
        
            $select = $pdo->prepare($query);
            $select->bindValue(1, $id);
            $select->execute();

            while($fetch = $select->fetch()){
                $conquista = new Conquista($fetch["id"], $fetch["titulo"], $fetch["descricao"], $fetch["id_jogo"]);
            }
            
            

            $queryGenero = "SELECT genero FROM jogos GROUP BY genero;";
            
            $selectHeader = $pdo->query($queryGenero);
            $fetchHeader = $selectHeader->fetchAll();
            
            $generos = [];
            foreach($fetchHeader as $genero){
                $generos[] = $genero["genero"];
            }

            require __DIR__ . "/../../Views/conquista/infoConquista.php";
        }
    }