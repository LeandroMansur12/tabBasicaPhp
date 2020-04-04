<?php



$contasCorrentes=[

	 	'21.32.13.231' =>['titular' => 'Juca Fura',

	 'saldo'=> 10000],

	  	'644.65.4.66' =>['titular' => 'Maria mel',
	 	'saldo' => 90000
	 ], 
	  
	  '13.333.54.5-6'=>  [ 'titular'=> 'leoncio',

	 'saldo'=> 300]
	];



function valorSaque(array $conta, float $valorSacar): array{


	if($valorSacar > $conta['saldo']){

		exibeMensagem( "vaza voce nao pode saca meu Irmão");
	}
	else{

		$conta['saldo']-=$valorSacar;

	}

	return $conta;

}

	function exibeMensagem (String $mensagem){

		echo  $mensagem . PHP_EOL;
	}

function valorDeposito( array $conta,  float $valorADepositar):array{

	    if($valorADepositar> 0) {
            $conta['saldo'] += $valorADepositar;
        }

	    else{

	        exibeMensagem("valores negativos nada de depositat brother");
        }

	    return $conta;
};



	
$contasCorrentes['21.32.13.231'] = valorSaque($contasCorrentes['21.32.13.231'] ['saldo'],  500);
$contasCorrentes['644.65.4.66'] = valorSaque($contasCorrentes['644.65.4.66'] ['saldo'],  500);

$contasCorrentes['13.333.54.5-6'] = valorDeposito($contasCorrentes ['13.333.54.5-6'] ['saldo'], 2000);




	   foreach ($contasCorrentes as $cpf=> $conta) {

	  exibeMensagem( $cpf.  '  ' . $conta['titular'] . ' = ' . $conta['saldo'] );	
	   	
	   }


