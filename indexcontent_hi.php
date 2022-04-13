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
   <div class="service_area" id="mainsection">
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
                       <h3>सूचना/ घोषणाएं</h3>
                       <ul class="bulletstyle">
                           <?php if ($announcecount == 0) {
                                echo '<li style="color:#111;">  No Data Found</li>'; ?>
                               <!-- <div class="page">
                                    <div class="container-center">
                                        <div class="box tgg2 tgg1">
                                         
                                           <marquee class="marquee1"width="100%" style="padding-left:20px;" direction="up" height="100%"> <ul class=" nobulletstyle" >
                                                <li style="color:#111;"><a href="#"> No Data Found</a></li>
                                                <li style="color:#111;"><a href="#"> No Data Found</a></li>
                                                <li style="color:#111;"><a href="#"> No Data Found</a></li>
                                                <li style="color:#111;"><a href="#"> No Data Found</a></li>
                                            </ul>
                                           </marquee>
                                            
                                        </div>
                                    </div>
                                </div> -->

                           <?php    } else { ?>
                               <div class="page">
                                   <div class="container-center">
                                       <div class="box tgg2 tgg1">
                                           <marquee onMouseOver="this.stop()" onMouseOut="this.start()" class="" width="100%" style="padding-left:20px;" direction="up" height="100%">
                                               <ul class=" nobulletstyle marquee1">
                                                   <?php
                                                    $i = 0;
                                                    while (
                                                        $row = pg_fetch_array($resultannounce)
                                                    ) { ?>

                                                       <li>
                                                           <a href="announce_details.php" target="_blank"> <?php echo $row['title']; ?> </a>
                                                       </li>
                                               <?php }
                                                } ?>
                                               </ul>
                                           </marquee>
                                       </div>
                                   </div>
                               </div>

                       </ul>
                       <br>
                       <a href="announce_details.php" class="moredetails align-self-end">More Details --></a>
                   </div>
               </div>
               <div class="col-xl-4 col-md-4 wow zoomInUp" style="background-color:#041e42; border-radius: 15px; padding-right: 10px; visibility: visible;">
                   <div class="single_service">
                       <div class="icon">
                           <i class="fa fa-bullhorn" style="color :#fff;"></i>
                       </div>
                       <h3 style="color :#fff;">घटनाक्रम</h3>
                       <!-- <br> -->
                       <ul class="bulletstylewhite">
                           <?php if ($eventcount == 0) {
                                echo ' <li>  No Data Found</li>';
                            } else { ?>
                               <div class="page">
                                   <div class="container-center">
                                       <div class="box tgg2 tgg1">
                                           <marquee onMouseOver="this.stop()" onMouseOut="this.start()" class="" width="100%" style="padding-left:20px;" direction="up" height="100%">
                                               <ul class=" nobulletstyle bluebox">
                                                   <?php
                                                    $i = 0;
                                                    while ($row = pg_fetch_array($resultevent)) { ?>

                                                       <li>
                                                           <a href="niot_events.php" target="_blank"> <?php echo $row['title']; ?> </a>
                                                       </li>
                                               <?php   }
                                                } ?>
                                               </ul>
                                           </marquee>
                                       </div>
                                   </div>
                               </div>

                               <!-- <li>Clinical excellence must be</li>
                            <p > </p>
                            <li>Clinical excellence must be </li> -->
                       </ul>
                       <br>
                       <a href="niot_events.php" class="moredetails_bgblue ">More Details --></a>
                   </div>
               </div>
               <div class="col-xl-4 col-md-4 wow fadeInRightBig" style="background-color: #eeeeee;border-radius: 15px;">
                   <div class="single_service">
                       <div class="icon">
                           <i class="fa fa-calendar"></i>
                       </div>
                       <h3>भर्ती</h3>
                       <ul class="bulletstyle">
                           <?php if ($reccount == 0) {
                                echo ' <li style="color:#111;">  No Data Found</li>';
                            } else {
                                $i = 0;
                                while ($row = pg_fetch_array($resultRec)) { ?>

                                   <li> <a href="recruitment_details.php" target="_blank"><?php echo $row['title']; ?> </a></li></br>
                           <?php }
                            } ?>
                       </ul>
                       <br>
                       <a href="recruitment_details.php" class="moredetails align-self-end">More Details --></a>
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
                       <h2>Welcome to <h3>राष्ट्रीय समुद्र प्रौद्योगिकी संस्थान </h3>
                       </h2>
                       <p>
                           राष्ट्रीय समुद्र प्रौद्योगिकी संस्थान(रासप्रौसं) की स्थापना नवंबर 1993 में भारत सरकार के पृथ्वी विज्ञान मंत्रालय के अंतर्गत एक स्वायत्त सोसाइटी के रूप में की गई थी । रासप्रौसं का प्रबंधन शासकीय परिषद द्वारा किया जाता है और निदेशक इस संस्थान के प्रमुख हैं I पृथ्वी विज्ञान मंत्रालय के अंतर्गत रासप्रौसं को आरंभ करने का मुख्य उद्देश्य भारतीय अनन्य क्षेत्र, जो भारत के भूमि क्षेत्र का लगभग दो-तिहाई हिस्सा है, के निर्जीव एवं सजीव संसाधन, के उपयोग से संबंधित विभिन्न प्रौद्योगिकी समस्याओं को सुलझाने के लिए विश्वसनीय देशी तकनीक विकसित करना है ।

                       </p>
                       <ul class="bulletstyle">
                           <li> <a href="about.php"><b style="color:#fff">रासप्रौसं के बारे में
                                   </b> </a></li>
                           <li> <a href="about.php"><b style="color:#fff">मिशन कथन</b> </a>
                           </li>
                           <li> <a href="about.php"><b style="color:#fff">मुख्य उद्देश्य</b> </a> </li>
                       </ul>
                       <a href="about.php" class="boxed-btn3-white-2">अधिक जानकारी </a>
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
                       <h3 style="color:#fff;">हमारे प्रमुख</h3>
                   </div>
               </div>
           </div>
           <div class="row ">
               <div class="col-lg-12">
                   <div class="card-grid">
                       <a class="leadercard wow fadeInLeftBig" href="niot_minister.php">
                           <div class="card__background" style="background-image:url(img/leaders/minister_new.jpg)">
                               <!-- <img src="img/leaders/leader1.jpg" alt=""> -->
                           </div>
                           <div class="card__content text-center">
                               <!-- <div class="experts_name "> -->
                               <!-- <a href="niot_minister.php"> -->
                               <h3>डॉ .जितेंद्र सिंह</h3>
                               <span>माननीय केंद्रीय पृथ्वी विज्ञान मंत्री </span>
                               <!-- </a> -->
                               <!-- </div> -->
                           </div>
                       </a>
                       <a class="leadercard wow zoomInUp" href="niot_secretary.php">
                           <div class="card__background" style="background-image: url(img/leaders/leader2.jpg)"></div>
                           <div class="card__content text-center">
                               <h3>डॉ.एम.रविचंद्रन</h3>
                               <span>सचिव, पृथ्वी विज्ञान मंत्रालय (पृविमं)
                               </span>
                           </div>
                       </a>
                       <a class="leadercard  wow fadeInRightBig" href="niot_director.php">
                           <div class="card__background" style="background-image: url(img/leaders/leader3.jpg)"></div>
                           <div class="card__content text-center">
                               <h3>डॉ. जी ए रामदास</h3>
                               <span>निदेशक, राष्ट्रीय समुद्र प्रौद्योगिकी संस्थान </span>

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
                       <h3>प्रौद्योगिकी</h3>
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
                           <h3><a href="#">तटीय एवं पर्यावरणीय इंजीनियरी</a></h3>
                           <p style="text-align:justify;">यह समूह समुद्र (तटीय और पर्यावरणीय) से संबंधित क्षेत्रों में अनुप्रयोग-आधारित प्रौद्योगिकी विकसित करने के दायित्व के साथ कार्य करता है। इस समूह का लक्ष्य देश के संरचनात्मक क्षेत्र में समग्र विकास हेतु सुसंगत कार्यक्रमों को बढ़ावा देना है, जिससे राष्ट्र निर्माण के कार्य में योगदान दिया जा सके...</p>

                           <a href="niot_technology.php?link= '<?php echo base64_encode(
                                                                    6
                                                                ); ?>'" class="learn_more">अधिक जानकारी</a>
                       </div>
                   </div>
               </div>
               <div class="col-xl-4 col-md-6 col-lg-4">
                   <div class="single_department">
                       <div class="department_thumb">
                           <img src="img/department/tech_2.jpg" alt="">
                       </div>
                       <div class="department_content">
                           <h3><a href="#">गहरा समुद्र प्रौद्योगिकी</a></h3>
                           <p style="text-align:justify;">पॉलिमेटेलिक नोड्यूल्स में आर्थिक रूप से मूल्यवान धातुएं हैं जैसे कि तांबा, कोबाल्ट, निकल और मैंगनीज आती है,और उन्हें इन धातुओं की बढ़ती हुई भूमि संसाधनों की देखभाल के लिए संभावित संसाधनों के रूप में देखा जाता है। भारतीय पायनियर क्षेत्र में 380 मिलियन टन नोड्यूल..</p>

                           <a href="niot_technology.php?link= '<?php echo base64_encode(
                                                                    2
                                                                ); ?>'" class="learn_more">अधिक जानकारी</a>
                       </div>
                   </div>
               </div>
               <div class="col-xl-4 col-md-6 col-lg-4">
                   <div class="single_department">
                       <div class="department_thumb">
                           <img src="img/department/tech_3.jpg" alt="">
                       </div>
                       <div class="department_content">
                           <h3>ऊर्जा एवं शुद्ध जल</h3>
                           <p>नवीकरणीय ऊर्जा एवं शुद्ध जल के लिए समुद्री संसाधनों का उपयोग करने हेतु वैकल्पिक प्रौद्योगिकियों की खोज करना इस समूह का मुख्य उद्देश्य है । वर्तमान में यह समूह तीन विशिष्ट क्षेत्रों – निम्न तापमान औषणीय विलवणीकरण (एलटीटीडी) प्रक्रिया के प्रयोग से शुद्ध जल का उत्पादन और दो सम्पूर्ण रूप से...</p>
                           <a href="#" class="learn_more">अधिक जानकारी</a>
                       </div>
                   </div>
               </div>
               <div class="col-xl-4 col-md-6 col-lg-4">
                   <div class="single_department">
                       <div class="department_thumb">
                           <img src="img/department/tech_4.jpg" alt="">
                       </div>
                       <div class="department_content">
                           <h3>समुद्री प्रेक्षण</h3>
                           <p>ईएसएसओ पृविमं के समुद्री अवलोकन तंत्र (ओओएन) परियोजना के तहत, रासप्रौसं के समुद्री प्रेक्षण प्रणाली (ओओएस) समूह को मूरड बॉय परियोजनाओं पर गतिविधियाँ करने के लिए सौंपा गया है। ओओएस समूह, 1996 में स्थापित किया गया था, जिसका उद्देश्य भारतीय समुद्रों में दलदली बॉय अवलोकन नेटवर्क और..</p>
                           <a href="#" class="learn_more">अधिक जानकारी</a>
                       </div>
                   </div>
               </div>
               <div class="col-xl-4 col-md-6 col-lg-4">
                   <div class="single_department">
                       <div class="department_thumb">
                           <img src="img/department/tech_5.jpg" alt="">
                       </div>
                       <div class="department_content">
                           <h3>समुद्री सेंसर प्रणालियां</h3>
                           <p style="text-align:justify;">हमारी पृथ्वी, नीला ग्रह, 71% महासागरों से आच्छादित है, जिनमें से 95% अभी भी अस्पष्ट है। महासागर के बारे में हमारा ज्ञान वास्तव में चौंकाने वाला है। संवेदिक प्रौद्योगिकियां इस तरह के महासागरीय अनुसंधान और अन्वेषण को बढ़ाने के लिए एक उपकरण के रूप में काम करती हैं।...</p>
                           <a href="#" class="learn_more">अधिक जानकारी</a>
                       </div>
                   </div>
               </div>
               <div class="col-xl-4 col-md-6 col-lg-4">
                   <div class="single_department">
                       <div class="department_thumb">
                           <img src="img/department/tech_6.png" alt="">
                       </div>
                       <div class="department_content">
                           <h3>समुद्री जैवप्रौद्योगिकी</h3>
                           <p style="text-align:justify;">कृषि और पर्यटन को विकसित करने और द्वीप समूहों के प्राकृतिक समुद्री संसाधनों का अध्ययन करने के लिए, 1986 के वर्ष में माननीय प्रधान मंत्री की अध्यक्षता में द्वीप विकास प्राधिकरण (आईडीए) की स्थापना की गई थी। आईडीए ने तत्कालीन महासागर विकास विभाग (डीओडी), वर्तमान...</p>
                           <a href="#" class="learn_more">अधिक जानकारी</a>
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
           <div class="container">
               <div class="col-lg-12 ">
                   <h2 class="text-center">Publications </h2>
               </div>
               <main class="techmain">
                   <section class="card-area">
                       <!-- Card: City -->
                       <section class="card-section">
                           <div class="techcard">
                               <div class="flip-card">
                                   <div class="flip-card__container">
                                       <div class="card-front">
                                           <div class="card-front__tp card-front__tp--city">
                                               <!-- <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" class="card-front__icon">
                                                    <g>
                                                        <path d="M49.7,22c-1.1,0-2,0.9-2,2v32.2c0,1.1,0.9,2,2,2s2-0.9,2-2V24C51.7,22.9,50.8,22,49.7,22z" />
                                                        <path d="M13,29.5c1.1,0,2-0.9,2-2s-0.9-2-2-2H5.7v-3h20.8c1.1,0,2-0.9,2-2s-0.9-2-2-2H5.7v-3h20.8c1.1,0,2-0.9,2-2s-0.9-2-2-2H5.7
                                       V7.1h24.8v15.3c0,1.1,0.9,2,2,2s2-0.9,2-2V5.1c0-1.1-0.9-2-2-2H3.7c-1.1,0-2,0.9-2,2v51c0,1.1,0.9,2,2,2s2-0.9,2-2V36.5H13
                                       c1.1,0,2-0.9,2-2s-0.9-2-2-2H5.7v-3H13z" />
                                                        <path d="M58,11.9c0-0.1,0-0.1,0-0.2c0-0.1,0-0.1-0.1-0.2c0-0.1,0-0.1-0.1-0.2c0-0.1-0.1-0.1-0.1-0.2c0,0,0-0.1-0.1-0.1c0,0,0,0,0,0
                                       c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1-0.1-0.1-0.1c0,0-0.1-0.1-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c0,0-0.1-0.1-0.2-0.1
                                       c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2-0.1c-0.1,0-0.1,0-0.2-0.1c0,0-0.1,0-0.1,0c-0.1,0-0.2,0-0.2,0c0,0,0,0,0,0
                                       c0,0-0.1,0-0.1,0c-0.1,0-0.2,0-0.2,0c-0.1,0-0.1,0-0.2,0c-0.1,0-0.1,0-0.2,0.1c-0.1,0-0.1,0.1-0.2,0.1c0,0-0.1,0-0.1,0.1l-12.6,7.8
                                       c0,0,0,0,0,0c-0.1,0-0.1,0.1-0.2,0.1c0,0-0.1,0.1-0.1,0.1c0,0-0.1,0.1-0.1,0.1c0,0-0.1,0.1-0.1,0.2c0,0.1-0.1,0.1-0.1,0.2
                                       c0,0.1-0.1,0.1-0.1,0.2c0,0.1,0,0.1-0.1,0.2c0,0.1,0,0.1-0.1,0.2c0,0.1,0,0.1,0,0.2c0,0.1,0,0.1,0,0.2c0,0,0,0,0,0v5.4H22.1
                                       c-1.1,0-2,0.9-2,2v28.9c0,1.1,0.9,2,2,2s2-0.9,2-2V29.3h17.3v26.9c0,1.1,0.9,2,2,2s2-0.9,2-2V21l8.6-5.3v40.5c0,1.1,0.9,2,2,2
                                       s2-0.9,2-2V12.1C58,12,58,12,58,11.9z" />
                                                        <path d="M28,31L28,31c-1.1,0-2,0.9-2,2s0.9,2,2,2s2-0.9,2-2S29.1,31,28,31z" />
                                                        <path d="M33.5,31L33.5,31c-1.1,0-2,0.9-2,2s0.9,2,2,2c1.1,0,2-0.9,2-2S34.6,31,33.5,31z" />
                                                        <path d="M28,36L28,36c-1.1,0-2,0.9-2,2s0.9,2,2,2s2-0.9,2-2S29.1,36,28,36z" />
                                                        <path d="M33.5,36L33.5,36c-1.1,0-2,0.9-2,2s0.9,2,2,2c1.1,0,2-0.9,2-2S34.6,36,33.5,36z" />
                                                    </g>
                                                </svg> -->

                                               <h2 class="card-front__heading">
                                               प्रेस विज्ञप्ति

                                               </h2>
                                               <!-- <p class="card-front__text-price">
                                                    From £29
                                                </p> -->
                                           </div>

                                           <div class="card-front__bt">
                                               <p class="card-front__text-view card-front__text-view--city">
                                                   <i class="fa fa-eye"></i> View Here
                                               </p>
                                           </div>
                                       </div>
                                       <div class="card-back">
                                           <video class="video__container" autoplay muted loop>
                                               <source class="video__media" src="https://player.vimeo.com/external/370331493.sd.mp4?s=e90dcaba73c19e0e36f03406b47bbd6992dd6c1c&profile_id=139&oauth2_token_id=57447761" type="video/mp4">
                                           </video>
                                       </div>
                                   </div>
                               </div>

                               <div class="inside-page">
                                   <div class="inside-page__container">
                                       <h3 class="inside-page__heading inside-page__heading--city">
                                       प्रेस विज्ञप्ति

                                       </h3>
                                       <p class="inside-page__text">
                                           पॉलिमेटेलिक नोड्यूल्स में आर्थिक रूप </p>

                                       </p>
                                       <a href="pressrelease_details.php" class="inside-page__btn inside-page__btn--city">View details</a>
                                   </div>
                               </div>
                           </div>
                       </section>

                       <!-- Card: Ski -->
                       <section class="card-section">
                           <div class="techcard">
                               <div class="flip-card">
                                   <div class="flip-card__container">
                                       <div class="card-front">
                                           <div class="card-front__tp card-front__tp--ski">
                                               <!-- <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" class="card-front__icon">
                                                    <g>
                                                        <path d="M58.8,54.5L38.5,19.3c-0.4-0.6-1-1-1.7-1s-1.4,0.4-1.7,1L14.8,54.5c-0.4,0.6-0.4,1.4,0,2c0.4,0.6,1,1,1.7,1h40.6
                                       c0.7,0,1.4-0.4,1.7-1C59.2,55.9,59.2,55.1,58.8,54.5z M36.8,24.3l5.8,10c-0.5-0.2-1.1-0.3-1.7-0.3c-2.5,0-3.7,1.5-4.6,2.5
                                       c-0.7,0.9-1,1.1-1.5,1.1s-0.8-0.2-1.5-1.1c-0.6-0.7-1.3-1.5-2.4-2.1L36.8,24.3z M20,53.5l8.9-15.4c0.5,0,0.7,0.3,1.4,1.1
                                       c0.8,1,2.1,2.5,4.6,2.5s3.7-1.5,4.6-2.5c0.7-0.9,1-1.1,1.5-1.1c0.5,0,0.8,0.2,1.5,1.1c0.8,1,2.1,2.5,4.5,2.5l6.8,11.8H20z" />
                                                        <path d="M14.7,51.5c1.1,0,2-0.9,2-2s-0.9-2-2-2H6.4l9.1-15.7c0.6,0.6,1.5,1.3,2.9,1.3c1.8,0,2.8-1.2,3.3-1.8
                                       c0.1-0.1,0.2-0.2,0.3-0.3c0.1,0.1,0.2,0.2,0.3,0.3c0.5,0.6,1.5,1.8,3.3,1.8c1.1,0,2-0.9,2-2c0-1.1-0.9-2-1.9-2
                                       c-0.1-0.1-0.2-0.2-0.3-0.4c-0.5-0.6-1.5-1.8-3.3-1.8c-1.8,0-2.8,1.2-3.3,1.8c-0.1,0.1-0.2,0.2-0.3,0.3c-0.1-0.1-0.2-0.2-0.3-0.3
                                       c-0.1-0.2-0.3-0.4-0.5-0.6l5.7-9.9l3.8,6.6c0.6,1,1.8,1.3,2.7,0.7c1-0.6,1.3-1.8,0.7-2.7L25,13.2c-0.4-0.6-1-1-1.7-1
                                       s-1.4,0.4-1.7,1l-8.4,14.5c-0.1,0.1-0.2,0.3-0.3,0.4L1.2,48.5c0,0,0,0.1,0,0.1c0,0.1-0.1,0.1-0.1,0.2c0,0.1,0,0.1-0.1,0.2
                                       c0,0.1,0,0.1,0,0.2c0,0.1,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0.1,0,0.1,0,0.2c0,0.1,0,0.1,0,0.2C1,50,1,50,1,50.1
                                       c0,0.1,0,0.1,0.1,0.2c0,0.1,0.1,0.1,0.1,0.2c0,0.1,0.1,0.1,0.1,0.2c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0.1,0.1,0.1c0,0,0.1,0.1,0.1,0.1
                                       c0.1,0,0.1,0.1,0.2,0.1c0,0,0,0,0.1,0c0,0,0.1,0,0.1,0c0.1,0.1,0.2,0.1,0.3,0.1c0,0,0.1,0,0.1,0c0.1,0,0.3,0.1,0.5,0.1c0,0,0,0,0,0
                                       c0,0,0,0,0,0c0,0,0,0,0,0H14.7z" />
                                                        <path d="M40.7,12.3h3.1l-2.2,2.2c-0.6,0.6-0.6,1.5,0,2.1c0.3,0.3,0.7,0.4,1.1,0.4s0.8-0.1,1.1-0.4l2.2-2.2v3.1
                                       c0,0.8,0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5v-3.1l2.2,2.2c0.3,0.3,0.7,0.4,1.1,0.4s0.8-0.1,1.1-0.4c0.6-0.6,0.6-1.5,0-2.1l-2.2-2.2h3.1
                                       c0.8,0,1.5-0.7,1.5-1.5s-0.7-1.5-1.5-1.5h-3.1l2.2-2.2c0.6-0.6,0.6-1.5,0-2.1c-0.6-0.6-1.5-0.6-2.1,0L49,7.2V4
                                       c0-0.8-0.7-1.5-1.5-1.5S46,3.2,46,4v3.1l-2.2-2.2c-0.6-0.6-1.5-0.6-2.1,0c-0.6,0.6-0.6,1.5,0,2.1l2.2,2.2h-3.1
                                       c-0.8,0-1.5,0.7-1.5,1.5S39.9,12.3,40.7,12.3z" />
                                                    </g>
                                                </svg> -->
                                               <h2 class="card-front__heading">
                                               सूचनापत्र
                                               </h2>
                                           </div>

                                           <div class="card-front__bt">
                                               <p class="card-front__text-view card-front__text-view--ski">
                                                   <i class="fa fa-eye"></i> View Here
                                               </p>
                                           </div>
                                       </div>

                                       <div class="card-back">
                                           <video class="video__container" autoplay muted loop>
                                               <source class="video__media" src="https://player.vimeo.com/external/195913085.sd.mp4?s=7c12f7a83de62a8900fd2ae049297070b9bc8a54&profile_id=164&oauth2_token_id=574477611" type="video/mp4">
                                           </video>
                                       </div>
                                   </div>
                               </div>

                               <div class="inside-page">
                                   <div class="inside-page__container">
                                       <h3 class="inside-page__heading inside-page__heading--ski">
                                       सूचनापत्र
                                       </h3>
                                       <p class="inside-page__text">
                                           पॉलिमेटेलिक नोड्यूल्स में आर्थिक रूप से मूल्यवान धातुएं हैं जैसे कि तांबा, कोबाल्ट,</p>
                                       <a href="newsletter_details.php" class="inside-page__btn inside-page__btn--ski">View Details</a>
                                   </div>
                               </div>
                           </div>
                       </section>

                       <!-- Card: Beach -->
                       <section class="card-section">
                           <div class="techcard">
                               <div class="flip-card">
                                   <div class="flip-card__container">
                                       <div class="card-front">
                                           <div class="card-front__tp card-front__tp--beach">
                                               <!-- <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" class="card-front__icon">
                                                    <path d="M57.2,28h-7.4c-0.4-4-2-7.7-4.4-10.6l3.2-3.2c0.8-0.8,0.8-2,0-2.8c-0.8-0.8-2-0.8-2.8,0l-3.2,3.2c-3-2.4-6.6-4-10.6-4.4V2.8
                                   c0-1.1-0.9-2-2-2s-2,0.9-2,2v7.4c-4,0.4-7.7,2-10.6,4.4l-3.2-3.2c-0.8-0.8-2-0.8-2.8,0c-0.8,0.8-0.8,2,0,2.8l3.2,3.2
                                   c-2.4,3-4,6.6-4.4,10.6H2.8c-1.1,0-2,0.9-2,2s0.9,2,2,2h7.4c0.4,4,2,7.7,4.4,10.6l-3.2,3.2c-0.8,0.8-0.8,2,0,2.8
                                   c0.4,0.4,0.9,0.6,1.4,0.6s1-0.2,1.4-0.6l3.2-3.2c3,2.4,6.6,4,10.6,4.4v7.4c0,1.1,0.9,2,2,2s2-0.9,2-2v-7.4c4-0.4,7.7-2,10.6-4.4
                                   l3.2,3.2c0.4,0.4,0.9,0.6,1.4,0.6s1-0.2,1.4-0.6c0.8-0.8,0.8-2,0-2.8l-3.2-3.2c2.4-3,4-6.6,4.4-10.6h7.4c1.1,0,2-0.9,2-2
                                   S58.3,28,57.2,28z M30,45.9c-8.8,0-15.9-7.2-15.9-15.9c0-8.8,7.2-15.9,15.9-15.9c8.8,0,15.9,7.2,15.9,15.9
                                   C45.9,38.8,38.8,45.9,30,45.9z" />
                                                </svg> -->

                                               <h2 class="card-front__heading">
                                               वार्षिक रिपोर्ट
                                               </h2>
                                               <!-- <p class="card-front__text-price">
                                                    From £229
                                                </p> -->
                                           </div>

                                           <div class="card-front__bt">
                                               <p class="card-front__text-view card-front__text-view--beach">
                                                   <i class="fa fa-eye"></i> View Here
                                               </p>
                                           </div>
                                       </div>
                                       <div class="card-back">
                                           <video class="video__container" autoplay muted loop>
                                               <source class="video__media" src="https://player.vimeo.com/external/332588783.sd.mp4?s=cab1817146dd72daa6346a1583cc1ec4d9e677c7&profile_id=139&oauth2_token_id=57447761" type="video/mp4">
                                           </video>
                                       </div>
                                   </div>
                               </div>

                               <div class="inside-page">
                                   <div class="inside-page__container">
                                       <h3 class="inside-page__heading inside-page__heading--beach">
                                       वार्षिक रिपोर्ट
                                       </h3>
                                       <p class="inside-page__text">
                                           Relax and get sun-kissed tan in the sea or take up surfting for an adventure!
                                       </p>
                                       <a href="annualreports_details.php" class="inside-page__btn inside-page__btn--beach">View Details</a>
                                   </div>
                               </div>
                           </div>
                       </section>
                   </section>
               </main>


               <!-- <div class="container">
                    <div class="col-lg-12 ">
                        <div class="row text-center">
                            <div class="col-lg-4">
                                <div class="hovercard hovercard3">
                                    <div class="icon" style="background:#6eadd4;">
                                        <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                        <p class="centertitle">Press Release</p>
                                    </div>

                                    <div class="content">
                                        <p>This is where I network and build my professional protfolio.</p>
                                        <p>This is where I network and build my professional protfolio.</p>
                                  
                                        <a href="pressrelease_details.php" class="publicinside-page__btn publicinside-page__btn--city" style="">More </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="hovercard hovercard3">
                                    <p class="centertitle">Technology Transfer & Patents</p>
                                    <div class="icon" style="background:#4aada9;">
                                        <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                        <p class="centertitle">Technology Transfer & Patents</p>

                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4">
                                <div class="hovercard hovercard3">
                                    <div class="icon" style="background:#6eadd4;">
                                        <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                        <p class="centertitle">Tenders</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->


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
                                    <a href="pressrelease_details.php" class="boxed-btn3">अधिक जानकारी </a>
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
                   <h2 style="color:#fff;">गैलरी</h2>
                   <p style="color:#fff;">Group of NIOT Photos & Videos related to Events , Technologies, Awards etc.</p>
               </div>

               <div class="row" data-aos="fade-up" data-aos-delay="100">
                   <div class="col-lg-12 d-flex justify-content-center filter-button-group">
                       <ul id="portfolio-flters">
                           <li data-filter="*" class="filter-active">समस्त</li>
                           <li data-filter=".filter-image">फोटो गैलरी</li>
                           <li data-filter=".filter-video">वीडियो गैलरी</li>
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
                                   <a href="portfolio-details.html" title="अधिक जानकारी"><i class="bx bx-link"></i></a>
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
                                   <a href="portfolio-details.html" title="अधिक जानकारी"><i class="bx bx-link"></i></a>
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
                                   <a href="portfolio-details.html" title="अधिक जानकारी"><i class="bx bx-link"></i></a>
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
                                   <a href="portfolio-details.html" title="अधिक जानकारी"><i class="bx bx-link"></i></a>
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
                                   <a href="portfolio-details.html" title="अधिक जानकारी"><i class="bx bx-link"></i></a>
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
                                   <a href="portfolio-details.html" title="अधिक जानकारी"><i class="bx bx-link"></i></a>
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
                                        <a href="portfolio-details.html" title="अधिक जानकारी"><i class="bx bx-link"></i></a>
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
                                        <a href="portfolio-details.html" title="अधिक जानकारी"><i class="bx bx-link"></i></a>
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
                                        <a href="portfolio-details.html" title="अधिक जानकारी"><i class="bx bx-link"></i></a>
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
                                <a href="portfolio-details.html" title="अधिक जानकारी"><i class="bx bx-link"></i></a>
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
                                <a href="portfolio-details.html" title="अधिक जानकारी"><i class="bx bx-link"></i></a>
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
                                <a href="portfolio-details.html" title="अधिक जानकारी"><i class="bx bx-link"></i></a>
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