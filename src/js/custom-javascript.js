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
    var token = "3687936629.1677ed0.ef7ebc66a2c74491adad7201d4435e6e", // learn how to obtain it below
        userid = 3687936629, // User ID - get it in source HTML of your Instagram profile or look at the next example :)
        num_photos = 8; // how much photos do you want to get

    $.ajax({
        url: "https://api.instagram.com/v1/users/" + userid + "/media/recent/", // or /users/self/media/recent for Sandbox
        dataType: "jsonp",
        type: "GET",
        data: { access_token: token, count: num_photos },
        success: function(data) {
            // console.log(data);
            for (x in data.data) {
                $("#instagram-feed ul.instagram-photos").append(
                    '<li class="instagram-item"><a class="instagram-link" href="' +
                        data.data[x].link +
                        '" target="_blank"><div class="instagram-photo-container"><div class="overlay"></div><img class="img-fluid instagram-photo px-0" src="' +
                        data.data[x].images.standard_resolution.url +
                        '" alt="picture"></div><div class="instagram-view"><div class="fa fa-instagram"></div><p>View on Instagram</p></div></a></li>'
                ); // data.data[x].images.low_resolution.url - URL of image, 306Ã‘â€¦306
                // data.data[x].images.thumbnail.url - URL of image 150Ã‘â€¦150
                // data.data[x].images.standard_resolution.url - URL of image 612Ã‘â€¦612
                // data.data[x].link - Instagram post URL
            }
            $(".instagram-photos").slick({
                infinite: true,
                speed: 1000,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 5000,
                centerMode: true,
                slidesToShow: 7,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 5.5,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1.3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 320,
                        settings: {
                            slidesToShow: 1.3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 1,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        },
        error: function(data) {
            console.log(data); // send the error notifications to console
        }
    });
    equalheight = function(container) {
        var currentTallest = 0,
            currentRowStart = 0,
            rowDivs = new Array(),
            $el,
            topPosition = 0;
        $(container).each(function() {
            $el = $(this);
            $($el).height("auto");
            topPosition = $el.position().top;

            if (currentRowStart != topPosition) {
                for (
                    currentDiv = 0;
                    currentDiv < rowDivs.length;
                    currentDiv++
                ) {
                    rowDivs[currentDiv].height(currentTallest);
                }
                rowDivs.length = 0;
                currentRowStart = topPosition;
                currentTallest = $el.height();
                rowDivs.push($el);
            } else {
                rowDivs.push($el);
                currentTallest =
                    currentTallest < $el.height()
                        ? $el.height()
                        : currentTallest;
            }
            for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                rowDivs[currentDiv].height(currentTallest);
            }
        });
        $(window).load(function() {
            equalheight(".deck-item");
        });
        $(window).resize(function() {
            equalheight(".deck-item");
        });
        $(window).width(function() {
            equalheight(".deck-item");
        });
    };
});
