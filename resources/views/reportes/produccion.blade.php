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
	echo "<th>codigo_Contratista</th>";
	echo "<th>codigoZ</th>";
	echo "<th>Produccion</th>";
	echo "<th>Valorado</th>";
	echo "<th>Precio Caja</th>";
	echo "<th>Fecha</th>";
	
	
	
	echo "<TH>ACCION</TH>";
	
	echo "</tr>";
	$alm=0;
 
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna=mysqli_fetch_row( $resultado ))
	{
		echo "<tr>";
		echo "<td>" . $columna[1] . "</td><td>" . $columna[2] . "</td><td>" . $columna[3] . "</td><td>" . $columna[4] . "</td><td>" . $columna[6] . "</td><td>" . $columna[5] . "</td><td>";
		$alm=$alm+$columna[3];
	}
	
	echo "</table>"; // Fin de la tabla
	// cerrar conexión de base de datos
	echo "La cantidad de produccion de Almendra en zafra y guardada en Almacen  es: <h1>".$alm." Cajas</h1>";
	mysqli_close( $conexion );
?>