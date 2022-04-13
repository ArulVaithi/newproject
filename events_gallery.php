<?php include("include/db_connection.php");

$annualreport = "select  *  from mst_annualreports_en where  status='L' order by uploaded_on desc ";

$resultannualreport = pg_query($db, $annualreport);
$annualreportcount = pg_num_rows($resultannualreport);

?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>National Institute of Ocean Technology</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include("include/sourcelink-css.php") ?>
</head>

<body>
    <?php include("include/header.php"); ?>
    <!-- bradcam_area_start  -->
    <!-- <div class="bradcam_area breadcam_bg bradcam_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3></h3>
                        <h2 class="text-center" style="color:#041E42"><strong>News / Announcements</strong></h2>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

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
                    <p><a href="index.php"><i class="fa fa-home "> </i> /</a> Galleries / Events Gallery</p>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="container">
        <div class="row">
            <div class="col-xl-12" style="padding-top:5px;">
                <div class="breadcrumb flat">
                    <a href="index.php"><i class="fa fa-home fa-lg"></i> Home</a>
                    <a href="#" class="active"> News / Announcements</a>
                </div>
            </div>
        </div>
    </div> -->


    <section class="events">
        <div class="container customstyle">
            <!-- <div class="row"> -->
            <!-- <div class="data-tables" style="padding-top:0px;"> -->
            <h3 class="text-center contenttitle"><strong>Events Gallery</strong></h3>
            <div class="col-lg-12">
                <div class="row" style="padding-top:10px;">
                    <!-- <div class="col-lg-12"> -->
                    <div class="col-lg-4">
                        <!-- <h2 class="text-center">Event 1<h2> -->
                        <a href="events_galleryview.php">
                            <div class="card-wrapper">
                                <div class="hidden-cover"></div>
                                <img style="max-height: 300px;" src="uploads/events/Indias_Scientific_Endeavour_in_the_Exploration_of_Ocean_Resources.png" alt="Danish Nature" />
                                <div class="gallerytitle">View Gallery <i class="fa fa-eye"></i></div>

                            </div>
                            <div class="file-name">
                                <p class="m-b-5 text-muted" style="color:black">Eminent Person Lecture (EPL) by Dr GA Ramadass Hosted by Oliver Nelson Gonsalves</p>
                                <!-- <small>Size: 89KB <span class="date text-muted">Dec 15, 2017</span></small> -->
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <!-- <h2 class="text-center">Event 2<h2> -->
                        <a href="events_galleryview.php">
                            <div class="card-wrapper">
                                <div class="hidden-cover"></div>
                                <img style="max-height: 300px;" src="uploads/events/IOC_Blue_Economy_Summit1.JPG" alt="Danish Nature" />
                                <div class="gallerytitle">View Gallery <i class="fa fa-eye"></i></div>
                            </div>
                            <div class="file-name">
                                <p class="m-b-5 text-muted">Webinar on Blue economy in the Indian Ocean region towards UN Decade of Ocean Science for Sustainability (2021-2030) Date:06-05-21 Time:02:00 to 6:00 P.M IST Link</p>
                                <!-- <small>Size: 89KB <span class="date text-muted">Dec 15, 2017</span></small> -->
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <!-- <h2 class="text-center">Event 3<h2> -->
                        <a href="events_galleryview.php">
                            <div class="card-wrapper">
                                <div class="hidden-cover"></div>
                                <img style="max-height: 300px;" src="uploads/events/WhatsApp_Image_2021-04-27_at_1.02_.22_PM_.jpeg" alt="Danish Nature" />
                                <div class="gallerytitle">View Gallery <i class="fa fa-eye"></i></div>
                            </div>
                            <div class="file-name">
                                <p class="m-b-5 text-muted">As part of International Womens Day 2021 celebration, MoES conducts Webinar Series on Work-Life Balance for the Women Empowering Science. The talk will be delivered by Dr. Purnima Jalihal, Scientist-G, Moes Niot Date : 8th-March-2021 Time : 03:00 P.M to</p>
                                <!-- <small>Size: 89KB <span class="date text-muted">Dec 15, 2017</span></small> -->
                            </div>
                        </a>
                    </div>
                    <!-- </div> -->
                </div>
                <div class="row" style="padding-top:20px;">
                    <!-- <div class="col-lg-12"> -->
                    <div class="col-lg-4">
                        <!-- <h2 class="text-center">Event 4 <h2> -->
                        <a href="events_galleryview.php">
                            <div class="card-wrapper">
                                <div class="hidden-cover"></div>
                                <div class="gallerytitle">View Gallery <i class="fa fa-eye"></i></div>
                                <img style="max-height: 300px;" src="uploads/events/IOC_Blue_Economy_Summit1.JPG" alt="Danish Nature" />

                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <!-- <h2 class="text-center">Event 5<h2> -->
                        <a href="events_galleryview.php">
                            <div class="card-wrapper">
                                <div class="hidden-cover"></div>
                                <img style="max-height: 300px;" src="uploads/events/WhatsApp_Image_2021-04-27_at_1.02_.22_PM_.jpeg" alt="Danish Nature" />
                                <div class="gallerytitle">View Gallery <i class="fa fa-eye"></i></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <!-- <h2 class="text-center">Event 6<h2> -->
                        <a href="events_galleryview.php">
                            <div class="card-wrapper">
                                <div class="hidden-cover"></div>
                                <img style="max-height: 300px;" src="uploads/events/Indias_Scientific_Endeavour_in_the_Exploration_of_Ocean_Resources.png" alt="Danish Nature" />
                                <div class="gallerytitle">View Gallery <i class="fa fa-eye"></i></div>
                            </div>
                        </a>
                    </div>
                    <!-- </div> -->
                </div>
                <div class="row" style="padding-top:20px;">
                    <!-- <div class="col-lg-12"> -->
                    <div class="col-lg-4">
                        <!-- <h2 class="text-center">Event 4 <h2> -->
                        <a href="events_galleryview.php">
                            <div class="card-wrapper">
                                <div class="hidden-cover"></div>
                                <div class="gallerytitle">View Gallery <i class="fa fa-eye"></i></div>
                                <img style="max-height: 300px;" src="uploads/events/IOC_Blue_Economy_Summit1.JPG" alt="Danish Nature" />

                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <!-- <h2 class="text-center">Event 5<h2> -->
                        <a href="events_galleryview.php">
                            <div class="card-wrapper">
                                <div class="hidden-cover"></div>
                                <img style="max-height: 300px;" src="uploads/events/WhatsApp_Image_2021-04-27_at_1.02_.22_PM_.jpeg" alt="Danish Nature" />
                                <div class="gallerytitle">View Gallery <i class="fa fa-eye"></i></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <!-- <h2 class="text-center">Event 6<h2> -->
                        <a href="events_galleryview.php">
                            <div class="card-wrapper">
                                <div class="hidden-cover"></div>
                                <img style="max-height: 300px;" src="uploads/events/Indias_Scientific_Endeavour_in_the_Exploration_of_Ocean_Resources.png" alt="Danish Nature" />
                                <div class="gallerytitle">View Gallery <i class="fa fa-eye"></i></div>
                            </div>
                        </a>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
            <!-- </div> -->
    </section>
    <div class="row">
        <div class="col-lg-12">
            <?php include('include/bottomfooter.php'); ?>
        </div>
    </div>

    <?php include("include/sourcelink-js.php"); ?>

    <script>
        // $(document).ready(function() {
        //     $(".wrap").slice(0, 4).show();
        //     $("#loadMore").on("click", function(e) {
        //         e.preventDefault();
        //         $(".wrap:hidden").slice(0, 4).slideDown();
        //         if ($(".wrap:hidden").length == 0) {
        //             $("#loadMore").text("No Content").addClass("noContent");
        //         }
        //     });

        // });

        // function showList(e) {
        //     var $gridCont = $('.grid-container');
        //     e.preventDefault();
        //     $gridCont.hasClass('list-view') ? $gridCont.removeClass('list-view') : $gridCont.addClass('list-view');
        // }

        // function gridList(e) {
        //     var $gridCont = $('.grid-container')
        //     e.preventDefault();
        //     $gridCont.removeClass('list-view');
        // }

        // $(document).on('click', '.btn-grid', gridList);
        // $(document).on('click', '.btn-list', showList);
        // $('#tbl-en-draft').DataTable();
        // $('#tbl-en-draft').DataTable({

        // });
    </script>
</body>

</html>