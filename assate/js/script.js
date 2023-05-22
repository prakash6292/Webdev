// res nav toggle
$(document).ready(function() {
    $("#menu_icons").click(function() {
        $(".nav-menu-main").addClass("show");
    });
    $("#close_icons").click(function() {
        $(".nav-menu-main").removeClass("show");
    });
});
// header sticky
$(document).ready(function() {
    var lastScroll = 0;
    jQuery(document).ready(function($) {
        $(window).scroll(function() {
            setTimeout(function() {
                var scroll = $(window).scrollTop();
                if (scroll > lastScroll) {
                    $("nav.nav-menu-main").addClass("nav-event-header");
                } else if (scroll < lastScroll) {
                    $("nav.nav-menu-main").removeClass("nav-event-header");
                }
                lastScroll = scroll;
            }, 100);
        });
    });
});
$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 10) {
        $("nav.nav-menu-main").addClass("nav-event-bg");
    } else {
        $("nav.nav-menu-main").removeClass("nav-event-bg");
    }
});


var swiper = new Swiper(".mySwiper", {
    slidesPerView: 2,
    spaceBetween: 20,
    centeredSlides: false,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween: 10,
      },
      992: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  var swiper = new Swiper(".mySwiper2", {
    slidesPerView: 1,
    spaceBetween: 20,
    centeredSlides: false,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  var swiper = new Swiper(".mySwiper3", {
    slidesPerView: 7,
    spaceBetween: 20,
    centeredSlides: false,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 10,
      },
      1024: {
        slidesPerView: 5,
        spaceBetween: 10,
      },
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  var swiper = new Swiper(".mySwiper4", {
    slidesPerView: 1,
    spaceBetween: 20,
    centeredSlides: false,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });