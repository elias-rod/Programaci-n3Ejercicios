<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
<form method="post" action="imagenOriginal.php">
	<table>
	<tr>
	<?php
		$imagenes = glob('fotos/*.jpg');
		$contador = 0;

		for ($i=0; $i < count($imagenes); $i++) { 
			if ($i % 4 == 0) {
				echo '</tr><tr>';
			}
			echo '<td><button type="submit" name="boton" value="' . $imagenes[$i] . '"><img src="' . $imagenes[$i]. '"height="100" width="100"></button></td>';
		}
		/*
		foreach ($imagenes as $value) {
			if ($contador % 4 == 0) {
				echo '</tr><tr>';
			}
			echo '<td><img src="' . $value. '"</td>';
			$contador++;
		}*/
	 ?>
	</tr>
	</table>
</form>
</body>
</html>