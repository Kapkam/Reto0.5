var dict = {
	"Home": {
		es: "Inicio",
		en: "Inicio"
	},
	"Store": {
		es: "Tiendas",
		en: "Inicio"
	},
	"Contact": {
		es: "Contacto",
		en: "Inicio"
	},
	"Location":{
		es: "Ubicacíon",
		en: "Inicio"
	},
	"Filter by:":{
		es: "Filtrar por:",
		en: "Inicio"
	},
	"T-SHIRT":{
		es:"CAMISETAS",
		en: "Inicio"
	},
	"JEANS":{
		es:"PANTALONES",
		en: "Inicio"
	},
	"JACKET":{
		es:"CHAQUETAS",
		en: "Inicio"
	},
	"HAT":{
		es:"SOMBREROS",
		en: "Inicio"
	}
};

function ingles(){
	$('body').translate({lang: "en", t: dict}); //use English
}
function castellano(){
	$('body').translate({lang: "es", t: dict}); //use spanish
}
