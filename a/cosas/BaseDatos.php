<?php
	$mysqli = new mysqli ( "localhost", "root", "elrincon", "shop" );

	$consulta = "SELECT * FROM categories";
	
	if ($sentencia = $mysqli->prepare ( $consulta )) {
		
		/* ejecutar la sentencia */
		$sentencia->execute ();
		
		/* vincular las variables de resultados */
		$sentencia->bind_result ( $id, $nombre );
		
		/* obtener los valores */
		while ( $sentencia->fetch () ) {
			printf ( "%s (%s)<br/>", $id, $nombre );
		}
		
		/* cerrar la sentencia */
		$sentencia->close ();
	}
	
	/* cerrar la conexión */
	$mysqli->close ();
?>
