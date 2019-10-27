<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
	<title>Modificar producto</title>
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
				<li class="pags active"><a class="trn" data-trn-key="Home" href="{{route('home')}}">Inicio</a></li>
				<?php $cont = 0; ?>
					@foreach ($_SESSION["shops"] as $shop)
						<li class='pags'><a id=" <?php echo($shop->id); ?>" href="{{route('productos',$shop->id)}}"><?php echo($shop->name); ?></a></li>
						@if ($cont === 1)
							<li><a id="logo" href="#top"><img src="{{ url('/img/logo.png') }}" alt="logo"></a></li>
						@endif
						<?php $cont ++; ?>
					@endforeach
				<li class="pags dropdown">
					<a class="dropbtn trn" data-trn-key="Mall" href="{{route('home')}}">Centro</a>
					<div class="dropdown-content">
						<a class="trn" data-trn-key="Schedule" href="#horario">Horario</a>
						<a class="trn" data-trn-key="Map" href="#mapa">Mapa</a>
						<a class="trn" data-trn-key="Contact us" href="#contacto">Contáctanos</a>
					</div>
				</li>
				<li class="pags dropdown last">
					<a class="dropbtn trn" data-trn-key="Languages" href="#top">Idiomas</a>
					<div id="idiomas" class="dropdown-content">
						<img style="width:40px; height:25px; cursor:pointer; padding: 10px;" class="trad" src="{{ url('/img/ingles.png') }}" value="Ingles" name="Ingles" onclick="ingles()" alt="ingles">
						<img style="width:40px; height:25px; cursor:pointer; padding: 10px;" class="trad" src="{{ url('/img/español.png') }}" value="Castellano" name="Castellano" onclick="castellano()" alt="castellano">
					</div>
				</li>
				<li class="icon"><a href="javascript:void(0);" onclick="myFunction()"><img src="{{ url('/img/bars.png') }}" alt="bras"></a></li>
			</ul>
		</div>
	</section>
	<section class="shop">
		<div id="logoSmall">
			<img src="../../img/Max-Center2.png" >
		</div>
		<div class="modificar">
			<form method="post" action="/productsmod/{{$shop_id}}/{{$product->id}}">
				@csrf
				<table>
					<tr>
						<th colspan="2" class="trn" data-trn-key="Modify">Modificar Stock</th>
					</tr>
					<tr>
						<td class="trn" data-trn-key="Product name">Nombre del producto</td>
						<td><input value="<?php echo($product->name); ?>" readonly id="nb" onkeyup="this.value = this.value.replace(/[&*<>]/g, '')" type="text" name="nombre" required pattern="[^'\x22]+"></td>
					</tr>
					<tr>
						<td class="trn" data-trn-key="Stock">Stock actual</td>
						<td><input readonly min="0" value="<?php echo($product->stock); ?>" id="stock" type="number" name="stockAnterior" pattern="[^'\x22]+"></td>
					</tr>
					<tr>
						<td class="trn" data-trn-key="New stock">Nuevo stock</td>
						<td><input min="0" value="" id="mod_stock" type="number" name="stock" pattern="[^'\x22]+"></td>
					</tr>
				</table>
				<input id="bottrad" class="btn-mod" type="submit" value="Modificar producto" name="boton" onclick="Producto()">
			</form>
		</div>
				<p id="seleccion"></p>
	</section>
	<script type="text/javascript">
	//Variables para almacenar los datos de TODOS los campos
		var mod_stock = document.getElementById("mod_stock");
		var selec = document.getElementById("seleccion");

		function Producto(){
			//Comprobamos que los campos tienen algun valor
			if (mod_stock.value=="" ) {
				selec.innerHTML = "<p>Por favor, rellene todos los campos antes de continuar/Please, complete the form before continuing </p>";
			}
		}
	</script>
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
</body>
</html>
