
<!DOCTYPE html>
<html>
<head>
    <title>PONER EN CARRO PRODUCTOS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv content="X-UA-Compatible" content="IE=edge, chrome=1"> 
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/menu3d.css">
    <link rel="stylesheet" href="bootstrap-4.4.1/dist/css/bootstrap-reboot.css">


<style type="text/css">
    html{font-size: 16px;}
    .double{font-size: 2rem;}
    header,section,aside,footer{
        background-color: #02AC66;
        border:thin solid black;
                
    }
    .fijo{
        
        position: absolute;
        z-index: 1;
    }
     
    header{
        text-align:center;
        
    }
    section{
        max-width:33%;
        display:inline-block;
        float: left;
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
<script type="text/javascript">
    /*
    vw anchura viewport
    vh altura vp
    vmax
    vmin
    ================================
    purecss.io/layouts/tucked-menu/#
    jquerymobile.com
    oocss.org
    https://en.bem.info
    sathify.github.io/CCSS/
    diseño atomico  // bradfrost.com/blog/post/atomic-web-design
    https://babeljs.io
    librosweb.es/libro/javascript/
    adrianayala.mx/code-guide/es/
    video 11
    */
</script>
<link rel="stylesheet" href="css/menu3d.css">


<style type="text/css">
    body{

/* Ubicación de la imagen */

background-image: url(img/unab2.jpg);

/* Para dejar la imagen de fondo centrada, vertical y

horizontalmente */

background-position: center center;

/* Para que la imagen de fondo no se repita */

background-repeat: no-repeat;

/* La imagen se fija en la ventana de visualización para que la altura de la imagen no supere a la del contenido */

background-attachment: fixed;
/* La imagen de fondo se reescala automáticamente con el cambio del ancho de ventana del navegador */

background-size:cover;

/* Se muestra un color de fondo mientras se está cargando la imagen

de fondo o si hay problemas para cargarla */

background-color: #66999;

}
</style>
</head>
<body>
   
        
        <div class="container">
            <form id="booking-form" class="booking-form" action="{{route('vender.store')}}" method="POST">
                 @csrf
                 <div class="form-destination">
                     @if($msj!="")
       
                     <div class="alert alert-success" role="alert">{{$msj}}</div>
                     @endif
                        <label for="ciZ">CI-ZAFRERO</label>
                        <input type="text" id="destination" name="ciZ" placeholder="CI-ZAFRERO" />
                    </div>
                    <div class="form-destination">
                        
                        <input type="text" id="destination" name="ciProvedor" placeholder="CI-PROVEEDOR" hidden="" value="{{$pro[0]->ciProvedor}}"/>
                    </div>
                    <div class="form-destination">
                       
                        <input type="text" id="destination" name="codigoM" placeholder="codmedida" hidden="" value="{{$pro[0]->codigoM}}"/>
                    </div>
                    <div class="form-destination">
                        
                        <input type="text" id="destination" name="codigoC" placeholder="CI-PROVEEDOR" hidden="" value="{{$pro[0]->codigoC}}"/>
                    </div>
                <div class="form-group">
                    <div class="form-destination">
                        <label for="nombre">NOMBRE</label>
                        <input type="text" id="destination" name="nombre" placeholder="EG. HAWAII" value="{{$pro[0]->nombre}}"/>
                    </div>
                    <div class="form-destination">
                        <label for="destination">CODIGO</label>
                        <input type="text" id="destination" name="codigo" placeholder="EG. HAWAII" value="{{$pro[0]->codigoP}}"/>
                    </div>
                    <div class="form-destination">
                        <label for="destination">PRECIO AL MENOR-MAYOR</label>
                        <select name="precio" >
                            <option>{{$pro[0]->precio_unidad}}</option>
                            <option>{{$pro[0]->precio_mayor}}</option>
                        </select>
                        
                    </div>
                   <div class="form-destination">
                        <label for="destination">MEDIDA</label>
                        <select name="medida" >
                       <option>{{$medida[0]->menor}}</option>
                        <option>{{$medida[0]->mayor}}</option>
                        
                        </select>
                    </div>
                    
                    <div class="form-quantity">
                        <label for="quantity">CANTIDAD</label>
                        <span class="modify-qty plus" onClick="Tang()"><i class="zmdi zmdi-chevron-up"></i></span>
                        <input type="number" name="cantidad" id="quantity" value="0" min="0" class="nput-text qty text">
                        <span class="modify-qty minus" onClick="Giam()"><i class="zmdi zmdi-chevron-down"></i></span>
                    </div>
                    <div class="form-destination">
                        <label for="pago" > PAGO AL:</label>
                        <select name="pago" >
                        <option>CREDITO</option>
                        <option>CONTADO</option>
                        </select>
                    </div>
                    <div class="form-submit">
                        <input type="submit" id="submit" class="submit" value="Buy now" />
                        <a href="/"><input type="button" class="submit" id="boton" value="Volver Atraz" /></a>
                    </div>
                </div>
            </form>
        

    </div>
</body>
</html>

         
        
    
