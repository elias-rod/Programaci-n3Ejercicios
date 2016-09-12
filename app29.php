<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post"><fieldset><legend>Elija el destino para ver el valor del viaje</legend>
	<select name="destino">
		<option value="rio">Río de Janeiro</option>
		<option value="punta">Punta del Este</option>
		<option value="habana">La Habana</option>
		<option value="miami">Miami</option>
		<option value="ibiza">Ibiza</option>
	</select>
	<input type="submit">
</fieldset></form>
<?php 
if (isset($_POST['destino'])) {
	echo 'El valor del viaje es: ';
	switch ($_POST['destino']) {
		case 'rio':
			echo '$900';
			break;
		case 'punta':
			echo '$550';
			break;
		case 'habana':
			echo '$1000';
			break;
		case 'miami':
			echo '$1250';
			break;
		case 'ibiza':
			echo '$1500';
			break;
	}
}
 ?>
</body>
</html>