<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
	<label for="pass1">Ingrese su contraseña<label>
	<input type="password" name="contraseña1" id="pass1">
	<label for="pass2">Reingrese su contraseña</label>
	<input type="password" name="contraseña2" id="pass2">
	<input type="submit" value="Aceptar">
</form>
<?php
	if(isset($_POST['contraseña1']) && isset($_POST['contraseña2'])
		&& $_POST['contraseña1'] == $_POST['contraseña2']){
		header('Location: welcome.php');
	}
	elseif(isset($_POST['contraseña1']) && isset($_POST['contraseña2'])
		&& $_POST['contraseña1'] != $_POST['contraseña2'])
		header('Location: app27.php');
?>
</body>
</html>
