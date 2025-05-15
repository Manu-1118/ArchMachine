//funcion para ejecutar las demas funciones cuando se cargue el DOM
document.addEventListener('DOMContentLoaded', function () {

    //Funciones
    navegacionFija();
    scrollNav();
    resaltarEnlace()
    swiper();
})

function paginaActual() {
    const currentURL = window.location.href;

    console.log(currentURL);
}