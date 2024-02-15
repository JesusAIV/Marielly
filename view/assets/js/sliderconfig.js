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