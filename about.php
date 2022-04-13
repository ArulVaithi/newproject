<?php include 'include/db_connection.php';
//  echo  $_SERVER["PHP_SELF"];
// echo $row['vision'];
// exit;

if ($currentLang == 'ta') {
  $pagetitle = "தேசியப் பெருங்கடல் தொழில்நுட்பக் கழகம்";
  $aboutus = "தே.க.தொ. கழகம் பற்றி";
  $vision = "தொலைநோக்கு";
  $mission = "நோக்கம்";
  $keyobject = "முக்கிய நோக்கங்கள்";
} else if ($currentLang == 'hi') {
  $pagetitle = "राष्ट्रीय समुद्र प्रौद्योगिकी संस्थान";
  $aboutus = "रासप्रौसं के बारे में";
  $vision = "दृष्टि";
  $mission = "मिशन कथन";
  $keyobject = "Key Objectives";
} else {
  $pagetitle = "National Institute of Ocean Technology";
  $aboutus = "About NIOT";
  $vision = "VISION";
  $mission = "MISSION STATEMENT";
  $keyobject = "KEY OBJECTIVES";
}
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php echo $pagetitle; ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php include 'include/sourcelink-css.php'; ?>
</head>

<body>

  <div class="bradcam_area_img breadcam_bg">
    <!-- <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3></h3>
                        <h2 class="text-center" style="color:#041E42"><strong>News / Announcements</strong></h2>
                    </div>
                </div>
            </div>
        </div> -->
  </div>
  <!-- bradcam_area_end  -->

  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="bradcam_text">
          <h3></h3>
          <p><a href="index.php"><i class="fa fa-home "> </i> /</a> About Us / About NIOT</p>
        </div>
      </div>
    </div>
  </div>

  <!-- ======= Work Process Section ======= -->
  <section id="work-process" class="work-process">
    <div class="container customstyle">

      <div class="section-title wow zoomIn" data-aos="fade-up">
        <h2 class="text-center contenttitle"><?php echo $aboutus; ?></h2>
        <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
      </div>

      <div class="row aboutcontent">

        <!-- <div class="col-lg-1"></div> -->
        <div class="col-lg-5 wow fadeInLeft" data-aos="fade-right">
          <br />
          <div classs="row">
            <img src="img/bg/bg_6.jpg" class="aboutimg-fluid" alt="vision" style="height:250px;width:450px;">
          </div>
        </div>

        <?php $visionquery = "SELECT vision FROM mst_about_$currentLang  where vision<>'' limit 1";
        $resultvision = pg_query($db, $visionquery);

        // echo $draftEn;

        $row1 = pg_fetch_array($resultvision); ?>
        <div class="col-md-7 pt-4 wow fadeInRight" data-aos="fade-left">
          <h3><?php echo $vision; ?></h3>
          <div class="row"> <?php echo $row1['vision']; ?>
          </div>
        </div>
        <!-- <div class="col-lg-1"></div> -->
      </div>

      <div class="row aboutcontent">
        <div class="col-lg-12">
          <br />
        </div>
        <div class="row">

          <div class="col-md-4 order-1 order-md-2 wow fadeInLeft" data-aos="fade-left">
            <img src="img/bg/bg_7.jpg" class="aboutimg-fluid" alt="mission" style="height:250px">
          </div>

          <div class="col-md-8 order-2 order-md-1 wow fadeInRight" data-aos="fade-right">
            <h3><?php echo $mission; ?></h3>
            <?php $missionstatement = "SELECT missionstatement FROM mst_about_$currentLang where missionstatement<>'' limit 1";
            $resultmission = pg_query($db, $missionstatement);

            $row2 = pg_fetch_array($resultmission);
            echo $row2['missionstatement']; ?>
          </div>

        </div>
      </div>
      <div class="row aboutcontent">
        <div class="col-md-5 wow  fadeInLeft" data-aos="fade-right">
          <br />
          <img src="img/bg/bg_6.jpg" class="aboutimg-fluid" style="height:500px;width:450px" alt="keyobjectives">
        </div>
        <div class="col-md-7 pt-5 wow fadeInRight " data-aos="fade-left">
          <h3><?php echo $keyobject; ?></h3>
          <?php $keyobjectives = "SELECT keyobjectives FROM mst_about_$currentLang where keyobjectives<>'' limit 1";
          $resultkeyobjectives = pg_query($db, $keyobjectives);

          // echo $draftEn;

          $row3 = pg_fetch_array($resultkeyobjectives);
          echo $row3['keyobjectives']; ?>
        </div>
      </div>

      <!-- <div class="row content">
          <div class="col-md-5 order-1 order-md-2 wow fadeInLeft" data-aos="fade-left">
            <img src="img/work-process-4.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1 wow fadeInRight" data-aos="fade-right">
            <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div> -->

    </div>
  </section><!-- End Work Process Section -->

  <?php include 'include/sourcelink-js.php'; ?>

  <script>
    $(document).ready(function() {

    });

    $('#tbl-en-draft').DataTable();
    // $('#tbl-en-draft').DataTable({

    // });
  </script>
</body>

</html>