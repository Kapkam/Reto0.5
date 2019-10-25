<section class="modify">
	<div id="logoSmall">
		<img src="../../img/Max-Center2.png" >
	</div>
	<div class="col">
		<form method="post" action="/productsmod/{{$shop_id}}/{{$product->id}}">
			@csrf
			<table border="1">
				<tr>
					<td class="trn" data-trn-key="Product name">Nombre del producto</td>
					<td><input value="<?php echo($product->name); ?>" readonly id="nb" onkeyup="this.value = this.value.replace(/[&*<>]/g, '')" type="text" name="nombre" required pattern="[^'\x22]+"></td>
				</tr>
				<tr>
					<td class="trn" data-trn-key="Stock">Stock actual</td>
					<td><input readonly min="0" value="<?php echo($product->stock); ?>" id="stock" type="number" name="stockAnterior" pattern="[^'\x22]+"></td>
				</tr>
				<tr>
					<td class="trn" data-trn-key="New stock">Nuevo stock</td>
					<td><input min="0" value="" id="mod_stock" type="number" name="stock" pattern="[^'\x22]+"></td>
				</tr>

			</table>
			<input id="bottrad" class="boton" type="submit" value="Modificar producto" name="boton" onclick="Producto()">
		</form>
		<p id="seleccion"></p>
	</div>

	<script type="text/javascript">
		//Variables para almacenar los datos de TODOS los campos
		var mod_stock = document.getElementById("mod_stock");
		var selec = document.getElementById("seleccion");

		function Producto(){
			//Comprobamos que los campos tienen algun valor
			if (mod_stock.value=="" ) {
				selec.innerHTML = "<p>Por favor, rellene todos los campos antes de continuar/Please, complete the form before continuing </p>";
			}
			else{
				//Va devolviendo los valores obtenidos anterirormente
				selec.innerHTML = "<p></p>";
			}
		}
	</script>
</section>
