<?php 

    //modelo
    class Funcionario { 
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        //setters - Recebe determinado valor e manipula esse valor e não retorna nada
        //getters e setters (overloading / sobrecarga)
        function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }
        function __get($atributo) {
            return $this->$atributo;
        }

        /*
        function setNome($nome) {
            $this->nome = $nome;
        }
        function setTelefone($telefone) {
            $this->telefone = $telefone;
        }
        function setNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }
        
        //getters - Da o retorno do atributo solicitado
        function getNome() {
            return $this->nome;
        }
        function getTelefone() {
            return $this->telefone;
        }
        function getNumFilhos() {
            return $this->numFilhos;
        }
        */
        //métodos
        function resumirCadeFun() {
            return "$this->nome possui $this->numFilhos e seu telefone é $this->telefone";
        }

        function modificarNumFilhos($numFilhos) {
            //afetar um atributo de um objeto
            $this->numFilhos = $numFilhos;
        }
    } 
    $y = new Funcionario(); //criando um objeto através de um modelo criado 
    $y->__set('nome', 'José');
    $y->__set('telefone', '61 9999 9999');
    $y->__set('numFilhos', 2);
    //echo $y ->resumirCadeFun();
    echo '<br/>';
    echo 'O funcionário ' . $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filhos e o seu telefone é ' . $y->__get('telefone');
?>