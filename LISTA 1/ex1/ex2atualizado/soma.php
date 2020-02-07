<?php
$soma = array_sum($_GET);
echo ($soma > 20 ? $soma += 8 : $soma -=5);
?>