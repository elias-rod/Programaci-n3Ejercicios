<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
	<fieldset><legend>Calcular descuento</legend>
		Consumo: <input type="text" name="consumo"><br>
		<input type="submit">
	</fieldset>
</form>
<?php
	if (isset($_POST['consumo'])) {
		$consumo = intval($_POST['consumo']);
		if($consumo >= 300 && $consumo <= 550){
			echo 'El precio total es: ' . ($consumo * 0.9);
		}
		else if($consumo >= 550){
			echo 'El precio total es: ' . ($consumo * 0.8);
		}
		else{
			echo 'El precio total es: ' . $consumo;
		}
	}
?>
</body>
</html>