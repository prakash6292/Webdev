
  <!-- nav-menu-main -->
  <?php 
    require_once "include/header.php";
  ?>
  <div class="h_100"></div>
  <!-- contact -->
  <section class="contact">
    <div class="container">
      <div class="py-4 mb-4">
        <h2 class="comman-header text-center"><span class="color-yellow">Contact</span> us</h2>
      </div>
      <div class="row">
        
    </div>
  </section>
  <div class="h_100"></div>
  <section class="latest-blogs-section">
    <div class="container">
      <h2 class="comman-header py-3 text-center"><span class="color-yellow">Latest</span> Blogs</h2>
      <p class="mb-4 text-center">
        Explore the Latest Blogs on Trends and Technology.
      </p>
      <div class="row pt-4">
        <div class="col-lg-4">
          <div class="ratio ratio-16x9">
            <img
              src="https://media.istockphoto.com/id/1069791036/photo/young-woman-texting-on-a-cellphone-in-a-public-bus-in-bangkok-thailand.jpg?s=612x612&w=is&k=20&c=KngzyvMGFy_QICK43dTmOxhI8-T-Cz55qoTOT5JjIyA="
              alt="" />
          </div>
          <div class="f-18 py-3">
            The Impact Of Product Development Life Cycle On Your Business
          </div>
        </div>
        <div class="col-lg-4">
          <div class="ratio ratio-16x9">
            <img
              src="https://media.istockphoto.com/id/1145395627/photo/profile-view-of-happy-female-programmer-working-on-desktop-pc-at-corporate-office.jpg?s=612x612&w=is&k=20&c=kyi590thISlruLYyDLr35wivK7vJyAHHRq70ED8e9J4="
              alt="" />
          </div>
          <div class="f-18 py-3">
            Benefits Of Custom Software Development In 2023
          </div>
        </div>
        <div class="col-lg-4">
          <div class="ratio ratio-16x9">
            <img
              src="https://media.istockphoto.com/id/496701576/photo/teenage-girl-texting-on-phone-in-the-subway-train.jpg?s=612x612&w=is&k=20&c=4CEsKbhVMtSKLMBg8GoU8MDKtu-3uZRCYU8r9Rhketg="
              alt="" />
          </div>
          <div class="f-18 py-3">
            Development Of A 3D Virtual Space In The Metaverse
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
    $(document).ready(function () {
      var url = window.location.href;
      var service_url = 'http://localhost/WebDev/Services.php';
      console.log(url)
      if(url==service_url){
        $('.nav-items a').addClass('color-white');        
      }
      var lastScroll = 0;

      jQuery(document).ready(function ($) {
        $(window).scroll(function () {
          setTimeout(function () {
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
    $(window).scroll(function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 10) {
        $("nav.nav-menu-main").addClass("nav-event-bg");
      } else {
        $("nav.nav-menu-main").removeClass("nav-event-bg");
      }
    });

  </script>
</body>

</html>