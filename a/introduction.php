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
		public function __construct($nif, $nombre, $cpostal, $fnac, $id, $grupo){
			parent::__construct($nif, $nombre, $cpostal, $fnac);
			$this->id = $id;
			$this->grupo = $grupo;
		}
		public function getId(){
			return $this->id;
		}
		public function getGrupo(){
			return $this->grupo;
		}
		
	}

	$persona = new Persona("45368556K", "Fabricio", 35116, "14/12/1993");
	$persona1 = new Persona("45368554G", "Paco", 32121, "ayer");
	$estudiante = new Estudiante("45368554G", "Paco", 32121, "ayer", 2, 3);
		
	echo "<br>DNI: " . $persona->getNif() . "<br>";
	echo "Nombre: " . $persona->getNombre() . "<br>";
	echo "Codigo postal: " . $persona->getCPostal() . "<br>";
	echo "Fecha nacimiento: " . $persona->getFnac() . "<br>";
	echo "<br>";
	echo "DNI: " . $persona1->getNif() . "<br>";
	echo "Nombre: " . $persona1->getNombre() . "<br>";
	echo "Codigo postal: " . $persona1->getCPostal() . "<br>";
	echo "Fecha nacimiento: " . $persona1->getFnac() . "<br>";
	echo "<br>";
	echo "DNI: " . $estudiante->getNif() . "<br>";
	echo "Nombre: " . $estudiante->getNombre() . "<br>";
	echo "Codigo postal: " . $estudiante->getCPostal() . "<br>";
	echo "Fecha nacimiento: " . $estudiante->getFnac() . "<br>";
	echo "Identificacion: " . $estudiante->getId() . "<br>";
	echo "Grupo: " . $estudiante->getGrupo() . "<br>";
	echo "<br>";
	echo "Numero perosnas relativo: " . Persona::getPerosnas();
?>