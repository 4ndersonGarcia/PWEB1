<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		
		$soma = 0;


		while($soma <= 1000){
			$t = rand(0,100);
			$soma+=$t;
			echo "Número Sorteado = $t : Valor atual da soma = $soma<br>";

		};
		echo" Encerramento dos sorteios e operações devivo à aquisição do valor total ser superior ou equivalente ao estimado de 1000 <br> Operações encerradas com a soma final de ($soma) ";
	?>
</body>
</html>