
@extends('edu3')
@section('title','CREAR PRODUCTO')
@section('seccion')
<style type="text/css">
 
  .fijo{
    
    position: absolute;
    z-index: 1;
  }
   
  header{
    text-align:center;
    
  }
  nav
  {
    min-height: 50px;
  }
  section{
    max-width:33%;
    display:inline-block;
    float: left;
  }
  .reemplazo{
    max-width:43%;
    display:inline-block;
    position: relative;
    left: 450px;
    bottom: 300px;
  }
  aside{
    max-width:65%;
    float: right;
    left:390px;
    bottom:650px;
    
  }
  footer
  {clear:both;}
</style>
<link rel="stylesheet" href="css/menu3d.css">
  <!-- main -->
  
     @if($msj!="")
       
        <div class="alert alert-danger" role="alert">{{$msj}}</div>
        @endif
        <style type="text/css">
  table th {
  text-align: center;
}
</style>

    <h1>CREAR PRODUCTO</h1>
   
      <div class="agileits-top ">
        <form action="{{route('producto.store')}}" method="POST">
           @csrf
            <label >Codigo Medida</label>
           <input class="password" type="text" name="codigoM" value="{{$pro[0]->codigoM}}" required="" >
       
   
           <label >Codigo Categoria</label>
          <input class="password" type="text" name="codC" value="{{$pro[0]->codigoC}}" required="" >
       
     <label >Costo del Producto</label>
          <input class="password" type="text" name="Pproducto" value="{{$pro[0]->Pproducto}}" required="" >
          
          
          <label >Codigo Producto</label>
    <input class="password" type="text" name="codProducto" value="{{$pro[0]->codigoP}}" required="" >
    
          <label >Nombre del Producto</label>
          <input class="password" type="text" name="nombre" placeholder="Nombre del Producto" value="{{$pro[0]->nombre}}" required="">
          <label >Cantidad del Producto</label>
          <input class="text" type="text" name="cantidad" value="{{$pro[0]->cantidad}}" placeholder="Cantidad de Producto" required="">
          <label >Cantidad para Agregar</label>
          <input class="text" type="text" name="agrecant"  placeholder="Cantidad que desea Agregar" required="">
          <label >Precio al X Mayor</label>
          <input class="text" type="text" name="precio_mayor" value="{{$pro[0]->precio_mayor}}" placeholder="Precio X Mayor" required="">
          <label >Precio de la Unidad</label>
          <input class="text" type="text" name="precio_menor" value="{{$pro[0]->precio_unidad}}" placeholder="Precio X Menor" required="">
          <div class="wthree-text">
            
            <div class="clear"> </div>
          </div>
          <input type="submit" value="ACEPTAR">
        </form>
        <p>Don't have an Account? <a href="#"> Login Now!</a></p>
      </div>
   
    <!-- copyright -->
    <div class="colorlibcopy-agile">
      <p>© CUADRO AGREGAR PRODUCTO| Design by <a href="" target="_blank">GEOMAR</a></p>
    </div>
   
@endsection