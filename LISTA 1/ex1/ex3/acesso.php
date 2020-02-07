<?php

$nom = $_GET["nome"];
$numero = $_GET["idade"];
$idad = (int)$numero;
$sx = $_GET["sexo"];

if ($sx == 'F' && $idad < 18 ) {
	echo "$nom :: acesso proibido";
}else{
	echo "$nom :: acesso permitido";
}

?>