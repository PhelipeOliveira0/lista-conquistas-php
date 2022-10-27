<?php

    namespace php\ListaConquistas\Controllers\Jogo;
    use php\ListaConquistas\Models\{Jogo,Conquista};

    class SelectJogo{

        protected \PDO $pdo;

        public function __construct(\PDO $pdo){
            $this->pdo = $pdo;
        }

        public function http(){
            $pdo = $this->pdo;
            $query = "SELECT * FROM jogos WHERE id = ?";
        
            $id = filter_input(INPUT_GET,"id",FILTER_VALIDATE_INT);
            $select = $pdo->prepare($query);
            $select->bindValue(1, $id);
            $select->execute();
            
            while($fetch = $select->fetch()){
                $jogo = new Jogo($fetch["id"],$fetch["titulo"],$fetch["genero"]);
            }

            $queryGenero = "SELECT genero FROM jogos GROUP BY genero;";
            
            $selectHeader = $pdo->query($queryGenero);
            $fetchHeader = $selectHeader->fetchAll();
            
            $generos = [];
            foreach($fetchHeader as $genero){
                $generos[] = $genero["genero"];
            }


            $query = "SELECT * FROM conquistas WHERE id_jogo = ?;";
        
            $select = $pdo->prepare($query);
            $select->bindValue(1,$id);
            $select->execute();
            $fetchConquista = $select->fetchAll();
        
            $conquistas = [];
        
            foreach($fetchConquista as $conquista){
                $conquistas[] = new Conquista($conquista["id"], $conquista["titulo"], $conquista["descricao"], $conquista["id_jogo"]);
            }
            require __DIR__ . "/../../Views/jogo/infoJogo.php";
        }
    }

        

    



