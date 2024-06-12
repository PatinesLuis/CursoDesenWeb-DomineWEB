<?php

class Pai{
    private $nome = 'jorge';
    protected $sobrenome = 'silva';
    public $humor = 'feliz';

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $value){
        $this->$atributo = $value;
    }

    private function executarMania(){
        echo 'assobiar';
    }

    protected function reponder(){
        echo 'oi';
    }

    public function executarAcao(){

        $x = rand(1,10);

        if($x >=1 && $x <=6){
            $this->reponder();
        }else{
            $this->executarMania();
        }
        
    }

}

class Filho extends Pai{
    public function getAtributo($attr){
        return $this->$attr;
    }
}

$pai = new Pai();
echo $pai->nome;
echo '<br>';
echo $pai->executarAcao();
?>