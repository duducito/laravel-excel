

@extends('edu2')
@section('title','AGREGAR PRODUCTOS')
@section('seccion')

 <div class="main-w3layouts wrapper">
  <!-- main -->
<style type="text/css">
  table th {
  text-align: center;

}
</style>


    @if($msj!="")
       
        <div class="alert alert-success" role="alert">{{$msj}}</div>
        @endif
    
    <h1>CREAR PRODUCTO</h1>
   
      <div class="agileits-top">
        <form action="{{route('producto.store')}}" method="POST">
           @csrf
          
        
           <label >Codigo Medida</label>
          <select class="form-control" name="codigoM" >
            
             @foreach($medi as $me)
        <option>{{$me->codigoM}}</option>
        @endforeach
    </select> 
          
          
          <label >Codigo Categoria</label>
    <select class="form-control" name="codC">
      
       @foreach($cate as $ca)
        <option>{{$ca->codigoC}}</option>
    @endforeach  
     </select> 
     <input class="password" type="text" name="Pproducto" placeholder="Precio de compra del producto" required="">
           <input class="password" type="text" name="codProducto" placeholder="CodigoProducto" required="">
          <input class="password" type="text" name="nombre" placeholder="Nombre del Producto" required="">
          <input class="text" type="text" name="cantidad" placeholder="Cantidad de Producto" required="">
          
          <input class="text" type="text" name="precio_mayor" placeholder="Precio X Mayor" required="">
          <input class="text" type="text" name="precio_menor" placeholder="Precio X Menor" required="">
          <div class="wthree-text">
            <label class="anim">
              <input type="checkbox" class="checkbox" required="">
              <span>Verifico que los codigos sean correctos??</span>
            </label>
            <div class="clear"> </div>
          </div>
          <input type="submit" value="SIGNUP">
        </form>
        <p>Don't have an Account? <a href="#"> Login Now!</a></p>
      </div>
    </div>
    <!-- copyright -->
    <div class="colorlibcopy-agile">
      <p>© 2018 Colorlib Signup Form. All rights reserved | Design by <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
    </div>
   
@endsection
@section('lateral')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <div class="card">
     <div class="card-body">




<style type="text/css">
  .link{color:red;}
</style>

    
    <h2> LISTADO DE PRODUCTOS </h2> 
        <table class="table table-striped table-responsive" class="table table-striped" id="productos">
        <thead>
            <tr>
                 <th>Codigo Medida</th>
                    <th>Codigo Producto</th>
                    <th>Categoria</th>
                    <th>Precio de Compra</th>
                    <th>Nombre Producto</th>
                    <th>PrecioXMayor</th>
                    <th>PrecioXMenor</th>
                    <th COLSPAN="2" text-align="center">Acccion</th>
            </tr>
        </thead>
        <tbody>
            < @foreach($lista as $li) 
                <tr>
                    <th>{{$li->codigoM}}</th>
                    <th>{{$li->codigoP}}</th>
                    <th>{{$li->codigoC}}</th>
                    <th>{{$li->Pproducto}}</th>
                    <th>{{$li->nombre}}</th>
                    <th>{{$li->precio_mayor}}</th>
                    <th>{{$li->precio_unidad}}</th>
                    <th><a href="{{route('borra.destroy',$li->id)}}" class="link" >Eliminar</a></th>
                    <th><a href="{{route('suma.create',$li->id)}}">Agregar</a></th>
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
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
<script>
   $(document).ready(function() {
     $('#productos').DataTable({
        responsive:true
        
     });
} );
<script>
   function go()
   {
    window.history.go(-1);
   }
  

</script>
@endsection
