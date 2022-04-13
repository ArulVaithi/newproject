<?php include 'include/db_connection.php';

$masid = $_REQUEST['link'];

// print_r($_REQUEST['link']);
$decodevalue = base64_decode($masid);

$draftEn = "SELECT * FROM mst_employeescorner_en WHERE  status='L' ORDER BY uploaded_on desc";


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
                    <p><a href="index.php"><i class="fa fa-home "> </i> /</a> Employees Corner </p>
                </div>
            </div>
        </div>
    </div>


    <!-- ======= Work Process Section ======= -->
    <section id="work-process" class="work-process">
        <div class="container customstyle">
            <div class="section-title wow zoomIn" data-aos="fade-up">
                <h2 class="text-center contenttitle">Employees Corner</h2>
            </div>

            <div class="row ">
                <!-- <div class="col-md-5 wow fadeInLeft" data-aos="fade-right">
                    <img src="img/work-process-1.png" class="img-fluid" alt="">
                </div> -->
                <div class="col-md-12 pt-4 wow fadeInRight" data-aos="fade-left">
                    <!-- <h3>Vision</h3> -->

                    <ul><?php
                        $resultDraftEn = pg_query($db, $draftEn);

                        while (
                            $row = pg_fetch_array(
                                $resultDraftEn

                            )

                        ) {
                            if ($row['filename'] != '') {
                                $path = "../niotadmin/uploads/employeescorner/" . $row['filename'] . "";
                            }
                            if ($row['link'] != '') {
                                $path = $row['link'];
                            }
                        ?>
                            <li>
                                <a href='<?php echo $path ?>' target="_blank"  style="color: blue;" title="View Here"><?php echo $row['title']; ?> </a>

                            </li>
                        <?php } ?>
                    </ul>

                   <!-- <?php  $fileSize = filesize($path);
                    $fileSize = round($fileSize / 1024);  ?><?php
                                                                if ($row['filename'] == '') {
                                                                    echo $row['title'];
                                                                ?><li>
                        <a href='<?php echo $row['link']; ?>' target="_blank" style="color:blue;" title="View Here"><?php echo $row['title']; ?> </a>

                    </li><?php }
                                                                if ($row['link'] == '') echo $row['title'];
                            ?><li>
                    <a href='../niotadmin/uploads/employesscorner/<?php echo $row['filename'] ?>' target="_blank" style="color:blue;" title="View Here"> <?php echo $row['title']; ?></a>
                </li> -->


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