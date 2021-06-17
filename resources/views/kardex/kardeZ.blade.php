<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
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
                   
                    
                    
                    <th>CI</th>
                    
                    <th>TELEFONO</th>
                    <th>DIRECCION</th>
                    <th>FECHA</th>
                    
                    <th>Accion</th>
                </tr>
            </thead>
        
                    
                    </div> 
              <tbody>
              
                 @csrf
               @foreach($compra as $co) 
                <tr>
                    
                    <th>{{$co->ciZ}}</th>
                   
                    <th>{{$co->nombreZ}}</th>
                    <th>{{$co->telefono}}</th>
                    
                    <th>{{$co->direccion}}</th>
                    
                    <th>{{$co->fecha}}</th>
                    <th><a href="{{route('carrito.store',$co->id)}}"><input type="button" class="submit" id="boton" value="Agregar al Carro" /></a></th>
                </tr>
                
                @endforeach
            </tbody>
        
        </table>
    </div>
    <a href="javascript:go()"><input type="button" class="submit" id="boton" value="Volver Atraz" /></a>
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