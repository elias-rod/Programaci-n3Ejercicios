<?php
class Garage
{
	//CAMPOS
	private $_razonSocial;
	private $_precioPorHora;
	private $_autos;
	//MÉTODOS
	function __construct($razon, $precio = 10)
	{
		$this->_razonSocial = $razon;
		$this->_precioPorHora = $precio;
		$this->_autos = array();
	}
	public function MostrarGarage()
	{
		echo '<br>La razon social es: ' . $this->_razonSocial . '<br>';
		echo 'El precio por hora es: ' . $this->_precioPorHora . '<br><br>';
		foreach ($this->_autos as $auto) {
			Auto::MostrarAuto($auto);
			echo '<br><br>';
		}
	}
	public function Equals($auto)
	{
		foreach ($this->_autos as $unAuto) {
			return Auto::Equals($unAuto, $auto);
		}
	}
	public function Add($auto)
	{
		$this->Equals($auto) ? print 'El auto ya se encuentra actualmente en el garage<br>' : $this->_autos[] = $auto;
	}
	public function Remove($auto)
	{
		for ($i=0; $i < count($this->_autos) ; $i++) { 
			if (Auto::Equals($this->_autos[$i], $auto))
			{
				unset($this->_autos[$i]);
				break;
			}
			echo 'El auto no se encuentra actualmente en el garage<br>';
		}
	}
}