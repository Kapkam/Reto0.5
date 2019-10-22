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
	<link rel="icon" type="image/png" href="../../img/favicon.png" sizes="32x32">
	<meta charset="utf-8">
	
	<script>
		$(document).ready(function(){
		 
		  $("#modificar").click(function(){
		    $("#crear").toggle(1000);
			$("#modify").toggle(1000);

		  });
		});
	</script>

</head>
<body>
	<input class="trad" type="image" src="../../img/en.png" width="3%" value="Ingles" name="Ingles" onclick="ctrlIng()">
	<input class="trad" type="image" src="../../img/es.jpg" width="3%"value="Castellano" name="Castellano" onclick="ctrlEsp()">
	<img src="../../img/maxcenter.png">
	<div id="contenedor">
		<ul>
		  <li><a class="trn" data-trn-key="Add product" href="#">Añadir producto</a></li>
		  <li><a class="trn" data-trn-key="Modify stock" href="#">Modificar stock</a></li>
		  <li><a class="trn" data-trn-key="Check stock" href="#">Consultar stock</a></li>
		</ul>

		<div id="logoSmall">
			<img src="../../img/Max-Center2.png" >
		</div>
				<form method="get" action="#">

					<table border="1">
					<tr>
						<td class="trn" data-trn-key="Product name">Nombre del producto</td>
						<td><input readonly id="nb" onkeyup="this.value = this.value.replace(/[&*<>]/g, '')" type="text" name="nombre" required pattern="[^'\x22]+"></td>
					</tr>
					<tr>
						<td class="trn" data-trn-key="Stock">Stock actual</td>
						<td><input readonly min="0" id="stock" type="number" name="stock" pattern="[^'\x22]+"></td>
					</tr>
					<tr>
						<td class="trn" data-trn-key="New stock">Nuevo stock</td>
						<td><input min="0" id="mod_stock" type="number" name="stock_modificado" pattern="[^'\x22]+"></td>
					</tr>
					
					</table>
					<input id="bottrad" class="boton" type="button" value="Añadir producto" name="boton" onclick="Producto()">
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
			else{
			//Va devolviendo los valores obtenidos anterirormente
			alert("Enviado los datos");
			selec.innerHTML = "<p></p>";
        	}
		}
	</script>

</body>
</html>