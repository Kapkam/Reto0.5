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
			<tr>
				<td>
					<form action="{{route('productos',$_SESSION['shop']->id)}}" method="get">
						@csrf
						<input class="boton3" id="return" type="submit" value="Volver a la tienda">
					</form>
				</td>
			</tr>
    </table>
	</div>

</body>
</html>
