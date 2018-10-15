<?php

class Tabla{
	private $matriz=array();
	private $filas;
	private $columnas;
	private $fondo=array();
	private $texto=array();

	public function __construct($filas,$columnas)
	{
		$this->filas=$filas;
		$this->columnas=$columnas;
		
	}

	public function cargar($fila,$columna,$valor,$fondo,$texto)
	{
		$this->matriz[$fila][$columna]=$valor;
		$this->fondo[$fila][$columna]=$fondo;
		$this->texto[$fila][$columna]=$texto;
	}

	public function inicioTabla()
	{
		echo '<table border="1">';
	}

	public function inicioFila()
	{
		echo '<tr>';
	}

	public function mostrar($fila,$columna)
	{
		echo'<td style="background:'.$this->fondo[$fila][$columna].';color:'.$this->texto[$fila][$columna].'">'.$this->matriz[$fila][$columna].'</td>';

	}

	public function finFila()
	{
		echo'</tr>';
	}

	public function finTabla()
	{
		echo '</table>';
	}

	public function graficar()
	{
		$this->inicioTabla();
		for($i=1;$i<=$this->filas;$i++)
		
		{
			$this->inicioFila();
			for($j=1;$j<=$this->columnas;$j++)
				
			{
				$this->mostrar($i,$j);
				
			}
			$this->finFila();
			
		}
		$this->finTabla();
	}
}

$tabla1=new Tabla(4,4);
$tabla1->cargar(1,1,"1", '#F22905', '#000'); $tabla1->cargar(1,2,"2",'#FFD733', '#000'); $tabla1->cargar(1,3,"3", '#F22905', '#000'); $tabla1->cargar(1,4,"4", '#FFD733', '#000');
$tabla1->cargar(2,1,"5", '#F22905', '#000'); $tabla1->cargar(2,2,"6", '#FFD733', '#000'); $tabla1->cargar(2,3,"7", '#F22905', '#000'); $tabla1->cargar(2,4,"8", '#FFD733', '#000');
$tabla1->cargar(3,1,"9", '#F22905', '#000'); $tabla1->cargar(3,2,"10", '#FFD733', '#000'); $tabla1->cargar(3,3,"11", '#F22905', '#000'); $tabla1->cargar(3,4,"12", '#FFD733', '#000');
$tabla1->cargar(4,1,"13", '#F22905', '#000'); $tabla1->cargar(4,2,"14", '#FFD733', '#000'); $tabla1->cargar(4,3,"15", '#F22905', '#000'); $tabla1->cargar(4,4,"16", '#FFD733', '#000');

$tabla1->graficar();
?>
