<!--  footer area -->
<div class="footer-area section pb-4 text-center">
    <div class="container">
        <div class="footer_area">
            <ul class="main-links">
                <li><a href="index.html">HOME</a></li>
                <li><a href="about.html">ABOUT US</a></li>
                <li><a href="books.html">Books</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="contact.html">CONTACT US</a></li>
            </ul>
            <div class="footer-links">
                <h4>Support</h4>
                <ul>
                    <li><a href="#">Order Status</a></li>
                    <li><a href="#">Return a Product</a></li>
                    <li><a href="#">Help/FAQ</a></li>
                    <li><a href="#">Report Pirvacy</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Newsletter</h4>
                <p>Signup our newsletter to get update information, promotions and insight.</p>
                <form action="#" class="newsletter">
                    <input type="text" id="newsletter" name="newsletter" placeholder="Enter your email" />
                    <button class="form-btn" type="submit">Sign Up</button>
                </form>
            </div>
        </div>

        <div class="footer-copyright-wrapper">
            <div class="footer-copyright-right">
                <ul class="footer-copyright-right__navigation">
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Cookie Policy</a></li>
                </ul>
            </div>
            <div class="footer-copyright-left">
                Copyright &copy; <script>
                    document.write(new Date().getFullYear() + ' ');
                </script> Dhammsura Production. All rights reserved.
            </div>
        </div>
    </div>
</div>
<!--  End of footer area  -->
<!--  scroll top -->
<a href="#" class="scroll-top" id="scroll-top">
    <i class="feather-icon icon-arrow-up"></i>
</a>
<!--  End of scroll top  -->
<!-- JS -->

<!-- Modernizer JS -->
<script src="assets/frontend/js/vendor/modernizr-2.8.3.min.js"></script>

<!-- jQuery JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Bootstrap JS -->
<script src="assets/frontend/js/vendor/bootstrap.min.js"></script>
<script src="assets/frontend/js/vendor/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@5.2.0/js/swiper.min.js"></script>

<!-- Swiper Slider JS
    <script src="assets/frontend/js/slick.min.js"></script>
    <script src="assets/frontend/js/slick-animation.min.js"></script> -->

<!-- Tippy JS
    <script src="assets/frontend/js/plugins/tippy.min.js"></script> -->

<!-- Light gallery JS
    <script src="assets/frontend/js/plugins/lightgallery.min.js"></script>
    <script src="assets/frontend/js/plugins/lg-video.min.js"></script> -->

<!-- Waypoints JS
    <script src="assets/frontend/js/plugins/waypoints.min.js"></script> -->

<!-- Counter up JS
    <script src="assets/frontend/js/plugins/counterup.min.js"></script> -->

<!-- Appear JS
    <script src="assets/frontend/js/plugins/appear.min.js"></script> -->

<!-- Gmap3 JS
    <script src="assets/frontend/js/plugins/gmap3.min.js"></script> -->
<script src="assets/frontend/lib/wow/wow.min.js"></script>
<script src="assets/frontend/lib/easing/easing.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/easyzoom@2.5.2/dist/easyzoom.js"></script>
<script src="assets/frontend/js/fancyapp.js"></script>


<!-- Main JS -->
<script src="assets/frontend/js/main.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.widget-collapse h5').on("click", function() {
            $(this).siblings('.widget-collapse-hide').slideToggle();
            $(this).toggleClass('widget-collapse-show');
        });
    });
    // JavaScript Document
    function isDevice() {
        return ((/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(navigator.userAgent.toLowerCase())))
    }

    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 5,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        breakpoints: {
            0: {
                slidesPerView: 3,
            },
            992: {
                slidesPerView: 4,
            },
        }
    });
    var galleryTop = new Swiper('.gallery-top', {
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        thumbs: {
            swiper: galleryThumbs
        },
    });
    // change carousel item height
    // gallery-top
    let productCarouselTopWidth = $('.gallery-top').outerWidth();
    $('.gallery-top').css('height', productCarouselTopWidth);

    // gallery-thumbs
    let productCarouselThumbsItemWith = $('.gallery-thumbs .swiper-slide').outerWidth();
    $('.gallery-thumbs').css('height', productCarouselThumbsItemWith);

    // activation zoom plugin
    var $easyzoom = $('.easyzoom').easyZoom();
    $(".nav-tabs a").click(function() {
        var position = $(this).parent().position();
        var width = $(this).parent().width();
        $(".slider").css({
            "left": +position.left,
            "width": width
        });
    });
    var actWidth = $(".nav-tabs").find(".active").parent("li").width();
    var actPosition = $(".nav-tabs .active").position();
    $(".slider").css({
        "left": +actPosition.left,
        "width": actWidth
    });
</script>

</body>

</html>