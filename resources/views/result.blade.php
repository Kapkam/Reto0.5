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
	<link rel="icon" type="image/png" href="../img/favicon.png" sizes="32x32">
	<meta charset="utf-8">

</head>
<body>
	<input class="trad" type="image" src="../img/en.jpg" width="3%" value="Ingles" name="Ingles" onclick="ingles()">
	<input class="trad" type="image" src="../img/es.jpg" width="3%"value="Castellano" name="Castellano" onclick="castellano()">
	<img src="../img/maxcenter.png">
	<div id="contenedor">
		<ul>
		  <li><a class="trn" data-trn-key="Add product" href="#">Añadir producto</a></li>
		  <li><a class="trn" data-trn-key="Check stock" href="#">Consultar stock</a></li>
		</ul>

		<div id="logoSmall">
			<img src="../img/<?php echo(strtolower($_SESSION["shop"]->name)); ?>-logo.png" >
		</div>
    <table border="1">
      <tr>
        <td class="trn">
      		<?php
            echo($result);
          ?>
        </td>
      </tr>
    </table>
			<p  id="seleccion"></p>
	</div>

		<ul>
		  <li><a class="trn" data-trn-key="Add product" href="#">Añadir producto</a></li>
		  <li><a class="trn" data-trn-key="Check stock" href="#">Consultar stock</a></li>
		</ul>

</body>
</html>
