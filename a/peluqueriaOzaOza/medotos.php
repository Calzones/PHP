<?PHP
	//Establece la conexion con la base de datos
	function conectar(){
		$mysqli = new mysqli ( "localhost", "root", "root", "peluqueria");
		if ($mysqli->connect_errno) {
			echo "Fallo la conexión con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}
		return $mysqli;
	}
	
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
	
	//work in progres
// 	function getTemplateReContraTocho($cajita){
// 		foreach($cajita as $clave=>$valor){
// 			getTemplateTocho($pagina, $clave, $valor);
// 		}		
// 	}
	
	// Hace una consulta a la base de datos.
	// Busca una coincidencia con un usuario y contraseña concretos.
	// Devuelve un numero mayor o menor a 0.
	function inicioSesion($nombre, $contraseña) {
		return conectar ()->query( "SELECT * FROM usuarios WHERE nombre LIKE '$nombre' AND contrasenia LIKE '$contraseña'");;
	}
	
	//work in progress
	function getCita($fecha, $hora){
		return conectar()->query("SELECT * FROM citas WHERE fecha LIKE '$fecha' AND hora LIKE '$hora'");
	}
	function fecha($cadena){
		return date($cadena);
	}
?>