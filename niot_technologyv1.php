<?php include 'include/db_connection.php';

$masid = $_REQUEST['link'];

// print_r($_REQUEST['link']);
$decodevalue = base64_decode($masid);

$techValue = "select a1.contents as contents, b1.title as technology from niot_technology_en  as a1 	 
inner join mst_technology_en as b1  on a1.mas_id = b1.tech_id
where b1.status ='A' and a1.status = 'A' and a1.mas_id =$decodevalue limit 1";

$resulttechValue = pg_query($db, $techValue);

$techcount = pg_num_rows($resulttechValue);

//      $techcontent = $row['contents'];
//      $techname = $row['technology'];

//  }
$techrow = pg_fetch_array($resulttechValue);

$techcontents = $techrow['contents'];
// echo $techcontents;
// exit;
// print_r($techcontent);
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
                    <p><a href="index.php"><i class="fa fa-home "> </i> /</a> Technology / <?php echo $techrow['technology'] ?></p>
                </div>
            </div>
        </div>
    </div>


    <!-- ======= Work Process Section ======= -->
    <section id="work-process" class="work-process">
        <div class="container bordercolor">
            <div class="section-title wow zoomIn" data-aos="fade-up" style="padding: 10px;">
                <h2 class="text-center"><?php echo $techrow['technology'];
                                        //    echo $techcontents; 
                                        ?></h2>
            </div>
            <div class="row ">
                <!-- <div class="col-md-5 wow fadeInLeft" data-aos="fade-right">
                    <img src="img/work-process-1.png" class="img-fluid" alt="">
                </div> -->
                <div class="col-md-12 pt-4 wow fadeInRight" data-aos="fade-left">
                    <!-- <h3>Vision</h3> -->
                    <div> <?php echo $techcontents; ?></div>
                </div>
            </div>

        </div>
    </section><!-- End Work Process Section -->

    <?php include 'include/bottomfooter.php'; ?>

    <?php include 'include/sourcelink-js.php'; ?>

    <script>
        $(document).ready(function() {

        });

        function gettechnology() {

        }

        $('#tbl-en-draft').DataTable();
        // $('#tbl-en-draft').DataTable({

        // });
    </script>
</body>

</html>