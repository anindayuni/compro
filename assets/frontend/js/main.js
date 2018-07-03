$(document).ready(function () {
    "use strict";

    /* === Footer Instagram === */
    (function () {
        $('#footer-instagram').owlCarousel({
            navigation: false,
            dots: false,
            autoplay: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 6
                }
            }
        });
    }());
    /* === menu drop-down === */

    (function () {
        if (screen.width > 768) {
            var $dropdown = $(".nav .dropdown");
            $dropdown.mousemove(function () {
                $(this).addClass("open");
            });
            $dropdown.mouseleave(function () {
                $dropdown.removeClass("open");
            });
        }
    }());

}());