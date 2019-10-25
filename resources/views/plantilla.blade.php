<?php
	session_start();
	$_SESSION["shop"] = $shops ?? '';
	$_SESSION["products"] = $products ?? '';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <!-- <link rel="stylesheet" type="text/css" href="{{ url('/css/tiendas.css') }}"> -->
    <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.translate.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/translatejs.jquery.json') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/diccionario.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/JavaScript.js') }}"></script>
    <title>MaxCenter</title>
		<link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" sizes="32x32">
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
    <!-- Incluimos el header -->
    @include('header')
    <!-- Incluimos las vistas aquí -->
    @yield('content')
    <!-- Incluimos el footer -->
    @include('footer')
  </body>
</html>
