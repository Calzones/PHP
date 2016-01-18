<?php
	$IP = "localhost";
	$USER = "root";
	$PASS = "root";
	$BD = "shop";
	
	$enlace = mysqli_connect ( $IP, $USER, $PASS, $BD );
	
	if (! $enlace) {
		echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
		echo "errno de depuraci�n: " . mysqli_connect_errno () . PHP_EOL;
		echo "error de depuraci�n: " . mysqli_connect_error () . PHP_EOL;
		exit ();
	}
	echo "�xito: Se realiz� una conexi�n apropiada a MySQL! La base de datos $BD es genial." . PHP_EOL;
	echo "Informaci�n del host: " . mysqli_get_host_info ( $enlace ) . PHP_EOL;
	mysqli_close ( $enlace );
?>