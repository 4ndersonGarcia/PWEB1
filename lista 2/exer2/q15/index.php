<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$col = $_GET["coluna"];
		$lin = $_GET["linha"];
		echo "<table>";
		for ($i=0; $i < $lin; $i++) { 
			echo "<tr>";
			for ($j=0; $j < $col; $j++) { 
				echo "<td>linha</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	?>
</body>
</html>