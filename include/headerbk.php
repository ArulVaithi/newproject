<!-- <div id="loading">
  <img id="loading-image" src="img/Logo_niot.jpg" alt="Loading..." />
</div> -->
<?php
include('db_connection.php');

$sql  = "select * from mst_technology_en where status='A'";

$result =  pg_query($db, $sql);

?>
<header>
    <div class="header-area ">
        <div class="header-top_area">
            <!-- <div class="container"> -->
            <div class="row">
                <div class="col-xl-4 col-md-6 ">
                    <div class="short_contact_listleft">
                        <ul>
                            <li><a href="#">National Institute of Ocean Technology (NIOT) | Govt of India</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-8 col-md-6">
                    <div class="short_contact_list">
                        <ul>
                            <li><a href="#">Skip to main content </a></li>
                            <li><a href="#"><i style="color:#fff" class="fa fa-search"></i>search</a></li>
                            <li><a href="#"><i style="color:#fff" class="fa fa-sitemap"></i></a></li>
                            <li><a href="#" id="btn-increase">A+</a></li>
                            <li><a href="#" id="btn-decrease"></i>A-</a></li>
                            <li><a href="#">हिंदी</a></li>
                            <li><a href="#">English</a></li>
                            <li><a href="#">தமிழ்</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- </div> -->
        </div>
        <div id="sticky-header" class="main-header-area">
            <!-- <div class="container"> -->
            <div class="row ">
                <div class="col-xl-1 col-lg-1">
                    <div class="logo">
                        <a href="index.php">
                            <img src="img/Logo_niot.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="logotext ">
                        <a href="index.php">
                            <h5 style="padding-bottom: 0px"><strong>National Institute of Ocean Technology</strong>
                            </h5>
                            </br>
                            <p style="padding-top: 0px"> Ministry Of Earth Sciences, Government Of India</p>
                        </a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="main-menu  d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                                <li><a class="active" href="index.php">home</a></li>
                                <li><a href="#">About Us <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="about.php">About NIOT</a></li>
                                        <li><a href="#">Image Gallery</a></li>
                                        <li><a href="#">Video Gallery</a></li>
                                        <li><a href="events_gallery.php">Events Gallery</a></li>
                                        <li><a href="#">NIOT Staff</a></li>
                                        <li><a href="#">Right to Information</a></li>
                                        <li><a href="#">IPR Details</a></li>
                                        <li><a href="#">Employee's Corner</a></li>
                                        <li><a href="#">Administration</a></li>
                                        <li><a href="#">Silver Jubilee Celebration</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Publications <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="annualreports_details.php">Annual Reports</a></li>
                                        <li><a href="pressrelease_details.php">Press Release</a></li>
                                        <li><a href="newsletter_details.php">Newsletter</a></li>
                                        <li><a href="#">Technology Transfer & Patents</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Technology <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <?php $i = 0;
                                        $file;
                                        while (
                                            $row = pg_fetch_array($result)
                                        ) { ?>
                                            <li><a href="niot_technology.php?link=<?php echo base64_encode($row['tech_id']) ?>">
                                                    <?php echo $row['title'] ?></a></li>

                                        <?php } ?>
                                        <!-- <li><a href="niot_technology.php?link= '<?php echo base64_encode(6) ?>'">Energy and Fresh Water</a></li>
                                        <li><a href="#">Ocean Observations</a></li>
                                        <li><a href="#">Vessel Management Cell</a></li>
                                        <li><a href="#">Ocean Acoustics</a></li>
                                        <li><a href="#">Ocean Structures</a></li>
                                        <li><a href="#">Ocean Electronics</a></li>
                                        <li><a href="#">Costal Environmental Engineering</a></li>
                                        <li><a href="#">Marine Sensors</a></li>
                                        <li><a href="#">Marine BioTechnology </a></li> -->
                                    </ul>
                                </li>
                                <li><a href="#">Tenders <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="#">Open Tenders</a></li>
                                        <li><a href="#">Limited Tenders</a></li>
                                        <li><a href="#">Single Tenders</a></li>
                                        <li><a href="#">NIOT User Login</a></li>
                                        <li><a href="#">Vendor Forgot Password</a></li>
                                        <li><a href="#">Vendor Registration</a></li>
                                        <li><a href="#">Tender Results</a></li>
                                        <li><a href="#">Form 16A Download (Vendors)</a></li>
                                    </ul>
                                </li>
                                <li><a href="recruitment_details.php">Recruitment</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </div>
</header>

<!-- <script>
  $(window).load(function() {
    $('#loading').hide();
  });
</script> -->