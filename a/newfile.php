<?php
	class Persona{
		
		private $nif;
		private $fnac;
		private $nombre;
		private $cpostal;
		private static $num_perosnas;
		
		function __construct($nif, $nombre, $cpostal, $fnac){
			$this->nif = $nif;
			$this->fnac = $fnac;
			$this->nombre = $nombre;
			$this->cpostal = $cpostal;
			self::$num_perosnas++;
		}
		public static function getPerosnas(){
			return self::$num_perosnas;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function getNif(){
			return $this->nif;
		}
		public function getCPostal(){
			return $this->cpostal;
		}
		public function getFnac(){
			return $this->fnac;
		}
		
	}
	
	class Estudiante extends Persona{
		private $id;
		private $grupo;
		private $nombre;
	}
	
	$persona = new Persona("45368556K", "Fabricio", 35116, "14/12/1993");
	$persona1 = new Persona("45368554G", "Paco", 32121, "ayer");
	
	echo "DNI: " . $persona->getNif() . "<br>\n";
	echo "Nombre: " . $persona->getNombre() . "\n";
	echo "Codigo postal: " . $persona->getCPostal() . "\n";
	echo "Fecha nacimiento: " . $persona->getFnac() . "\n";
	echo "Numero perosnas: " . Persona::getPerosnas();
?>