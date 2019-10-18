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
	<link rel="icon" type="image/png" href="img/favicon.png" sizes="32x32">
	<meta charset="utf-8">
</head>
<body>
	<input class="trad" type="image" src="../img/en.jpg" width="3%" value="Ingles" name="Ingles" onclick="ingles()">
	<input class="trad" type="image" src="../img/es.jpg" width="3%"value="Castellano" name="Castellano" onclick="castellano()">
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
			<img src="..img/zara-logo.png" >
		</div>

		<article>
			<?php
				foreach ($products as $product) {
					echo"<section>"
						. "<img src='" . /*$product->img .*/" '>"
						. "<h4 class='trn' data-trn-key='T-SHIRT'>" . $product->name . "</h4>"
						. "<h4 class='trn' data-trn-key='T-SHIRT'>" . $product->description . "</h4>"
						. "<h4 class='trn' data-trn-key='T-SHIRT'>" . $product->stock . "</h4>"
						. "</section>"
						. "<form action='eliminarProducto' method='delete'><input type='submit' value='Eliminar'><input type='hidden' name='producto_id' value='" . $product->id . "'></form>"
						. "<form action='modificarProducto' method='delete'><input type='submit' value='Modificar stock'><input type='hidden' name='producto_id' value='" . $product->id . "'></form>";
				}
			?>
		</article>
	</div>

</body>
</html>
