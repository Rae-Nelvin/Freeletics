var swiper = new Swiper(".mySwiperr", {
    slidesPerView: 3,
    spaceBetween: 30,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        300: {
            slidesPerView: 1,
            spaceBetween: 40,
        },
        400: {
            slidesPerView: 1,
            spaceBetween: 30,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 25,
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        1300: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
    },
});
