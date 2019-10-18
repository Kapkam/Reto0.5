<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<title>Añadir un producto</title>
	<link rel="stylesheet" type="text/css" href="../css/tiendas.css">

	<script type="text/javascript" src="{{ URL::asset('..js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('..js/jquery.translate.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('..js/translatejs.jquery.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('..js/diccionario.js') }}"></script>

	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"><!--Fuente personalizada-->
	<link rel="icon" type="image/png" href="img/favicon.png" sizes="32x32">
	<meta charset="utf-8">

</head>
<body>
	<img src="../img/maxcenter.png">
	<div id="contenedor">
		<ul>
		  <li><a class="trn" data-trn-key="Home" href="#">Añadir producto</a></li>
		  <li><a class="trn" data-trn-key="Store" href="#">Eliminar producto</a></li>
		  <li><a class="trn" data-trn-key="Contact" href="#">Modificar stock</a></li>
		  <li><a class="trn" data-trn-key="Location" href="#">Consultar stock</a></li>
		</ul>

		<div id="logoSmall">
			<img src="../img/Max-Center2.png" >
		</div>

			<form method="post" action="view('insertarProducto')">
				<table border="1">
				  <tr>
				    <td>ID del producto</td>
				    <td>
				      <input type="number" name="ID">
				    </td>
				  </tr>
				  <tr>
				    <td>ID tienda</td>
				    <td><input type="number" name="ID_Tien">
				  </tr>
				  <tr>
				    <td>Nombre del producto</td>
				    <td><input type="text" name="nombre">
				  </tr>
				  <tr>
				    <td>Descripcion:</td>
				    <td><textarea>

				    </textarea>
				  </tr>

				</table>
				<P><input class="boton" type="button" value="Añadir producto" name="boton"></P>
			</form>
	</div>

</body>
</html>
