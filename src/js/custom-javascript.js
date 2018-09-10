jQuery().ready(function($) {
    var homeSwiper = new Swiper(".homepage-swiper", {
        slidesPerView: 1,
        loop: true,
        effect: "fade",
        fadeEffect: {
            crossFade: true
        },
        speed: 1500,
        autoplay: {
            delay: 4000
        }
    });
    $(function() {
        "use strict";

        $('[data-toggle="offcanvas"]').on("click", function() {
            $(".offcanvas-collapse").toggleClass("open");
        });
    });
});
