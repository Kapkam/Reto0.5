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
	},
	"Schedule": {
		es: "Horario",
		en: "Schedule"
	},
	"Map": {
		es: "Mapa",
		en: "Map"
	},
	"Contact us": {
		es: "Contáctenos",
		en: "Contact us"
	},
	"Support": {
		es: "Soporte",
		en: "Support"
	},
	"Email": {
		es: "Correo electrónico",
		en: "Email"
	},
	"Tel. Asisttence": {
		es: "Asistencia Tel.",
		en: "Tel. Asisttence"
	},
	"Services": {
		es: "Servicios",
		en: "Services"
	},
	"Cinemas": {
		es: "Cines",
		en: "Cinemas"
	},
	"Bowling alley": {
		es: "Bolera",
		en: "Bowling alley"
	},
	"Shop/Restaurants": {
		es: "Tienas/Restaurantes",
		en: "Shop/Restaurants"
	},
	"Follow us": {
		es: "Síguenos",
		en: "Follow us"
	},
	"Legal Terms": {
		es: "Términos Legales",
		en: "Legal Terms"
	},
	"Privasy Policy": {
		es: "Política de Privacidad",
		en: "Privasy Policy"
	},
	"Purchase Conditions": {
		es: "Condiciones de compra",
		en: "Purchase Conditions"
	},
	"copyrigth": {
		es: "© Sonae Sierra 2019 Todos los derechos reservados",
		en: "© Sonae Sierra 2019 All rights reserved"
	},
	"Mall": {
		es: "Centro Comercial",
		en: "Mall"
	},
	"Leisure Zone": {
		es: "Zona Ocio",
		en: "Leisure Zone"
	},
	"Ticket office": {
		es: "Taquillas",
		en: "Ticket office"
	},
	"horario1": {
		es: "Lun - Sab desde 10:00 hasta 22:00",
		en: "Monday - Sat from 10:00 to 22:00"
	},
	"horario1": {
		es: "Lun - Sab desde 10:00 hasta 22:00",
		en: "Monday - Saturday from 10:00 to 22:00"
	},
	"horario2": {
		es: "Lun - Jue desde 12:00 hasta 01:30",
		en: "Monday - Thursday from 12:00 to 01:30"
	},
	"horario3": {
		es: "Lun - Dom desde 15:30 hasta 23:00",
		en: "Monday - Sunday from 15:30 to 23:00"
	},
	"horario4": {
		es: "Dom Cerrado",
		en: "Sunday Close"
	},
	"horario5": {
		es: "Vie - Sab desde 12:00 hasta 03:30",
		en: "Friday - Saturday from 12:00 to 03:30"
	},
	"horario7": {
		es: "Dom desde 12:00 hasta 01:30",
		en: "Sunday from 12:00 to 01:30"
	},
	"Publish": {
		es: "Publicado el: ",
		en: "Publish: "
	},
	"Read More": {
		es: "Leer Más",
		en: "Read More"
	},
	"MaxOffers": {
		es: "Las mejores ofertas de MaxCenter",
		en: "The best promotions of MaxCenter"
	},
	"MaxOffers-btn": {
		es: "Más Promociones",
		en: "More Promotions"
	},
	"Suscribe": {
		es: "Suscríbete para no perderte nada",
		en: "Suscribe to not miss anything"
	},
	"Suscribe-btn": {
		es: "Suscribirse",
		en: "Suscribe"
	},
	"Feature Shops": {
		es: "Tiendas Destacadas",
		en: "Feature Shops"
	},
	"Languages": {
			es: "Idiomas",
			en: "Languages"
		},
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
		add.value = "Añadir un producto";
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
