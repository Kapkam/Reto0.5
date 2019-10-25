<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
	<title>Modificar producto</title>
	<link rel="stylesheet" type="text/css" href="../../css/tiendas.css">

	<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/jquery.translate.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/translatejs.jquery.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/JavaScript.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/diccionario.js') }}"></script>

	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"><!--Fuente personalizada-->
	<link rel="icon" type="image/png" href="url('/img/favicon.png')" sizes="32x32">
	<meta charset="utf-8">

</head>
<body id="cuerpo">
<input class="trad" type="button" width="4%" value="Ingles" name="Ingles" onclick="ctrlIng()">
	<input class="trad" type="button" width="3%"value="Castellano" name="Castellano" onclick="ctrlEsp()">
	<img src="../../img/maxcenter.png">
	<div id="contenedor">
		<ul class="navegador">
		  <li><a class="trn" data-trn-key="Add product" href="{{route('añadirProducto')}}">Añadir producto</a></li>
		  <li><a class="trn" data-trn-key="Check stock" href="{{route('formularioConsulta')}}">Consultar stock</a></li>
		</ul>

		<div id="logoSmall">
			<img src="../../img/Max-Center2.png" >
		</div>
				<form method="post" action="/productsmod/{{$shop_id}}/{{$product->id}}">
					@csrf
					<table border="1">
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
					<input id="bottrad" class="boton" type="submit" value="Modificar producto" name="boton" onclick="Producto()">
				</form>
				<p id="seleccion"></p>
	</div>

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

</body>
</html>
