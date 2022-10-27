<?php

    namespace php\ListaConquistas\Models;

    class Conquista{

        protected ?int $id;
        protected string $titulo;
        protected string $descricao;
        protected int $id_jogo;

        
        public function __construct(?int $id, string $titulo, string $descricao, int $id_jogo){
            $this->id = $id;
            $this->titulo = $titulo;
            $this->descricao = $descricao;
            $this->id_jogo = $id_jogo;
        }

        public function __get(string $valor){
            $funcao = "buscar" . ucfirst($valor);
            return $this->$funcao();
        }


        public function buscarId(){
            return $this->id;
        }

        public function buscarTitulo(){
            return $this->titulo;
        }

        public function buscarDescricao(){
            return $this->descricao;
        }

        public function buscarId_jogo(){
            return $this->id_jogo;
        }
    }