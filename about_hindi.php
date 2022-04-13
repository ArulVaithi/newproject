<?php include 'include/db_connection.php';


// echo $row['vision'];
// exit;
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>National Institute of Ocean Technology</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php include 'include/sourcelink-css.php'; ?>
</head>

<body>

  <?php include 'include/header_hindi.php'; ?>
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
        <h2 class="text-center" style="background-color:#0D3D56;color:#fff;text-transform: uppercase;">About Us</h2>
        <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
      </div>

      <div class="row aboutcontent">

        <!-- <div class="col-lg-1"></div> -->
        <div class="col-lg-5 wow fadeInLeft" data-aos="fade-right">
<br/>
          <div classs="row" >
          <img src="img/bg/bg_6.jpg" class="aboutimg-fluid"  alt="vision" style="height:250px;width:450px;">
          </div>
        </div>
         
        <?php $draftEn = "SELECT vision FROM niot_about_hi limit 1";
        $resultDraftEn = pg_query($db, $draftEn);

        // echo $draftEn;

        $row = pg_fetch_array($resultDraftEn); ?>
        <div class="col-md-7 pt-4 wow fadeInRight" data-aos="fade-left">
		 <h3>रासप्रौसं के बारे में</h3>
          <div class="row"> <?php echo $row['vision']; ?>
          </div>
        </div>
        <!-- <div class="col-lg-1"></div> -->
      </div>

      <div class="row aboutcontent">
        <div class="col-lg-12">
        <br/>
        </div>
        <div class="row">

          <div class="col-md-4 order-1 order-md-2 wow fadeInLeft" data-aos="fade-left">
            <img src="img/bg/bg_7.jpg" class="aboutimg-fluid" alt="mission" style="height:250px">
          </div>

          <div class="col-md-8 order-2 order-md-1 wow fadeInRight" data-aos="fade-right">
		    <h3>मिशन कथन</h3>
            <?php $draftEn = "SELECT missionstatement FROM niot_about_hi limit 1";
            $resultDraftEn = pg_query($db, $draftEn);

            // echo $draftEn;

            $row = pg_fetch_array($resultDraftEn);
            echo $row['missionstatement']; ?>
          </div>

        </div>
      </div>
     <!-- <div class="row aboutcontent">
        <div class="col-md-5 wow  fadeInLeft" data-aos="fade-right">
          <br/>
          <img src="img/bg/bg_6.jpg" class="aboutimg-fluid" alt="keyobjectives">
        </div>
        <div class="col-md-7 pt-5 wow fadeInRight " data-aos="fade-left">
<h3>Key Objectives</h3>-->
         
      <!--  </div>
      </div>
-->
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


  <?php include 'include/bottomfooter.php'; ?>

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