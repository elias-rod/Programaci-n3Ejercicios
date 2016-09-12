<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post"><fieldset><legend>Elija el destino y la cantidad de pasajes</legend>
	<select name="destino">
		<option value="rio">Río de Janeiro</option>
		<option value="punta">Punta del Este</option>
		<option value="habana">La Habana</option>
		<option value="miami">Miami</option>
		<option value="ibiza">Ibiza</option>
	</select>
	<select name="cantidad">
	<?php for ($i=1; $i <= 10; $i++) { 
		echo '<option value="' . $i . '">' . $i . '</option>';
	} ?>
	</select>
</fieldset>
<fieldset><legend>Seleccione el modo de pago</legend>
	<input type="radio" name="medio" value="efectivo"> Efectivo <br>
	<input type="radio" name="medio" value="tarjeta"> Tarjeta <br>
</fieldset>
<input type="submit">
</form>
<?php
$precio = 0;
if (isset($_POST['destino']) && isset($_POST['cantidad']) && isset($_POST['medio'])) {
	echo 'El valor del viaje es: ';
	switch ($_POST['destino']) {
		case 'rio':
			$precio = 900;
			break;
		case 'punta':
			$precio = 550;
			break;
		case 'habana':
			$precio = 1000;
			break;
		case 'miami':
			$precio = 1250;
			break;
		case 'ibiza':
			$precio = 1500;
			break;
	}
	if ($_POST['medio'] == 'efectivo') {
		$precio *= 0.93; 
	}
	else{
		$precio *= 0.88; 
	}
	if (intval($_POST['cantidad']) < 3) {
		$precio *= intval($_POST['cantidad']);
	}
	else{
		$precioTemp = $precio;
		$precio *= 2;
		$precio += $precioTemp * 0.65 * (intval($_POST['cantidad'] - 2));
	}
	echo $precio . '<br>';
}
 ?>
</body>
</html>