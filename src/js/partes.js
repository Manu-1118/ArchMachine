function swiper() {

    new Swiper('.carta-elementos', {

        loop: true,
        spaceBetween: 0,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            dynamicBullets: true,
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        breakpoints: {
            0: {
                slidesPerView: 1
            },
            780: {
                slidesPerView: 2
            },
            1024: {
                slidesPerView: 3
            },
        }
    });

}