<?php
	require "introduction.php";
	
	$persona = new Persona("45368556K", "Fabricio", 35116, "14/12/1993");
	$persona1 = new Persona("45368554G", "Paco", 32121, "ayer");
	$estudiante = new Estudiante("45368554G", "Paco", 32121, "ayer", 2, 3);
	
	echo "<br>DNI: " . $persona->getNif() . "<br>";
	echo "Nombre: " . $persona->getNombre() . "<br>";
	echo "Codigo postal: " . $persona->getCPostal() . "<br>";
	echo "Fecha nacimiento: " . $persona->getFnac() . "<br>";
	echo "<br>";
	echo "DNI: " . $persona1->getNif() . "<br>";
	echo "Nombre: " . $persona1->getNombre() . "<br>";
	echo "Codigo postal: " . $persona1->getCPostal() . "<br>";
	echo "Fecha nacimiento: " . $persona1->getFnac() . "<br>";
	echo "<br>";
	echo "DNI: " . $estudiante->getNif() . "<br>";
	echo "Nombre: " . $estudiante->getNombre() . "<br>";
	echo "Codigo postal: " . $estudiante->getCPostal() . "<br>";
	echo "Fecha nacimiento: " . $estudiante->getFnac() . "<br>";
	echo "Identificacion: " . $estudiante->getId() . "<br>";
	echo "Grupo: " . $estudiante->getGrupo() . "<br>";
	echo "<br>";
	echo "Numero perosnas relativo: " . Persona::getPerosnas();
?>