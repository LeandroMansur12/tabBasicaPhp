<?php

$arrayList = [22, 99, 89, 45, 23, 40, 99];



unset($arrayList[0]);


	for ($x=0;$x<=count($arrayList);$x++  ){



		echo $arrayList[$x] . PHP_EOL;

	}

