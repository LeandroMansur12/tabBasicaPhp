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
$contasCorrentes=[ $conta1, $conta2, $conta3];



for($i=0; $i <=3; $i++)

echo $contasCorrentes[$i]['titular'] . PHP_EOL;




