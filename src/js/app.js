//funcion para ejecutar las demas funciones cuando se cargue el DOM
document.addEventListener('DOMContentLoaded', function () {

    //Funciones
    paginaActual(window.location.pathname);
    swiper();
})

function paginaActual(ruta) {

    const index = ruta.substring(ruta.lastIndexOf('/') + 1);
    if (index === '' || ruta.includes('index.php')) {

        navegacionFija();
        scrollNav();
        resaltarEnlace();
    }
}