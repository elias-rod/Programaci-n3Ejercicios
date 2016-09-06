<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>
<form method="post">
  <select name="select">
    <option value="255, 255, 255">Blanco</option>
    <option value="255, 255, 0">Amarillo</option>
	<option value="0, 102, 255">Azul</option>
	<option value="255, 0, 0">Rojo</option>
	<option value="0, 204, 0">Verde</option>
	<option value="102, 0, 255">Violeta</option>
  </select>
  <br><br>
  <input type="submit" value="Cambiar color">
</form>
<?php 
	if(isset($_POST['select']))
	{
		echo '<style type="text/css">body{background-color:RGB(' . $_POST['select'] . ')</style>' ;
	}
 ?>
</body>
</html>
