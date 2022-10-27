<?php

    namespace php\ListaConquistas\Models;

    use php\ListaConquistas\Models\Conquista;

    Class Jogo{

        protected ?int $id; 
        protected string $titulo;
        protected string $genero;
        protected array $conquistas = [];

        public function __construct(?int $id, string $titulo, string $genero){
            $this->id = $id;
            $this->titulo = $titulo;
            $this->genero = $genero;
        }

        public function __get(string $valor){
            $funcao = "buscar" . ucfirst($valor);
            return $this->$funcao();
        }

        public function __toString(){
            $string = "Id: " . $this->id . PHP_EOL ."Titulo: " . $this->titulo . PHP_EOL . "Genero: " . $this->genero;
            return $string;
        }


        public function buscarId(){
            return $this->id;
        }

        public function buscarTitulo(){
            return $this->titulo;
        }

        public function buscarGenero(){
            return $this->genero;
        }

        public function buscarConquistas(){
            return $this->conquistas;
        }

        
        public function addConquista(Conquista $conquista){
            $this->conquistas[] = $conquista;
        }
    }