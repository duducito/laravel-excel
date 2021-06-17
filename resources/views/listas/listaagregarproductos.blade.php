@extends('edu2')
@section('title','productos')
@section('seccion')


  <!-- main -->

    @if($msj!="")
       
        <div class="alert alert-success" role="alert">{{$msj}}</div>
        @endif
     <div class="main-w3layouts wrapper">
    <h1>AGREGAR PRODUCTO</h1>
   
      <div class="agileits-top">
        <form action="{{route('agregar.store')}}" method="POST">
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
     <label >Codigo Producto</label>
           <select class="form-control" name="codP">
      
       @foreach($lista as $li)
        <option>{{$li->codigoP}}</option>
    @endforeach  
     </select> 
          <input class="password" type="text" name="nombre" placeholder="Nombre del Producto" required="">
          <input class="text" type="text" name="cantidad" placeholder="Cantidad de Producto" required="" autocomplete="off">
          <input class="text" type="text" name="precio_compra" placeholder="Precio de compra" required="" autocomplete="off">
          <input class="text" type="text" name="precio_mayor" placeholder="Precio X Mayor" required="" autocomplete="off">
          <input class="text" type="text" name="precio_menor" placeholder="Precio X Menor" required="" autocomplete="off">
          <div class="wthree-text">
            <div class="clear"> </div>
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
      <p>© 2021 GEOMAR CONSULTORIA All rights reserved | Design by <a href="" target="_blank">GEOMAR</a></p>
    </div>
   
@endsection
@section('lateral')
<style type="text/css">
  .link{color:red;}
</style>
<div class="container">
    
    <h2> LISTADO DE PRODUCTOS </h2> 
        <table class="table table-striped table-responsive">
        <thead>
            <tr>
                 <th>Ci proveedor</th>
                    <th>Codigo Producto</th>
                    <th>Categoria</th>
                    <th>Nombre Producto</th>
                    <th>PrecioXMayor</th>
                    <th>PrecioXMenor</th>
            </tr>
        </thead>
        <tbody>
            < @foreach($lista as $li) 
                <tr>
                    <th>{{$li->ciProvedor}}</th>
                    <th>{{$li->codigoP}}</th>
                    <th>{{$li->codigoC}}</th>
                    <th>{{$li->nombre}}</th>
                    <th>{{$li->precio_mayor}}</th>
                    <th>{{$li->precio_unidad}}</th>
                    <th><a href="carrito" class="link" >Eliminar</a></th>
                </tr>
                @endforeach
        </tbody>
    </table>
</div>
@endsection