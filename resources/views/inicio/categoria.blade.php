@extends('edu2')
@section('title','CATEGORIA')
@section('seccion')


  <!-- main -->
  <div class="main-w3layouts wrapper">
    @if($msj!="")
       
        <div class="alert alert-success" role="alert">{{$msj}}</div>
        @endif
    <h1>CREAR CATEGORIA</h1>
   
      <div class="agileits-top">
        <form action="{{route('categoria.store')}}" method="POST">
           @csrf
          
           <input class="password" type="text" name="codigoC" placeholder="Codigo Categoria" required="" autocomplete="off">
            
        
          <input class="text" type="text" name="nombre" placeholder="Categoria que pertenece" required="">
          
          
          <div class="wthree-text">
            
            <div class="clear"> </div>
          </div>
          <input type="submit" value="AGREGAR"><A href="categoria"><input type="button" value="VOLVER ATRAS"></A>
        </form>
        
      </div>
    </div>
    <!-- copyright -->
    <div class="colorlibcopy-agile">
      <p>© 2021 GEOMAR Signup Form. All rights reserved | Design by <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
    </div>
   
@endsection
@section('lateral')

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
    <div class="card">
     <div class="card-body">
      <div><a href="{{route('muestraCarro.show')}}"><input type="button" class="submit" id="boton" value="Mostrar Carro" /></a></div>
      @if($msj!="")
       
        <div class="alert alert-success" role="alert">{{$msj}}</div>
        @endif      
        <h1>LISTA DE CATEGORIAS</h1>
        <table class="table table-bordered table-responsive" class="table table-striped" id="productos">
            <thead>
                <tr>
                   
                    <th>CODIGO CATEGORIA</th>
                    <th>NOMBRE</th>
                    <th>ACCION</th>
                    
                </tr>
            </thead>
        
                    
                    </div> 
              <tbody>
               
                 @csrf
                 <?php $bd='categorias'?>
               @foreach($categoria as $li) 
                <tr>
                    <th>{{$li->codigoC}}</th>
                    <th>{{$li->nombre}}</th>
                    
                   
                    <th><a href="{{route('elimina.destroy',$li->id)}}" class="link" >Eliminar</a></th>
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
<script type="text/javascript" src=" https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js "></script>
<script>
   $(document).ready(function() {
     $('#productos').DataTable({
      responsive:true,
        autowidth: false,
        

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