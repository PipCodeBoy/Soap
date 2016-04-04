<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Calcu</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="calc_client.php" method="get" accept-charset="utf-8">
		<select name="sel">
			<option value="Add">Sumar</option>
			<option value="minus">Restar</option>
			<option value="multiply">Multiplicar</option>
			<option value="divide">Dividir</option>
		</select>
		<br>
		<label>Numero 1<input type="text" name="n1" value=""></label><br>
		<label>Numero 2<input type="text" name="n2" value=""></label>
		<input type="submit" name="" value="Enviar">
	</form>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<form action="city_client.php" method="get" accept-charset="utf-8">
		<label>Pais<input type="text" name="n2" value=""></label>
		<input type="submit" name="" value="Enviar">
	</form>
</body>
</html>