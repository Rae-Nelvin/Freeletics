var swiper = new Swiper(".mySwiperrr", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        300: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        500: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        // 1024: {
        //     slidesPerView: 5,
        //     spaceBetween: 50,
        // },
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});