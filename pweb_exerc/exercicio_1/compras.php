<?php
require("itens.php");

$dado_pedido = $_GET['product'];

?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">

</head>
<body>

	<div>

		<b><?= $menu[$dado_pedido]['item_menu']?></b><br>
		<img src="img/<?= $menu[$dado_pedido]['item_menu' ] ?>.jpg" width="300" height="200"><br>
		<span><?= $menu[$dado_pedido]['ingredientes']?></span><br>
		
	</div>

	<div >
	<form action="finalizar.php" method="get">

		<p>Quantidade: <input type="number" name="quantidade" required min="0"> 
		<span>x R$ <?= $menu[$dado_pedido]['valor']?></span><br>
		</p>


		
			<legend>Meio de Pagamento:</legend>
			<input type="radio" name="tipe" value="cartao" required> Cartão<br>
			<input type="radio" name="tipe" value="dinheiro" required> Dinheiro
			<input type="checkbox" name="troco" value="sim"> Levar Troco?<br>
		 <br>


		
			<legend>Entrega:</legend>
			Endereço: <input type="text" name="rua">
			Nº <input type="number" name="numero">
			Bairro: <input type="text" name="bairro">
			
		<br>
		<input type="hidden" name="product" value="<?= $dado_pedido ?>">
		<button type="submit">Efetivar Pedido!</button>
	</form>
</div>
</body>
</html>