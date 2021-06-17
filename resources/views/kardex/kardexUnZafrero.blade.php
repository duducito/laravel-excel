<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/micss.css">
	<title></title>
</head>
<body>
<header></header>
<nav></nav>
<section>
	<?php 
		$totalV=0;
		$totalP=0;
		$totalA=0;
		$totalganado=0;
	?>
	<h1>KARDE DE ZAFRERO</h1>
	<header>
		<div id="pri">
			<p>CI ZAFRERO: {{$dato[0]->ciZ}}</p>
		  <p>NOMBRE: {{$dato[0]->nombreZ}}</p>
		  <p>COMUNIDAD: {{$dato[0]->comunidad}}</p>
		</div>
		<div id="segu">
			<p>TELEFONO: {{$dato[0]->telefono}}</p>
		  <p>DIRECCION: {{$dato[0]->direccion}}</p>
		  <p>FECHA INGRESO: {{$dato[0]->fecha}}</p>
		</div>
		  
  

	</header>
	<H1>CONSUMO VIVERES DEL ZAFRERO</H1>
	<form action="ejemplo.php" method="get">
	<div class="table-responsive-sm">
	<table class="table table-bordered table table-sm">
		<thead>
    <tr>
      <th scope="col">COD_PRODUCTO</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">MEDIDA</th>
      <th scope="col">CANTIDAD</th>
       <th scope="col">PRECIO</th>
      <th scope="col">TOTAL</th>
      <th scope="col">FECHA</th>
    </tr>
    </tr>
  </thead>
			 <tbody>
			 	@foreach($compras as $com)
		<tr>
			<td>{{$com->codigoP}}</td>											 <TD>{{$com->nombre}}</TD>												<TD>{{$com->medida}}</TD>									<TD>{{$com->cantidad}}</TD>															<TD>{{$com->precio}}</TD>															<TD>{{$com->precio*$com->cantidad}}</TD>
			<TD>{{$com->fecha}}</TD>												<?php 
		$totalV=$totalV+($com->precio*$com->cantidad);
		
	?>																				@endforeach																					
		</tr>
		  </tbody>

		</table>
		<H2>TOTAL CONSUMO:{{$totalV}}</H2>
	<div>  
	<H1>PRODUCCION DEL ZAFRERO DURANTE LA ZAFRA</H1>                  
	<div class="table-responsive-sm">
	<table class="table table-bordered table table-sm">
		<thead>
    <tr>

      <th scope="col"># CAJAS</th>
      <th scope="col">PRECIO X CAJA</th>
      <th scope="col">VALORADO</th>
      <th scope="col">FECHA ENTREGA</th>
       
    </tr>
    </tr>
  </thead>
			 <tbody>

		<tr>
			@foreach($produccion as $pro)
			<td>{{$pro->produccion}}</td>	
			<TD>{{$pro->preciocaja}}</TD>
				<TD>{{$pro->produccion*$pro->preciocaja}}</TD>	
					<TD>{{$pro->fecha}}</TD>
																													
						<?php 
		
		$totalP=$totalP+($pro->produccion*$pro->preciocaja);
		
	?>
						@endforeach																																								
		</tr>
		  </tbody>

		</table>                                                                                                                                            <H2>TOTAL PRODUCIDO:{{$totalP}}</H2>                                                                        <div>  
	<H1>SOLICITUDES DE ANTICIPO DEL ZAFRERO</H1>                  
	<div class="table-responsive-sm">
	<table class="table table-bordered table table-sm">
		<thead>
    <tr>

      <th scope="col">MONTO DE ANTICIPO</th>
      <th scope="col">FECHA</th>
      <th scope="col">DESCRIPCION</th>
      
       
    </tr>
    </tr>
  </thead>
			 <tbody>

		<tr>
			@foreach($anticipos as $anti)
			<td>{{$anti->anticipo}}</td>	
			<TD>{{$anti->fecha}}</TD>	
			<TD>{{$anti->descripcion}}</TD>
					<?php 
		
		$totalA=$totalA+$anti->anticipo;
		
	?>
																													
						@endforeach																																								
		</tr>
		  </tbody>

		</table>                                                                     <H2>TOTAL ANTICIPO:{{$totalA}}</H2>      
		<H1>TOTAL GANADO:{{$totalP-($totalV+$totalA)}} Bs</H1>                                                                                                                      
	</div>
	<input type="submit" value="Enviar">
    <input type="reset" value="Borrar">
		</form>
</section>
</body>
</html>