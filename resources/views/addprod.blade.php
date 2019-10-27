<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Añadir Producto</title>
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
			<img src="img/<?php echo(strtolower($_SESSION["shop"]->name)); ?>-logo.png" >
		</div>
		<form method="post" enctype="multipart/form-data" action="{{route('insertarProducto',$_SESSION['shop']->id)}}">
			@csrf
			<table border="1">
				<tr>
					<td class="trn" data-trn-key="Product name">Nombre del producto</td>
					<td><input id="nb" onkeyup="this.value = this.value.replace(/[&*<>]/g, '')" type="text" name="nombre" required pattern="[^'\x22]+"></td>
				</tr>
				<tr>
					<td class="trn" data-trn-key="Description:">Descripcion:</td>
					<td>
						<textarea id="dscp" onkeyup="this.value = this.value.replace(/[&*<>]/g, '')" required name="descripcion"></textarea>
					</td>
				</tr>
				<tr>
					<td class="trn" data-trn-key="Product image">Imagen del producto</td>
					<td>
						<input type="file" name="img" accept="image/*" />
					</td>
				</tr>
				<tr>
					<td class="trn" data-trn-key="Stock">Stock</td>
					<td><input min="0" name="stock" id="stock" type="number" name="stock_modificado" required pattern="[^'\x22]+"></td>
				</tr>
				<tr>
					<td class="trn" data-trn-key="Videos">Videos</td>
					<td><input onkeyup="this.value = this.value.replace(/[&*<>]/g, '')" name="links" id="Video" type="url" required name="homepage"></td>
				</tr>

			</table>
			<input class="boton3" id="bottrad" type="submit" value="Añadir producto" name="boton" onclick="Producto()">
		</form>
		<p  id="seleccion"></p>
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
	<script type="text/javascript">
		var vid = document.getElementById("Video"); //Variables para almacenar los datos de TODOS los campos
		var nom = document.getElementById("nb");
		var stock = document.getElementById("stock");
		var img = document.getElementById("image");
		var selec = document.getElementById("seleccion");

		function Producto(){
			if (vid.value=="" || nom.value=="" || stock.value=="" || img.value=="" ) { //Comprobamos que los campos tienen algun valor
				selec.innerHTML = "<p>Por favor, rellene todos los campos antes de continuar</p>";
			}
    }
	</script>
<script>
	if ( window.history.replaceState ) {
  		window.history.replaceState( null, null, window.location.href );
	}
</script>

</body>
</html>
