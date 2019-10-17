var dict = {
			"Home": {
				es: "Inicio"
			},
			"Store": {
				es: "Tiendas"
			},
			"Contact": {
				es: "Contacto"
			},
			"Location":{
				es: "Ubicacíon"
			},
			"Filter by:":{
				es: "Filtrar por:"
			},
			"T-SHIRT":{
				es:"CAMISETAS"
			},
			"JEANS":{
				es:"PANTALONES"
			},
			"JACKET":{
				es:"CHAQUETAS"
			},
			"HAT":{
				es:"SOMBREROS"
			}
		}
		function ingles(){
				var translator = $('body').translate({lang: "en", t: dict}); //use English
			}
		function castellano(){
				var translator = $('body').translate({lang: "es", t: dict}); //use spanish
			}