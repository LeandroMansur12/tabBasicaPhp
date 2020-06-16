<?php


class Cliente extends Pessoa
{

	private string $codigo;


	public function __construct( string $nome, string $cpf, string $email, string $codigo)
	{
		parent::__construct($nome, $cpf, $email);
		$this->codigo=$codigo;
	}

	public function getCodigo():string
	{
		return $this->codigo;

	}

}
