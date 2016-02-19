<?php
	require "medotos.php";
	session_start();

	$nombre = isset($_POST["usuario"]) ? $_POST["usuario"] : '';
	$contraseņa = isset($_POST["contrasenia"]) ? $_POST["contrasenia"] : '';
	unset($_SESSION["nombre"]);
	
	if ($nombre != "" || $contraseņa != "") {
		
		$resultado = inicioSesion($nombre, $contraseņa);
		
		if ($resultado->num_rows > 0) {
			$_SESSION["nombre"] = $nombre;
			echo getTemplateTocho("cita", '{usuario}', $nombre);
		} else {
			echo getTemplateTocho("inicio", '{mensajito}', "Usuario o contraseņa incorrectos");
		}
	} else {
		echo getTemplateTocho("inicio", '{mensajito}', "");
	}
?>