 @extends('reportes.muestraformularios')
@section('registrousuario')
 <link rel="stylesheet" href="//code.ionicframework.com/nightly/css/ionic.css">

 <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Elige</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{route('kardex.store')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}

              <div class="info-box">
                <span class="info-box-icon"> <i class="ion ion-android-contract"></i> </span>
                <div class="info-box-content">
                                                  
                  <span class="progress-description">
                    <input type="radio" name="a" value="1" required/> KARDEX VENTAS<br />
                  </span>
                </div><!-- /.info-box-content -->
                <div style="margin-bottom: 30px"></div>
              </div><!-- /.info-box -->
             <div class="info-box ">
                <span class="info-box-icon"><i class="ion ion-android-add-circle"></i></span>
                <div class="info-box-content">
                                                  
                  <span class="progress-description">
                    <input type="radio" name="a" value="2" required/>  KARDEX ZAFREROS<br />
                  </span>
                </div><!-- /.info-box-content -->
                <div style="margin-bottom: 30px"></div>
              </div><!-- /.info-box -->
             <div class="info-box ">
                <span class="info-box-icon"><i class="ion ion-android-create"></i></span>
                <div class="info-box-content">
                                                  
                  <span class="progress-description">
                    <input type="radio" style="margin-bottom: 6px" name="a" value="3" required/> KARDEX DE ZAFRERO <br />
                  </span>
                </div><!-- /.info-box-content -->
                <div style="margin-bottom: 30px"></div>
              </div><!-- /.info-box -->
              <div class="info-box ">
                <span class="info-box-icon"><i class="ion ion-android-clipboard"></i></span>
                <div class="info-box-content">
                                                  
                  <span class="progress-description">
                    <input type="radio" name="a" value="4" required/>  KARDEX CONTABLE<br />
                  </span>
                </div><!-- /.info-box-content -->
                <div style="margin-bottom: 30px"></div>
              </div><!-- /.info-box -->
                                             <div style="margin-bottom: 60px"></div>
                           <div class="box-footer col-xs-12 " align="center">
                               <button type="submit" class="btn btn-success">Ir</button>
                       <a href="/"> <button type="button" class="btn btn-primary" style="margin-left: 25px">Volver</button></a>
                            </div>
                    </form>
                     
                </div>
  
                    
                    
                </div>
            </div>
        </div>
    </div>
@endsection