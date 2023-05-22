    <!-- nav-menu-main -->
    <?php 
    require_once "include/header.php";
  ?>
    <div class="h_100"></div>
    <section class="latest-blogs-section">
        <div class="container">
            <h2 class="comman-header py-3 text-center"><span class="color-yellow">Hire </span>Developers</h2>
            <p class="mb-4 text-center">
                Share your stories and news with everyone.
            </p>
            <div class="row pt-4 g-4">
                <div class="col-lg-4">
                    <div class="ratio ratio-16x9">
                        <img src="assate/images/list1.png" alt="" />
                    </div>
                    <div class="bg-body-secondary px-4">
                        <div class="f-13 pt-3">Guest Post</div>
                        <div class="f-18 py-3 fw-bold">
                            15 Brilliant Mobile App Videos That Will Inspire You
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ratio ratio-16x9">
                        <img src="assate/images/list2.png" alt="" />
                    </div>
                    <div class="bg-body-secondary px-4">
                        <div class="f-13 pt-3">Video Collection</div>
                        <div class="f-18 py-3 fw-bold">
                            The Impact Of Product Development Life Cycle On Your Business
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ratio ratio-16x9">
                        <img src="assate/images/list3.png" alt="" />
                    </div>
                    <div class="bg-body-secondary px-4">
                        <div class="f-13 pt-3">Marketing</div>
                        <div class="f-18 py-3 fw-bold">
                            The Ultimate Guide to Successful Facebook Video Ads
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ratio ratio-16x9">
                        <img src="assate/images/list4.png" alt="" />
                    </div>
                    <div class="bg-body-secondary px-4">
                        <div class="f-13 pt-3">Marketing</div>
                        <div class="f-18 py-3 fw-bold">
                            Nailing Video SEO like a Pro – 11 Steps for the Top Spot
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ratio ratio-16x9">
                        <img src="assate/images/list5.png" alt="" />
                    </div>
                    <div class="bg-body-secondary px-4">
                        <div class="f-13 pt-3">Production</div>
                        <div class="f-18 py-3 fw-bold">
                            Corporate Video Production: How To Unlock Their Full Potential
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ratio ratio-16x9">
                        <img src="assate/images/list6.png" alt="" />
                    </div>
                    <div class="bg-body-secondary px-4">
                        <div class="f-13 pt-3">Video Collection</div>
                        <div class="f-18 py-3 fw-bold">
                            Everything You Need To Know About Motion Graphics
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ratio ratio-16x9">
                        <img src="assate/images/list7.png" alt="" />
                    </div>
                    <div class="bg-body-secondary px-4">
                        <div class="f-13 pt-3">Production</div>
                        <div class="f-18 py-3 fw-bold">
                            How To Create Powerful Video Testimonials To Boost Your Business
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ratio ratio-16x9">
                        <img src="assate/images/list8.png" alt="" />
                    </div>
                    <div class="bg-body-secondary px-4">
                        <div class="f-13 pt-3">Marketing</div>
                        <div class="f-18 py-3 fw-bold">
                            Social Media Video Marketing - The Ultimate Guide
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ratio ratio-16x9">
                        <img src="assate/images/list9.png" alt="" />
                    </div>
                    <div class="bg-body-secondary px-4">
                        <div class="f-13 pt-3">Marketing</div>
                        <div class="f-18 py-3 fw-bold">
                            16 Free Video Marketing Tactics Your Startup Is Missing Out On!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="h_100"></div>
    <?php 
      require_once "include/footer.php";
      require_once "include/footer_script.php";
    ?>
    <script>
    $(document).ready(function() {
        $("#menu_icons").click(function() {
            $(".nav-menu-main").addClass("show");
        });
        $("#close_icons").click(function() {
            $(".nav-menu-main").removeClass("show");
        });
    });
    </script>
    <script>
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
    </script>
    <!-- Initialize Swiper -->
    <script>
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
    </script>
</body>

</html>