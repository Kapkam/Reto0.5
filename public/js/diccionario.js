var dict = {
	"Home": {
		es: "Inicio",
		en: "Home"
	},
	"Store": {
		es: "Tiendas",
		en: "Store"
	},
	"Contact": {
		es: "Contacto",
		en: "Contact"
	},
	"Location":{
		es: "Ubicacíon",
		en: "Location"
	},
	"T-SHIRT":{
		es:"CAMISETAS",
		en:"T-SHIRT"
	},
	"JEANS":{
		es:"PANTALONES",
		en:"JEANS"
	},
	"JACKET":{
		es:"CHAQUETAS",
		en:"JACKET"
	},
	"HAT":{
		es:"SOMBREROS",
		en:"HAT"
	},
	"Add product":{
		es:"Añadir producto",
		en:"Add product"
	},
	"Modify stock":{
		es: "Modificar stock",
		en: "Modify stock"
	},
	"Check stock":{
		es:"Consultar stock",
		en:"Check stock"
	},
	"Product ID":{
		es:"ID del producto",
		en:"Product ID"
	},
	"Store ID":{
		es:"ID tienda",
		en:"Store ID"
	},
	"Product name":{
		es:"Nombre del producto",
		en:"Product name"
	},
	"Description:":{
		es:"Descripcion:",
		en:"Description:"
	},
	"Product image":{
		es:"Imagen del producto",
		en:"Product image"
	},
	"Stock":{
		es:"Stock actual",
		en:"Stock"
	},
	"New stock":{
		es:"Nuevo stock",
		en:"New stock"
	}
}
function ingles(){
	var translator = $('body').translate({lang: "en", t: dict}); //use English
	//Traduccion del valor de los botones
	document.getElementById('bottrad').value = "Add product";
	document.getElementById('botcon').value = "Check product stock";
	document.getElementById('delete').value = "Delete";
	document.getElementById('modify').value = "Modify stock";
}
function castellano(){
	var translator = $('body').translate({lang: "es", t: dict}); //use spanish
	//Traduccion del valor de los botones
	document.getElementById('bottrad').value = "Añadir producto";
	document.getElementById('botcon').value = "Realizar una consulta";
	document.getElementById('delete').value = "Eliminar";
	document.getElementById('modify').value = "Modificar stock";
}