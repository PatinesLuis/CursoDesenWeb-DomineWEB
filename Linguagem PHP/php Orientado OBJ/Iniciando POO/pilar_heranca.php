<?php

    class Pessoa{
        public $nome;
        public $cargo;
        public $chaveEmpresa;


        public function informacao(){
            echo 'Meu nome é: ' . $this->nome . " e meu cargo é: " . $this->cargo;
        }

    }

    class Diretor extends Pessoa{
        public $prolabore;

        
        function __construct($nome,$cargo, $chaveEmpresa, $prolabore){
            $this->nome = $nome;
            $this->cargo = $cargo;
            $this->chaveEmpresa = $chaveEmpresa;
            $this->prolabore = $prolabore;
        }
        
    }

    class funcionario extends Pessoa{
        public $salario;

        function __construct($nome,$cargo, $chaveEmpresa, $salario){
            $this->nome = $nome;
            $this->cargo = $cargo;
            $this->chaveEmpresa = $chaveEmpresa;
            $this->salario = $salario;
        }

    }
    
    $luis = new Diretor("Luis","diretor",true,22550.03);
    $joao = new funcionario("Joao","gerente",false, 2340.30);

    echo "<br>" . $luis->informacao();
    echo "<br>" . $joao->informacao();



    print_r($luis);
    print_r($joao);


?>