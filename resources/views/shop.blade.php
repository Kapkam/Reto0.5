@extends('plantilla')
@section('content')
	<section class="shop">
		<div id="logoSmall">
			<img src="../../img/<?php echo(strtolower($_SESSION['shop']->name ?? '')); ?>-logo.png">
		</div>
		<div class="col">
			<div class="col1">

				<form action="{{route('añadirProducto')}}" method='get'>
					<input type='submit' value='Añadir un producto'>
				</form>
				<form action="{{route('formularioConsulta')}}" method='get'>
					<input type='submit' value='Realizar una consulta'>
				</form>
		</div>
		<div class="col2">
			<article>
				<?php
				foreach ($products as $product) {
					echo"<section>"
							. "<div class='container'>"
							. "<div class='tiendas'>"
							. "<div class='tarjeta'>"
							. "<img src='asset('img/ ".$product->img.")'>"
							. "<h2 class='trn' data-trn-key='T-SHIRT'>" . $product->name . "</h2>"
							. "<p class='trn' data-trn-key='T-SHIRT'>" . $product->description . "</p>"
							. "<h4 class='trn' data-trn-key='T-SHIRT'>" . $product->stock . "</h4>"
							. "<form action='" . "{{route('eliminarProducto'," . $product->shop_id . "," . $product->id . ")}}" . "' method='delete'><input type='submit' value='Eliminar'></form>"
							. "</div>"
							. "</div>"
							. "</div>"
							. "</section>";
					}
				 ?>
			</article>
		</div>
	</div>
	</section>
@endsection
