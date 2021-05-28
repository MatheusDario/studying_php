<?php
    //print_r($_POST);

    class Mensagem {
        private $para = null;
        private $assunto = null;
        private $mensagem = null;

        public function __get($atributo) {
            return $this->$atributo;
        }

        public function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        public function mensagemValida() {
            if(empty($this->para) || empty($this->assunto) || empty($this->mensagem)) {
                return false;
            }

            return true;
        } 
    }

    $mensagem = new Mensagem();

    //atributos do Objeto Mensagem e os valores que serão atribuidos 
    $mensagem->__set('para', $_POST['para']);
    $mensagem->__set('assunto', $_POST['assunto']);
    $mensagem->__set('mensagem', $_POST['mensagem']);

    if($mensagem->mensagemValida()) {
        echo 'Mensagem válida';
    } else {
        echo 'Mensagem não é valida';
    }

    
    //print_r($mensagem);
?>