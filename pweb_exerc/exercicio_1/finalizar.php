<?php
require("itens.php");

$pedido = $_GET;

?>

<h2>Pedido Recebido!</h2>
<h1>Agradecemos a preferencia</h1>

	<fieldset>
		<h1>Produto</h1>
	<p>Produto: <?= $pedido['quantidade']?>u. <b><u><?= $menu[$pedido['product']]['item_menu']?></u></b></p><br>
	</fieldset>
	<fieldset>
	<h1>Dados monetarios</h1>
	<p>Tipo de Pagamento: <?= $pedido['tipe']?><br>
	Levar troco: <?= (!empty($pedido['troco'])?'Sim':'Não')  ?><br>
	Valor do Pedido: <?= $menu[$pedido['product']]['valor'] * $pedido['quantidade']?></p><br>
	</fieldset>
	<fieldset>
	<h1>Entrega</h1>
	<p>Endereço de entrega: <?= $pedido['rua'].', '.$pedido['numero'].' - '.$pedido['bairro']?></p>
	</fieldset>

</h4>