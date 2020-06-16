<?php

	 class Pagamento
	{

		private $valor;
		private $cartao = 1000;




		public function __construct(float $valor)
		{

			$this->valor=$valor;
		}

		public function getValor()
		{
			return $this->valor;
		}

		public function pagAvista()
		{

			 return $this->getValor() - 0.15;

		}
	 	
		public function pagCartao()
		{

			return $this->getValor() / 6;
		}

}

	