<?php
	abstract class conectarBD {
		private $coneccion;
		private static $host = 'localhost';
		private static $usuario = 'root';
		private static $contraseña = 'root';
		protected $query;
		protected $rows = array();
		protected $Nombre = 'peluqueria';
		public $mensaje = 'Hecho';
		private function conectar() {
			$this->$coneccion = new mysqli ('localhost', 'root', 'root', 'peluqueria');
		}
		private function serrar() {
			$this->$coneccion->close();
		}
		
		// Ejecutar un query simple del tipo INSERT, DELETE, UPDATE
		protected function querierear() {
			if ($_POST) {
				$this->conectar();
				$this->$coneccion->query ($this->query);
				$this->serrar();
			} else {
				$this->mensaje = 'Metodo no permitido';
			}
		}
	}
?>