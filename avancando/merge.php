<?php


$conta1=[

	'titular'=>'maria ',
	'saldo' => 10000
];

$conta2=[ 'titular'=> 'João', 

	'saldo'=> 5000

];


$conta3= [ 'titular' =>'Alberto',

'saldo'=> 300

];
$contasCorrentes=array_merge_recursive(
	$conta1, 
	$conta2, 
	$conta3

);

print_r($contasCorrentes);


	?>



