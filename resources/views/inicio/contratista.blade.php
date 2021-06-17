@extends('edu2')
@section('title','ZAFRERO')
@section('seccion')


  <!-- main -->
  <div class="main-w3layouts wrapper">
    @if($msj!="")
       
        <div class="alert alert-success" role="alert">{{$msj}}</div>
        @endif
    <h1>CREAR CONTRATISTA</h1>
   
      <div class="agileits-top">
        <form action="{{route('contratista.store')}}" method="POST">
           @csrf
          
           <input class="password" type="text" name="ciC" placeholder="CI Contratista" required="" autocomplete="off">
           <input class="text" type="text" name="nombreC" placeholder="NOMBRE CONTRATISTA" required="">

                
          <input class="text" type="text" name="telefonoC" placeholder="TELEFONO" required="">
          <div class="wthree-text">
            <input class="text" type="text" name="direccionC" placeholder="DIRECCION" required="">
            <LABEL>FECHA DE INGRESO</LABEL>
            <input class="text" type="date" name="fechaC" placeholder="FECHA DE INGRESO" required="">
            <input class="text" type="text" name="centro" placeholder="COMUNIDAD O CENTRO QUE PERTENECE" required="">
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
