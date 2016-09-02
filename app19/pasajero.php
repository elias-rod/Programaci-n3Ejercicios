<?php 
class Pasajero
{
	//CAMPOS
	private $_apellido;
	private $_nombre;
	private $_dni;
	private $_esPlus;
	//MÉTODOS
	function __construct($apellido, $nombre, $dni, $esPlus)
	{
		$this->_apellido = $apellido;
		$this->_nombre = $nombre;
		$this->_dni = $dni;
		$this->_esPlus = $esPlus;
	}
	public function Equals($pasajero)
	{
		if($this->_dni == $pasajero->_dni)
			return true;
		return false;		
	}
	public function GetInfoPasajero()
	{
		return 'Apellido: ' . $this->_apellido . '<br>Nombre: ' . $this->_nombre . '<br>DNI: ' . $this->_dni . '<br>Es plus: ' . ($this->_esPlus ? 'true' : 'false') . '<br><br>';
	}
	public static function MostrarPasajero($pasajero)
	{
		echo $pasajero->GetInfoPasajero();
	}
}