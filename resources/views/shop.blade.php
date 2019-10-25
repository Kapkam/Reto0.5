@extends('plantilla')
@section('content')
	<section class="shop">
		<div id="logoSmall">
			<p><?php echo var_export(strtolower($shop),true) ?></p>
			<img src="../../img/<?php echo strtolower($shop->name); ?>-logo.png">
		</div>
		<div class="col">
			<div class="col1">

				<form action="{{route('añadirProducto',$shop->id)}}" method='get'>
					<input type='submit' value='Añadir un producto'>
				</form>
				<form action="{{route('formularioConsulta')}}" method='get'>
					<input type='submit' value='Realizar una consulta'>
				</form>
		</div>
		<div class="col2">
			<article>
				@foreach ($products as $product)
				<?php var_export($product) ?>
					<section>
						<div class="container">
							<div class="tiendas">
								<div class="tarjeta">
									<img src="/img/<?php echo $product->img; ?>">
									<h4><?php echo($product->name); ?></h4>
									<h4><?php echo($product->desription); ?></h4>
									<h4><?php echo($product->stock); ?></h4>
									<?php
									$product_id = $product->id;
									$shop_id = $product->shop_id;
									?>
									<div class="actions">
										<form method="post" action="/productsdel/{{$shop_id}}/{{$product_id}}">
											@csrf
											<input type="submit" class="boton" id="delete" value="Eliminar">
										</form>
										<form method="post" action="/products/{{$shop_id}}/{{$product_id}}">
											@csrf
											<input type='submit' class="boton" id="modify" value='Modificar stock'>
										</form>
									</div>
								</div>
							</div>
						</div>
					</section>
				@endforeach-
				<!-- <?php
				foreach ($products as $product) {
					echo"<section>"
							. "<div class='container'>"
							. "<div class='tiendas'>"
							. "<div class='tarjeta'>"
							. "<p> ".$product."</p>"
							. "<img src='../../img/ ".$product->img."'>"
							. "<h2 class='trn' data-trn-key='T-SHIRT'>" . $product->name . "</h2>"
							. "<p class='trn' data-trn-key='T-SHIRT'>" . $product->description . "</p>"
							. "<h4 class='trn' data-trn-key='T-SHIRT'>" . $product->stock . "</h4>"
							. "<div class='actions'>"
							. "<form action='" . "{{route('eliminarProducto'," . $product->shop_id . "," . $product->id . ")}}" . "' method='delete'><input type='submit' value='Eliminar'></form>"
							. "<form action='" . "{{route('formularioModificar'," . $product->shop_id . "," . $product->id . ")}}" . "><input type='submit' value='Modificar'></form>"
							. "</div>"
							. "</div>"
							. "</div>"
							. "</div>"
							. "</section>";
					}
				 ?> -->
			</article>
		</div>
	</div>
	</section>
@endsection
