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
	copy($_POST['ruta'], 'C:\xampp\htdocs\\' . date('Y_m_d_H_i_s') . '.txt');
}
?>