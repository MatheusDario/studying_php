<?php
    class Pessoa {
        public $nome = null;

        function __construct($nome) {
            echo 'Objeto iniciado';
            $this->nome = $nome;
        }
        function __destruct() {
            echo 'Objeto removido';
        }
        function __get($atributo) {
            return $this->$atributo;
        }
    } 

    $pessoa = new Pessoa('Matheus');
    echo '<br/>Nome: ' . $pessoa->__get('nome');
    echo '<br/>';
?>