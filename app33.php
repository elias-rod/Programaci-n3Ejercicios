<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>
<form method="post">
	Ingrese un numero entero: <input type="text" name="numero"><br>
	<input type="submit">
</form>
<?php
	if (isset($_POST['numero'])) {
		$numero = intval($_POST['numero']);
		
		echo '<table border ="1">';
		echo '<tr><td>Cantidad de cifras</td><td>' . CalcularCifras($numero). '</td></tr>';
		echo '<tr><td>Suma cifras impares</td><td>' . SumarCifrasImpares($numero). '</td></tr>';
		echo '<tr><td>Suma cifras pares</td><td>' . SumarCifrasPares($numero). '</td></tr>';
		echo '<tr><td>Suma todas las cifras</td><td>' . (SumarCifrasPares($numero) + SumarCifrasImpares($numero)). '</td></tr>';
		echo '<tr><td>Divisores</td><td>' . CalcularDivisores($numero). '</td></tr>';
		echo '</table>';
	}
	function CalcularCifras($numero){
		$temp = $numero;
		$contador = 0;
		while ($temp > 0) {
			$temp = intval($temp / 10);
			$contador++;
		}
		return $contador;
	}
	function SumarCifrasImpares($numero){
		$temp = $numero;
		$suma = 0;
		while ($temp > 0) {
			if($temp % 2 != 0){
				$suma += $temp % 10;
			}
			$temp = intval($temp / 10);
		}
		return $suma;
	}
	
	function SumarCifrasPares($numero){
		$temp = $numero;
		$suma = 0;
		while ($temp > 0) {
			$suma += $temp % 10;
			$temp = intval($temp / 10);
		}
		return $suma;
	}
	function CalcularDivisores($numero){
		$string = "";
		for ($i = 1; $i <= $numero; $i++)
        {
            if ($numero % $i == 0)
            {
                $string .= $i . ', ';
            }
        }
        return $string;
	}
?>
</body>
</html>