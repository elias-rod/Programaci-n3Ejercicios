<?php
class Enigma
{
	public static function Encriptar($mensaje, $rutaNuevoArchivo){
		$archivo = fopen($rutaNuevoArchivo, 'w');
		for ($i=0; $i < strlen($mensaje) ; $i++) { 
			$mensaje[$i] = chr(ord($mensaje[$i]) + 200);
			//echo $mensaje[$i];
		}
		$resultado = fwrite($archivo, $mensaje);
		fclose($archivo);

		echo $mensaje;

		return $resultado == false ? false : true;
	}
	
	public static function Desencriptar($rutaArchivoExistente){
		$archivo = fopen($rutaArchivoExistente, 'r');
		$mensaje = fgets($archivo);
		for ($i=0; $i < strlen($mensaje) ; $i++) { 
			$mensaje[$i] = chr(ord($mensaje[$i]) - 200);
		}
		fclose($archivo);
		return $mensaje;
	}
}