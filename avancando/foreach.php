<?php



$contasCorrentes=[ 
	11234577899=>[
	'titular'=>'maria ',
	'saldo' => 10000],

	11234577869=>['titular'=> 'João', 

	'saldo'=> 5000], 

	41234377029=>['titular' =>'Alberto',

'saldo'=> 300]
];


$contasCorrentes[2342342342]= [

	'titular'=> 'Joaquina Pinto', 
	'saldo'=> 500
];


foreach ($contasCorrentes as $cpf => $conta) {

	echo $conta['titular']. ' = ' . $cpf . PHP_EOL;
	
}



