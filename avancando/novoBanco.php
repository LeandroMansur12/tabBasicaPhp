<?php


	require_once'funcoes.php';
		


$contasCorrentes=[ 

	'234234.24.23.3-5'=>['titular'=> 'Juca furado', 'saldo'=>2000],

	'454.454.342.66'=>[ 'titular' =>'Maria Vaca', 'saldo'=>3000],

	'34.343.232.65-9'=>['titular'=> 'Joao Cueca', 'saldo'=>9000]


];





$contasCorrentes['34.343.232.65-9']=sacar( $contasCorrentes['34.343.232.65-9'], 300);


$contasCorrentes['454.454.342.66'] = deposito ( $contasCorrentes['454.454.342.66'], 390);


titularzao($contasCorrentes['34.343.232.65-9']);


unset($contasCorrentes['34.343.232.65-9']);


?>

<!DOCTYPE html>

<html lang="pt-br">

	<head>
	<meta charset="utf-8">

	<title>Aprendendo html com PHP porraaaa hahahaah </title>

</head>

	
	<body>

		<h1> Contas Correntes </h1>

		<dl>
			
			<?php foreach ($contasCorrentes as $cpf => $contas) {?>
			
			
		<dt> 

		 <h3><?= $conta['titular']; ?> - <?= echo $cpf; ?></h3>
        </dt>
        <dd>
        	Saldo: <?= echo $conta['saldo']; ?>
        		
        	</dd>
        <?php } ?>
		</dd>

		</dl>

	</body>

</html>




