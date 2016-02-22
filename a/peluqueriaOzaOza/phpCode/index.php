<?php
 	require "medotos.php";
	//require_once 'modelo.php';
	
	session_start();

	$nombre = isset($_POST["usuario"]) ? $_POST["usuario"] : '';
	$contraseña = isset($_POST["contrasenia"]) ? $_POST["contrasenia"] : '';
	unset($_SESSION["nombre"]);
	
	if ($nombre != "" || $contraseña != "") {
		$resultado = inicioSesion($nombre, $contraseña);
		
		if ($resultado->num_rows > 0) {
			$_SESSION["nombre"] = $nombre;
			echo getTemplateTocho("cita", '{usuario}', $nombre);
		} else {
			echo getTemplateTocho("inicio", '{mensajito}', "Usuario o contraseña incorrectos");
		}
	} else {
		echo getTemplateTocho("inicio", '{mensajito}', "");
	}
?>