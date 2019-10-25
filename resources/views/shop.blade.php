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
			</article>
		</div>
	</div>
	</section>
@endsection
