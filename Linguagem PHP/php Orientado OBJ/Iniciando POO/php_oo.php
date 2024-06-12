<?php
    class Funcionario {

        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;


        //getters e setters (overloading / sobrecarga)


        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        function __get($atributo){
            return $this->$atributo;
        }

        
        //métodos
        function resumirCadFunc(){
            return "$this->nome possui $this->numFilhos filho(s)";
        }

        function modfificarNumFilhos($mod){
            $this->numFilhos = $mod;
        }
    }

    $f = new Funcionario();

    $f->__set('nome', 'Pedro');
    $f->__set('numFilhos', 2);
    echo "bem vindo(a) senhor(a) - " . $f->__get('nome');
    echo '<br>';

    echo $f->resumirCadFunc();

    
?>