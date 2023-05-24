<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Free Port
Description: A two-column, fixed-width design for 1024x768 screen resolutions.
Version    : 1.0
Released   : 20090122

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>PARCIAL TELEMATICOS</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/style2.css" rel="stylesheet" type="text/css" media="screen" />
<script src="https://kit.fontawesome.com/5b973e91e5.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="wrapper">

<div id="header-wrapper">
	<div id="logo">
		<h1><a href="#" style="color: white; text-shadow: 2px 2px black;">PARCIAL API</a></h1>
        <h3 style="color: black; font-size: 20px">Santiago Castaño - JJ Sandoval</h3>
	</div>
	<hr />
	<!-- end #logo -->
	<div id="header">
		<div id="menu">
			<ul>
                <li class="current_page_item"><a href="../public/">Inicio</a></li>
				<li><a href="../public/listar">Listar</a></li>
				<li><a href="../public/agregar">Agregar</a></li>
			</ul>
		</div>
		
	</div>
	<!-- end #header -->
</div>
<!-- end #header-wrapper -->

<div id="page">
	<div id="content">
		<div class="post">

		
			
		</div>
<div style="text-align: center;">  
<h1 style="color: red; font-family:'Courier New', Courier, monospace; font-weight:bolder">AGREGAR LIBRO</h1>
<br>
<div>
<form method="POST" action="{{ route('libro.store') }}">
@csrf
<div>
    <label style="font-size: 40px; font-weight: bold;">TÍTULO:</label>
    <input type="text" style="height: 30px;" name="title" id="title" placeholder="100 años de soledad" autocomplete="off">
</div>
<br><br>
<div>
    <label style="font-size: 40px; font-weight: bold;">DESCRIPCIÓN:</label>
    <input type="text" style="height: 30px; width:202px" name="description" id="description" placeholder="Es muy interesante por..." autocomplete="off">
</div>
<br><br>
<div>
    <label style="font-size: 40px; font-weight: bold;">AUTOR:</label>
    <input style="height: 30px; width: 200px" type="text" name="author" id="author" placeholder="Gabriel Garcia Marquez" autocomplete="off">
</div>




<br><br>
<button onclick="return eliminar()" type="submit" style="font-size: 40px; font-weight: bold;">AGREGAR</button>
</form>  

</div>
</div>

	<!-- end #content -->
	</div>
	<!-- end #sidebar -->
	<div style="clear: both;">&nbsp;</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- end #page -->
<footer style="text-align: center; font-size: 15px">
Desarrollado y Diseñado por <strong>LOS GORILOS</strong>
</footer>
<br>
<!-- end #footer -->
</div>
</div>
<script>
    function eliminar(){
       var respuesta=confirm("Estas seguro que deseas agregar este registro?")
       return respuesta
     }
</script>
</body>
</html>
