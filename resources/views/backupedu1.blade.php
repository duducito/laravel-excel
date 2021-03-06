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
	header,nav,section,aside,footer{
		background-color: #02AC66;
		border:thin solid black;
		padding:10px;
		margin:5px 2px;
		
	}

	header{text-align:center;}
	section,aside{
		max-width:33%;
		display:inline-block;
	}
	aside{
		max-width:67%;
		position: absolute;
		left:430px;
		top:170px;
	}
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
</head>
<body>
<header>SISTEMA DE INVENTARIOS Y VENTAS</header>
<nav> <!-- A grey horizontal navbar that becomes vertical on small screens class="container" container-fluid-->
<nav class="navbar navbar-expand-sm bg-light">

  <!-- Links -->
  <ul class="navbar-nav">
    
    <li class="nav-item">
      <a class="nav-link" href="medida">MEDIDAS</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="categoria">CATEGORIA</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="producto">CREAR PRODUCTOS</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="/vender">VENDER</a>
    </li>
    </li><li class="nav-item">
      <a class="nav-link" href="/zafrero">REGISTRAR ZAFRERO</a>
    </li>
    </li><li class="nav-item">
      <a class="nav-link" href="anticipo">DAR ANTICIPO</a>
    </li>
    </li><li class="nav-item">
      <a class="nav-link" href="/produccion">INGRESAR PRODUCCION</a>
    </li>
    </li>
    
    	<li class="nav-item">
      	<a class="nav-link" href="/kardex">REPORTES</a>
    	</li>
   
  </ul>

</nav>  </nav>
<section>@yield('seccion')</section>
<aside>
@yield('lateral')
</aside>
<footer>pies de pagina</footer>
</body>
</html>