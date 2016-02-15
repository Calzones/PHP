<?PHP
	//Obtiene el contenido de una plantilla html.
	//Devuelve una string.
	function getTemplate($pagina) {
		return file_get_contents ($pagina . '.html');
	}
	
	//Obtiene el contenido de una plantilla html.
	//Sustituye un parametro concreto por una string pasada por parametro.
	//Devuelve una string.
	function getTemplateTocho($pagina, $remplazar, $mensaje) {
		return str_replace($remplazar, $mensaje, getTemplate($pagina));
	}
	
	//Hace una consulta a la base de datos.
	//Busca una coincidencia con un usuario y contraseña concretos.
	//Devuelve un numero mayor o menor a 0.
	function inicioSesion($nombre, $contraseña){
		$mysqli = new mysqli ( "localhost", "root", "root", "peluqueria");
		if ($mysqli->connect_errno) {
			echo "Fallo la conexión con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}
		$resultado = $mysqli->query("SELECT * FROM usuarios WHERE nombre LIKE '$nombre' AND contrasenia LIKE '$contraseña'");
		return $resultado;
	}
	
	function citas($fecha){
		$mysqli = new mysqli ( "localhost", "root", "root", "peluqueria");
		if ($mysqli->connect_errno) {
			echo "Fallo la conexión con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}
		$resultado = $mysqli->query("SELECT * FROM citas WHERE fecha NOT LIKE '$fecha'");
		return $resultado;
	}
?>