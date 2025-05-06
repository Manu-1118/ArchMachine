//funcion para ejecutar las demas funciones cuando se cargue el DOM
document.addEventListener('DOMContentLoaded', function () {
    //Funciones
    desplegarSubMenu();
    //navegacionFija();
    mostrarLogo();
    // scrollNav();
})

//CODE
function desplegarSubMenu() {
    const contenedor_menu = document.querySelector('.sub-opciones a');
    const sub_menu = document.getElementById('sub-menu');

    contenedor_menu.addEventListener('click', function () {
        sub_menu.classList.toggle('activo');
    });
}

function navegacionFija() {
    const header = document.querySelector('.header');
    const nosotros = document.querySelector('.sobre-nosotros');

    window.addEventListener('scroll', () => {
        if (nosotros.getBoundingClientRect().botton < 1) {
            header.classList.add('fixed');

        } else {
            header.classList.remove('fixed');
        }
    });
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