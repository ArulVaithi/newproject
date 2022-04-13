<?php include 'include/db_connection.php';

// echo phpinfo();

$draftEn =
    "select  title from mst_newsannouncement_en where  status='L' order by uploaded_on desc limit 2";
$resultDraftEn = pg_query($db, $draftEn);
$count = pg_num_rows($resultDraftEn);

$pressrelease =
    "select  title from mst_pressrelease_en where  status='L' order by uploaded_on desc limit 3";
// echo $pressrelease;
$resultpressrelease = pg_query($db, $pressrelease);
$pressreleasecount = pg_num_rows($resultpressrelease);

// $ministervalue = base64_encode('niot_minister');
// $secretaryvalue = base64_encode('niot_secretary');
// $directorvalue = base64_encode('niot_director');

$technology = "select * from niot_technology 	 
inner join niot_addtech on niot_technology.mas_id = niot_addtech.techid
where niot_addtech.status ='A' and niot_technology.status = 'A'";
$resulttechnology = pg_query($db, $technology);

// echo substr($content, 0, 50);

$recruitment = "select title from mst_recruitment_en where title_id in (select title_id from 
mst_recruitment_en  group by title_id   limit 2 ) group by title";

$resultRec = pg_query($db, $recruitment);
$reccount = pg_num_rows($resultRec);

$events = 'select * from mst_events_en   order by updated_on desc limit 2';
$resultevent = pg_query($db, $events);
$eventcount = pg_numrows($resultevent);

$annualreport =
    "select title from mst_annualreports_en where status= 'L' order by announce_dt desc limit 3";
// echo $newsletter;
$resultannualreport = pg_query($db, $annualreport);
$annualcount = pg_num_rows($resultannualreport);

$newsletter =
    "select title from mst_newsletter_en where status= 'L' order by announce_dt desc limit 3";
// echo $newsletter;
$resultnewsletter = pg_query($db, $newsletter);
$newscount = pg_num_rows($resultnewsletter);
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
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <?php include 'include/header_hindi.php'; ?>
    <!-- header-end -->
    <!-- <div class="loader-bg">
      <div class="loader-bar">
      </div>
   </div> -->
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center">
                <video autoplay loop muted poster="img/video/slide_video9.mp4" class="slideAnimationVideo" preload>
                    <source src="img/video/slide_video9.mp4" type="video/mp4" media="all and (min-width: 1024 px)">
                </video>

                <!-- <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Health care</span> <br>
                                    For Hole Family </h3>
                                <p>In healthcare sector, service excellence is the facility of <br> the hospital as
                                    healthcare service provider to consistently.</p>
                                <a href="#" class="boxed-btn3">Check Our Services</a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- <div class="single_slider  d-flex align-items-center">
                <video autoplay loop muted poster="img/video/slide_video2.mp4" class="slideAnimationVideo" preload>
                    <source src="img/video/slide_video2.mp4" type="video/mp4" media="all and (min-width: 1024 px)">
                </video> -->
            <!-- <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Health care</span> <br>
                                    For Hole Family </h3>
                                <p>In healthcare sector, service excellence is the facility of <br> the hospital as
                                    healthcare service provider to consistently.</p>
                                <a href="#" class="boxed-btn3">Check Our Services</a>
                            </div>
                        </div>
                    </div>
                </div> -->
        </div>
        <!--  <div class="single_slider  d-flex align-items-center">
                <video autoplay loop muted poster="img/video/slide_video9.mp4" class="slideAnimationVideo" preload autoplay>
                    <source src="img/video/slide_video9.mp4" type="video/mp4">
                </video> -->
        <!-- <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Health care</span> <br>
                                    For Hole Family </h3>
                                <p>In healthcare sector, service excellence is the facility of <br> the hospital as
                                    healthcare service provider to consistently.</p>
                                <a href="#" class="boxed-btn3">Check Our Services</a>
                            </div>
                        </div>
                    </div>
                </div> -->
        <!-- </div>
            <div class="single_slider  d-flex align-items-center">
                <video autoplay loop muted poster="img/video/slide_video10.mp4" class="slideAnimationVideo" preload autoplay>
                    <source src="img/video/slide_video10.mp4" type="video/mp4">
                </video> -->
        <!-- <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Health care</span> <br>
                                    For Hole Family </h3>
                                <p>In healthcare sector, service excellence is the facility of <br> the hospital as
                                    healthcare service provider to consistently.</p>
                                <a href="#" class="boxed-btn3">Check Our Services</a>
                            </div>
                        </div>
                    </div>
                </div> -->
        <!-- </div> -->
        <!-- <div class="single_slider  d-flex align-items-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Health care</span> <br>
                                    For Hole Family </h3>
                                <p>In healthcare sector, service excellence is the facility of <br> the hospital as
                                    healthcare service provider to consistently.</p>
                                <a href="#" class="boxed-btn3">Check Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
    </div>
    </div>
    <!-- slider_area_end -->

    <!-- service_area_start -->
    <div class="service_area">
        <div class="container p-0">
            <div class="row no-gutters">
                <!-- <div class="col-xl-4 col-md-4 wow fadeInLeftBig" style="background-color: #eeeeee;border-radius: 15px;padding-right:10px;">
                    <div class="single_service">
                        <div class="icon">
                            <i class="fa fa-id-card"></i>
                        </div>
                        <h3>About NIOT</h3>
                        <p>Clinical excellence must be the priority for any health care service provider.</p>
                        <p>Clinical excellence must be the priority for any health care service provider.</p>
                        <a href="about.php" class="boxed-btn3-white-2 align-self-end">More Details </a>
                    </div>
                </div> -->
                <div class="col-xl-4 col-md-4 wow fadeInLeftBig" style="background-color: #eeeeee;border-radius: 15px;padding-right:10px;">
                    <div class="single_service">
                        <div class="icon">
                            <i class="fa fa-id-card"></i>
                        </div>
                        <h3>Recruitment</h3>
                        <?php if ($reccount == 0) {
                            echo ' <li> <i class="fa fa-ban"></i> No Data Found</li>';
                        } else {
                            $i = 0;
                            while ($row = pg_fetch_array($resultRec)) { ?>

                                <li> <a href="recruitment_details.php" target="_blank"><?php echo $row['title']; ?> </a></li></br>
                        <?php }
                        } ?>
                        <a href="recruitment_details.php" class="boxed-btn3-white-2 align-self-end">More Details --></a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 wow zoomInUp" style="background-color:#041e42; border-radius: 15px; padding-right: 10px; visibility: visible;">
                    <div class="single_service">
                        <div class="icon">
                            <i class="fa fa-bullhorn" style="color :#fff;"></i>
                        </div>
                        <h3 style="color :#fff;">News/Announcements</h3>
                        <br>
                        <ul>
                            <?php if ($count == 0) {
                                echo ' <li> <i class="fa fa-ban"></i> No Data Found</li>';
                            } else {
                                $i = 0;
                                while ($row = pg_fetch_array($resultDraftEn)) {
                                    // echo $row['title'];
                                    echo ' <li>  ' .
                                        $row['title'] .
                                        '</li></br>';
                                }
                            } ?>
                            <!-- <li>Clinical excellence must be</li>
                            <p > </p>
                            <li>Clinical excellence must be </li> -->
                        </ul>

                        <a href="announce_Details.php" class="boxed-btn3-white">More Details --></a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 wow fadeInRightBig" style="background-color: #eeeeee;border-radius: 15px;">
                    <div class="single_service">
                        <div class="icon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <h3>Events</h3>
                        <?php if ($count == 0) {
                            echo ' <li> <i class="fa fa-ban"></i> No Data Found</li>';
                        } else {
                            $i = 0;
                            while ($row = pg_fetch_array($resultevent)) { ?>

                                <li> <a href="recruitment_details.php" target="_blank"><?php echo $row['title']; ?> </a></li></br>
                        <?php }
                        } ?>

                        <a href="niot_events.php" class="boxed-btn3-white-2 align-self-end">More Details --></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service_area_end -->

    <!-- welcome_docmed_area_start -->
    <div class="welcome_docmed_area" style="background-image: url('img/bg/bg_15.jpg');background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_thumb">
                        <div class="thumb_1 wow zoomInLeft">
                            <img src="img/bg/bg_6.jpg" alt="">
                        </div>
                        <div class="thumb_2 wow zoomInRight">
                            <img src="img/bg/bg_7.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_docmed_info">
                        <h2>Welcome to <h3>राष्ट्रीय समुद्र प्रौद्योगिकी संस्थान
 </h3>
                        </h2>
                        <p>राष्ट्रीय समुद्र प्रौद्योगिकी संस्थान(रासप्रौसं) की स्थापना नवंबर 1993 में भारत सरकार के पृथ्वी विज्ञान मंत्रालय के अंतर्गत एक स्वायत्त सोसाइटी के रूप में की गई थी । रासप्रौसं का प्रबंधन शासकीय परिषद द्वारा किया जाता है और निदेशक इस संस्थान के प्रमुख हैं I पृथ्वी विज्ञान मंत्रालय के अंतर्गत रासप्रौसं को आरंभ करने का मुख्य उद्देश्य भारतीय अनन्य क्षेत्र, जो भारत के भूमि क्षेत्र का लगभग दो-तिहाई हिस्सा है, के निर्जीव एवं सजीव संसाधन, के उपयोग से संबंधित विभिन्न प्रौद्योगिकी समस्याओं को सुलझाने के लिए विश्वसनीय देशी तकनीक विकसित करना है ।
</p>
                        <ul>
                            <li> <a href="about.php"><b style="color:#fff">विजन</b> </a></li>
                            <li> <a href="about.php"><b style="color:#fff">मिशन कथन</b> </a>
                            </li>
                            <li> <a href="about.php"><b style="color:#fff">Key Objectives</b> </a> </li>
                        </ul>
                        <a href="about.php" class="boxed-btn3-white-2">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- welcome_docmed_area_end -->
    <section class="our_department_area" style="background-color: #041E42;">
        <div class="container">
            <div class="row wow zoomIn">
                <div class="col-xl-12">
                    <div class="doctors_title mb-55 text-center">
                        <h3 style="color:#fff;">Our Leaders</h3>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-12">
                    <div class="card-grid">
                        <a class="leadercard wow fadeInLeftBig" href="niot_minister.php">
                            <div class="card__background" style="background-image:url(img/leaders/leader1.jpg)">
                                <!-- <img src="img/leaders/leader1.jpg" alt=""> -->
                            </div>
                            <div class="card__content text-center">
                                <!-- <div class="experts_name "> -->
                                <!-- <a href="niot_minister.php"> -->
                                <h3>Dr. Jitendra Singh</h3>
                                <span>Hon'ble Union Minister for Earth Sciences</span>
                                <!-- </a> -->
                                <!-- </div> -->
                            </div>
                        </a>
                        <a class="leadercard wow zoomInUp" href="niot_secretary.php">
                            <div class="card__background" style="background-image: url(img/leaders/leader2.jpg)"></div>
                            <div class="card__content text-center">
                                <h3>Dr.M.Ravichandran</h3>
                                <span>Secretary, Ministry of Earth Sciences (MoES)</span>
                            </div>
                        </a>
                        <a class="leadercard  wow fadeInRightBig" href="niot_director.php">
                            <div class="card__background" style="background-image: url(img/leaders/leader3.jpg)"></div>
                            <div class="card__content text-center">
                                <h3>Dr. G A RAMADASS</h3>
                                <span>Director National Institute of Ocean Technology</span>
                            </div>
                        </a>

                        <!-- <a class="leadercard" href="#">
                    <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1557004396-66e4174d7bf6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60)"></div>
                    <div class="card__content">
                        <h3 class="card__heading"> Card Heading</h3>
                    </div>
                </a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- expert_doctors_area_start -->
    <!-- <div class="our_department_area" style="background-color: #041E42;">
        <div class="container">
            <div class="row wow zoomIn">
                <div class="col-xl-12">
                    <div class="doctors_title mb-55 text-center">
                        <h3>Our Leaders</h3>
                    </div>
                </div>
            </div>

            <div class="expert_active owl-carousel ">
                <div class="single_expert">
                    <div class="expert_thumb">
                        <img src="img/leaders/leader1.jpg" alt="">
                    </div>
                    <div class="experts_name text-center">
                        <a href="niot_minister.php">
                            <h3>Dr. Jitendra Singh</h3>
                            <span>Hon'ble Union Minister for Earth Sciences</span>
                        </a>
                    </div>
                </div>
                <div class="single_expert">
                    <div class="expert_thumb">
                        <img src="img/leaders/leader2.jpg" alt="">
                    </div>
                    <div class="experts_name text-center">
                        <a href="niot_secretary.php">
                            <h3>Dr.M.Ravichandran</h3>
                            <span>Secretary, Ministry of Earth Sciences (MoES)</span>
                        </a>
                    </div>
                </div>
                <div class="single_expert">
                    <div class="expert_thumb">
                        <img src="img/leaders/leader3.jpg" alt="">
                    </div>
                    <div class="experts_name text-center">
                        <a href="niot_director.php">
                            <h3>Dr. G A RAMADASS</h3>
                            <span>Director National Institute of Ocean Technology</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- expert_doctors_area_end -->

    <!-- offers_area_start -->
    <div class="our_department_area">
        <video autoplay loop muted poster="img/video/bg_video1.mp4" style=" width: 100%;
		height: 100%;
		object-fit: cover;">
            <source src="img/video/bg_video1.mp4" type="video/mp4">
        </video>
        <div class="container">
            <div class="row wow zoomIn">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-55">
                        <h3>Technology</h3>
                        <p style="color:#fff"></p>
                    </div>
                </div>
            </div>
            <div class="row wow bounceInRight">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="img/department/tech_1.jpg" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Coastal & Environmental</a></h3>
                            <p>The group functions with a mandate to develop application-oriented technology in ocean (Coastal & Environmental) related areas. </p>
                            <a href="niot_technology.php?link= '<?php echo base64_encode(
                                                                    6
                                                                ); ?>'" class="learn_more">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="img/department/tech_2.jpg" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Deep Sea Technology</a></h3>
                            <p>The deep oceans have abundant mineral resources like Polymetallic nodules; cobalt rich manganese crust and hydrothermal deposits.</p>
                            <a href="niot_technology.php?link= '<?php echo base64_encode(
                                                                    2
                                                                ); ?>'" class="learn_more">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="img/department/tech_3.jpg" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Energy and Fresh Water</a></h3>
                            <p>In the times when continuous use of non-renewable energy resources is upsetting the ecological balance,the world has started to </p>
                            <a href="#" class="learn_more">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="img/department/tech_4.jpg" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Ocean Observation</a></h3>
                            <p>Under the Ocean Observation Network (OON) programme of ESSO MoES, the Ocean observation systems (OOS) group,erstwhile National Data Buoy Programme </p>
                            <a href="#" class="learn_more">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="img/department/tech_5.jpg" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Marine Sensor Systems</a></h3>
                            <p>Our earth, the blue planet, is covered by 71% of oceans, of which 95% is still unexplored. Our knowledge of the ocean is indeed shockingly limited. </p>
                            <a href="#" class="learn_more">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="img/department/tech_6.png" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Marine BioTechnology</a></h3>
                            <p>The Ocean is considered as the cradle of life, where life originated 3.5 billion years ago and formed a huge treasure-house of life and resources. </p>
                            <a href="#" class="learn_more">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="img/department/6.png" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Ocean Electronics</a></h3>
                            <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            <a href="#" class="learn_more">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="img/department/6.png" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Ocean Structures</a></h3>
                            <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            <a href="#" class="learn_more">Learn More</a>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="department_content align-right">
                <a href="#" style="color: #fff;float:right;" class="learn_more">Load More --></a>
            </div>
        </div>
    </div>
    <!-- offers_area_end -->

    <!-- testmonial_area_start -->
    <!-- <div class="testmonial_area">
        <div class="testmonial_active owl-carousel">
            <div class="single-testmonial testmonial_bg_1 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="testmonial_info text-center">
                                <div class="quote">
                                    <i class="flaticon-straight-quotes"></i>
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                    sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                    <br>
                                    Fusce ac mattis nulla. Morbi eget ornare dui.
                                </p>
                                <div class="testmonial_author">
                                    <h4>Asana Korim</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-testmonial testmonial_bg_2 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="testmonial_info text-center">
                                <div class="quote">
                                    <i class="flaticon-straight-quotes"></i>
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                    sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                    <br>
                                    Fusce ac mattis nulla. Morbi eget ornare dui.
                                </p>
                                <div class="testmonial_author">
                                    <h4>Asana Korim</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-testmonial testmonial_bg_1 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="testmonial_info text-center">
                                <div class="quote">
                                    <i class="flaticon-straight-quotes"></i>
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                    sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                    <br>
                                    Fusce ac mattis nulla. Morbi eget ornare dui.
                                </p>
                                <div class="testmonial_author">
                                    <h4>Asana Korim</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- testmonial_area_end -->

    <!-- business_expert_area_start  -->

    <!-- <div class="col-sm-6">
        <h3>Left Tabs</h3>
        <hr />
        <div class="col-xs-3">
          
            <ul class="nav nav-tabs tabs-left sideways">
                <li class="active"><a href="#home-v" data-toggle="tab">Home</a></li>
                <li><a href="#profile-v" data-toggle="tab">Profile</a></li>
                <li><a href="#messages-v" data-toggle="tab">Messages</a></li>
                <li><a href="#settings-v" data-toggle="tab">Settings</a></li>
            </ul>
        </div>

        <div class="col-xs-9">
         
            <div class="tab-content">
                <div class="tab-pane active" id="home-v">Home Tab.</div>
                <div class="tab-pane" id="profile-v">Profile Tab.</div>
                <div class="tab-pane" id="messages-v">Messages Tab.</div>
                <div class="tab-pane" id="settings-v">Settings Tab.</div>
            </div>
        </div>

        <div class="clearfix"></div>

    </div> -->

    <div class="business_expert_area ">
        <div class="business_tabs_area">
            <div class="col-lg-12 ">
                <h2 class="text-center">Publications </h2>
            </div>
            <div class="container ">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="indextab">
                            <button class="tablinks" onclick="openTab(event, 'firstTab')" id="defaultOpen">Press Release</button>
                            <button class="tablinks" onclick="openTab(event, 'secondTab')">Annual Reports</button>
                            <button class="tablinks" onclick="openTab(event, 'thirdTab')">Newsletter</button>
                            <button class="tablinks" onclick="openTab(event, 'fourthTab')">Tenders</button>
                            <!-- <button class="tablinks" onclick="openTab(event, 'thirdTab')">Third tab</button> -->
                        </div>

                        <div id="firstTab" class="indextabcontent">
                            <div class="col-lg-12 ">
                                <h3 class="text-center">Press Release</h3>
                            </div>
                            <div class="col-lg-12">
                                <div class="business_info">
                                    <!-- <div class="icon">
                                        <i class="fa fa-bullhorn "></i>
                                    </div> -->
                                    </br>
                                    <ul>
                                        <?php if ($pressreleasecount == 0) {
                                            echo ' <li> <i class="fa fa-ban"></i> No Data Found</li>';
                                        } else {
                                            $i = 0;
                                            while (
                                                $row = pg_fetch_array(
                                                    $resultpressrelease
                                                )
                                            ) {
                                                // echo $row['title'];
                                                echo ' <li>  ' .
                                                    $row['title'] .
                                                    '</li><br>';
                                            }
                                        } ?>
                                        <!-- <li>Clinical excellence must be</li>
                                          <p > </p>
                                      <li>Clinical excellence must be </li> -->
                                    </ul>
                                    <div class="col-lg-12 text-center" style="position: absolute;
 justify-content: flex-end;
  display: flex;">
                                        <a href="pressrelease_details.php" class="boxed-btn3 text-center">More Details --></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="secondTab" class="indextabcontent">
                            <h3 class="text-center">Annual Reports</h3>
                            <div class="col-lg-12">
                                <div class="business_info">
                                    <!-- <div class="icon">
                                        <i class="fa fa-bullhorn "></i>
                                    </div> -->
                                    </br>
                                    <ul>
                                        <?php if ($annualcount == 0) {
                                            echo ' <li> <i class="fa fa-ban"></i> No Data Found</li>';
                                        } else {
                                            $i = 0;
                                            while (
                                                $row = pg_fetch_array(
                                                    $resultannualreport
                                                )
                                            ) {
                                                // echo $row['title'];
                                                echo ' <li>  ' .
                                                    $row['title'] .
                                                    '</li><br>';
                                            }
                                        } ?>
                                        <!-- <li>Clinical excellence must be</li>
                                          <p > </p>
                                      <li>Clinical excellence must be </li> -->
                                    </ul>
                                    <div class="col-lg-12 text-center" style="position: absolute;
 justify-content: flex-end;
  display: flex;">
                                        <a href="pressrelease_details.php" class="boxed-btn3 text-center">More Details --></a>
                                    </div>
                                </div>
                            </div>
                            <!-- <p>Cras euismod, urna id blandit maximus, sapien lorem tristique ex, eget maximus nibh tellus in arcu. Suspendisse libero metus, eleifend elementum velit varius, dapibus rutrum ex. Ut tincidunt, felis auctor ornare fermentum, sem quam imperdiet turpis, quis porttitor purus lacus quis quam. Donec erat massa, sodales sit amet mollis pretium, tempor ac ex. Maecenas fermentum tristique venenatis. Vivamus sollicitudin consequat ligula eu facilisis. </p> -->
                        </div>

                        <div id="thirdTab" class="indextabcontent">
                            <h3>Newsletter</h3>
                            <div class="col-lg-12">
                                <div class="business_info">
                                    <!-- <div class="icon">
                                        <i class="fa fa-bullhorn "></i>
                                    </div> -->
                                    </br>
                                    <ul>
                                        <?php if ($newscount == 0) {
                                            echo ' <li> <i class="fa fa-ban"></i> No Data Found</li>';
                                        } else {
                                            $i = 0;
                                            while (
                                                $row = pg_fetch_array(
                                                    $resultnewsletter
                                                )
                                            ) {
                                                //   echo $row['title'];
                                                echo ' <li>  ' .
                                                    $row['title'] .
                                                    '</li><br>';
                                            }
                                        } ?>
                                        <!-- <li>Clinical excellence must be</li>
                                          <p > </p>
                                      <li>Clinical excellence must be </li> -->
                                    </ul>
                                    <div class="col-lg-12 text-center" style="position: absolute;
 justify-content: flex-end;
  display: flex;">
                                        <a href="pressrelease_details.php" class="boxed-btn3 text-center">More Details --></a>
                                    </div>
                                </div>
                            </div>
                            <!-- <p>Suspendisse lacinia sapien eget risus porttitor, sit amet faucibus velit ullamcorper. Quisque dictum erat neque, placerat dignissim ante tempor at. Nullam ullamcorper justo felis, nec pulvinar ex suscipit vel. Donec viverra leo ut ante iaculis, sit amet porta leo vehicula. Suspendisse fermentum congue ligula sed molestie. Praesent lacinia, massa non fringilla scelerisque, tellus arcu sodales nunc, in ultrices sapien ante et ante. In iaculis tellus urna, at convallis massa porta in. Proin vehicula facilisis varius. Pellentesque vitae purus non mauris ultricies porttitor nec sodales nulla.</p> -->
                        </div>
                        <div id="fourthTab" class="indextabcontent">
                            <h3>Tenders</h3>
                            <!-- <p>Suspendisse lacinia sapien eget risus porttitor, sit amet faucibus velit ullamcorper. Quisque dictum erat neque, placerat dignissim ante tempor at. Nullam ullamcorper justo felis, nec pulvinar ex suscipit vel. Donec viverra leo ut ante iaculis, sit amet porta leo vehicula. Suspendisse fermentum congue ligula sed molestie. Praesent lacinia, massa non fringilla scelerisque, tellus arcu sodales nunc, in ultrices sapien ante et ante. In iaculis tellus urna, at convallis massa porta in. Proin vehicula facilisis varius. Pellentesque vitae purus non mauris ultricies porttitor nec sodales nulla.</p> -->
                        </div>
                        <!-- <ul class="nav" id="myTab" role="tablist">
                            <li class="nav-item text-center wow zoomIn">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><strong>
                                        <div class="icon">
                                            <i class="fa fa-bullhorn"></i>
                                        </div>Press Releases
                                    </strong></a>
                            </li>

                            <li class="nav-item text-center wow zoomIn">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><strong>
                                        <div class="icon">
                                            <i class="fa fa-search"></i>
                                        </div>Recruitments
                                    </strong></a>
                            </li>


                            <li class="nav-item text-center wow zoomIn">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><strong>
                                        <div class="icon">
                                            <i class="fa fa-folder-open"></i>
                                        </div>Tender Results
                                    </strong></a>
                            </li>
                        </ul> -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- <div class="container">
            <div class="border_bottom">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane  show active " id="firstTab" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row align-items-center wow zoomIn">
                            <div class="col-xl-6 col-md-6">
                                <div class="business_info">
                                    <div class="icon">
                                        <i class="fa fa-bullhorn "></i>
                                    </div>
                                    </br>
                                    <ul>
                                        <?php if ($pressreleasecount == 0) {
                                            echo ' <li> <i class="fa fa-ban"></i> No Data Found</li>';
                                        } else {
                                            $i = 0;
                                            while (
                                                $row = pg_fetch_array(
                                                    $resultpressrelease
                                                )
                                            ) {
                                                echo ' <li> <i class="flaticon-right"></i> ' .
                                                    $row['title'] .
                                                    '</li><br>';
                                            }
                                        } ?>
                                 
                                    </ul>
                                    <a href="pressrelease_details.php" class="boxed-btn3">More Details </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="business_thumb wow bounceInRight">
                                    <img src="img/bg/bg_10a.jpg" style="border-radius: 15px;" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row align-items-center ">
                            <div class="col-xl-6 col-md-6">
                                <div class="business_info">
                                    <div class="icon">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <h3>Leading edge care for Your family</h3>
                                    <p>Esteem spirit temper too say adieus who direct esteem.
                                        It esteems luckily picture placing drawing. Apartments frequently or
                                        motionless
                                        on
                                        reasonable projecting expression.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="business_thumb ">
                                    <img src="img/bg/bg_18.jpg" style="border-radius: 15px;" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="business_info">
                                    <div class="icon">
                                        <i class="fa fa-folder-open"></i>
                                    </div>
                                    <h3>Leading edge care for Your family</h3>
                                    <p>Esteem spirit temper too say adieus who direct esteem.
                                        It esteems luckily picture placing drawing. Apartments frequently or
                                        motionless
                                        on
                                        reasonable projecting expression.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="business_thumb">
                                    <img src="img/bg/bg_14a.jpg" style="border-radius: 15px;" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
            <div class="section-title text-center">
                <h2 style="color:#fff;">Gallery</h2>
                <p style="color:#fff;">Group of NIOT Photos & Videos related to Events , Technologies, Awards etc.</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center filter-button-group">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-image">Image Gallery</li>
                        <li data-filter=".filter-video">Video Gallery</li>
                        <!-- <li data-filter=".filter-web">Web</li> -->
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container wow zoomInRight" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-4 col-md-6 portfolio-item filter-image">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/award1.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="img/portfolio/award1.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="fa fa-eye"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-image">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/award2.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="img/portfolio/award2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="fa fa-eye"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-video">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/award1.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="img/portfolio/award1.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="fa fa-eye"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-image">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/award1.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="img/portfolio/award1.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="fa fa-eye"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-video">
                    <div class="portfolio-wrap">
                        <a class="gallery-lightbox" href="img/portfolio/slide_video7.mp4"><video width="400" height="250">
                                <source src="img/portfolio/slide_video7.mp4" class="img-fluid" type="video/mp4">
                            </video></a>
                        <div class="portfolio-info">
                            <h4>Card</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="img/portfolio/slide_video7.mp4" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card ">
                                    <!-- <video
                                    width="500" height="500">
                                    <source src="img/portfolio/slide_video7.mp4" class="img-fluid" type="video/mp4">
                                </video> -->
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/award1.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 2</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="img/portfolio/award1.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="fa fa-eye"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-image">
                            <div class="portfolio-wrap">
                                <img src="img/portfolio/award2.png" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 3</h4>
                                    <p>App</p>
                                    <div class="portfolio-links">
                                        <a href="img/portfolio/award2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="fa fa-eye"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-image">
                            <div class="portfolio-wrap">
                                <img src="img/portfolio/award2.png" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 3</h4>
                                    <p>App</p>
                                    <div class="portfolio-links">
                                        <a href="img/portfolio/award2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="fa fa-eye"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-image">
                            <div class="portfolio-wrap">
                                <img src="img/portfolio/award2.png" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 3</h4>
                                    <p>App</p>
                                    <div class="portfolio-links">
                                        <a href="img/portfolio/award2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="fa fa-eye"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-video">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="fa fa-eye"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-video">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 3</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="fa fa-eye"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="fa fa-eye"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>

    </section>
    <!-- business_expert_area_end  -->

    <!-- Emergency_contact start -->
    <!-- <div class="Emergency_contact">
        <div class="conatiner-fluid p-0">
            <div class="row no-gutters">
                <div class="col-xl-6">
                    <div
                        class="single_emergency d-flex align-items-center justify-content-center emergency_bg_1 overlay_skyblue">
                        <div class="info">
                            <h3>For Any Emergency Contact</h3>
                            <p>Esteem spirit temper too say adieus.</p>
                        </div>
                        <div class="info_button">
                            <a href="#" class="boxed-btn3-white">+10 378 4673 467</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div
                        class="single_emergency d-flex align-items-center justify-content-center emergency_bg_2 overlay_skyblue">
                        <div class="info">
                            <h3>Make an Online Appointment</h3>
                            <p>Esteem spirit temper too say adieus.</p>
                        </div>
                        <div class="info_button">
                            <a href="#" class="boxed-btn3-white">Make an Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Emergency_contact end -->

    <?php include 'include/footer_hindi.php'; ?>


    <!-- form itself end-->
    <!-- <form id="test-form" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <h3>Make an Appointment</h3>
                <form action="#">
                    <div class="row">
                        <div class="col-xl-6">
                            <input id="datepicker" placeholder="Pick date">
                        </div>
                        <div class="col-xl-6">
                            <input id="datepicker2" placeholder="Suitable time">
                        </div>
                        <div class="col-xl-6">
                            <select class="form-select wide" id="default-select" class="">
                                <option data-display="Select Department">Department</option>
                                <option value="1">Eye Care</option>
                                <option value="2">Physical Therapy</option>
                                <option value="3">Dental Care</option>
                            </select>
                        </div>
                        <div class="col-xl-6">
                            <select class="form-select wide" id="default-select" class="">
                                <option data-display="Doctors">Doctors</option>
                                <option value="1">Mirazul Alom</option>
                                <option value="2">Monzul Alom</option>
                                <option value="3">Azizul Isalm</option>
                            </select>
                        </div>
                        <div class="col-xl-6">
                            <input type="text" placeholder="Name">
                        </div>
                        <div class="col-xl-6">
                            <input type="text" placeholder="Phone no.">
                        </div>
                        <div class="col-xl-12">
                            <input type="email" placeholder="Email">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed-btn3">Confirm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form> -->
    <!-- form itself end -->

    <!-- JS here -->
    <?php include 'include/sourcelink-js.php'; ?>


    <script type="text/javascript">
        $(document).ready(function() {});

        function gettechnology() {

        }


        function openTab(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("indextabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        document.getElementById("defaultOpen").click();
    </script>
</body>

</html>