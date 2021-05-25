<?php
    class Pai {
        private $nome = 'Jorge';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';
        /*
        public function __get($attr) {
            return $this->$attr;
        }
        public function __set($attr, $value) {
            $this->$attr = $value;
        }
        */
        private function executarMania() {
            echo 'Assobiar';
        }
        protected function responder() {
            echo 'Oi';
        }
        public function executarAcao() {
            $this->executarMania();
            echo '<br/>';
            $this->responder();
        }
  
        /*
        através dos métodos de interface que efetua alteração dos atributos private or protected
        public function getNome() {
            return $this->nome;
        }
        public function setNome($value) {
            if(strlen($value) >= 3) {
                $this->nome = $value;
            }  
        }
        */
    }

    class Filho extends Pai {
        public function getAtributo($attr) {
            return $this->$attr;
        }
        public function setAtributo($attr, $value) {
            $this->$attr = $value;
        }
    }

    $filho = new Filho();
    echo '<pre>';
    print_r($filho);
    echo '</pre>';
    echo $filho->getAtributo('humor');
    $filho->setAtributo('humor', 'Triste');
    echo '<br/>';
    echo $filho->getAtributo('humor');

    /*
    Acessando os atributos através do super get e alterando com super set
    $pai = new Pai();
    echo $pai->nome;
    $pai->nome = 'Matheus';
    echo '<br/>';
    echo $pai->nome;
    echo '<br/>';
    echo $pai ->executarAcao();
    
    --Acessando os atributos private e protected usando get e set
    $pai = new Pai();
    echo $pai->getNome();
    $pai->setNome('Mat');
    echo '<br/>';
    echo $pai->getNome();

    --Acessando os atributos publicos-- 
    $pai->humor = 'Triste';
    echo '<br/>';
    echo $pai->humor;
    */   
?>