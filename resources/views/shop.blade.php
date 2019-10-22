<?php
	session_start();
	$_SESSION["shop"] = $shop;
	$_SESSION["products"] = $products;
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
	<input class="trad" type="image" src="../img/ingles.png" width="3%" value="Ingles" name="Ingles" onclick="ingles()">
	<input class="trad" type="image" src="../img/español.png" width="3%"value="Castellano" name="Castellano" onclick="castellano()">
	<img src="../img/maxcenter.png">
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
			<img src="../img/<?php echo(strtolower($_SESSION["shop"]->name)); ?>-logo.png" >
		</div>
		<form action="{{route('añadirProducto')}}"method='get'>
			<input type='submit' value='Añadir un producto'>
		</form>
		<form action="{{route('consulta')}}" method='get'>
			<input type='submit' value='Relizar una consulta'>
		</form>
		<article>
			<?php
				foreach ($_SESSION["products"] as $product) {
					echo"<section>"
						. "<img src='../img/" . $product->img ." '>"
						. "<h4 class='trn' data-trn-key='T-SHIRT'>" . $product->name . "</h4>"
						. "<h4 class='trn' data-trn-key='T-SHIRT'>" . $product->description . "</h4>"
						. "<h4 class='trn' data-trn-key='T-SHIRT'>" . $product->stock . "</h4>"
						. "</section>"
						. "<button href='/products/{" . $product->shop_id ."}/{" . $product->id . "}'>Eliminar button</button>"
						. "<form action='" . "{{route('eliminarProducto'," . $product->shop_id . "," . $product->id . ")}}" . "' method='delete'><input type='submit' value='Eliminar'></form>";
						/*. "<form action='" . "{{route('modificarProducto')}}" . "' method='get'><input type='submit' value='Modificar stock'></form>"*/
				}
			?>
		</article>
	</div>

</body>
</html>
