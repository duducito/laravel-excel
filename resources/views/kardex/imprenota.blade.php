<?php
	require 'excel/Classes/PHPExcel/IOFactory.php'; //Agregamos la librería 
	// Creamos un objeto PHPExcel
		
		$acuenta=0;
		$saldo=0;
		$cuo=0;
		$i=6;

		$objPHPExcel = new PHPExcel();
		$objReader = PHPExcel_IOFactory::createReader('Excel2007');
		$objPHPExcel = $objReader->load('excel/kardex.xlsx');
		// Indicamos que se pare en la hoja uno del libro
		$objPHPExcel->setActiveSheetIndex(0);
		if(count($proforma)>0)
		{

				foreach($proforma as $cu)
				{
					$acuenta=$acuenta+($cu->precio*$cu->cantidad);
								
				
				$objPHPExcel->getActiveSheet()->SetCellValue('c3', $cu->pagoAl);
				$objPHPExcel->getActiveSheet()->SetCellValue('c4', $cu->ciZ);
				$objPHPExcel->getActiveSheet()->SetCellValue('b'.$i, $cu->codigoV);//numero de recibo
				$objPHPExcel->getActiveSheet()->SetCellValue('c'.$i,$cu->codigoP);
				$objPHPExcel->getActiveSheet()->SetCellValue('d'.$i,$cu->nombre);
				$objPHPExcel->getActiveSheet()->SetCellValue('e'.$i,$cu->medida);
				$objPHPExcel->getActiveSheet()->SetCellValue('f'.$i,$cu->cantidad);
				$objPHPExcel->getActiveSheet()->SetCellValue('g'.$i,$cu->precio);
				$objPHPExcel->getActiveSheet()->SetCellValue('h'.$i,$cu->precio*$cu->cantidad);
				$objPHPExcel->getActiveSheet()->SetCellValue('h32',$acuenta);
				$i=$i+1;

			
			
				
				
				}	

			}
			else
			 {

			 	$objPHPExcel->getActiveSheet()->SetCellValue('c3', $cu->pagoAl);
			 	$objPHPExcel->getActiveSheet()->SetCellValue('c4', $cu->ciZ);
			 	$objPHPExcel->getActiveSheet()->SetCellValue('b6', $cu->codigoV);//numero de recibo
				$objPHPExcel->getActiveSheet()->SetCellValue('c6',$cu->codigoP);
				$objPHPExcel->getActiveSheet()->SetCellValue('d6',$cu->nombre);

				$objPHPExcel->getActiveSheet()->SetCellValue('e6',$cu->medida);
				$objPHPExcel->getActiveSheet()->SetCellValue('f6',$cu->cantidad);
				$objPHPExcel->getActiveSheet()->SetCellValue('g6',$cu->precio);
				$objPHPExcel->getActiveSheet()->SetCellValue('h6',$cu->precio*$cu->cantidad);
				$objPHPExcel->getActiveSheet()->SetCellValue('h32',$cu->precio*$cu->cantidad);
				

			
				
				
				}	
//Guardamos los cambios
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		
		$objWriter->save("excel/imprekardex.xlsx");   //


		$objPHPExcel = new PHPExcel();
$objReader = PHPExcel_IOFactory::createReader('Excel2007');
$objPHPExcel = $objReader->load('excel/imprekardex.xlsx');
header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header('Content-Disposition: attachment;filename="ejemplo.xlsx"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');

?>
		



	
