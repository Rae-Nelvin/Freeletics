var swiper = new Swiper(".mySwipper", {
    slidesPerView: 3,
    spaceBetween: 30,
    freeMode: true,
    breakpoints: {
        300: {
            slidesPerView: 1,
            spaceBetween: 70,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
        2024: {
            slidesPerView: 5,
            spaceBetween: 50,
        },
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});