<?php include 'include/db_connection.php';


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
    <section id="work-process" class="work-process">
        <div class="container customstyle">
            <div class="section-title wow zoomIn" data-aos="fade-up">
                <h2 class="text-center">Union Minister, MoES</h2>
                <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
            </div>

            <div class="row content">
                <!-- <div class="col-md-5 wow fadeInLeft" data-aos="fade-right">
                    <img src="img/work-process-1.png" class="img-fluid" alt="">
                </div> -->
                <div class="col-lg-4" style="background-color:#041e42;">
                    <div class="row" style="padding:40px">
                        <img src="img/leaders/leader1.jpg" alt="Union Minister, MoES" style="background-repeat: no-repeat;
                          background-size: auto;object-fit: scale-down;width:280px;height:300px;">
                    </div>
                    <div class="row" style="padding:10px;">
                        <h3 class="text-center" style="color:#fff;">Dr. Jitendra Singh</h3>
                        <span>Hon'ble Union Minister for Earth Sciences</span>
                    </div>
                </div>
                <div class="col-lg-8  wow fadeInRight" data-aos="fade-left">
                    <!-- <div class="container"> -->
                    <!-- <h3>Vision</h3> -->

                    <?php
                    $draftEn =
                        "select * FROM niot_whoswho_en where designation = 'niot_minister' and status='A' limit 1";
                    $resultDraftEn = pg_query($db, $draftEn);

                    $row = pg_fetch_array($resultDraftEn);
                    echo $row['contents']; ?>
                    <!-- </div> -->
                </div>
            </div>

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