<?php



$conta1= [ 

	'titular' => 'Juca Fura',

	 'saldo'=> 10000];


	 $conta2 =[

	 	'titular' => 'Maria mel',
	 	'saldo' => 90000
	 ];



	 $conta3 = [ 'titular'=> 'leoncio',

	 'saldo'=> 30000


	];



	 $contasCorrentes=[$conta1, $conta2, $conta3];

	 for($i = 0; $i<=count($contasCorrentes); $i++)

	 echo  $contasCorrentes[$i]['titular'] . PHP_EOL;