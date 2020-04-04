<?php




$vagaEstacionamento = [


	'45.56.45.64-7' =>[ 'nome' =>'Silas Martins',
	'veiculo'=>'Voyagem', 'placa'=> 'bbb-9090', 'valor'=>30],

	'12.565.587-0'=>[ 'nome' =>'Thiago Ribeiro',
	'veiculo'=>'Gol 3', 'placa'=> 'fdp-4321', 'valor'=>30],

	'55.78.25.787-9'=>['nome' =>'Diego Souza',
	'veiculo'=>'Corsa', 'placa'=> 'pal=2121', 'valor'=>30]];


	function pagarVaga( float $conta)

	{
		if( $conta==$vaga['valor']){

			echo "valor pago". PHP_EOL;

		}  else{

			echo "valor nao pago";
		}

	}

	$vagaEstacionamento['45.56.45.64-7'] = $vaga ['45.56.45.64-7'] = 30;


	foreach ($vagaEstacionamento as $rg=> $vaga) {
		
	 echo $rg . "=". $vaga['nome'] . " = " . $vaga['veiculo']. "=" .$vaga['valor'].PHP_EOL;

	}