<?php 
class Rectangulo extends FiguraGeometrica
{
	public function __construct($l1, $l2)
	{
		$this->_ladoUno = $l1;
		$this->_ladoDos = $l2;
		$this->CalcularDatos();
	}
	//CAMPOS
	private $_ladoDos;
	private $_ladoUno;
	//METODOS
	protected function CalcularDatos(){
		$this->_perimetro = $this->_ladoUno * 2 + $this->_ladoDos * 2;
		$this->_superficie = $this->_ladoUno * $this->_ladoDos;
	}
	public function Dibujar(){
		echo '<p style="color:' . $this->_color . ';">';
		for ($i=1; $i <= (int)$this->_ladoUno; $i++) { 
			for ($j=1; $j <= (int)$this->_ladoDos; $j++) { 
				echo '*';
			}
			echo '<br>';
		}
		echo '</p>';
	}
	public function ToString(){
		echo "El perímetro de la figura es: $this->_perimetro<br>La superficie de la figura es: $this->_superficie<br>El lado uno mide: $this->_ladoUno<br>El lado dos mide: $this->_ladoDos<br>El color de la figura es: $this->_color<br>";
		$this->Dibujar();
	}
}