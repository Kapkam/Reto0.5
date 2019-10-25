<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Añadir Producto</title>
	<link rel="stylesheet" type="text/css" href="{{url('css/tiendas.css')}}">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.translate.js"></script> <!--Archivo traductor-->
	<script type="text/javascript" src="js/diccionario.js"></script> <!--Diccionaro de la pagina-->
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"><!--Fuente personalizada-->
	<link rel="icon" type="image/png" href="url('/img/favicon.png')" sizes="32x32">
	<meta charset="utf-8">

</head>
<body>
	<input class="trad" type="image" src="{{ URL::asset('/img/ingles.png')}}" width="3%" value="Ingles" name="Ingles" onclick="ingles()">
	<input class="trad" type="image" src="{{ URL::asset('/img/español.png')}}" width="3%"value="Castellano" name="Castellano" onclick="castellano()">
	<img src="img/maxcenter.png">
	<div id="contenedor">
		<ul>
		  <li><a class="trn" data-trn-key="Add product" href="{{route('añadirProducto')}}">Añadir producto</a></li>
		  <li><a class="trn" data-trn-key="Check stock" href="{{route('formularioConsulta')}}">Consultar stock</a></li>
		</ul>

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
				    	<textarea id="dscp" onkeyup="this.value = this.value.replace(/[&*<>]/g, '')" name="descripcion"></textarea>
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
				    <td><input min="0" name="stock" id="stock" type="number" name="stock_modificado" pattern="[^'\x22]+"></td>
				  </tr>
				  <tr>
				    <td class="trn" data-trn-key="Videos">Videos</td>
				    <td><input onkeyup="this.value = this.value.replace(/[&*<>]/g, '')" name="links" id="Video" type="url" name="homepage"></td>
				  </tr>

				</table>
				<input class="boton" class="boton" id="bottrad" type="submit" value="Añadir producto" name="boton" onclick="Producto()">
			</form>
			<p  id="seleccion"></p>
	</div>

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
