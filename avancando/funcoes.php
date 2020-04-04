<?php




function sacar(array $conta, float $valorSacar): array{

	if($valorSacar> $conta['saldo']){

mostraMensagem(" valor nao pode ser sacado");

	

}else{

		$conta['saldo'] -= $valorSacar;

}

	return $conta;

}

function deposito(array $conta, float $valorDepositar): array{

	if($valorDepositar < 0){

		mostraMensagem("cai fora saldo insuficiente");
	}else{



	$conta['saldo']+= $valorDepositar;

}

	return $conta;
}


function titularzao(array &$conta){


	$conta['titular']= strtoupper($conta['titular']);


}



function mostraMensagem(string $mensagem){

	echo $mensagem . '<br>';


}

function exibeConta(array $conta)

{
		 ['titular' => $titular, 'saldo' => $saldo] = $conta;


	echo "<li> Titular: $titular . saldo: $saldo </li>";


}
