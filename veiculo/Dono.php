<?php

class Dono
{
    protected string $nome;

    protected string $cpf;

    


    public function __construct(string $nome, string $cpf)
    {

        $this->nome=$nome;

        $this->cpf=$cpf;


    }

    public function getNome():string
    {
        return $this->nome;

    }
    public function getCpf():string
    {
        return $this->cpf;

    }
   
}