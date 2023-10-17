var swiper = new Swiper('.our-team-swiper', {
    slidesPerView: 1,
    spaceBetween: 0,
    navigation: {
        nextEl: ".swiper-custom-button-next",
        prevEl: ".swiper-custom-button-prev",
    },
    breakpoints: {
        990: {
            slidesPerView: 2,
            initialSlide: document.querySelectorAll('.our-team-swiper-slide').length,
            spaceBetween: 0,
            centeredSlides: true,
            navigation: {
                nextEl: ".swiper-custom-button-prev",
                prevEl: ".swiper-custom-button-next",
            },
        },
        1440: {
            slidesPerView: 4.6,
            initialSlide: document.querySelectorAll('.our-team-swiper-slide').length,
            spaceBetween: 0,
            freeMode: true,
            centeredSlides: true,
            navigation: {
                nextEl: ".swiper-custom-button-prev",
                prevEl: ".swiper-custom-button-next",
            }
        }
    }
});