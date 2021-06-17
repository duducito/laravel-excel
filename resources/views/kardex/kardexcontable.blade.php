<?php
	require 'excel/Classes/PHPExcel/IOFactory.php'; //Agregamos la librería 
	// Creamos un objeto PHPExcel
		
		$acuenta=0;
		$saldo=0;
		$cuo=0;
		$i=6;
		$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "valdivia";                                                                                                                                                              
	
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, $password,$basededatos );
	
	$resultado =mysqli_query($conexion,$con) or die ( "Algo ha ido mal en la consulta a la base de datos");
		$res =mysqli_query($conexion,$stock) or die ( "Algo ha ido mal en la consulta a la base de datos stock");
		$objPHPExcel = new PHPExcel();
		$objReader = PHPExcel_IOFactory::createReader('Excel2007');
		$objPHPExcel = $objReader->load('excel/librocontable.xlsx');
		// Indicamos que se pare en la hoja uno del libro
		$objPHPExcel->setActiveSheetIndex(0);
		
				while ($cu=mysqli_fetch_row( $resultado ))
			{				
				
				
				//$objPHPExcel->getActiveSheet()->SetCellValue('c4', $cu->ciZ);
				$objPHPExcel->getActiveSheet()->SetCellValue('b'.$i, $cu[1]);//numero de recibo
				$objPHPExcel->getActiveSheet()->SetCellValue('c'.$i,$cu[2]);
				$objPHPExcel->getActiveSheet()->SetCellValue('d'.$i,$cu[0]);
				$objPHPExcel->getActiveSheet()->SetCellValue('e'.$i,$cu[4]);
				$objPHPExcel->getActiveSheet()->SetCellValue('f'.$i,$cu[3]);
				$objPHPExcel->getActiveSheet()->SetCellValue('g'.$i,$cu[3]*$cu[0]);
				$objPHPExcel->getActiveSheet()->SetCellValue('h'.$i,$cu[4]*$cu[0]);
				$objPHPExcel->getActiveSheet()->SetCellValue('I'.$i,($cu[3]*$cu[0])-($cu[4]*$cu[0]));
				//$objPHPExcel->getActiveSheet()->SetCellValue('I'.$i,($cu[5]);
				$objPHPExcel->getActiveSheet()->SetCellValue('h32',$acuenta);
				$i=$i+1;

			
			
				
				
				}	
				$i=6;
				while ($st=mysqli_fetch_row( $res ))
			{				
				
				
				//$objPHPExcel->getActiveSheet()->SetCellValue('c4', $cu->ciZ);
				$objPHPExcel->getActiveSheet()->SetCellValue('j'.$i,$st[4]);//numero de recibo
				$objPHPExcel->getActiveSheet()->SetCellValue('j'.$i,$st[4]);
				$i=$i+1;
			}


			/*}
			else
			 {

			 	$objPHPExcel->getActiveSheet()->SetCellValue('c3', $cu->pagoAl);
				$objPHPExcel->getActiveSheet()->SetCellValue('c4', $cu->ciZ);
				$objPHPExcel->getActiveSheet()->SetCellValue('b6', $cu->codigoP);//numero de recibo
				$objPHPExcel->getActiveSheet()->SetCellValue('c6',$cu->nombre);
				$objPHPExcel->getActiveSheet()->SetCellValue('d6',$cu->cantenv);
				$objPHPExcel->getActiveSheet()->SetCellValue('e6',$cu->precio_mayor);
				$objPHPExcel->getActiveSheet()->SetCellValue('f6',$cu->cantenv*$cu->precio_mayor);
				
				$objPHPExcel->getActiveSheet()->SetCellValue('h32',$cu->cantenv*$cu->precio_mayor);
				

			
				
				
					
			}*/
//Guardamos los cambios
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		
		$objWriter->save("excel/imprekardex.xlsx");   //


		$objPHPExcel = new PHPExcel();
$objReader = PHPExcel_IOFactory::createReader('Excel2007');
$objPHPExcel = $objReader->load('excel/imprekardex.xlsx');
//header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header('Content-Disposition: attachment;filename="ejemplo.xlsx"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
?>