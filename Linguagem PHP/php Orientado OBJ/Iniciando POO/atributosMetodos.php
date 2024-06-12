<?php

class Exemplo{
    public static $atributo1 = 'eu sou statico';
    public $atributo2 = 'eu sou normal';

    public static function metodo1(){
        echo 'eu sou um metodo estatico';
    }

    public function metodo2(){
        echo 'eu sou um método normal';
    }

}

echo Exemplo::$atributo1;
echo '<br>';
Exemplo::metodo1();
?>