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
	var add = document.getElementById('bottrad');
    var con = document.getElementById('botcon');
    var del = document.getElementById('delete');
    var modify = document.getElementById('modify');
    if (add) {
        add.value = "Add product";
    }
    if (con) {
        con.value = "Check product stock";
    }
    if (del) {
        del.value = "Delete";
    }
    if (modify) {
        modify.value = "Modify stock";
    }
}
function castellano(){
	var translator = $('body').translate({lang: "es", t: dict}); //use spanish
	//Traduccion del valor de los botones
	var add = document.getElementById('bottrad');
    var con = document.getElementById('botcon');
    var del = document.getElementById('delete');
    var modify = document.getElementById('modify');
    if (add) {
        add.value = "Añadir producto";
    }
    if (con) {
        con.value = "Realizar una consulta";
    }
    if (del) {
        del.value = "Eliminar";
    }
    if (modify) {
        modify.value = "Modificar stock";
    }
}