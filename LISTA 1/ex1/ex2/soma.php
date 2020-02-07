<?php

$numero = $_GET["numero"];
$num = (int)$numero;

if ($num > 20) {
	$num += 8;
}
else{
	$num -= 5;
}
echo "$num";
?>