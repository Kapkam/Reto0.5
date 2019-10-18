<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<title>Tienda</title>
	<link rel="stylesheet" type="text/css" href="../css/tiendas.css">

	<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/jquery.translate.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/translatejs.jquery.json') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/diccionario.js') }}"></script>

	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"><!--Fuente personalizada-->
	<link rel="icon" type="image/png" href="../img/favicon.png" sizes="32x32">
	<meta charset="utf-8">
</head>
<body>
	<input class="trad" type="image" src="../img/en.jpg" width="3%" value="Ingles" name="Ingles" onclick="ingles()">
	<input class="trad" type="image" src="../img/es.jpg" width="3%"value="Castellano" name="Castellano" onclick="castellano()">
	<img src="../img/maxcenter.png">
	<div id="contenedor">

		<ul>
		  <li><a href="#">Inicio</a></li>
		  <li><a href="#">Tiendas</a></li>
		  <li><a href="#">Contacto</a></li>
		  <li><a href="#">Ubicacion</a></li>
		</ul>

		<div id="logoSmall">
			<img src="../img/zara-logo.png" >
		</div>
		<form action='añadirProducto' method='get'><input class='boton' type='submit' value='Añadir un producto'></form>
		<form action='realizarConsulta' method='get'><input class='boton' type='submit' value='Relizar una consulta'></form>
		<article>
			<?php
				foreach ($products as $product) {
					echo"<section>"
						. "<img src='" . /*$product->img .*/" '>"
						. "<h5>" . $product->name . "</h5>"
						. "<h6>" . $product->description . "</h6>"
						. "<h6>" . $product->stock . "</h6>"
						. "</section>"
						. "<form action='eliminarProducto' method='delete'><input class='boton' type='submit' value='Eliminar'><input type='hidden' name='producto_id' value='" . $product->id . "'></form>"
						. "<form action='modificarProducto' method='get'><input class='boton' type='submit' value='Modificar stock'><input type='hidden' name='producto_id' value='" . $product->id . "'></form>";
				}
			?>
		</article>
	</div>

</body>
</html>
