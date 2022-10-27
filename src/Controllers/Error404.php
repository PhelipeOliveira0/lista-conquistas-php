<?php

    namespace php\ListaConquistas\Controllers;

    class Error404{

        public function http(){
            header("Location: error404",302,false);
        }

    }

?>