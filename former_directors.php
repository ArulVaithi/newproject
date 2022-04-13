<?php include 'include/db_connection.php'; ?>
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
    <?php
    include 'include/header.php';

    $annualreport = "select  *  from mst_annualreports_$currentLang where  status='L' order by uploaded_on desc ";

    $resultannualreport = pg_query($db, $annualreport);
    $annualreportcount = pg_num_rows($resultannualreport);
    ?>
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
                    <p><a href="index.php"><i class="fa fa-home "> </i> / </a> Who's Who / Former Directors of NIOT</p>
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
    <section class="wrapper-full formertab-container effectformertab-header" id="style_10">
        <h3 class="text-center"><strong>Former Directors of NIOT</strong></h3>
        <div class="container">

            <div class="wrapper formertab-item">
                <div class="row">
                    <!-- <div class="wrapper " align="center">
                            <h1 class="ti title">hover effects 10</h1>
                        </div> -->
                    <div class="col-lg-12 formertab">
                        <div class="row">
                        <div class="col-12 col-xs-4 col-sm-6 col-md-4 box-formertab">
                                <div class="effect effect-ten">
                                    <img src="assets/images/leaders/former directors/former_director1a.png" class="img-fluid">
                                    <div class="formertab-text">
                                        <h2>ten col 4</h2>
                                        <p>poppins Design for smart design.</p>
                                        <div class="icons-block"> <a href="former_directors_details.php" class="social-icon-1"><i class="fa fa-facebook-official"></i> See Details</a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xs-4 col-sm-6 col-md-4 box-formertab">
                                <div class="effect effect-ten">
                                    <img src="assets/images/leaders/former directors/former_director2.jpg" class="img-fluid">
                                    <div class="formertab-text">
                                        <h2>ten col 4</h2>
                                        <p>poppins Design for smart design.</p>
                                        <div class="icons-block"> <a href="former_directors_details.php" class="social-icon-1"><i class="fa fa-facebook-official"></i> See Details</a> </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-xs-4 col-sm-6 col-md-4 box-formertab">
                                <div class="effect effect-ten">
                                    <img src="assets/images/leaders/former directors/former_director3.jpg" class="img-fluid">
                                    <div class="formertab-text">
                                        <h2>ten col 4</h2>
                                        <p>poppins Design for smart design.</p>
                                        <div class="icons-block"> <a href="former_directors_details.php" class="social-icon-1"><i class="fa fa-facebook-official"></i> See Details</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-12 col-xs-4 col-sm-6 col-md-4 box-formertab">
                                <div class="effect effect-ten">
                                    <img src="https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" class="img-fluid">
                                    <div class="formertab-text">
                                        <h2>ten col 4</h2>
                                        <p>poppins Design for smart design.</p>
                                        <div class="icons-block"> <a href="#" class="social-icon-1"><i class="fa fa-facebook-official"></i></a> <a href="#" class="social-icon-2"><i class="fa fa-twitter-square"></i></a> <a href="#" class="social-icon-3"><i class="fa fa-youtube-square"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xs-4 col-sm-6 col-md-4 box-formertab  visible-sm visible-md">
                                <div class="effect effect-ten">
                                    <img src="https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" class="img-fluid">
                                    <div class="formertab-text">
                                        /
                                        <div class="icons-block"> <a href="#" class="social-icon-1"><i class="fa fa-facebook-official"></i></a> <a href="#" class="social-icon-2"><i class="fa fa-twitter-square"></i></a> <a href="#" class="social-icon-3"><i class="fa fa-youtube-square"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xs-4 col-sm-6 col-md-4 box-formertab  visible-sm visible-md">
                                <div class="effect effect-ten">
                                    <img src="https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" class="img-fluid">
                                    <div class="formertab-text">
                                        <h2>ten col 4</h2>
                                        <p>poppins Design for smart design.</p>
                                        <div class="icons-block"> <a href="#" class="social-icon-1"><i class="fa fa-facebook-official"></i></a> <a href="#" class="social-icon-2"><i class="fa fa-twitter-square"></i></a> <a href="#" class="social-icon-3"><i class="fa fa-youtube-square"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="row">
                                <div class="col-8 hide-xs hide-sm hide-md box-formertab">
                                    <div class="effect grid-width8 effect-ten">
                                        <img src="https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" class="img-fluid">
                                        <div class="formertab-text">
                                            <h2 class="col8-head">grid col 8</h2>
                                            <p>Era of modern design and advanced transitions </p>
                                            <div class="icons-block"> <a href="#" class="social-icon-1"><i class="fa fa-facebook-official"></i></a> <a href="#" class="social-icon-2"><i class="fa fa-twitter-square"></i></a> <a href="#" class="social-icon-3"><i class="fa fa-youtube-square"></i></a> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 hide-xs hide-sm hide-md box-formertab">
                                    <div class="effect grid-width6 effect-ten">
                                        <img src="https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" class="img-fluid">
                                        <div class="formertab-text">
                                            <h2>col 6 grid</h2>
                                            <p>Better font for web designing</p>
                                            <div class="icons-block"> <a href="#" class="social-icon-1"><i class="fa fa-facebook-official"></i></a> <a href="#" class="social-icon-2"><i class="fa fa-twitter-square"></i></a> <a href="#" class="social-icon-3"><i class="fa fa-youtube-square"></i></a> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 hide-xs hide-sm hide-md box-formertab">
                                    <div class="effect grid-width3 effect-ten">
                                        <img src="https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" class="img-fluid">
                                        <div class="formertab-text">
                                            <h2>col 3</h2>
                                            <p>Biggest Impact </p>
                                            <div class="icons-block"> <a href="#" class="social-icon-1"><i class="fa fa-facebook-official"></i></a> <a href="#" class="social-icon-2"><i class="fa fa-twitter-square"></i></a> <a href="#" class="social-icon-3"><i class="fa fa-youtube-square"></i></a> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 hide-xs hide-sm hide-md box-formertab">
                                    <div class="effect grid-width3 effect-ten">
                                        <img src="https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" class="img-fluid">
                                        <div class="formertab-text">
                                            <h2>col 3</h2>
                                            <p>online program</p>
                                            <div class="icons-block"> <a href="#" class="social-icon-1"><i class="fa fa-facebook-official"></i></a> <a href="#" class="social-icon-2"><i class="fa fa-twitter-square"></i></a> <a href="#" class="social-icon-3"><i class="fa fa-youtube-square"></i></a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                    </div>
                </div>
            </div>
            <!-- </section> -->

        </div>
    </section>

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