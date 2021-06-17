<!DOCTYPE html>
<html lang="es">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



	<meta charset="utf-8">
	<meta http-equiv content="X-UA-Compatible" content="IE=edge, chrome=1">	
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	

	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
	<title>SISTEMA DE INVENTARIOS Y VENTAS</title>

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
	.reemplazo{
    max-width:43%;
    display:inline-block;
    position: relative;
    left: 450px;
    bottom: 300px;
  }
	aside{
		max-width:98%;
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
</head>
<body>
<header>SISTEMA DE INVENTARIOS Y VENTAS</header>
<nav class="navbar navbar-expand-sm bg-light ">
        <nav class="menu fijo">
            <ul>
                
                <li>REALIZAR
                
                    <ul>
                        <li><a class="nav-link" href="/vender">VENTA</a></li>
                        <li></li>
                        <li><a class="nav-link" href="reporte">REPORTES</a></li>

                        
                    </ul>
                
                </li>
                <li>CREAR
                
                    <ul>
                        <li><a class="nav-link" href="medida">MEDIDAS</a></li>
                        <li><a class="nav-link" href="categoria">CATEGORIA</a></li>
                        <li><a class="nav-link" href="producto">PRODUCTOS</a></li>
                        <li><a class="nav-link" href="usuario">USUARIO</a></li>

                        
                    </ul>
                
                </li>
                <li>REGISTRAR
                
                    <ul>
                    	<li><a class="nav-link" href="/contratista">CONTRATISTA</a></li>
                        <li><a class="nav-link" href="/zafrero">ZAFRERO</a></li>
                        <li><a class="nav-link" href="anticipo">ANTICIPO</a></li>
                        <li><a class="nav-link" href="/produccion">PRODUCCION</a></li>

                        
                    </ul>
                
                </li>
                <li>VER/IMPRIMIR
                
                    <ul>
                        <li><a class="nav-link" href="reporte">KARDEX</a></li>
                                               
                    </ul>
                
                </li>
            </ul>
        </nav>
     </nav>
<section>
	@yield('seccion')
	@yield('vender')
</section>
<aside>
@yield('lateral')
</aside>
<footer>pies de pagina</footer>
</body>
</html>