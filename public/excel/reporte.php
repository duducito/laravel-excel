	<?php
	//Incluimos librería y archivo de conexión
	require 'Classes/PHPExcel.php';
	require 'conexion.php';
	
	//Consulta
	$sql = "SELECT id, nombre, ci, codigoLote FROM lotes";
	$resultado = $mysqli->query($sql);
	
	header("Content-Type:text/csv; charset=latin1");
	header('Content-Disposition: attachment;filename="lotes.csv"');
	
	$salida=fopen('php://output','w');
	fputcsv($salida,array('id','nombre','ci','codigoLote'));
	$reporteCsv=$mysqli->query($sql);
	while($fila=$reporteCsv->fetch_assoc())
	{
		fputcsv($salida,array ($fila['id'],
								$fila['nombre'],
								$fila['ci'],
								$fila['codigoLote']


			));
	}
?>