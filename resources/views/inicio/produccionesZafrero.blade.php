@extends('edu3')
@section('title','ZAFRERO')
@section('seccion')


  <!-- main -->
  <div class="main-w3layouts wrapper">
    @if($msj!="")
       
        <div class="alert alert-success" role="alert">{{$msj}}</div>
        @endif
    <h1>INGRESO PRODUCCION ZAFREROS</h1>
   
      <div class="agileits-top">
        <form action="{{route('produccion.store')}}" method="POST">
           @csrf
         <select class="form-control" name="ciC">
                @foreach($contratista as $co)
                <option value="{{$co->ciC}}">{{$co->ciC}}>--{{$co->nombreC}}</option>
              @endforeach
          </select> 
           <input class="password" type="text" name="ci" placeholder="CI ZAFRERO" required="" autocomplete="off">
            <label >FECHA DE ENTREGA</label>
         
         <input class="text" type="date" name="fecha" placeholder="FECHA DE ENTREGA" required="">
          <input class="text" type="text" name="produccion" placeholder="MONTO PRODUCIDO EN CAJA  " required="">

           <input class="text" type="text" name="caja" placeholder="PRECIO CAJA " required="">
           
            
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