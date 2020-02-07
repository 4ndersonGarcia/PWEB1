<?php

$num = $_GET["numero"];
$numb = (int)$num;

if ($numb % 10 == 0) {
	echo "Divisivel por 10";
}
elseif ($numb % 5 == 0) {
	echo "Divisivel por 5";
}
elseif ($numb % 2 == 0) {
	echo "Divisivel por 2";
}
else{
	echo "Nao é Divisivel";
}

?>