<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
	<label>Filas:
		<select name="filas">
			<?php for ($i=1; $i <= 50; $i++) { 
				echo "<option>$i</option>";
			} ?>
		</select>
	</label>
	<label>Columnas:
		<select name="columnas">
			<?php for ($i=1; $i <= 50; $i++) { 
				echo "<option>$i</option>";
			} ?>
		</select>
	</label>
	<input type="submit" name="boton" value="Generar tabla">
	<?php
		if (isset($_POST['filas'])) {
			echo '<table border ="1">';
			for ($i=0; $i < $_POST['filas']; $i++) {
				echo '<tr>';
				for ($j=0; $j < $_POST['columnas']; $j++) { 
					echo '<td>' . $i . ', ' . $j . '</td>';
				}
				echo '</tr>';
			}
			echo '</table>';
		}
	?>
	
</form>
</body>
</html>