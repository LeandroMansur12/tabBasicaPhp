<?php

class Carro extends Dono
{
    private string $renavam;

    private string $placa;



    public function __construct(string $nome,string  $cpf,string $renavam, string $placa)
    {
        parent::__construct($nome, $cpf);

        $this->renavam=$renavam;
        $this->placa=$placa;
    }

    public function getRenavam()
    {
        return $this->renavam;
    }

    
    public function getPlaca()
    {
        return $this->placa;
    }

}