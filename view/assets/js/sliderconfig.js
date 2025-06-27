(function () {

    const slider = new Slider('.slider-main', {
        // Optional parameters
        loop: true,

        // If we need pagination
        pagination: {
            el: '.slider-pagination',
            clickable: 'true'
        },

        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },

        // Navigation arrows
        navigation: {
            nextEl: '.slider-button-next',
            prevEl: '.slider-button-prev',
        },
    });
    const sliderproductos = new Slider('.slider-productos', {
        slidesPerView: 7,
        spaceBetween: 30,
        pagination: {
            el: ".slider-pagination",
            clickable: true,
        },

        navigation: {
            nextEl: '.slider-button-next',
            prevEl: '.slider-button-prev',
        },
            breakpoints: {
        // cuando la pantalla es >= 320px
        320: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        // cuando la pantalla es >= 480px
        480: {
            slidesPerView: 3,
            spaceBetween: 15,
        },
        // cuando la pantalla es >= 768px
        768: {
            slidesPerView: 5,
            spaceBetween: 20,
        },
        // cuando la pantalla es >= 1024px
        1024: {
            slidesPerView: 6,
            spaceBetween: 25,
        },
        // cuando la pantalla es >= 1280px
        1280: {
            slidesPerView: 7,
            spaceBetween: 30,
        },
    }
});
    const sliderproductosgallery = new Slider('.slider_photo_gallery', {
        
        slidesPerView: 5,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: ".slider-pagination",
            clickable: true,
        },

        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },

        navigation: {
            nextEl: '.slider-button-next',
            prevEl: '.slider-button-prev',
        },
    });

})();