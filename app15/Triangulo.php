<?php 
class Triangulo extends FiguraGeometrica
{
	public function __construct($b, $h)
	{
		$this->_altura = $h;
		$this->_base = $b;
		$this->CalcularDatos();
	}
	//CAMPOS
	private $_altura;
	private $_base;
	//METODOS
	protected function CalcularDatos(){
		$this->_perimetro = sqrt(pow(($this->_base / 2), 2) + pow($this->_altura, 2) * 2 + $this->_base);
		$this->_superficie = ($this->_base * $this->_altura) / 2;
	}
	public function Dibujar(){
		echo '<p style="color:' . $this->_color . ';">';
		$j = 1;
		for($i = $this->_altura; $i > 0; $i--)
		{
			echo  str_repeat('&nbsp;', $i-1);
			echo  str_repeat('*', $j++);
			echo "<br>";
		}
		echo '</p>';
	}
	public function ToString(){
		echo "El perímetro de la figura es: $this->_perimetro<br>La superficie de la figura es: $this->_superficie<br>La altura mide: $this->_altura<br>La base mide: $this->_base<br>El color de la figura es: $this->_color<br>";
		$this->Dibujar();
	}
}