<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
Ingrese la ruta del archivo a copiar: <input type="text" name="ruta">
<input type="submit">
</form>
</body>
</html>
<?php
if (isset($_POST['ruta'])) {
	$nuevaRuta = 'C:\xampp\htdocs\\' . date('Y_m_d_H_i_s') . '.txt';
	$archivo = fopen($_POST['ruta'], 'r');
	$archivo2 = fopen($nuevaRuta, 'w');
	while(!feof($archivo)){
		$linea = strrev(fgets($archivo));
		fwrite($archivo2, $linea);
	}
	fclose($archivo);
	fclose($archivo2);
}
?>