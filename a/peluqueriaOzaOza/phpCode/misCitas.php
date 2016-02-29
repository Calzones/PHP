<?PHP
	require "medotos.php";
	session_start();
	
	$usuario = $_SESSION["usuario"];
	getMisCitas($usuario);
?>