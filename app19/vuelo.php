<?php 
class Vuelo
{
	//CAMPOS
	private $_fecha;
	private $_empresa;
	private $_precio;
	private $_listaDePasajeros;
	private $_cantMaxima;
	//MÉTODOS
	function __construct($empresa, $precio, $cantidadMaxima = null, $fecha = null, $listaPasajeros = null)
	{
		$this->_empresa = $empresa;
		$this->_precio = $precio;
		$this->_cantMaxima = $cantidadMaxima;
		$this->_fecha = $fecha;
		$this->_listaDePasajeros = $listaPasajeros;
	}
	public function GetCantMax()
	{
		return $this->_cantMaxima;
	}
	public function GetVuelo()
	{
		$string = 'Fecha: ' . ($this->_fecha == null ? 'indeterminada' : $this->_fecha->format('d-m-Y H:i')) . "<br>Empresa: $this->_empresa<br>Precio: $this->_precio<br>Cantidad máxima: $this->_cantMaxima<br>";
		if($this->_listaDePasajeros != null)
			foreach ($this->_listaDePasajeros as $pasajero)
			{
				$string .= $pasajero->GetInfoPasajero();
			}
		else
		{
			$string .= 'Lista de pasajeros vacía.<br>';
		}
		$string .= '<br>';
		return $string;
	}
	public function AgregarPasajero($pasajero)
	{
		if(count($this->_listaDePasajeros) < $this->_cantMaxima)
		{
			foreach ($this->_listaDePasajeros as $cadaPasajero)
			{
				if($cadaPasajero->Equals($pasajero))
				{
					echo 'El pasajero ya se encuentra en el vuelo<br>';
					return false;
				}
			}
			$this->_listaDePasajeros[] = $pasajero;
		}
		else
		{
			echo 'El vuelo está completo y no se pueden agregar más pasajeros.<br>';
			return false;
		}
	}
	public function MostrarVuelo()
	{
		echo $this->GetVuelo();
	}
	public static function Add($vuelo1, $vuelo2)
	{
		$rec1 = 0;
		$rec2 = 0;
		for ($i=0; $i < count($vuelo1->_listaDePasajeros); $i++) { 
			if(!strpos($vuelo1->_listaDePasajeros[$i]->GetInfoPasajero(), 'true') == true){
				$rec1 += $vuelo1->_precio * 0.8;
			}
			else{
				$rec1 += $vuelo1->_precio;
			}
		}
		for ($i=0; $i < count($vuelo2->_listaDePasajeros); $i++) { 
			if(!strpos($vuelo2->_listaDePasajeros[$i]->GetInfoPasajero(), 'true') == true){
				$rec2 += $vuelo2->_precio * 0.8;
			}
			else{
				$rec2 += $vuelo2->_precio;
			}
		}
		return $rec1 + $rec2;
	}
	public static function Remove($vuelo, $pasajero){
		for ($i=0; $i < count($vuelo->_listaDePasajeros); $i++) { 
			if($vuelo->_listaDePasajeros[$i]->Equals($pasajero)){
				unset($vuelo->_listaDePasajeros[$i]);
				$vuelo->_listaDePasajeros = array_values($vuelo->_listaDePasajeros);
				return $vuelo;
			}
		}
		echo 'El pasajero no está a bordo.<br>';
		return $vuelo;
	}
}