<?php



	 $contasCorrentes=[

	 	'21.32.13.231' =>['titular' => 'Juca Fura',

	 'saldo'=> 10000],
	  	'644.65.4.66' =>['titular' => 'Maria mel',
	 	'saldo' => 90000
	 ],
	  
	  '13.333.54.5-6'=>  [ 'titular'=> 'leoncio',

	 'saldo'=> 30000]


	];

	$contasCorrentes[ '34.23.424.24.20-5']= ['titular'=>'Saulo de Tarso', 'saldo'=>20000]; 

	   foreach ($contasCorrentes as $cpf=> $conta) {

	   	echo $cpf. " = ". $conta['titular'] . PHP_EOL;
	   	
	   }
