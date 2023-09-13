var swiper = new Swiper(".slide-container-kalender", {
    slidesPerView: 3,
    spaceBetween: 20,
    sliderPerGroup: 3,
    loop: true,
    centerSlide: "true",
    fade: "true",
    grabCursor: "true",
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
            0: {
                slidesPerView: 1,
        },
            520: {
            slidesPerView: 2,
        },
            768: {
            slidesPerView: 3,
        },
            1000: {
            slidesPerView: 4,
        },
    },
});

var swiper = new Swiper(".slide-container-berita", {
    slidesPerView: 3,
    spaceBetween: 20,
    sliderPerGroup: 3,
    loop: true,
    centerSlide: "true",
    fade: "true",
    grabCursor: "true",
    autoplay: true,

    breakpoints: {
            0: {
                slidesPerView: 1,
        },
            520: {
            slidesPerView: 2,
        },
            768: {
            slidesPerView: 3,
        },
            1000: {
            slidesPerView: 3,
        },
    },
});

var swiper = new Swiper(".slide-container-komentar", {
    slidesPerView: 3,
    spaceBetween: 20,
    sliderPerGroup: 3,
    loop: true,
    centerSlide: "true",
    fade: "true",
    grabCursor: "true",

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
            0: {
                slidesPerView: 1,
        },
            520: {
            slidesPerView: 2,
        },
            768: {
            slidesPerView: 3,
        },
            1000: {
            slidesPerView: 3,
        },
    },
});


