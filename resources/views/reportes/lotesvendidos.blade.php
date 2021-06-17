<?php
	
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "valdivia";                                                                                                                                                              
	
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, $password,$basededatos );
	
	$resultado =mysqli_query($conexion,$con) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	/*	https://aurea.es/calcular-en-mysql-la-diferencia-entre-dos-fechas-dadas/      para analizar fechas
		https://www.yukei.net/2014/10/trabajar-con-fechas-en-mysql/                   otro de fechas
*/
	echo "<table border='2' align='center'>";
	echo "<tr>";
	
	echo "<th>codigoV</th>";
	echo "<th>codigoP</th>";
	echo "<th>codigoM</th>";
	echo "<th>codigoC</th>";
	echo "<th>CI ZAFRERO</th>";
	
	echo "<th>NOMBRE</th>";
	echo "<th>PRECIO</th>";
	
	echo "<th>MEDIDA</th>";
	echo "<th>CANTIDAD</th>";
	echo "<th>PAGO AL</th>";
	
	echo "<TH>ACCION</TH>";
	
	echo "</tr>";
	
 
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna=mysqli_fetch_row( $resultado ))
	{
		echo "<tr>";
		echo "<td>" . $columna[1] . "</td><td>" . $columna[2] . "</td><td>" . $columna[4] . "</td><td>" . $columna[5] . "</td><td>" . $columna[3] . "</td><td>" . $columna[6] . "</td><td>" . $columna[7] . "</td><td>" . $columna[8]. "</td><td>".$columna[9]."</td><td>" . $columna[10]."</td><td>";
		
	}
	
	echo "</table>"; // Fin de la tabla
	// cerrar conexión de base de datos
	mysqli_close( $conexion );
?>