<!DOCTYPE html>
<html lang="es">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



	<meta charset="utf-8">
	<meta http-equiv content="X-UA-Compatible" content="IE=edge, chrome=1">	
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<link rel="stylesheet" href="css/menu3d.css">

	
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
	nav
	{
		min-height: 50px;
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

</head>
<body>
<header>SISTEMA DE INVENTARIOS Y VENTAS</header>

            <ul class="letras-menu">
                
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
                        <li><a class="nav-link" href="usuario.create">USUARIO</a></li>

                        
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
<section>@yield('seccion')</section>
<aside>
@yield('lateral')
</aside>
<footer>pies de pagina</footer>
</body>
</html>