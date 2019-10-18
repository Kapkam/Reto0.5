<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<title>Añadir un producto</title>
	<link rel="stylesheet" type="text/css" href="../../css/tiendas.css">

	<script type="text/javascript" src="{{ URL::asset('..js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('..js/jquery.translate.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('..js/translatejs.jquery.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('..js/diccionario.js') }}"></script>

	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"><!--Fuente personalizada-->
	<link rel="icon" type="image/png" href="../img/favicon.png" sizes="32x32">
	<meta charset="utf-8">

</head>
<body>
	<input class="trad" type="image" src="../../img/en.jpg" width="3%" value="Ingles" name="Ingles" onclick="ingles()">
	<input class="trad" type="image" src="../../img/es.jpg" width="3%"value="Castellano" name="Castellano" onclick="castellano()">
	<img src="../../img/maxcenter.png">
	
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
				    <td><input id="nb" onkeyup="this.value = this.value.replace(/[&*<>]/g, '')" type="text" name="nombre" required pattern="[^'\x22]+"></td>
				  </tr>
				  <tr>
				    <td class="trn" data-trn-key="Description:">Descripcion:</td>
				    <td>
				    	<textarea id="dscp" onkeyup="this.value = this.value.replace(/[&*<>]/g, '')"></textarea>
					</td>
				  </tr>

				  <tr>
				  	<td class="trn" data-trn-key="Product image">Imagen del producto</td>
				  	<td>
				  		<input type="file" name="myImage" accept="image/*" />
				  	</td>
				  </tr>
				  <tr>
				    <td class="trn" data-trn-key="Stock">Stock</td>
				    <td><input min="0" id="stock" type="number" name="stock_modificado" pattern="[^'\x22]+"></td>
				  </tr>
				  <tr>
				    <td class="trn" data-trn-key="Videos">Videos</td>
				    <td><input onkeyup="this.value = this.value.replace(/[&*<>]/g, '')" id="Video" type="url" name="homepage"></td>
				  </tr>
				  
				</table>
				<input class="boton" type="button" value="Añadir producto" name="boton" onclick="Producto()">
			</form>
			<p  id="seleccion"></p>
	</div>
		
		<ul>
		  <li><a class="trn" data-trn-key="Add product" href="#">Añadir producto</a></li>
		  <li><a class="trn" data-trn-key="Modify stock" href="#">Modificar stock</a></li>
		  <li><a class="trn" data-trn-key="Check stock" href="#">Consultar stock</a></li>
		</ul>

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
			else{ //Va devolviendo los valores obtenidos anterirormente
			alert("Enviado los datos");
        	}
        }
		
	</script>

</body>
</html>