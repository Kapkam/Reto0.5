<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Consulta</title>
	<link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.translate.js"></script> <!--Archivo traductor-->
	<script type="text/javascript" src="js/diccionario.js"></script> <!--Diccionaro de la pagina-->
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"><!--Fuente personalizada-->
	<link rel="icon" type="image/png" href="url('/img/favicon.png')" sizes="32x32">
	<meta charset="utf-8">

</head>
<body id="cuerpo">
	<input class="trad" type="button" width="4%" value="Ingles" name="Ingles" onclick="ctrlIng()">
	<input class="trad" type="button" width="3%"value="Castellano" name="Castellano" onclick="ctrlEsp()">
	<img src="../img/maxcenter.png">
	<div id="contenedor">
	<ul class="navegador">
		  <li><a class="trn" data-trn-key="Add product" href="{{route('añadirProducto')}}">Añadir producto</a></li>
		  <li><a class="trn" data-trn-key="Check stock" href="{{route('formularioConsulta')}}">Consultar stock</a></li>
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

</body>
</html>
