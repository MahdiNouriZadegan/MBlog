const companySwiper = new Swiper('.companySwiper', {
    loop: true,
    speed: 900,
    autoplay: {
        delay: 5500,
        disableOnInteraction: false,
    },
    effect: 'fade',
    fadeEffect: { crossFade: true },
    navigation: {
        nextEl: '.company-swiper-next',
        prevEl: '.company-swiper-prev',
    },
    pagination: {
        el: '.company-swiper-pagination',
        clickable: true,
    },
    grabCursor: true,
    keyboard: { enabled: true, onlyInViewport: true },
});
