<?php
	require "medotos.php";

	$nombre = isset($_POST["usuario"]) ? $_POST["usuario"] : '';
	$contraseña = isset($_POST["contrasenia"]) ? $_POST["contrasenia"] : '';
	
	if ($nombre != "" || $contraseña != "") {
		
		$resultado = inicioSesion($nombre, $contraseña);
		
		if ($resultado->num_rows > 0) {
			echo getTemplateTocho("cita", '{usuario}', $nombre);
		} else {
			echo getTemplateTocho("inicio", '{mensajito}', "Usuario o contraseña incorrectos");
		}
	} else {
		echo getTemplateTocho("inicio", '{mensajito}', "");
	}
?>