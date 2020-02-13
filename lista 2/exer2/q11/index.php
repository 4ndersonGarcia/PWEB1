<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 
		echo "<table border=1>
			<tr>
				<td>Rodada|||</td>
				<td>Vencedor|||</td>
				<td>Oponente||</td>
				<td>Maior Pontuação||</td>
				<td>Pontuação Média</td>
			</tr>
		</table>";
		for($i = 1; $i < 10; $i++){

			$jogador = rand(1,4);
			$oponente = rand(1,4);
			while ($jogador == $oponente) {
				$oponente = rand(1,4);
			}
			$maiorPontuacao = 0;
			$pontuação = 0;
			$ponto;
			for($j = 0;$j < 3; $j++){

				
				$ponto = rand(0,10);
				$pontuação += $ponto;
				if($maiorPontuacao < $ponto){
					$maiorPontuacao = $ponto;
				} 
			}

			$pontuação/=3;

		echo "<table border=1>
			<tr>
				<td>----$i----||</td>
				<td>----$jogador-----||</td>
				<td>-----$oponente---||</td>
				<td>---$maiorPontuacao---||</td>
				<td>-----$pontuação</td>
			</tr>
		</table>";
		}
	 ?>

</body>
</html>