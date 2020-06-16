<?php

require_once 'Dono.php';
require_once 'Carro.php';


$primeiroDono= new Carro( 'Leandro Mansur', '4234242','93053345', 'btc-9999');

var_dump($primeiroDono);

echo  $primeiroDono->getNome();