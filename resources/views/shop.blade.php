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
	<script src="{{ asset('js/script.js') }}"></script>
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
	<section class="navbar">
		<div id="myTopnav" class="nav">
			<ul>
				<li class="pags active"><a href="{{route('home')}}">Inicio</a></li>
				<?php $cont = 0; ?>
					@foreach ($_SESSION["shops"] as $shop)
						<li class='pags'><a id=" <?php echo($shop->id); ?>" href="{{route('productos',$shop->id)}}"><?php echo($shop->name); ?></a></li>
						@if ($cont === 1)
							<li><a id="logo" href="#top"><img src="{{ url('/img/logo.png') }}" alt="logo"></a></li>
						@endif
						<?php $cont ++; ?>
					@endforeach
				<li class="pags dropdown">
					<a class="dropbtn" href="#">Centro</a>
					<div class="dropdown-content">
						<a href="#horario">Horario</a>
						<a href="#mapa">Mapa</a>
						<a href="#contacto">Contáctanos</a>
					</div>
				</li>
				<li class="icon"><a href="javascript:void(0);" onclick="myFunction()"><img src="{{ url('/img/bars.png') }}" alt="bras"></a></li>
			</ul>
		</div>
	</section>
	<section class="shop">
		<div id="logoSmall">
			<img src="../../img/<?php echo(strtolower($_SESSION['shop']->name)); ?>-logo.png">
		</div>
		<div class="container">
			<div class="tiendas">
				<div class="tarjeta">
					<div class="col">
						<div class="actions">
							<form action="{{route('añadirProducto')}}" method='get'>
								<input type='submit' class="boton2" id="bottrad" value='Añadir un producto'>
							</form>
							<form action="{{route('formularioConsulta')}}" method='get'>
								<input type='submit' class="boton2" id="botcon" value='Realizar una consulta'>
							</form>
						</div>
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
								if (!empty($product->links)){
									echo("<h4>" . $product->links . "</h4>");
								}
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
			</div>
		</div>
		</div>
	</div>
	</section>
	<section class="footer">
		<div class="tgfo">
			<div class="tgfo1">
				<h2>Soporte</h2>
				<p>Correo electrónico</p>
				<p>Asistencia Tel.</p>
			</div>
			<div class="tgfo2">
				<h2>Servicios</h2>
				<p>Cines</p>
				<p>Bolera</p>
				<p>Tiendas/Restaurantes</p>
			</div>
			<h1>MAXCENTER</h1>
			<div class="tgfo3">
				<h2>Síguenos</h2>
				<p>Facebook</p>
				<p>Twitter</p>
				<p>Instagram</p>
			</div>
			<div class="tgfo4">
				<h2>Términos Legales</h2>
				<p>Política de Privacidad</p>
				<p>Condiciones de compra</p>
				<p>© Sonae Sierra 2019 Todos los derechos reservados</p>
			</div>
		</div>
	</section>
	<script>
	if ( window.history.replaceState ) {
  		window.history.replaceState( null, null, window.location.href );
	}
</script>

</body>
</html>
