<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Consulta</title>
	<link rel="stylesheet" type="text/css" href="../css/tiendas.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/jquery.translate.js"></script> <!--Archivo traductor-->
	<script type="text/javascript" src="../js/diccionario.js"></script> <!--Diccionaro de la pagina-->
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"><!--Fuente personalizada-->
	<link rel="icon" type="image/png" href="url('/img/favicon.png')" sizes="32x32">
	<meta charset="utf-8">

</head>
<body>
	<input class="trad" type="image" src="{{ URL::asset('/img/ingles.png')}}" width="3%" value="Ingles" name="Ingles" onclick="ingles()">
	<input class="trad" type="image" src="{{ URL::asset('/img/español.png')}}" width="3%"value="Castellano" name="Castellano" onclick="castellano()">
	<img src="../img/maxcenter.png">
	<div id="contenedor">
		<ul>
		  <li><a class="trn" data-trn-key="Add product" href="#">Añadir producto</a></li>
		  <li><a class="trn" data-trn-key="Check stock" href="#">Consultar stock</a></li>
		</ul>

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
				</table>
				<input class="boton" type="submit" value="Realizar consulta" name="boton" onclick="Producto()">
			</form>
			<p  id="seleccion"></p>
	</div>

		<ul>
		  <li><a class="trn" data-trn-key="Add product" href="#">Añadir producto</a></li>
		  <li><a class="trn" data-trn-key="Check stock" href="#">Consultar stock</a></li>
		</ul>

</body>
</html>
