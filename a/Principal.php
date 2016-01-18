<?php
	include "Persona.php";
	
	$est1 = new Estudiante ( "3486769K", "PEDRO PEREZ", 35012, 19791109, 17, 34 );
	$est2 = new Estudiante ( "3445699G", "MARIA PEREZ", 35018, 19981024, 15, 34 );
	$est3 = new Estudiante ( "12345769K", "ESTUDIANTE PEREZ", 35012, 19791109, 12, 34 );
	
	echo $est1->get_TotalPasos () . "<br>";
	
	$est1->caminar ();
	
	echo $est1->get_TotalPasos () . "<br>";
	
	// $est1-> caminar(3);
	ECHO "Numero de personas creadas : " . Persona::get_Num_personas ();
	// echo $persona->getNif();
	
	// creamos un asociativo de estudiantes.
	$estudiantes = array (
			$est1,
			$est2,
			$est3 
	);
	$estudiantes2 = array (
			$est1->getNif () => $est1,
			$est2->getNif () => $est2,
			$est3->getNif () => $est3 
	);
?>