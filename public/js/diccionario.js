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
	"Filter by:":{
		es: "Filtrar por:",
		en: "Filter by:"
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
		en:"Description"
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
	}
function castellano(){
		var translator = $('body').translate({lang: "es", t: dict}); //use spanish
	}