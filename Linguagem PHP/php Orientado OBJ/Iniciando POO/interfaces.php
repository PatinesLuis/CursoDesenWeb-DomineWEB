<?php

    interface equipamentoeletronico{
        public function ligar();
        public function desligar();
    }

    class Geladeira implements equipamentoeletronico{ 
        public function abrirPorta(){
            echo 'abrindo porta';
        }

        public function ligar(){
            echo 'ligar';
        }

        public function desligar(){
            echo 'desligar';
        }
    }

    class Tv{
        public function TrocarCanal(){
            echo 'trocando de  canal';
        }
    }

    $g = new Geladeira();
    $t = new Tv();
?>