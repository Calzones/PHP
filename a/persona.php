<?php
	class Persona implements Comportamiento{
		
		private $nif;
		private $fnac;
		private $nombre;
		private $cpostal;
		private static $num_perosnas;
		
		//constructor
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
			//heredar un constructor
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
?>