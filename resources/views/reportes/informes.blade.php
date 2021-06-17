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
        
        <form action="{{route('reporte.store')}}" method="POST">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">   

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

             <div class="info-box ">
                <div class="info-box-content">
                                                  
                  
                    <input type="radio" name="a" value="1" required/>Ventas al CREDITO <br />
           
                </div><!-- /.info-box -->
         
             <div class="info-box ">
                <div class="info-box-content">
                                                  
                  
                    <input type="radio" name="a" value="2" required/>Ventas al CONTADO <br />
           
                </div><!-- /.info-box -->
               <div class="info-box ">
               <div class="info-box-content">
                                                  
                 
                    <input type="radio" name="a" value="3" required/> PRODUCCIONES<br />
                
                </div><!-- /.info-box-content -->
               
               <div class="info-box ">
               <div class="info-box-content">
                                                  
                  
                    <input type="radio" name="a" value="4" required/>ANTICIPOS<br />
          
                </div><!-- /.info-box-content -->
                <div class="info-box">
                
                <div class="info-box-content">
                                                  
                
                    <input type="radio" name="a" value="5" required/>KARDEX UN ZAFRERO<br />
                 
                </div><!-- /.info-box-content -->
                <div class="info-box">
                
                <div class="info-box-content">
                                                  
                
                    <input type="radio" name="a" value="6" required/>KARDEX CONTABLE<br />
                 
                </div><!-- /.info-box-content -->
                <div class="info-box">
                
                <div class="info-box-content">
                                                  
                
                    <input type="radio" name="a" value="7" required/>KARDEX CONSUMO TODO<br />
                 
                </div><!-- /.info-box-content -->
                <div class="info-box">
                
                <div class="info-box-content">
                                                  
                
                    <input type="radio" name="a" value="8" required/>KARDEX MOVIMIENTO X CONTRATISTA<br />
                 
                </div><!-- /.info-box-content -->
                <div style="margin-bottom: 30px"></div>
              </div><!-- /.info-box -->
                <div style="margin-bottom: 30px"></div>

                 <div class="info-box ">
               
                <div style="margin-bottom: 30px"></div>
          </div>

          
            
<div class="box-footer col-xs-12 " align="center" >
              <a href="{{route('reporte.store')}}"><button type="submit" class="btn btn-success">Buscar</button></a>
          <a href="/"><button type="button" class="btn btn-primary" style="margin-left: 25px">Volver</button></a>
                    
            </div>
        </form>

     </div>
       

      </div>
    </div>

    
@endsection

  