<?php
	//require_once ('../core/conectarBD.php');
	
	// Importar modelo de abstracci�n de base de datos
	class Usuario extends conectarBD {
		
		public function inicioSesion($nombre = '', $contrase�a = '') {
			if ($nombre != '' && $contrase�a != '') {
				$this->query = "SELECT * FROM usuarios WHERE nombre LIKE '$nombre' AND contrasenia LIKE '$contrase�a'";
				return $this->querierear();
			}
		}
	}
?>