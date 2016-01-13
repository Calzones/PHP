<?php 
	$IP = "localhost";
	$USER = "root";
	$PASS = "root";
	$BD = "shop";
	
	$mysqli = new mysqli($IP, $USER, $PASS, $BD);
	if ($mysqli->connect_errno) {
	    echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

	$mysqli->real_query("SELECT * FROM books");
	$resultado = $mysqli->use_result();
	
	while ($fila = $resultado->fetch_assoc()) {
		echo "Id = " . $fila['book_id'] ."<br>";
		echo "Titulo = " . $fila['title'] ."<br>";
		echo "Autor = " . $fila['author'] ."<br>";
		echo "Precio = " . $fila['price'] ."<br>";
		echo "<br>";
	}
?>