<?PHP
	require "medotos.php";
	
	$fechaMal = $_POST['select'];
	list($anio, $mes, $dia) = split('[/.-]', $fechaMal);
	
	$fecha = $dia . "/" . $mes . "/" . $anio;
	$hora = "";
	$tabla = "";
	
	$tabla = "<div class='divTabla'><table><th>Hora</th>";
	for($i = 8; $i < 17; $i ++){
		$hora = $i . ":00";
		$tabla .=  "<tr>";
		if (getCita($fecha, $hora)->num_rows == 0){
			$tabla .= "<td>" . $hora . "</td>";
		}else{
			$tabla .= "<td>" . $hora . " Ta ocupao manaso</td>";
		}
		$tabla .= "</tr>";
		 
	}
	$tabla .= "</table></div>";
	$array = array (
			"{usuario}" => "asdas",
			"{tabla}" => $tabla,
	);
	echo getTemplateReContraTocho("cita", $array);
?>