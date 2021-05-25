<?php
    class Exemplo {
        public static $atributo1 = 'Eu sou um atributo estatico';
        public $atributo2 = 'Eu sou um atributo normal';
        
        public static function metodo1() {
            echo 'Eu sou um método estatico';
        }
        public function metodo2() {
            echo 'Eu sou um método normal';
        }
    }

    $x = new Exemplo();
    echo '<pre>';
    print_r($x);
    echo '</pre>';
    echo '<br/>';
    echo Exemplo::$atributo1;
    echo '<br/>';
    Exemplo::metodo1();
    echo '<br/>';
    echo $x->atributo2;

?>