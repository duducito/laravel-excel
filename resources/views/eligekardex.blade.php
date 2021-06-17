@extends('edu1')
@section('','kardex')
@section('seccion')
@if(session()->has('msj'))
    <div class="alert alert-danger" role="alert">{{session('msj')}}</div>
@endif
<div class="container">
<div class="row">


        <div class="col-md-8 col-md-offset-2">
                
               <div class="panel panel-default">
                <div class="panel-heading">Impresion de Recibo de Tramite</div>

                
                <div class="panel-body">


<form action="{{route('kardex.store')}}" method="POST" class="form-horizontal form_entrada" >                
  
                


<div class="box-body col-xs-12">

<div class="form-group col-xs-6">
                      <fieldset>
        <legend>Elige un color</legend>
        <label>
            <input type="radio" name="color" value="azul"> Azul
        </label>
        <label>
            <input type="radio" name="color" value="negro"> Negro
        </label>
        <label>
            <input type="radio" name="color" value="amarillo"> Amarillo
        </label>
    </fieldset>
</div>


</form>
</div>
</div>
</div>
</div>
</div>
@endsection