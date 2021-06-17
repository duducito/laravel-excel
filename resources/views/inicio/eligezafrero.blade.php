<h1>LISTA DE ZAFREROS CON CI</h1>
<form method="GET" action="{{route('mostrar.update')}}">
	@csrf
<select name="menu">
  @foreach ($zafrero as $co)
    <option value="{{$co->ciZ}}">{{$co->ciZ}}-{{$co->nombreZ}}</option>
    
 @endforeach
</select>
<div>
  <input type="submit" value="GENERAR KARDEX">
</div>
</form>