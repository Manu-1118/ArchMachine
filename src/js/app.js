//funcion para ejecutar las demas funciones cuando se cargue el DOM
document.addEventListener('DOMContentLoaded', function () {
    //Funciones
    desplegarSubMenu();
    swiper();   
})

//CODE
function desplegarSubMenu() {
    const contenedor_menu = document.querySelector('.sub-opciones');
    const sub_menu = document.getElementById('sub-menu');

    contenedor_menu.addEventListener('click', function () {
        sub_menu.classList.toggle('activo');
    });
}

function navegacionFija() {

    const header = document.querySelector('.header');

    window.addEventListener('scroll', function () {

        var scroll = window.screenY;

        if (scroll > 10) {

            header.style.backgroundColor = '#071c2b44';

        } else {

            header.style.backgroundColor = 'transparent';
        }
    })
}

function scrollNav() {
    const navLinks = document.querySelectorAll('.opciones-navegacion');
    navLinks.forEach(link => {
        link.addEventListener('click', e => {

            e.preventDefault();
            const seccion_scroll = e.target.getAttribute('href');
            const seccion = document.querySelector(seccion_scroll);

            seccion.scrollIntoView({ behavior: 'smooth' });
        })
    })
}