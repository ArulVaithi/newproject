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

  <?php include 'include/header.php'; ?>
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
          <p><a href="index.php"><i class="fa fa-home "> </i> /</a> Who's Who / Union Minister, MoES</p>
        </div>
      </div>
    </div>
  </div>

  <!-- ======= Work Process Section ======= -->
  <!-- ======= Work Process Section ======= -->
  <section id="work-process" class="work-process">
    <div class="container customstyle">
      <div class="section-title wow zoomIn" data-aos="fade-up">
        <h2 class="text-center contenttitle">Union Minister, MoES</h2>
        <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
      </div>
      <br>
      <div class="row content">
        <!-- <div class="col-md-5 wow fadeInLeft" data-aos="fade-right">
                    <img src="img/work-process-1.png" class="img-fluid" alt="">
                </div> -->

        <div class="col-lg-4 wow fadeInLeft">
          <div class="row" style="background-color:#041e42;border-radius: 20px;">
            <div class="row whoswhostyle">
              <img src="img/leaders/minister_new.jpg" alt="Union Minister, MoES" class="whoswhoimg">
            </div>
            <div class="row whostitle">
              <h3>Dr. Jitendra Singh</h3>
              <div class="col-lg-12">
                <div class="row designation">
                  <div class="col-lg-2"></div>
                  <div class="col-lg-8">Union Minister</div>
                  <div class="col-lg-2"></div>
                </div>
                <div class="row text-center category">
                  <div class="col-lg-2"></div>
                  <div class="col-lg-8">Ministry of Earth Sciences</div>
                  <div class="col-lg-2"></div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8  wow fadeInRight" data-aos="fade-left">
          <!-- <div class="container"> -->
          <!-- <h3>Vision</h3> -->
          <?php
          $draftEn = "select * FROM mst_whoswho_$currentLang where designation = 'niot_minister' and status='A' and contents <> '' limit 1";
          // echo  $draftEn;
          $resultDraftEn = pg_query($db, $draftEn);
          $row = pg_fetch_array($resultDraftEn);  ?> <div class="minister" style="padding-left:10px;color:#111"> <?php echo $row['contents']; ?>
          </div>
          <!-- </div> -->
        </div>
      </div>

    </div>
  </section><!-- End Work Process Section -->

  <?php include 'include/bottomfooter.php'; ?>

  <?php include 'include/sourcelink-js.php'; ?>
  <!-- 
  <script>
    $(document).ready(function() {

    });

    $('#tbl-en-draft').DataTable();
    // $('#tbl-en-draft').DataTable({

    // });
  </script> -->
</body>

</html>