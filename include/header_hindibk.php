<!-- <div id="loading">
  <img id="loading-image" src="img/Logo_niot.jpg" alt="Loading..." />
</div> -->
<?php
include('db_connection.php');


// while (
//     $row = pg_fetch_array($result)
// ) { 
//     echo $row['title'];

// }

?>
<header>
    <div class="header-area ">
        <div class="header-top_area">
            <!-- <div class="container"> -->
            <div class="row">
                <div class="col-xl-5 col-md-6 ">
                    <div class="short_contact_listleft">
                        <ul>
                            <li><a href="#"><span class="tooltitle">राष्ट्रीय समुद्र प्रौद्योगिकी संस्थान  |  भारत सरकार</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7 col-md-6">
                    <div class="short_contact_list">
                        <ul>
                            <li><a href="#">
                                    <!-- <div class="searchBox">
                                        <input class="searchInput" type="text" name="" placeholder="Search" required>
                                        <button class="searchButton" href="#"> -->
                                    <i  class="fa fa-search"></i>
                                    <!-- </button>
                                    </div> -->
                                </a></li>
                            <li><span class="toolbarline"></span></li>
                            <li><a href="#" title="Skip to main content"> <i class="fa fa-share-square"></i></a></li>
                            <!-- <li><a href="#"><i style="color:#fff" class="fa fa-search"></i>search</a></li> -->
                            <li><span class="toolbarline"></span></li>
                            <li><a href="#"><i class="fa fa-sitemap"></i></a></li>
                            <li><span class="toolbarline"></span></li>
                            <li><a href="#" id="btn-decrease">A-</a></li>
                            <li><a href="#" id="">A</a></li>
                            <li><a href="#" id="btn-increase"></i>A+</a></li>
                            <li><span class="toolbarline"></span></li>
                            <li><a href="javascript:void(0);" style="color:#fff;background-color:#000;display: block; padding:5px;" class="dark" onclick="myFunction('dark');">A<sup>&nbsp;</sup></a></li>
                            <li> <a href="javascript:void(0);" class="light" style="color:#000;background-color:#fff;display: block;  padding: 5px;" onclick="myFunction('light');">A<sup>&nbsp;</sup></a></li>
                            <li><span class="toolbarline"></span></li>
                            <li><a href="index.php">English</a></li>
                            <!-- <li><span class="toolbarline"></span></li> -->
                            <!-- <li><a href="#">English</a></li> -->
                            <li><span class="toolbarline"></span></li>
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
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="logotext ">
                        <a href="index.php">
                            <h5><strong>राष्ट्रीय समुद्र प्रौद्योगिकी संस्थान </strong>
                            </h5>
                            </br>
                            <p style="padding-top: 0px"> पृथ्वी विज्ञान मंत्रालय,  भारत सरकार</p>
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2">
                    <!-- <div class="logo" >
                        <a href="index.php">
                            <img src="img/Logo_niot.jpg" alt="">
                        </a>
                    </div> -->
                </div>
                <div class="col-xl-2 col-lg-2">
                    <div class="swatcchlogo">
                        <a href="#">
                            <img src="assets/images/swacchbharat.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1">
                </div>
                <!-- <div class="col-xl-7 col-lg-7">
                    <div class="main-menu  d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                                <li><a class="active" href="index.php">home</a></li>
                                <li><a href="#">About Us <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="about.php">About NIOT</a></li>
                                        <li><a href="#">Administration</a></li>
                                        <li><a href="#">IPR Details</a></li>
                                        <li><a href="events_gallery.php">Events</a></li>
                                        <li><a href="#">Awards</a></li>
                                        <li><a href="#">RTI</a></li>
                                       
                                    </ul>
                                </li>
                                <li><a href="#">WHO'S WHO <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="niot_minister.php">Union Minister, MoES</a></li>
                                        <li><a href="niot_secretary.php">Secretary, MoES</a></li>
                                        <li><a href="niot_director.php">Director, NIOT</a></li>
                                        <li><a href="#">NIOT Staffs</a></li>
                                        <li><a href="#">Former Directors of NIOT</a></li>
                                    </ul>
                                </li>

                                <li><a href="#">Technology <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <?php $i = 0;
                                        $file;
                                        while (
                                            $row = pg_fetch_array($result)
                                        ) {
                                            echo $row['title']; ?>
                                            <li><a href="niot_technology.php?link=<?php echo base64_encode($row['tech_id']) ?>">
                                                    <?php echo $row['title'] ?></a></li>

                                        <?php } ?>
                                       
                                    </ul>
                                </li>
                                <li><a href="#">PUBLICATIONS <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="pressrelease_details.php">Press Release</a></li>
                                        <li><a href="announce_details.php">News / Announcements</a></li>
                                        <li><a href="annualreports_details.php">Annual Reports</a></li>

                                        <li><a href="newsletter_details.php">Newsletter</a></li>
                                        <li><a href="#">Technology Transfer & Patents</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">RECRUITMENTS <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="recruitment_details.php">Current Vacancies</a></li>
                                        <li><a href="#">Archives</a></li>

                                    </ul>
                                </li>
                                <li><a href="#">GALLERIES <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="#">Event Gallery</a></li>
                                        <li><a href="#">Award Gallery</a></li>
                                        <li><a href="#">Photo Gallery</a></li>
                                        <li><a href="#">NIOT User Login</a></li>
                                        <li><a href="#">Video Gallery</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">CONTACT US <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="#">NIOT, Chennai</a></li>
                                        <li><a href="#">RTI Contacts</a></li>
                                    </ul>
                                </li>
                      
                            </ul>
                        </nav>
                    </div>
                </div> -->

                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>

            <div class="row" style="background-color:#041e42;padding-bottom:5px;padding-top:5px;">
                <div class="col-xl-12 col-lg-12 text-center">
                    <!-- <div class="col-xl-7 col-lg-7"> -->
                    <div class="main-menu  d-none d-lg-block">

                        <nav>
                            <ul id="navigation">
                                <li><a class="active" href="index.php">मुख पृष्ठ</a></li>
                                <li><a href="#">हमारे बारे में <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="about_hindi.php">रासप्रौसं के बारे में</a></li>
                                        <li><a href="#">प्रशासन </a></li>
                                        <li><a href="#">आईपीआर विवरण </a></li>
                                        <li><a href="niot_events.php">Events</a></li>
                                        <li><a href="#">Awards</a></li>
                                       
                                        <!-- <li><a href="#">IPR Details</a></li>
                                        <li><a href="#">Employee's Corner</a></li>
                                        <li><a href="#">Administration</a></li>
                                        <li><a href="#">Silver Jubilee Celebration</a></li> -->
                                    </ul>
                                </li>
                                <li><a href="#">Who's Who <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="niot_minister.php">Union Minister, MoES</a></li>
                                        <li><a href="niot_secretary.php">Secretary, MoES</a></li>
                                        <li><a href="niot_director.php">Director, NIOT</a></li>
                                        <li><a href="#">NIOT Staffs</a></li>
                                        <li><a href="#">Former Directors of NIOT</a></li>
                                    </ul>
                                </li>

                                <li><a href="#">Technology <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <!-- <li><a href="#">Ocean Observations</a></li> -->
                                        <?php
                                        // $sql  = "select b1.title as technology, b1.tech_id  as tech_id from niot_technology_en  as a1 	 
                                        // inner join mst_technology_en as b1  on a1.mas_id = b1.tech_id
                                        // where b1.status ='A' and a1.status = 'A' group by b1.tech_id  order by b1.tech_id asc";
                                        $sql  = "select tech_id , title from mst_technology_en where status='A' ";
                                        $result =  pg_query($db, $sql);
                                        while (
                                            $row = pg_fetch_array($result)
                                        ) {
                                        ?>
                                            <li><a href="niot_technology.php?link=<?php echo base64_encode($row['tech_id']) ?>"><?php echo $row['title']; ?></a></li>

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
                                <li><a href="#">Publications <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="pressrelease_details.php">Press Release</a></li>
                                        <li><a href="announce_details.php">News / Announcements</a></li>
                                        <li><a href="annualreports_details.php">Annual Reports</a></li>

                                        <li><a href="newsletter_details.php">Newsletter</a></li>
                                        <li><a href="#">Technology Transfer & Patents</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Tenders</a></li>
                                <li><a href="#">Recruitments <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="recruitment_details.php">Current Vacancies</a></li>
                                        <li><a href="#">Archives</a></li>

                                    </ul>
                                </li>
                                <li><a href="#">Galleries <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="events_gallery.php">Event Gallery</a></li>
                                        <li><a href="#">Award Gallery</a></li>
                                        <li><a href="#">Photo Gallery</a></li>
                                        <li><a href="#">Video Gallery</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Contact Us <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="#">NIOT, Chennai</a></li>
                                        <li><a href="#">RTI Contacts</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">RTI <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="#">RTI Contacts</a></li>
                                        <li><a href="#">RTI Documents</a></li>
                                    </ul>
                                </li>
                                <!-- <li><a href="recruitment_details.php">Recruitment</a></li>
                                <li><a href="#">Contact Us</a></li> -->
                                <li>
                                    <a href="#">
                                        <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
                                        <label for="openSidebarMenu" class="sidebarIconToggle">
                                            <div class="spinner diagonal part-1"></div>
                                            <div class="spinner horizontal"></div>
                                            <div class="spinner diagonal part-2"></div>
                                        </label>
                                        <!-- <div id="sidebarMenu">
                                            <ul class="sidebarMenuInner">
                                                <li>Jelena Jovanovic <span>Web Developer</span></li>
                                                <li><a href="https://vanila.io" target="_blank">Company</a></li>
                                                <li><a href="https://instagram.com/plavookac" target="_blank">Instagram</a></li>
                                                <li><a href="https://twitter.com/plavookac" target="_blank">Twitter</a></li>
                                                <li><a href="https://www.youtube.com/channel/UCDfZM0IK6RBgud8HYGFXAJg" target="_blank">YouTube</a></li>
                                                <li><a href="https://www.linkedin.com/in/plavookac/" target="_blank">Linkedin</a></li>
                                            </ul>
                                        </div> -->
                                    </a>
                                </li>
                            </ul>

                        </nav>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
            <!-- </div> -->
        </div>
    </div>
</header>

<script>
    //   $(window).load(function() {
    //     $('#loading').hide();
    //   });

    const tlmx = new TimelineMax();
    //tlmx.set(".searchBox", { y: 0, opacity: 0 });
    tlmx.set(".text", {
        y: 0,
        opacity: 0
    });

    /*tlmx.to(".searchBox", 0.6, {
      y: -24,
      opacity: 1,
      ease: Power4.easeOut,
      delay: 0.4
    });*/

    tlmx.to(".text", 0.6, {
        y: 40,
        opacity: 1,
        ease: Power4.easeOut,
        delay: 0.4
    });
</script>