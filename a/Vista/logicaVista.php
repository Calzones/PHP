<?php
	$diccionario = array (
			'img' => 'logo.png',
			'Titulo de la Pagina' => 'POO y MVC en PHP',
			'keywords' => 'poo, mvc, php, arquitectura de software',
			'descripcion' => 'El paradigma de la programación orientada a objetos con el patrón arquitectónico MVC en PHP' 
			);
	$template = file_get_contents ( 'plantilla.html' );
	
	foreach ( $diccionario as $clave => $valor ) {
		$template = str_replace ( '{' . $clave . '}', $valor, $template );
	}
	
	echo $template;
?>