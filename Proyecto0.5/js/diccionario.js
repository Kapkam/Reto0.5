var dict = {
			"Home": {
				en: "Home",
				es: "Inicio"
			},
			"Store": {
				en: "Store",
				es: "Tiendas"
			},
			"Contact": {
				en: "Contact",
				es: "Contacto"
			},
			"Location":{
				en: "Location",
				es: "Ubicacíon"
			},
			"Filter":{
				en: "Filter by:",
				es: "Filtrar por:"
			}
		}
		function ingles(){
				var translator = $('body').translate({lang: "en", t: dict}); //use English
			}
		function castellano(){
				var translator = $('body').translate({lang: "es", t: dict}); //use spanish
			}