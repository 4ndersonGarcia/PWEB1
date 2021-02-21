<?php 
require("itens.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<?php foreach ($menu as $produto => $dado_produto): ?>
	<div >
		<img src="img/<?= $dado_produto['item_menu'] ?>.jpg" width="300" height="200">
		<h3><a href="compras.php?product=<?= $produto ?>"><?= $dado_produto['item_menu']?></a></h3>
		<span>R$ <?= $dado_produto['valor']?></span><br>
		<span><?= $dado_produto['ingredientes']?></span>
	</div>
	<?php endforeach; ?>
</body>
</html>