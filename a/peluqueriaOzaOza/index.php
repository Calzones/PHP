<?php
	require "medotos.php";

	$nombre = isset($_POST["usuario"]) ? $_POST["usuario"] : '';
	$contrase�a = isset($_POST["contrasenia"]) ? $_POST["contrasenia"] : '';
	
	if ($nombre != "" || $contrase�a != "") {
		
		$resultado = inicioSesion($nombre, $contrase�a);
		
		if ($resultado->num_rows > 0) {
			print getTemplateTocho("cita", '{usuario}', $nombre);
		} else {
			print getTemplateTocho("inicio", '{mensajito}', "Usuario o contrase�a incorrectos");
		}
	} else {
		print getTemplateTocho("inicio", '{mensajito}', "");
	}
?>