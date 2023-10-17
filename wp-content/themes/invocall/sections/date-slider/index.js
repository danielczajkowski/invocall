var swiper = new Swiper('.date-slider__swiper', {
    slidesPerView: 1.3,
    spaceBetween: 14,
    breakpoints: {
        990: {
            slidesPerView: 2,
            spaceBetweenSlides: 0,
            navigation: {
                nextEl: ".swiper-custom-button-next",
                prevEl: ".swiper-custom-button-prev",
            },
        },
        1460: {
            slidesPerView: 3,
            spaceBetweenSlides: 0,
            navigation: {
                nextEl: ".swiper-custom-button-next",
                prevEl: ".swiper-custom-button-prev",
            }
        }
    }
});