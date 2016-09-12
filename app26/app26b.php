<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<form method="post" action="resultados.php">
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
</body>
</html>