<?php

if (isset($_SESSION['lang'])) {
    if ((basename($_SERVER["PHP_SELF"]) == "index.php")) {
        // include "header_" . $_SESSION['lang'] . ".php";
        include "footer_" . $_SESSION['lang'] . ".php";
        // include "bottomfooter_" . $_SESSION['lang'] . ".php";
    } else {
        // include "header_en.php";


        include "bottomfooter_" . $_SESSION['lang'] . ".php";
    }
} else {
    if ((basename($_SERVER["PHP_SELF"]) == "index.php")) {
        // include "header_" . $_SESSION['lang'] . ".php";
        include "footer_en.php";
        // include "bottomfooter_" . $_SESSION['lang'] . ".php";
    } else {
        // include "header_en.php";

        include "bottomfooter_en.php";
    }
}
?>
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/ajax-form.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/scrollIt.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/nice-select.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="css/swiper/swiper-bundle.min.js"></script>
<script src="css/glightbox/js/glightbox.min.js"></script>
<script src="css/glightbox/js/glightbox.js"></script>
<script src="css/isotope-layout/isotope.pkgd.js"></script>
<script src="css/isotope-layout/isotope.pkgd.min.js"></script>
<!-- <script src="js/aos.js"></script> -->
<script src="js/plugins.js"></script>
<script src="js/gijgo.min.js"></script>
<!--contact js-->
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/datatable/jquery.dataTables.min.js"></script>
<script src="js/datatable/dataTables.bootstrap4.min.js"></script>

<!-- Select 2 js -->
<script src="css/select2/dist/js/select2.full.min.js"></script>
<!-- <script src="js/datatable/jquery.dataTables.min.js"></script>
    <script src="js/datatable/dataTables.bootstrap.min.js"></script> -->
<!-- <script src="js/datatable/dataTables.responsive.min.js"></script>
    <script src="js/datatable/responsive.bootstrap.min.js"></script> -->
<!-- <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script> -->
<script src="js/main.js"></script>
<script>
    $('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }
    });
    $('#datepicker2').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }

    });
    // $(document).ready(function () {
    //     $('.js-example-basic-multiple').select2();


    // });

    // $(window).scroll(function() {
    //     if ($(window).scrollTop() >= 300) {
    //         $('.header-area .header-top_area').addClass('fixed-header');
    //         // $('nav div').addClass('visible-title');
    //     } else {
    //         $('.header-area .header-top_area').removeClass('fixed-header');
    //         // $('nav div').removeClass('visible-title');
    //     }
    // });
</script>