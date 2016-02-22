<?php
	//require_once ('../core/conectarBD.php');
	
	// Importar modelo de abstracción de base de datos
	class Usuario extends conectarBD {
		
		public function inicioSesion($nombre = '', $contraseña = '') {
			if ($nombre != '' && $contraseña != '') {
				$this->query = "SELECT * FROM usuarios WHERE nombre LIKE '$nombre' AND contrasenia LIKE '$contraseña'";
				return $this->querierear();
			}
		}
	}
?>