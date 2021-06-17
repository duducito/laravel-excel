    
   <style type="text/css">
  table th {
  text-align: center;
  font-size: 10px;
}
</style>
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
    <div class="card">
     <div class="card-body">
      <div><a href="{{route('muestraCarro.show')}}"><input type="button" class="submit" id="boton" value="Mostrar Carro" /></a></div>
      @if($msj!="")
       
        <div class="alert alert-success" role="alert">{{$msj}}</div>
        @endif      
        <h1>LISTA DE PRODUCTOS</h1>
        <table class="table table-bordered table-responsive" class="table table-striped" id="productos">
            <thead>
                <tr>
                   
                    <th>Codigo Medida</th>
                    <th>Codigo Producto</th>
                    <th>Categoria</th>
                   <th>STOCK AL X MENOR</th>
                    <th>Nombre Producto</th>
                    <th>PrecioXMayor</th>
                    <th>PrecioXMenor</th>
                    <th>Accion</th>
                </tr>
            </thead>
        
                    
                    </div> 
              <tbody>
               
                 @csrf
               @foreach($lista as $li) 
                <tr>
                    <th>{{$li->codigoM}}</th>
                    <th>{{$li->codigoP}}</th>
                  
                    <th>{{$li->codigoC}}</th>
                     <th>{{$li->stock}}</th>
                    <th>{{$li->nombre}}</th>
                    <th>{{$li->precio_mayor}}</th>
                    <th>{{$li->precio_unidad}}</th>
                    <th><a href="{{route('carrito.store',$li->id)}}"><input type="button" class="submit" id="boton" value="Agregar al Carro" /></a></th>
                </tr>
                @endforeach
            </tbody>
        
        </table>
    </div>
    <a href="/principal"><input type="button" class="submit" id="boton" value="Volver Atraz" /></a>
    </div> 
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script  src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src=" https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js "></script>

<script>
   $(document).ready(function() {
     $('#productos').DataTable({
        responsive:true
        
     });
} );
  

</script>
<script>
   function go()
   {
    window.history.go(-1);
    //javascript:go()  esto se pone en href
   }
  

</script>