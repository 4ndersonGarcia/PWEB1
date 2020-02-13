<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$numero = $_GET["num"];
		$valor = 0;
		for ($i=0; $i <= 10; $i++) { 
			$valor = $numero*$i;
			echo "$numero x $i = $valor<br>";
		}
	?>
</body>
</html>