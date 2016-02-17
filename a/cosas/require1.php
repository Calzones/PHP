<?php
	require "persona.php";
	
	$persona = new Persona ( "45368554G", "Paco", 32121, "ayer", 3 );
	$persona1 = new Persona ( "45368556K", "Fabricio", 35116, "14/12/1993", 0 );
	$estudiante = new Estudiante ( "45368554G", "Paco", 32121, "ayer", 0, 3, 1 );
	$estudiante1 = new Estudiante ( "45368556K", "Fabricio", 35116, "14/12/1993", 4, 2, 2 );
	$estudiante2 = new Estudiante ( "45365987G", "Juan", 35124, "hoy", 5, 1, 3 );
	
	// array normal
	$arrayEstudiantes = array (
			$estudiante,
			$estudiante1,
			$estudiante2 
	);
	// array con clave - valor
	$arrayEstudiantes1 = array (
			$estudiante->getId () => $estudiante,
			$estudiante1->getId () => $estudiante1,
			$estudiante2->getId () => $estudiante2 
	);
	
	// recorrer array normal
	goto a;
	foreach ( $arrayEstudiantes as $valor ) {
		echo $valor->getNombre ();
	}
	a:
	// recorrer array con clave - valor
	$a = $estudiante->getId ();
	foreach ( $arrayEstudiantes1 as $a => $valor ) {
		echo $valor->getNombre ();
	}
	function conectar() {
		include "connection.php";
	}
	// echo "<br>DNI: " . $persona->getNif() . "<br>";
	// echo "Nombre: " . $persona->getNombre() . "<br>";
	// echo "Codigo postal: " . $persona->getCPostal() . "<br>";
	// echo "Fecha nacimiento: " . $persona->getFnac() . "<br>";
	// echo "<br>";
	// echo "DNI: " . $persona1->getNif() . "<br>";
	// echo "Nombre: " . $persona1->getNombre() . "<br>";
	// echo "Codigo postal: " . $persona1->getCPostal() . "<br>";
	// echo "Fecha nacimiento: " . $persona1->getFnac() . "<br>";
	// echo "<br>";
	// echo "DNI: " . $estudiante->getNif() . "<br>";
	// echo "Nombre: " . $estudiante->getNombre() . "<br>";
	// echo "Codigo postal: " . $estudiante->getCPostal() . "<br>";
	// echo "Fecha nacimiento: " . $estudiante->getFnac() . "<br>";
	// echo "Identificacion: " . $estudiante->getId() . "<br>";
	// echo "Grupo: " . $estudiante->getGrupo() . "<br>";
	// echo "<br>";
	// echo "Numero perosnas relativo: " . Persona::getPerosnas();
	echo "<br>pasos con: " . $persona->getPasos () . "<br>";
	echo "pasos sin: " . $persona1->getPasos ();
?>