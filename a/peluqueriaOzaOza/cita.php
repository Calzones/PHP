<?PHP
	require "medotos.php";
	print getTemplateTocho("cita", '{usuario}', $nombre="asdas");
	$_POST['select'];
	$fecha = fecha("d/m");
	$hora = "a";
	
	$hola = "<table><th>Hora</th>";
	for($i = 8; $i < 17; $i ++){
		$hora = $i . ":00";
		$hola .=  "<tr>";
		if (getCita($fecha, $hora)->num_rows == 0){
			$hola .= "<td>" . $hora . "</td>";
		}else{
			$hola .= "<td>" . $hora ."</td>";
		}
		$hola .= "</tr>";
		 
	}
	$hola .= "</table>";
	echo $hola;
?>