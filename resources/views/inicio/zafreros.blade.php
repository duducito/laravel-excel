@extends('edu2')
@section('title','ZAFRERO')
@section('seccion')


  <!-- main -->
  <div class="main-w3layouts wrapper">
    @if($msj!="")
       
        <div class="alert alert-success" role="alert">{{$msj}}</div>
        @endif
    <h1>CREAR ZAFRERO</h1>
   
      <div class="agileits-top">
        <form action="{{route('zafrero.store')}}" method="POST">
           @csrf
          <label>Ci-Nombre Contratista</label>
          <select class="form-control" name="ciC">
                @foreach($contratista as $co)
                <option>{{$co->ciC}}--{{$co->nombreC}}</option>
              @endforeach
          </select> 

           <input class="password" type="text" name="ci" placeholder="CI ZAFRERO" required="" autocomplete="off">
            
        
          <input class="text" type="text" name="nombre" placeholder="NOMBRE Y APELLIDO DEL ZAFRERO" required="">
          
          <input class="text" type="text" name="telefono" placeholder="TELEFONO" required="">
          <div class="wthree-text">
            <input class="text" type="text" name="direccion" placeholder="DIRECCION" required="">
            <LABEL>FECHA DE INGRESO</LABEL>
            <input class="text" type="date" name="fecha" placeholder="FECHA DE INGRESO" required="">
            <input class="text" type="text" name="comunidad" placeholder="COMUNIDAD A LA QUE PERTENECE" required="">
            <div class="clear"> </div>
          </div>
          <input type="submit" value="AGREGAR"><A href="categoria"><input type="button" value="VOLVER ATRAS"></A>
        </form>
        
      </div>
    </div>
    <!-- copyright -->
    <div class="colorlibcopy-agile">
      <p>© 2021 GEOMAR  Signup Form. All rights reserved | Design by</p>
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
    
    <h2> LISTADO DE ZAFREROS SEGUN CONTRATISTA  </h2> 
        <table class="table table-striped table-responsive" id="productos">
        <thead>
            <tr>
               <th>CI_CONTRATISTA</th>
                 <th>CI ZAFRERO</th>
                    <th>NOMBRE</th>
                    <th>TELEFONO</th>
                    <th>DIRECCION</th>
                    <th>COMUNIDAD</th>
                    <th>FECHA</th>
                    <th COLSPAN="2" text-align="center">Acccion</th>
            </tr>
        </thead>
        <tbody>
             @foreach($listazafre as $zafre) 
                <tr>
                    <th>{{$zafre->ciC}}</th>
                    <th>{{$zafre->ciZ}}</th>
                    <th>{{$zafre->nombreZ}}</th>
                    <th>{{$zafre->telefono}}</th>
                    <th>{{$zafre->direccion}}</th>
                    <th>{{$zafre->comunidad}}</th>
                    <th>{{$zafre->fecha}}</th>
                    <th><a href="{{route('borra.destroy',$zafre->id)}}" class="link" >Eliminar</a></th>
                    <th><a href="">Editar</a></th>
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
@endsection