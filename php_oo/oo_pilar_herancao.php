<?php
    class Carro extends Veiculo {
        public $teto_solar = true;

        function abrirTetoSolar() {
            echo 'Abrir teto Solar';
        }
        function alterarPosicaoVolante() {
            echo 'Aletar posição do volante';
        }
    }
    class Moto extends Veiculo {
        public $contraPesoGuidao = true;

        function empinar() {
            echo 'Empinar';
        }
        function trocarMarcha() {
            echo 'Desengatar embreagem com a mão e engatar a marcha com o pé';
        }
    }
    class Veiculo {
        public $placa = null;
        public $cor = null;

        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function acelerar() {
            echo 'Acelerar';
        }
        function freiar() {
            echo 'Freia';
        }
        function trocarMarcha() {
            echo 'Desengatar embreagem com pé e engatar a marcha com a mão';
        }
    }

    $carro = new Carro('ABC1234', 'Branco');
    $moto = new Moto('DEF789', 'Preta'); 

    echo '<pre>';
    print_r($carro);
    echo '<br/>';
    print_r($moto);
    echo '<pre>';
    echo '<hr/>';
    echo 'A Moto ';
    $moto->trocarMarcha();
    echo '<hr/>';
    $carro->trocarMarcha();


?>