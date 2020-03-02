<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Global site tag (gtag.js) - Google Analytics -->

   <!-- Basic Page Needs ================================================== -->
   <meta charset="utf-8">

   <!-- Mobile Specific Metas ================================================== -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

   <!-- Site Title -->
   <title>PNW MBA 2020 Conference</title>

   <!-- CSS
         ================================================== -->
   <!-- Bootstrap -->
   <link rel="stylesheet" href="css/bootstrap.min.css">

   <!-- FontAwesome -->
   <link rel="stylesheet" href="css/font-awesome.min.css">
   <!-- Animation -->
   <link rel="stylesheet" href="css/animate.css">
   <!-- magnific -->
   <link rel="stylesheet" href="css/magnific-popup.css">
   <!-- carousel -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <!-- isotop -->
   <link rel="stylesheet" href="css/isotop.css">
   <!-- ico fonts -->
   <link rel="stylesheet" href="css/xsIcon.css">
   <!-- Template styles-->
   <link rel="stylesheet" href="css/style.css?=0.1">
   <!-- Responsive styles-->
   <link rel="stylesheet" href="css/responsive.css">

   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body>
   <div class="body-inner">

      <!-- banner start-->
      <section class="hero-area hero-speakers" id="home-section">
        <!-- <div class="banner-item overlay" style="background-image:url(http://127.0.0.1:8081/mbaa-pics/2019%20PNW%20MBA-23.jpg)"> -->
         <!--   <div class="banner-item overlay" style="background-image:url(assets/mbaa-pics/20190427-UWB_9685.jpg)"> -->
             <?php
                  if (isset($_GET["feature"]) &&  $_GET["feature"] == "0") {
                      ?><div class="banner-item " style="background-image:url(assets/mbaa-pics/k.jpg);"><?php

                  } else if (isset($_GET["feature"]) &&  $_GET["feature"] == "1") {
                      ?><div class="banner-item " style="background-image:url(assets/mbaa-pics/200116a_hero-merge-small.jpg);"><?php

                  } else if (isset($_GET["feature"]) &&  $_GET["feature"] == "2") {
                      ?><div class="banner-item " style="background-image:url(assets/mbaa-pics/20190427-UWB_9685.jpg);"><?php

                  } else if (isset($_GET["feature"]) &&  $_GET["feature"] == "3") {
                      ?><div class="banner-item " style="background-image:url(assets/mbaa-pics/20190427-UWB_9665.jpg);"><?php

                  } else {
                      ?><div class="banner-item " style="background-image:url(assets/mbaa-pics/2019%20PNW%20MBA-23.jpg);"><?php
                  }
             ?>

            <div class="container">
               <div class="linkedinbox">
               </div>
               <div class="row">
                  <div class="col-lg-7">
                     <div class="banner-content-wrap">

                        <p class="banner-info wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">April 18, 2020 | Bellevue, WA</p>
                        <h1 class="banner-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="700ms">PNW MBA Conference</h1>
                        <!--
                        <div class="countdown wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="800ms" style="visibility: visible; animation-duration: 1.5s; animation-delay: 800ms; animation-name: fadeInUp;">
                           <div class="counter-item">
                              <i class="icon icon-ring-1Asset-1"></i>
                              <span class="days">277</span>
                              <div class="smalltext">Days</div>

                           </div>
                           <div class="counter-item">
                              <i class="icon icon-ring-4Asset-3"></i>
                              <span class="hours">09</span>
                              <div class="smalltext">Hours</div>
                           </div>
                           <div class="counter-item">
                              <i class="icon icon-ring-3Asset-2"></i>
                              <span class="minutes">35</span>
                              <div class="smalltext">Minutes</div>
                           </div>
                        </div>
                         -->
                     </div>

                     <!-- Banner content wrap end -->
                  </div><!-- col end-->

                  <!--
                  <form action="notify-me.php" id="notifyMe" method="POST" class="center-block align-center col-lg-3 col-md-4 col-sm-6 col-xs-10">
                            <div class="input-group">

                              <input type="text" class="form-control email-add" name="email" placeholder="Email Address">
                              <i></i>
                              <span class="input-group-btn ">
                                <button class="btn btn-default notify-button">
                                <i class="icon-arrow right"><span></span></i></button>
                              </span>
                            </div>
                        <div class="col-lg-12 align-center" id="message"></div></form>
                  -->

                  <div class="col-lg-4 offset-lg-1"  id="notifyMe" action="notify-me.php" method="POST"  style="display:none">
                     <div class="hero-form-content">
                        <h2>Subscribe</h2>
                        <p>
                           Share your email with us and we'll send you an update when you can purchase your ticket.
                        </p>

                        <form action="notify-me.php" method="POST" class="hero-form">

                           <input class="form-control form-control-email" placeholder="Email" name="email" id="f-email"
                              type="email" required="">

                           <button class="btn">Subscribe</button>
                        </form>

                     </div>
                  </div>
               </div><!-- row end-->
            </div>
            <!-- Container end -->
         </div>
      </section>
      <!-- banner end-->

      <br><br>

      <style>
         p.column-title{
            font-weight: 300 !important;
         }

         .ts-exp-content {
            text-align: center;
         }

         .column-title {
            /*margin-bottom: 35px;*/
            line-height: 42px;
            text-align: center;
            /*padding-top: 34px;*/
            padding-bottom: 10px;
         }

         .ts-experiences h1{
            font-size: 64px;
            font-weight: 800;
            color: #fff;
            text-transform: uppercase;
            line-height: 74px;
            margin-bottom: 10px;
         }
         .ts-exp-wrap .ts-exp-content {
            max-width: 560px;
            padding: 40px 40px;
            position: relative;
            z-index: 1;
         }

         .linkedinbox {
             border-width: 5px;
             position: absolute;
             border-color: white;
             z-index: 9000;
             width: 1104px;
             height: 487.8px;
             border-style: solid;
             border-width: 5px;
             margin: -5px;
         }

      </style>
      <!-- ts experience start-->
      <section id="speakers-section" class="ts-experiences" >
         <div class="container" style="    max-width: 1105px;">
            <div class="row" style="padding:5px">

               <div class="linkedinbox">
               </div>

               <div class="col-lg-6 no-padding">
                  <div class="exp-img" id="individual-picture" style="background-image:url(./images/speakers/gavriella-small.jpg)">
                  </div>
               </div><!-- col end-->

               <div class="col-lg-6 no-padding align-self-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                  <div class="ts-exp-wrap">
                     <div class="ts-exp-content">
                        <img src="assets\img\logos\L.png" alt="" style="width: 234px;; padding-bottom: 10px; filter: invert(100%);">
                        <p class="column-title">
                           Presents
                        </p>
                        <h1 id="individual-name" class="banner-title wow fadeInUp" data-wow-duration="1.5s"
                         data-wow-delay="700ms"
                         style="visibility: visible; animation-duration: 1.5s; animation-delay: 700ms;
                         animation-name: fadeInUp;" >Gavriella Schuster</h1>
                        <p class="column-title" id="individual-title">
                           Corporate VP, Microsoft
                        </p>
                     </div>
                  </div>
                  <!-- popup start-->
                  <div id="popup_0" class="container ts-speaker-popup mfp-hide">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-img">
                              <img src="images/speakers/gavriella-small.jpg" alt="">
                           </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                        </div><!-- col end-->
                     </div><!-- row end-->
                  </div><!-- popup end-->
               </div><!-- col end-->

            </div><!-- row end-->

         <script >
         function update(){
            //$(".banner-item ").css("background-image","url(assets/mbaa-pics/2019%20PNW%20MBA-23.jpg)")
            //$(".banner-item ").css("background-image","url(assets/mbaa-pics/20190427-UWB_9685.jpg)")
            //$(".banner-item ").css("background-image","url(assets/mbaa-pics/200116a_hero-merge-small.jpg)")
            //$(".banner-item ").css("background-image","url(assets/mbaa-pics/k.jpg)")
            //$(".banner-item ").css("background-image","url(images/hero_area/banner_bg.jpg)")
            let details = JSON.parse($("#form-data").val()) ;
            console.log(details );

            $("#individual-picture").css("background-image","url(\""+ details.picture +"\")");
            $("#individual-name").html(details.name);
            $("#individual-title").html(details.title);

         }
         </script>
         <form>
            <label for="picture">picture:</label><br>
            <select onchange="update()" type="text" id="form-data" name="picture">
            <?php
            require("speakerslist.php");

            foreach ($speakers as $speaker) {
               unset($speaker["bio"]);
               unset($speaker["socialTwitter"]);
               unset($speaker["socialLinkedIn"]);
               unset($speaker["companyLogos"]);
               unset($speaker["video"]);
               echo "<option value=\"". htmlspecialchars(json_encode($speaker)) . "\">" . $speaker["name"] . "</option>";
            }
            ?>
            </select><br>

         </form>
         </div><!-- container fluid end-->
      </section>
      <!-- ts experience end-->

      <br><br>



       <section class="ts-schedule" id="schedule-section">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 align-self-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms" style="visibility: visible; animation-duration: 1.5s; animation-delay: 400ms; animation-name: fadeInUp;">
                  <div class="ts-schedule-content">
                     <h2 class="column-title">
                        Event Schedule
                     </h2>
                     <p>
                         We're looking forward to a day of networking, professional development, and inspiring talks.
                     </p>
                  </div>
               </div><!-- col end-->
               <div class="col-lg-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1.5s; animation-delay: 500ms; animation-name: fadeInUp;">
                  <div class="ts-schedule-info mb-70">
                     <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                           <a class="active" title="Click Me" href="#date1" role="tab" data-toggle="tab">
                                        <h3>Networking</h3>
                                        <!--<span>Sunday</span>-->
                                    </a>
                        </li>
                        <li class="nav-item">
                           <a class="" href="#date2" title="Click Me" role="tab" data-toggle="tab">
                                            <h3>Career</h3>
                                        <!--<span>Sunday</span>-->
                                    </a>
                        </li>
                        <li class="nav-item">
                           <a class="" href="#date3" title="Click Me" role="tab" data-toggle="tab">
                                        <h3>Inspiration</h3>
                                        <!--<span>Sunday</span>-->
                                    </a>
                        </li>
                     </ul>
                     <!-- Tab panes -->
                  </div>
               </div><!-- col end-->
            </div><!-- row end-->


         </div><!-- container end-->
      </section>




      <!-- ts footer area start-->
      <div class="footer-area">
         <!-- footer start-->
         <footer class="ts-footer">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 mx-auto">
                     <div class="ts-footer-social text-center mb-30">
                        <ul>
                           <li>
                              <a target="_blank" href="https://www.facebook.com/uwbmbaa/"><i class="fa fa-facebook"></i></a>
                           </li>
                           <li>
                              <a target="_blank" href="https://twitter.com/uwbmbaa"><i class="fa fa-twitter"></i></a>
                           </li>
                           <li>
                              <a target="_blank" href="https://www.linkedin.com/company/pacific-northwest-mba-conference"><i class="fa fa-linkedin"></i></a>
                           </li>
                        </ul>
                     </div>
                     <!-- footer social end-->
                     <div class="footer-menu text-center mb-25">
                        <ul>
                           <li><a href="#home-section">Home</a></li>
                           <li><a href="#speakers-section">Speakers</a></li>
                           <li><a href="#venue-section">Venue</a></li>
                        </ul>
                     </div><!-- footer menu end-->
                     <div class="copyright-text text-center">
                        <p>Copyright © 2020 UWB MBAA. All Rights Reserved.</p>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- footer end-->
         <div class="BackTo">
            <a href="#" class="fa fa-angle-up" aria-hidden="true"></a>
         </div>
      </div>
      <!-- ts footer area end-->




      <!-- Javascript Files ================================================== -->
      <!-- initialize jQuery Library -->
      <script src="js/jquery.js"></script>
      <!--  -->
      <script src="js/popper.min.js"></script>
      <!-- Bootstrap jQuery -->
      <script src="js/bootstrap.min.js"></script>
      <!-- Counter -->
      <script src="js/jquery.appear.min.js"></script>
      <!-- Countdown -->
      <script src="js/jquery.jCounter.js"></script>
      <!-- magnific-popup -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <!-- carousel -->
      <script src="js/owl.carousel.min.js"></script>
      <!-- Waypoints -->
      <script src="js/wow.min.js"></script>
      <!-- SUBSCRIPTION FORM  -->
      <script type="text/javascript" src="assets/js/notifyMe.js"></script>
      <!-- isotop -->
      <script src="js/isotope.pkgd.min.js"></script>
      <!-- Template custom -->
      <script src="js/main.js"></script>

   </div>
   <!-- Body inner end -->
</body>
</html>
