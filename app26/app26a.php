<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<form method="post">
		<fieldset>
    	<legend class="descripcion">Calcular perímetro y superficie</legend>
		<label for="medida1">Ingrese la medida 1</label>
		<input type="text" name="medida1" id="medida1"><br>
		<label for="medida2">Ingrese la medida 2</label>
		<input type="text" name="medida2" id="medida2"><br>
		<br>
		<label for="radioPerimetro">Perímetro</label>
		<input type="radio" name="eleccion" value="perimetro" id="radioPerimetro">
		<label for="radioSuperficie">Superficie</label>
		<input type="radio" name="eleccion" value="superficie" id="radioSuperficie">
		<br>
		<input type="submit" value="Calcular" id="boton" class="boton">
	</fieldset>
	</form>
<?php
if (isset($_POST['medida1']) && isset($_POST['medida2'])) {
	if($_POST['eleccion'] == 'perimetro'){
		echo '<p>El perímetro es ' . ($_POST['medida1'] * 2 + $_POST['medida2'] * 2) . '</p>';
	}
	else{
		echo '<p>La superficie es ' . ($_POST['medida1'] * $_POST['medida2']) . '</p>';
	}
}
?>
</body>
</html>