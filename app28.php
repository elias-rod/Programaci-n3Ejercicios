<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>
<form method="post">
	<fieldset><legend>Elija los datos a mostrar</legend>
		<label>Dia:<input type="checkbox" name="dia"></label>
		<label>Mes:<input type="checkbox" name="mes"></label>
		<label>Año:<input type="checkbox" name="año"></label>
		<input type="submit">
	</fieldset>
</form>
<?php
	echo '<br>';
	if(isset($_POST['dia'])){
		echo  'Día: ' . date("j") . '<br>';
	}
	if(isset($_POST['mes'])){
		echo  'Mes: ' . date("n") . '<br>';
	}
	if(isset($_POST['año'])){
		echo  'Año: ' . date("Y") . '<br>';
	}
?>
</body>
</html>