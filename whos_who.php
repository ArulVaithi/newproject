<?php include 'include/db_connection.php';

$designation = $_REQUEST['link'];

$decodevalue = base64_decode($designation);
// echo base64_decode($designation);
$draftEn =
    "select * FROM niot_whos_who where designation = '$decodevalue' and status='A' limit 1";
$resultDraftEn = pg_query($db, $draftEn);

$row = pg_fetch_array($resultDraftEn);

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
                    <p><a href="index.php"><i class="fa fa-home "> </i> /</a> Who's Who</p>
                </div>
            </div>
        </div>
    </div>

    <!-- ======= Work Process Section ======= -->
    <section id="work-process" class="work-process">
        <div class="container">
            <div class="section-title wow zoomIn" data-aos="fade-up">
                <h2 class="text-center"><?Php if ($decodevalue == 'niot_minister') {
                                        ?> Niot Minister <?php
                                                        } else if ($decodevalue == 'niot_secretary') { ?> Niot Secretary <?php } else { ?> Niot Director <?php } ?> </h2>
                <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
            </div>

            <div class="row content">
                <!-- <div class="col-md-5 wow fadeInLeft" data-aos="fade-right">
                    <img src="img/work-process-1.png" class="img-fluid" alt="">
                </div> -->
                <div class="col-md-12 pt-4 wow fadeInRight" data-aos="fade-left">
                    <!-- <h3>Vision</h3> -->
                    <?php echo $row['contents']; ?>
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