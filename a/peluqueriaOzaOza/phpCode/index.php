<?php
 	require "medotos.php";
	//require_once 'modelo.php';
	
	session_start();

	$nombre = isset($_POST["usuario"]) ? $_POST["usuario"] : '';
	$contrase�a = isset($_POST["contrasenia"]) ? $_POST["contrasenia"] : '';
	unset($_SESSION["nombre"]);
	
	if ($nombre != "" || $contrase�a != "") {
		$resultado = inicioSesion($nombre, $contrase�a);
		
		if ($resultado->num_rows > 0) {
			$_SESSION["nombre"] = $nombre;
			echo getTemplateTocho("cita", '{usuario}', $nombre);
		} else {
			echo getTemplateTocho("inicio", '{mensajito}', "Usuario o contrase�a incorrectos");
		}
	} else {
		echo getTemplateTocho("inicio", '{mensajito}', "");
	}
?>