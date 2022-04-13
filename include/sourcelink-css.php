  <!-- <link rel="manifest" href="site.webmanifest"> -->
  <link rel="shortcut icon" type="image/x-icon" href="img/niotFavicon.png">
  <!-- Place favicon.ico in the root directory -->

  <!-- CSS here -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <!-- <link rel="stylesheet" href="css/nice-select.css"> -->
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/glightbox.min.css">
  <link rel="stylesheet" href="css/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/glightbox/css/glightbox.css">
  <link rel="stylesheet" href="css/gijgo.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/slicknav.css">
  <!-- <link rel="stylesheet" href="css/aos.css"> -->
  <link rel="stylesheet" href="css/datatable/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="css/datatable/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- Select 2 css -->
  <link rel="stylesheet" href="css/select2/dist/css/select2.min.css" />
  <link rel="stylesheet" type="text/css" href="css/select2/css/s2-docs.css">


  <!-- <link rel="stylesheet" href="css/responsive.css"> -->
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>


  <?php
  session_start();
  if (isset($_SESSION['lang'])) {
    include "header_" . $_SESSION['lang'] . ".php";
  } else {
    include "header_en.php";
    $_SESSION['lang'] = 'en';
    $currentLang = 'en';
  }


  ?>