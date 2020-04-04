<?php


function mensagem( string $frase){

	echo $frase . PHP_EOL;
}

$arrayList= [21, 44, 33, 55, 90];

$nome =['Lele', 'Diego', 'Thiago','julia', 'cuzao' ];

$j=array_combine($nome, $arrayList);



print_r($j);



	