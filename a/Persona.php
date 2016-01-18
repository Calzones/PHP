<?php
	abstract class Persona {
		private static $num_personas = 0;
		private $nif;
		private $nombre;
		private $cpostal;
		private $fecha;
		function __construct($nif, $nombre, $cpostal, $fecha) {
			$this->nif = $nif;
			$this->nombre = $nombre;
			$this->cpostal = $cpostal;
			$this->fecha = $fecha;
			self::$num_personas ++;
		}
		public function getNif() {
			return $this->nif;
		}
		public static function get_Num_personas() {
			return self::$num_personas;
		}
	}
	class Estudiante extends Persona {
		private $id;
		private $grupo;
		function __construct($nif, $nombre, $cpostal, $fecha, $id, $grupo) {
			parent::__construct ( $nif, $nombre, $cpostal, $fecha );
			$this->id = $id;
			$this->grupo = $grupo;
		}
	}
	
	// $persona = new Persona("3486769K","PEDRO PEREZ", 35012,19791109);
	// $persona = new Persona("3445699G","MARIA PEREZ", 35018,19981024);
	$est = new Estudiante ( "12345769K", "ESTUDIANTE PEREZ", 35012, 19791109, 12, 34 );
	echo $est->getNif ();
	ECHO "Numero de personas creadas : " . Persona::get_Num_personas ();
	// echo $persona->getNif();
?>