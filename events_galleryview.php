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

    <style>
        /* .card {
            margin-bottom: 1rem;
        }

        .list-view {
            .row {
                >[class*='col-'] {
                    max-width: 100%;
                    flex: 0 0 100%;
                }
            }

            .card {
                @media (max-width: 575.98px) {
                    flex-direction: column;
                }

                flex-direction: row;

                >.card-img-top {
                    width: auto;
                }

                .card-body {
                    display: inline-block;
                }
            }
        } */
    </style>
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
                    <p><a href="index.php"><i class="fa fa-home "> </i> /</a> Galleries <a href="events_gallery.php"> / Events Gallery </a> / Gallery View</p>
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


    <section class="events" style="padding-right:40px;padding-left:40px;">
        <!-- <div class="container"> -->
        <!-- <div class="row"> -->
        <!-- <div class="data-tables" style="padding-top:0px;"> -->
        <h3 class="text-center"><strong>Events Gallery</strong></h3>

        <div class="col-lg-12">
            <!-- Row start -->
            <div class="row" style="background:#fff">
                <div class="col-lg-12" style="padding-top:10px;">
                    <div class="card" style="background:#fff">
                        <div class="row" style="padding-top:10px;">
                            <!-- <div class="col-lg-12" style="padding-bottom:20px;"> -->
                            <!-- <div class="col-lg-6"> -->
                            <div class="col-lg-10">
                                <div class="eventtitle">
                                    <p style="padding:5px;text-align:center;font-size:14pt;font-weight:500;"> Eminent Person Lecture (EPL) by Dr GA Ramadass Hosted by Oliver Nelson Gonsalves</p>
                                </div>
                                <!-- <button class="btn btn-success notika-btn-success pull-left" data-toggle="modal" data-target="#addModal" style="margin-left:10px;" onclick="addNew('en');"><i class="icofont icofont-plus"> </i> Add New</button> -->
                            </div>
                            <!-- <div class="col-lg-8">
                            </div> -->
                            <div class="col-lg-2">
                                <button class="btn btn-primary btn-grid" title="Grid View"><i class="fa fa-th"></i></button>
                                <button class="btn btn-danger btn-list" title="List View"><i class="fa fa-list-ul"></i></button>

                                <!-- </div> -->
                                <!-- </div> -->
                            </div>
                            <br>
                            <br>
                            <!-- Radio-Button start -->
                            <!-- <div class="card-header">
                                        <h5 class="card-header-text">Bootstrap Tab</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                    </div> -->
                            <div class="container grid-container">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="file_card">
                                            <div class="file">
                                                <a href="assets/images/events/banner_922_CHE_2010_Patent_Certificate.jpg" class="gallerycard" data-lightbox="example-set">
                                                    <div class="galleryicon">
                                                        <!-- <div class="card-wrapper"> -->
                                                        <img src="assets/images/events/banner_922_CHE_2010_Patent_Certificate.jpg" alt="Danish Nature" />
                                                        <!-- </div> -->
                                                    </div>
                                                    <!-- <div class="hover">
                                                        <button type="button" class="btn btn-icon btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div> -->
                                                    <div class="file-name">
                                                        <p class="m-b-5 text-muted">Event Photo</p>
                                                        <small>Size: 89KB <span class="date text-muted">Dec 15, 2017</span></small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="file_card">
                                            <div class="file">
                                                <a href="assets/images/events/banner_b1.jpg" class="gallerycard" data-lightbox="example-set">
                                                    <div class="galleryicon">
                                                        <!-- <div class="card-wrapper"> -->
                                                        <img src="assets/images/events/banner_b1.jpg" alt="Danish Nature" />
                                                        <!-- </div> -->
                                                    </div>
                                                    <!-- <div class="hover">
                                                        <button type="button" class="btn btn-icon btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div> -->
                                                    <div class="file-name">
                                                        <p class="m-b-5 text-muted">Event Photo</p>
                                                        <small>Size: 89KB <span class="date text-muted">Dec 15, 2017</span></small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="file_card">
                                            <div class="file">
                                                <a href="assets/images/events/banner_banner3.jpeg" class="gallerycard" data-lightbox="example-set">
                                                    <div class="galleryicon">
                                                        <!-- <div class="card-wrapper"> -->
                                                        <img src="assets/images/events/banner_banner3.jpeg" alt="Danish Nature" />
                                                        <!-- </div> -->
                                                    </div>
                                                    <!-- <div class="hover">
                                                        <button type="button" class="btn btn-icon btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div> -->
                                                    <div class="file-name">
                                                        <p class="m-b-5 text-muted">Event Photo</p>
                                                        <small>Size: 89KB <span class="date text-muted">Dec 15, 2017</span></small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">

                                        <div class="file_card">
                                            <div class="file">
                                                <a href="assets/images/events/banner_Constitution_Web_Banner_hindi3.jpg" class="gallerycard" data-lightbox="example-set">
                                                    <div class="galleryicon">
                                                        <!-- <div class="card-wrapper"> -->
                                                        <img src="assets/images/events/banner_Constitution_Web_Banner_hindi3.jpg" alt="Danish Nature" />
                                                        <!-- </div> -->
                                                    </div>
                                                    <!-- <div class="hover">
                                                        <button type="button" class="btn btn-icon btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div> -->
                                                    <div class="file-name">
                                                        <p class="m-b-5 text-muted">Event Photo</p>
                                                        <small>Size: 89KB <span class="date text-muted">Dec 15, 2017</span></small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="file_card">

                                            <div class="file">
                                                <a href="assets/images/events/banner_img_03.jpg" class="gallerycard" data-lightbox="example-set">
                                                    <div class="galleryicon">
                                                        <!-- <div class="card-wrapper"> -->
                                                        <img src="assets/images/events/banner_img_03.jpg" alt="Danish Nature" />
                                                        <!-- </div> -->
                                                    </div>
                                                    <!-- <div class="hover">
                                                        <button type="button" class="btn btn-icon btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div> -->
                                                    <div class="file-name">
                                                        <p class="m-b-5 text-muted">Event Photo</p>
                                                        <small>Size: 89KB <span class="date text-muted">Dec 15, 2017</span></small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">

                                        <div class="file_card">
                                            <div class="file">
                                                <a href="assets/images/events/banner_IMG_03.jpeg" class="gallerycard" data-lightbox="example-set">
                                                    <div class="galleryicon">
                                                        <!-- <div class="card-wrapper"> -->
                                                        <img src="assets/images/events/banner_IMG_03.jpeg" alt="Danish Nature" />
                                                        <!-- </div> -->
                                                    </div>
                                                    <!-- <div class="hover">
                                                        <button type="button" class="btn btn-icon btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div> -->
                                                    <div class="file-name">
                                                        <p class="m-b-5 text-muted">Event Photo</p>
                                                        <small>Size: 89KB <span class="date text-muted">Dec 15, 2017</span></small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="file_card">

                                            <div class="file">
                                                <a href="assets/images/events/banner_img_02.jpg" class="gallerycard" data-lightbox="example-set">
                                                    <div class="galleryicon">
                                                        <!-- <div class="card-wrapper"> -->
                                                        <img src="assets/images/events/banner_img_02.jpg" alt="Danish Nature" />
                                                        <!-- </div> -->
                                                    </div>
                                                    <!-- <div class="hover">
                                                        <button type="button" class="btn btn-icon btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div> -->
                                                    <div class="file-name">
                                                        <p class="m-b-5 text-muted">Event Photo</p>
                                                        <small>Size: 89KB <span class="date text-muted">Dec 15, 2017</span></small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="file_card">
                                            <div class="file">
                                                <a href="assets/images/events/banner_DSC_0012_013.JPG" class="gallerycard" data-lightbox="example-set">
                                                    <div class="galleryicon">
                                                        <!-- <div class="card-wrapper"> -->
                                                        <img src="assets/images/events/banner_DSC_0012_013.JPG" alt="Danish Nature" />
                                                        <!-- </div> -->
                                                    </div>
                                                    <!-- <div class="hover">
                                                        <button type="button" class="btn btn-icon btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div> -->
                                                    <div class="file-name">
                                                        <p class="m-b-5 text-muted">Event Photo</p>
                                                        <small>Size: 89KB <span class="date text-muted">Dec 15, 2017</span></small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="file_card">
                                            <div class="file">
                                                <a href="assets/images/events/banner_Constitution_Web_Banner_hindi3.jpg" class="gallerycard" data-lightbox="example-set">
                                                    <div class="galleryicon">
                                                        <!-- <div class="card-wrapper"> -->
                                                        <img src="assets/images/events/banner_Constitution_Web_Banner_hindi3.jpg" alt="Danish Nature" />
                                                        <!-- </div> -->
                                                    </div>
                                                    <!-- <div class="hover">
                                                        <button type="button" class="btn btn-icon btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div> -->
                                                    <div class="file-name">
                                                        <p class="m-b-5 text-muted">Event Photo</p>
                                                        <small>Size: 89KB <span class="date text-muted">Dec 15, 2017</span></small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="file_card">
                                            <div class="file">
                                                <a href="assets/images/events/banner_DSC_0012.JPG" class="gallerycard" data-lightbox="example-set">
                                                    <div class="galleryicon">
                                                        <!-- <div class="card-wrapper"> -->
                                                        <img src="assets/images/events/banner_DSC_0012.JPG" alt="Danish Nature" />
                                                        <!-- </div> -->
                                                    </div>
                                                    <!-- <div class="hover">
                                                        <button type="button" class="btn btn-icon btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div> -->
                                                    <div class="file-name">
                                                        <p class="m-b-5 text-muted">Event Photo</p>
                                                        <small>Size: 89KB <span class="date text-muted">Dec 15, 2017</span></small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="file_card">
                                            <div class="file">
                                                <a href="assets/images/events/banner_Banner.JPG" class="gallerycard" data-lightbox="example-set">
                                                    <div class="galleryicon">
                                                        <!-- <div class="card-wrapper"> -->
                                                        <img src="assets/images/events/banner_Banner.JPG" alt="Danish Nature" />
                                                        <!-- </div> -->
                                                    </div>
                                                    <!-- <div class="hover">
                                                        <button type="button" class="btn btn-icon btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div> -->
                                                    <div class="file-name">
                                                        <p class="m-b-5 text-muted">Event Photo</p>
                                                        <small>Size: 89KB <span class="date text-muted">Dec 15, 2017</span></small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">

                                        <div class="file_card">
                                            <div class="file">
                                                <a href="assets/images/events/banner_banner3.jpeg" class="gallerycard" data-lightbox="example-set">
                                                    <div class="galleryicon">
                                                        <!-- <div class="card-wrapper"> -->
                                                        <img src="assets/images/events/banner_banner3.jpeg" alt="Danish Nature" />
                                                        <!-- </div> -->
                                                    </div>
                                                    <!-- <div class="hover">
                                                        <button type="button" class="btn btn-icon btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div> -->
                                                    <div class="file-name">
                                                        <p class="m-b-5 text-muted">Event Photo</p>
                                                        <small>Size: 89KB <span class="date text-muted">Dec 15, 2017</span></small>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#" id="loadMore">Load More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row end -->
            </div>
        </div>
        <!-- </div> -->
        <!-- </div> -->
    </section>

    <?php include('include/bottomfooter.php'); ?>

    <?php include("include/sourcelink-js.php"); ?>

    <script>
        $(document).ready(function() {

        });


        function showList(e) {
            var $gridCont = $('.grid-container');
            e.preventDefault();
            $gridCont.hasClass('list-view') ? $gridCont.removeClass('list-view') : $gridCont.addClass('list-view');
            
        }

        function gridList(e) {
            var $gridCont = $('.grid-container')
            e.preventDefault();
            $gridCont.removeClass('list-view');
        }

        $(document).on('click', '.btn-grid', gridList);
        $(document).on('click', '.btn-list', showList);
        // $('#tbl-en-draft').DataTable();
        // $('#tbl-en-draft').DataTable({

        // });
    </script>
</body>

</html>