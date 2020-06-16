<?php


require_once 'Pessoa.php';
require_once 'Cliente.php';
require_once 'Funcionario.php';
require_once 'Pagamento.php';





$primeiraPessoa = new Cliente('Joao Bilusco', '2424.24.234.2', 'jaoaBBB@hotmail.com', 3131231 );
echo 'nome: '.  $primeiraPessoa->getNome() . PHP_EOL ;
echo 'cpf: '  . $primeiraPessoa->getCpf() . PHP_EOL ;
echo 'email: ' . $primeiraPessoa->getEmail() . PHP_EOL ; 
echo 'Codigo: ' . $primeiraPessoa->getCodigo().PHP_EOL;

$pagar= new Pagamento(500);


echo 'valor cobrado:'. $pagar->getValor(). PHP_EOL;
echo'valor cobrado a vista'. $pagar->pagAvista().PHP_EOL;
echo 'valor cobrado parcelado'. $pagar->pagCartao().PHP_EOL;

var_dump($primeiraPessoa);

$segundaPessoa= new Cliente('julia Ferrari', '2432.23.232', 'juuju@hotmail.com', '123.123.12');

echo 'nome: '.  $segundaPessoa->getNome() . PHP_EOL ;
echo 'cpf: '  . $segundaPessoa->getCpf() . PHP_EOL ;
echo 'email: ' . $segundaPessoa->getEmail() . PHP_EOL ;
echo 'codigo: ' . $segundaPessoa->getCodigo() . PHP_EOL ;


var_dump($segundaPessoa);


$primeiroFuncionario = new Funcionario('Carla Gomes', '232.2342.23', 'CarlinhaGata@hotmail.com', '4255');

echo 'nome: '.  $primeiroFuncionario->getNome() . PHP_EOL ;
echo 'cpf: '  . $primeiroFuncionario->getCpf() . PHP_EOL ;
echo 'email: ' . $primeiroFuncionario->getEmail() . PHP_EOL ; 
echo 'Matricula: ' . $primeiroFuncionario->getMatricula().PHP_EOL;
 var_dump($primeiroFuncionario);