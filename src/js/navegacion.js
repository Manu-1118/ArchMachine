function navegacionFija() {

    const header = document.querySelector('.header');
    const imgLogo = document.querySelector('.logo');
    const informacion = document.querySelector('.sobre-nosotros');

    window.addEventListener('scroll', function () {

        const coordenadas = informacion.getBoundingClientRect().top;
        if (coordenadas < 250) {

            header.classList.add('fixed');
            imgLogo.style.display = 'none';

        } else {
            header.classList.remove('fixed');
            imgLogo.style.display = '';
        }
    })
}

function resaltarEnlace() {
    document.addEventListener('scroll', function () {

        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('.navegacion a');
        let actual = '';

        sections.forEach(seccion => {

            const seccionTop = seccion.offsetTop;
            const seccionHeight = seccion.clientHeight;

            if (window.scrollY >= (seccionTop - seccionHeight / 3)) {

                actual = seccion.id;
            }
        })

        navLinks.forEach(link => {

            link.classList.remove('active');

            if (link.getAttribute('href') === '#' + actual) {
                link.classList.add('active');
            }
        })
    })
}

function scrollNav() {

    const navLinks = document.querySelectorAll('.navegacion a');
    const enlaces = Array.from(navLinks).slice(2, 5);

    
    enlaces.forEach(link => {
        
        
        link.addEventListener('click', e => {
            

            e.preventDefault();

            const seccionScroll = e.target.getAttribute('href');
            const section = document.querySelector(seccionScroll);

            section.scrollIntoView({ behavior: 'smooth' });
        })
    });
}