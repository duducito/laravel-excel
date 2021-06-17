<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    
    @if($msj!="")
       
        <div class="alert alert-success" role="alert">{{$msj}}</div>
        @endif 
    <div class="card">
     <div class="card-body">
      
           
        <h1>PRODUCTOS AGREGADOS AL CARRITO</h1>
        @csrf
        <table class="table table-bordered table-responsive" class="table table-striped" id="carrito">
            <thead>
                <tr>
                   
                    <th>Nombre</th>
                    <th>Codigo Producto</th>
                    <th>Precio</th>
                    <th>Medida</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>PagoAl:</th>
                    <td colspan="2">Accion</td>
                </tr>
            </thead>
        
                    
                    </div> 
              <tbody>
               
                 @csrf
               @foreach($lista as $li) 
                <tr>
                    <th>{{$li->nombre}}</th>
                    <th>{{$li->codigoP}}</th>
                    <th>{{$li->precio}}</th>
                    <th>{{$li->medida}}</th>
                    <th>{{$li->cantidad}}</th>
                    <th>{{$li->cantidad*$li->precio}}</th>
                    <th>{{$li->pagoAl}}</th>
                   <th><a href="{{route('elim.destroy',$li->id)}}"><input type="button" class="submit" id="boton" value="Eliminar" /></a></th>
                    <th><a href=""><input type="button" class="submit" id="boton" value="Editar" /></a></th>
                   
                </tr>
                @endforeach
            </tbody>
        
        </table>
    </div>
    <div>                                                                                                                                                                                                                                                        
    <a href="javascript:go()"><input type="button" class="submit" id="va" value="Volver Atraz" /></a>     <a href="{{route('compras.store',$li->codigoP)}}"><input type="button" class="submit" id="gc" value="REALIZAR COMPRA" /></a>
     <a href="{{route('vaciar.update')}}"><input type="button" class="submit" id="vc" value="Vaciar Carro" /></a> <a href="{{route('imprimir.index')}}"><input type="button" class="submit" id="vc" value="IMPRIMIR COMPRA" /></a>
  
</div>


<<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script  src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src=" https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js "></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
<script>
   $(document).ready(function() {
     $('#productos').DataTable({
       responsive:true,
        autowidth: false,
        "language": {
            "lengthMenu": "Mostrar _MENU_ Registros x pagina",
            "zeroRecords": "Nada encontrado - Lo siento",
            "info": "Mostrando la pagna _PAGE_ de _PAGES_",
            "infoEmpty": "No hay archivos disponibles",
            "infoFiltered": "(filtrado de _MAX_ total registros)"
            "search":"Buscar:"
        }
     });
} );
<script>
   function go()
   {
    window.history.go(-1);
   }
  

</script>