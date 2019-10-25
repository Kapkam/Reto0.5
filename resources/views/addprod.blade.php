@extends('plantilla')
@section('content')
<section class="addproduct">
	<div id="contenedor">
		<ul>
			<li><a class="trn" data-trn-key="Add product" href="#">Añadir producto</a></li>
			<li><a class="trn" data-trn-key="Check stock" href="#">Consultar stock</a></li>
		</ul>

		<div id="logoSmall">
			<img src="img/<?php echo(strtolower($shop->name)); ?>-logo.png" >
		</div>
		<form method="post" enctype="multipart/form-data" action="{{route('insertarProducto',$shop->id)}}">
        @csrf
        <table border="1">
          <tr>
            <td class="trn" data-trn-key="Product name">Nombre del producto</td>
            <td>
							<input id="nb" onkeyup="this.value = this.value.replace(/[&*<>]/g, '')" type="text" name="nombre" required pattern="[^'\x22]+">
						</td>
          </tr>
          <tr>
            <td class="trn" data-trn-key="Description:">Descripcion:</td>
            <td>
                <textarea id="dscp" onkeyup="this.value = this.value.replace(/[&*<>]/g, '')" name="descripcion"></textarea>
            </td>
          </tr>
          <tr>
              <td class="trn" data-trn-key="Product image">Imagen del producto</td>
              <td>
                  <input type="file" name="img" accept="image/*" />
              </td>
          </tr>
          <tr>
            <td class="trn" data-trn-key="Stock">Stock</td>
            <td>
							<input min="0" name="stock" id="stock" type="number" name="stock" pattern="[^'\x22]+">
						</td>
          </tr>
          <tr>
            <td class="trn" data-trn-key="Videos">Videos</td>
            <td>
							<input onkeyup="this.value = this.value.replace(/[&*<>]/g, '')" name="links" id="video" type="url" name="homepage">
						</td>
          </tr>
        </table>
        <input class="boton3" id="bottrad" type="submit" value="Añadir producto" name="boton" onclick="Producto()">
    </form>
	</div>

	<script type="text/javascript">
	var vid = document.getElementById("video"); //Variables para almacenar los datos de TODOS los campos
	var nom = document.getElementById("nb");
	var stock = document.getElementById("stock");
	var img = document.getElementById("image");

	function Producto(){
		if (vid.value=="" || nom.value=="" || stock.value=="" || img.value=="" ) { //Comprobamos que los campos tienen algun valor
			selec.innerHTML = "<p>Por favor, rellene todos los campos antes de continuar</p>";
		}
		else{ //Va devolviendo los valores obtenidos anterirormente
			alert("Enviado los datos");
		}
	}

</script>
</section>
	@endsection
