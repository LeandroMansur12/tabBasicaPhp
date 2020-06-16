<?php


class Funcionario extends Pessoa
{
	private string $matricula;


	public function __construct(string $nome, string $cpf, string $email, int $matricula)
	{
		parent::__construct($nome,  $cpf, $email);

		$this->matricula=$matricula;
	}



    public function getMatricula()
    {
        return $this->matricula;
    }
}