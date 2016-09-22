<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
<form method="post" action="agregarImagen.php" enctype="multipart/form-data">
<p>Ingresa tu propia foto para mostrarla debajo</p><input type="file" name="foto"><br><br>
<input type="submit">
</form>
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
	 ?>
	</tr>
	</table>
</form>
</body>
</html>