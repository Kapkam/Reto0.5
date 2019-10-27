<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Consulta</title>
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
			<img src="../img/<?php echo(strtolower($_SESSION["shop"]->name)); ?>-logo.png" >
		</div>
			<form method="post" action="{{route('resultados')}}">
				@csrf
				<table border="1">
				  <tr>
				    <td class="trn" data-trn-key="Product name">Nombre del producto</td>
				    <td>
                <?php
                  echo("<select  onkeyup='this.value = this.value.replace(/[&*<>]/g, '')' name='id_producto' required pattern='[^'\x22]+' id='nb' size='1'>");
                  foreach ($_SESSION["products"] as $product){
                    echo("<option value='" . $product->id . "'>" . ucfirst($product->name) . "</option>");
                  }
                  echo("</select><input type='hidden' name='" . $product->name . "' value='" . $product->id . "'>");
                ?>
            </td>
          </tr>
					<tr>
						<td>
							<input class="boton3" id="botcon" type="submit" value="Realizar consulta" name="boton" onclick="Producto()">
						</td>
					</tr>
				</table>
			</form>
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
</body>
</html>
