<?php

class conta{


	public $nomeTitular;

	public $cpfTitular;

	public $saldo;

	public function sacar(float $valorSacar){

		if($valorSacar > $this-> saldo){

			echo "valor indisponivel";
		}

		else{

			$this->saldo-=$valorSacar;
		}

	}
}