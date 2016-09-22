<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Página para encriptar y desencriptar mensajes</h1>

<form method="post">

<fieldset><legend>Encriptar</legend>
<input type="text" name="texto">
<input type="submit" value="Encriptar">
</fieldset>

<fieldset><legend>Mensaje desencriptado</legend>
<?php
include 'enigma.php';
$mensajeEncriptado = false;
if (isset($_POST['texto'])) {
	$mensajeEncriptado = enigma::Encriptar($_POST['texto'], 'nuevoTexto.txt');
}
if ($mensajeEncriptado) {
	echo enigma::Desencriptar('nuevoTexto.txt');
}
?>
</fieldset>

</form>
</body>
</html>