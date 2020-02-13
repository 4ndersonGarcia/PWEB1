<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	$soma = 0;
	for($i = 0; $i < 101; $i++){
		if($i % 7 == 0){
			$soma += $i;
			echo "Número= $i : Soma= $soma<br>";
		}
	}
?>
</body>
</html>