   
   @extends('plantilla')
@section('title','KARDEX CONSUMOS')
@section('lateral')
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
    <div class="card">
     <div class="card-body">
      
      @if($msj!="")
       
        <div class="alert alert-success" role="alert">{{$msj}}</div>
        @endif      

    
    <h2> LISTADO DE PRODUCTOS </h2> 
        <table class="table table-striped" id="productos">
        <thead>
            <tr>
                     
                     
                    <th>codigoV</th>
                    <th>Codigo Producto</th>
                    <th>CI Contratista</th>
                     <th>Nombre Contratista</th>
                    <th>Nombre Zafrero</th>
                    <th>Producto</th>
                    <th>Medida</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>fecha de Compra</th>
                    <th>Total</th>
                    <th>Compra Al:</th>

                    <th COLSPAN="2" text-align="center">Acccion</th>
            </tr>
        </thead>
        <tbody>
            < @foreach($consumo as $con) 
                <tr>
                   

                     <th>{{$con->codigoV}}</th>
                     <th>{{$con->codigoP}}</th>
                    <th>{{$con->ciC}}</th>
                    <th>{{$con->nombreC}}</th>
                    <th>{{$con->nombreZ}}</th>
                    <th>{{$con->nombre}}</th>
                    <th>{{$con->medida}}</th>
                    <th>{{$con->cantidad}}</th>
                    <th>{{$con->precio}}</th>
                    <th>{{$con->fecha}}</th>
                    <th>{{$con->precio*$con->cantidad}}</th>
                    <th>{{$con->pagoAl}}</th>
                    
                    
                </tr>
                @endforeach
        </tbody>
    </table>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script  src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src=" https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js "></script>

<script>
   
     $('#productos').DataTable({
        responsive:true,
        autowidth: false
        
     });

  

</script>
<script>
   function go()
   {
    window.history.go(-1);
   }
  

</script>
@endsection