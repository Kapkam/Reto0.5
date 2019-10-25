<?php
	session_start();
	$_SESSION["shop"] = $shop;
	$_SESSION["products"] = $products;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<title>Tienda</title>
	<link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">

	<script type="text/javascript" src="{{ URL::asset('js/JavaScript.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/jquery.translate.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/translatejs.jquery.json') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/diccionario.js') }}"></script>

	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"><!--Fuente personalizada-->
	<link rel="icon" type="image/png" href="{{url('img/favicon.png')}}" sizes="32x32">
	<meta charset="utf-8">
</head>
<body id="cuerpo">
	<input class="trad" type="button" width="4%" value="Ingles" name="Ingles" onclick="ctrlIng()">
	<input class="trad" type="button" width="3%"value="Castellano" name="Castellano" onclick="ctrlEsp()">
	<img src="{{ URL::asset('/img/maxcenter.png') }}">
	<div id="contenedor">

		<ul class="navegador">
		  <li><a class="trn" data-trn-key="Home" href="{{route('home')}}">Inicio</a></li>
		  <li><a class="trn" data-trn-key="Contact" href="{{route('home')}}#contacto">Contacto</a></li>
		  <li><a class="trn" data-trn-key="Location" href="{{route('home')}}#mapa">Ubicacion</a></li>
		</ul>

		<div id="logoSmall">
			<img src="../../img/<?php echo(strtolower($_SESSION['shop']->name)); ?>-logo.png">
		</div>
		<form action="{{route('añadirProducto')}}" method='get'>
			<input type='submit' class="boton2" id="bottrad" value='Añadir un producto'>
		</form>
		<form action="{{route('formularioConsulta')}}" method='get'>
			<input type='submit' class="boton2" id="botcon" value='Realizar una consulta'>
		</form>
		<article class="articulo">
				@foreach ($_SESSION["products"] as $product)
					<section class="seccion">
						<?php
							if (!empty($product->img)){
								echo("<img src='/img/" . $product->img . "'>");
							}
						?>
						<h4><?php echo($product->name); ?></h4>
						<h4><?php echo($product->description); ?></h4>
						<h4>Stock: <?php echo($product->stock); ?></h4>
					<?php
						$product_id = $product->id;
					 	$shop_id = $product->shop_id;
					?>
					<form method="post" action="/productsdel/{{$shop_id}}/{{$product_id}}">
						@csrf
						<input type="submit" class="boton" id="delete" value="Eliminar">
					</form>
					<form method="post" action="/products/{{$shop_id}}/{{$product_id}}">
						@csrf
						<input type='submit' class="boton" id="modify" value='Modificar stock'>
					</form>
					</section>
				@endforeach
		</article>
	</div>
	<script>
	if ( window.history.replaceState ) {
  		window.history.replaceState( null, null, window.location.href );
	}
</script>

</body>
</html>
