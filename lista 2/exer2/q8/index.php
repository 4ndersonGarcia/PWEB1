<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<?php

			$t = $_GET["total"];

			$soma = 0;
			for($i = 0; $i <= $t; $i++){
				$soma+=$i;
				echo "$soma";
			}
		?>
</body>
</html>