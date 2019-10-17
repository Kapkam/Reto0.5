<!DOCTYPE html>
<html>
<head>
	<title>Tienda</title>
	<link rel="stylesheet" type="text/css" href="css/tiendas.css">
	<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->

	<!--
	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	-->
	<script type="text/javascript" src="jquery.js"></script>-
	<script type="text/javascript" src="jquery.translate.js"></script><!--Archivo traductor-->
	<script type="text/javascript" src="diccionario.js"></script> <!--Diccionaro de la pagina-->

	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"><!--Fuente personalizada-->
	<link rel="icon" type="image/png" href="img/favicon.png" sizes="32x32">
	<meta charset="utf-8">
</head>
<body>
	<input class="trad" type="image" src="img/en.jpg" width="3%" value="Ingles" name="Ingles" onclick="ingles()">
	<input class="trad" type="image" src="img/es.jpg" width="3%"value="Castellano" name="Castellano" onclick="castellano()">
	<img src="img/maxcenter.png">
	<div id="contenedor">

		<ul>
		  <li><a class="trn" data-trn-key="Home" href="#">Inicio</a></li>
		  <li><a class="trn" data-trn-key="Store" href="#">Tiendas</a></li>
		  <li><a class="trn" data-trn-key="Contact" href="#">Contacto</a></li>
		  <li><a class="trn" data-trn-key="Location" href="#">Ubicacion</a></li>
		</ul>

		<!--Botones ocultos-->
		<input type="button" name="a" class="moss boton" id="a" value="Añadir producto">
		<input type="button" name="b" class="moss boton" id="b" value="Eliminar producto">
		<input type="button" name="c" class="moss boton" id="c" value="Modificar stock">
		<input type="button" name="d" class="moss boton" id="d" value="Consultar stock">
		<!--Fin botones ocultos-->

		<div id="logoSmall">
			<img src="img/zara-logo.png" >
		</div>
		<aside>
			<p class="trn" data-trn-key="Filter by:">Filtrar por:</p>
			<form action="#" method="post">
			  <input list="filtro" name="filtro">
			  <datalist id="filtro">
			    <option value="Mujer">
			    <option value="Hombre">
			    <option value="Niños">
			    <option value="Mas baratos">
			    <option value="Mas caros">
			  </datalist>
			  <input type="button" class="boton" value="Filtrar">
			</form>

			<!--Formularios ocultos-->
			<form>
			<input class="basedatos añadir" type="text" name="añadir" placeholder="Id producto a añadir">
			<input class="basedatos añadir boton" type="button" name="añadirProd" value="añadir producto">
			<br>
			<input class="basedatos quitar" type="text" name="quitar" placeholder="Id producto a eliminar">
			<input class="basedatos quitar boton" type="button" name="quitarProd" value="Eliminar">
			<br>
			<input class="basedatos mod" type="text" name="modificar" placeholder="Id producto">
			<input class="basedatos mod" type="number" name="cantidad">
			<input class="basedatos mod boton" type="button" name="modProd" value="modificar stock">
			<br>
			<input class="basedatos cons" type="text" name="consulta" placeholder="Consulta stock">
			<input class="basedatos cons boton" type="button" name="consulta" value="Consulta stock">
			</form>
			<!--Fin de formularios-->

		</aside>

		<article>
			<section>
				<img src="img/prod1.png">
				<h4 class="trn" data-trn-key="T-SHIRT">CAMISETA</h4>
			</section>
			<section>
				<img src="img/prod2.png">
				<h4 class="trn" data-trn-key="JEANS">PANTALONES</h4>
			</section>
			<section>
				<img src="img/prod3.png">
				<h4 class="trn" data-trn-key="JACKET">CHAQUETAS</h4>
			</section>
			<section>
				<img src="img/prod4.png">
				<h4 class="trn" data-trn-key="HAT">SOMBREROS</h4>
			</section>
		</article>
	</div>

</body>
</html>
