@extends('edu2')
@section('title','MEDIDAS')
@section('seccion')


  <!-- main -->


  
  <div class="main-w3layouts wrapper">
       
       @if($msj!="")
       
        <div class="alert alert-success" role="alert">{{$msj}}</div>
        @endif
    <h1>CREAR MEDIDA</h1>
   
      <div class="agileits-top">
        <form action="{{route('medida.store')}}" method="POST">
           @csrf
          
           <input class="password" type="text" name="codigoM" placeholder="Crear Codigo Medida" required="" autocomplete="off">
            
          
          <input class="text" type="text" name="menor" placeholder="Medida X Menor" required="">
          <input class="text" type="text" name="mayor" placeholder="Medida X Mayor" required="">
          <input class="text" type="text" name="unimayor" placeholder="Cant. de Unidades de la medida mayor" required="">
          <div class="wthree-text">
            
            <div class="clear"> </div>
          </div>
          <input type="submit" value="AGREGAR"><A href="producto"><input type="button" value="VOLVER ATRAS"></A>
        </form>
        
      </div>
    </div>
    <!-- copyright -->
    <div class="colorlibcopy-agile">
      <p>© 2018 Colorlib Signup Form. All rights reserved | Design by </p>
    </div>
   
@endsection

@section('lateral')

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <div class="card">
     <div class="card-body">
      <div><a href="{{route('muestraCarro.show')}}"><input type="button" class="submit" id="boton" value="Mostrar Carro" /></a></div>
      @if($msj!="")
       
        <div class="alert alert-success" role="alert">{{$msj}}</div>
        @endif      
        <h1>LISTA DE MEDIDAS</h1>
        <table class="table table-bordered table-responsive" class="table table-striped" id="productos">
            <thead>
                <tr>
                   
                    <th>Codigo Medida</th>
                    <th>MEDIDA MAYOR</th>
                    <th>MEDIDA MENOR</th>
                    <th>CANT.UNIDADES DEL MAYOR</th>
                    
                    <th>Accion</th>
                </tr>
            </thead>
        
                    
                    </div> 
              <tbody>
               
                 @csrf
                
                
                   @foreach($medida as $li) 
                    <tr>
                        <th>{{$li->codigoM}}</th>
                        <th>{{$li->mayor}}</th>
                        <th>{{$li->menor}}</th>
                        <th>{{$li->unidMayor}}</th>
                       
<th><a href="{{route('medidaborra.destroy',$li->id)}}" class="link" >Eliminar</a></th>
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
  

</script>
<script>
   function go()
   {
    window.history.go(-1);
   }
  

</script>
@endsection