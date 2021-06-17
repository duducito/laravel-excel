@extends('muestraformularios')
@section('registrousuario')
  @if(session()->has('msj'))
                        <div class="alert alert-danger" role="alert">{{session('msj')}}</div>
                        @endif

  <link rel="stylesheet" type="text/css" href="\bootstrap\css\bootstrap.css">

 <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
       <div class="panel-heading">Buscar Informes</div>
      <div class="panel-body">
<h1>LISTA DE CONTRATISTAS CON CI</h1>
<form method="GET" action="{{route('mostrar.show')}}">
	<div class="box-body col-xs-12">

           <div class="form-group col-xs-12">

<b>Seleccione el rango de fechas, de los cuales desea ver informes, si no selecciona, la búsqueda por defecto se realizará con todos los datos disponibles.</b><br>
         <div class="form-group col-xs-12">

               <label for="fechaInicial">Fecha Inicial</label>
                       <input type="date" id="fechaInicial" name="fechaInicial" class="form-control">
            </div>

         <div class="form-group col-xs-12">

               <label for="fechaFinal">Fecha Final</label>
                       <input type="date" id="fechaFinal" name="fechaFinal" class="form-control">
            </div>

<select name="menu">
  @foreach ($contratista as $co)
    <option value="{{$co->ciC}}">{{$co->ciC}}-{{$co->nombreC}}</option>
    
 @endforeach
</select>
<div>
  <input type="submit" value="GENERAR KARDEX">
</div>
</form>
</div>
</div>

    
@endsection