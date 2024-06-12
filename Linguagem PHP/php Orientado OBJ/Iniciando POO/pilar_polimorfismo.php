<?php


	class Carro extends Veiculo {
		public $teto_solar = true;

		function __construct($placa, $cor) {
			$this->placa = $placa;
			$this->cor = $cor;
		}

		function abrirTetoSolar() {
			echo 'Abrir teto solar';
		}

		function alterarPosicaoVolante() {
			echo 'Alterar posição volante';
		}
	}

	class Moto extends Veiculo {
		public $contraPesoGuidao = true;

		function __construct($placa, $cor) {
			$this->placa = $placa;
			$this->cor = $cor;
		}

		function empinar() {
			echo 'Empinar';
		}

        function trocarMarcha(){ //polimorfismo -> subscrevendo o metodo da classe pai.
            echo "moto> desengatar embreagem com a mao e engatar a marcha com o pé";
        }
	}

	class Veiculo {
		public $placa = null;
		public $cor = null;

		function acelerar() {
			echo 'Acelerar';
		}

		function freiar() {
			echo 'Freiar';
		}

        function trocarMarcha(){
            echo "CARRO> desengatar embreagem com o pé e engatar a marcha com a mao";
        }
	}

	$carro = new Carro('ABC1234', 'Branco');
	$moto = new Moto('DEF1122', 'Preto');

    $carro->trocarMarcha();
    echo "<br>";
    $moto->trocarMarcha();

	