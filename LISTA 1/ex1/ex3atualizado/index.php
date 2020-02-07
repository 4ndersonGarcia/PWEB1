<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="acesso.php" method="get">
		Digite o nome<input type="text" name="nome">

		Digite a idade<input type="text" name="idade">

		<!--Digite F para sexo Feminino e M para masculino<input type="text" name="sexo">-->

		<select name="sexo">
			<option value='M'>Masulino</option>
			<option value="F">
				Feminino
			</option>
		</select>

		<input type="submit">
	</form>
</body>
</html>