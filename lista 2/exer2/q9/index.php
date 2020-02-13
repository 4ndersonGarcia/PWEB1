<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$soma = 0;
		$t = rand(0,50);
		
		while($t != 37){
			$soma+=$t;
			echo "número = $t : soma atual = $soma <br>";
			$t = rand(0,50);
			

		};
		echo "Fim das operações devido ao surgimento do número 37";
	?>
</body>
</html>