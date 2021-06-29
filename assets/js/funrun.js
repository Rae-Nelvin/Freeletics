var swiper = new Swiper(".mySwiperr", {
    slidesPerView: 3,
    spaceBetween: 30,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        400: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        1500: {
            slidesPerView: 3,
            spaceBetween: 60,
        },
    },
});