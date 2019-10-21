function ctrlEsp(){
    //Creamos item del idioma
    sessionStorage.setItem('translate','es')
    //Llamamos a la funcion de traduccion
    castellano()
    //Devuelve el idioma seleccionado
    return sessionStorage.getItem('translate')
}
function ctrlIng(){
    sessionStorage.setItem('translate','en')
    ingles()
    return sessionStorage.getItem('translate')
}

$(document).ready(function(){
    //Comprueba que idioma esta almacenado y lo selecciona
    if(sessionStorage.getItem('translate')=='es'){
        castellano()
    }else{
        ingles()
    }
})