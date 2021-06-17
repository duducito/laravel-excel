 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <div class="card">
     <div class="card-body">
      <div><a href=""><input type="button" class="submit" id="boton" value="VENTAS AL CONTADO" /></a></div>
      <div><a href=""><input type="button" class="submit" id="boton" value="VENTAS AL CREDITO" /></a></div>
      @if($msj!="")
       
        <div class="alert alert-success" role="alert">{{$msj}}</div>
        @endif      
        <h1>LISTA DE PRODUCTOS</h1>
        <table class="table table-bordered table-responsive" class="table table-striped" id="productos">
            <thead>
                <tr>
                   
                    
                    <th>Codigo Producto</th>
                    <th>CODIGO MEDIDA</th>
                    <th>CODIGO CATEGORIA</th>
                    <th>NOMBRE</th>
                    <th>PRECIO</th>
                    <th>CANTIDAD</th>
                    <th>TOTAL</th>
                    <th>MEDIDA:</th>
                    <th>PAGO AL:</th>
                    <th>FECHA</th>
                    <th>Accion</th>
                </tr>
            </thead>
        
                    
                    </div> 
              <tbody>
               <?php $suma=0; ?>
                 @csrf
               @foreach($compra as $co) 
                <tr>
                    
                    <th>{{$co->codigoP}}</th>
                    <th>{{$co->codigoM}}</th>
                    <th>{{$co->codigoC}}</th>
                    <th>{{$co->nombre}}</th>
                    <th>{{$co->precio}}</th>
                    <th>{{$co->cantidad}}</th>
                    <th>{{$co->cantidad * $co->precio}}</th>
                     <th>{{$co->medida}}</th>
                    <th>{{$co->pagoAl}}</th>
                    <th>{{$co->fecha}}</th>
                    <th><a href=""><input type="button" class="submit" id="boton" value="Eliminar Venta" /></a></th>
                </tr>
                <?php $suma=$suma+($co->cantidad * $co->precio)?>
                @endforeach
            </tbody>
        
        </table>
    </div>
    <a href="javascript:go()"><input type="button" class="submit" id="boton" value="Volver Atraz" /></a><h1 align="center"><?php echo 'TOTAL VENTA '.$suma;?></h1>
    </div> 
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script  src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script>
   $(document).ready(function() {
     $('#productos').DataTable();
} );
  

</script>
<script>
   function go()
   {
    window.history.go(-1);
   }
  

</script>