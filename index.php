<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Global site tag (gtag.js) - Google Analytics -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=UA-153392839-1"></script>
   <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-153392839-1');
   </script>
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

      <!-- Header start -->
      <header id="header" class="header header-transparent">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
               <!-- logo-->
               <a class="navbar-brand" href="index.html">
                  <img src="images\logos\pnwmbalogo.png" alt="" style="filter: invert(100%);">
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                  aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"><i class="icon icon-menu"></i></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNavDropdown" >
                  <ul class="navbar-nav ml-auto">

                     <li class="nav-item active">
                        <a href="#home-section" class="">Home</a>
                     </li>

                     <li class="nav-item">
                        <a href="#speakers-section" class="">Speakers</a>
                     </li>

                     <li class="nav-item">
                        <a href="#sponsors-section" class="">Sponsors</a>
                     </li>

                     <li class="nav-item">
                        <a href="#schedule-section" class="">Schedule</a>
                     </li>

                     <li class="header-ticket nav-item">
                        <a class="ticket-btn btn" href="tickets.html">Register</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div><!-- container end-->
      </header>
      <!--/ Header end -->

      <!-- banner start-->
      <section class="hero-area hero-speakers" id="home-section">
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
                        <div class="banner-btn wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="800ms">
                           <a href="tickets.html" class="btn">Register</a>
                           <!--<a href="#" class="btn fill">Add to Calendar</a>-->
                        </div>
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

      <!-- ts intro start -->
      <section id="about" class="ts-intro-item section-bg">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1.5s; animation-delay: 300ms; animation-name: fadeInUp;">
                  <div class="intro-left-content">
                     <h2 class="column-title">
                        The premier MBA networking and empowerment event of the Pacific Northwest
                     </h2>
                     <p>
                        The PNW MBA 2020 Conference brings together the vibrant community of business leaders, professionals, entrepreneurs, and MBA students. Attendees will learn, network, and return with inspirational insights, lasting connections, and an enhanced appreciation of the corporate world.
                     </p>
                  </div>
               </div><!-- col end-->
               <div class="col-lg-8">
                  <div class="row">
                     <div class="col-lg-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms" style="visibility: visible; animation-duration: 1.5s; animation-delay: 400ms; animation-name: fadeInUp;">
                        <div class="single-intro-text mb-30">
                           <i class="icon icon-people"></i>
                           <h3 class="ts-title">Networking</h3>
                           <p>
                              Connect with business leaders, entrepreneurs and MBA candidates and alumni across the region to find common passion and create long-lasting connection
                           </p>
                           <span class="count-number">01</span>
                        </div><!-- single intro text end-->
                     </div><!-- col end-->
                     <div class="col-lg-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1.5s; animation-delay: 500ms; animation-name: fadeInUp;">
                        <div class="single-intro-text mb-30">
                           <i class="icon icon-man"></i>
                           <h3 class="ts-title">Career</h3>
                           <p>
                              Build tangible skills in negotiations, personal finance, and authentic relationship building through hands on workshops scheduled throughout the conference experience.
                           </p>
                           <span class="count-number">02</span>
                        </div><!-- single intro text end-->

                     </div><!-- col end-->
                     <div class="col-lg-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="600ms" style="visibility: visible; animation-duration: 1.5s; animation-delay: 600ms; animation-name: fadeInUp;">
                        <div class="single-intro-text mb-30">
                           <i class="icon icon-speaker"></i>
                           <h3 class="ts-title">Inspiration</h3>
                           <p>
                               Hear from the brightest minds in the region on conflict and crisis management and resilience in the workplace. Get inspired by innovative entrepreneurs, talented people managers, and MBA alums who have leveraged their degrees to change the trajectory of their careers.
                           </p>
                           <span class="count-number">03</span>
                        </div><!-- single intro text end-->
                     </div><!-- col end-->
                     <!-- col end-->
                  </div>
               </div><!-- col end-->

            </div><!-- row end-->
         </div><!-- container end-->
      </section>
      <!-- ts intro end-->

      <!-- ts experience start-->
      <section id="speakers-section" class="ts-experiences" >
         <div class="container">
            <div class="row">
               <div class="col-lg-6 no-padding">
                  <div class="exp-img" style="background-image:url(./images/speakers/gavriella-small.jpg)">
                  </div>
               </div><!-- col end-->
               <div class="col-lg-6 no-padding align-self-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                  <div class="ts-exp-wrap">
                     <div class="ts-exp-content">
                        <h2 class="column-title">
                           <span>Meet our Keynote Speaker</span>
                           Gavriella Schuster - Corporate VP, Microsoft
                        </h2>
                        <p>
                        As a C-level Microsoft executive and thought leader, Gavriella brings over 20 years of executive leadership experience, has grown a P&L of $6.5B and currently leads a global portfolio that influences over $1 trillion in ecosystems revenues.
                        </p>
                        <a href="#popup_0" class="btn view-speaker ts-image-popup" data-effect="mfp-zoom-in">Read more</a>
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
                           <div class="ts-speaker-popup-content">
                              <h3 class="ts-title">Gavriella Schuster</h3>
                              <span class="speakder-designation">Corporate VP, One Commercial Partner Organization</span>
                              <img class="company-logo" src="images/logos/msft.png" alt="Microsoft logo">
                              <p>
                                 As a C-Level Microsoft Executive and Thought Leader, I have grown a P&L of $6.5B and currently lead a global portfolio of channel partners that has influenced over $1 trillion in ecosystem revenues.

                                 I bring over 20 years of leadership in digital and cloud transformation roles, driving strategy and execution spanning all aspects of business model and product development, launch, marketing, sales and partner development.

                                 I lead global recruitment, enablement and engagement of Microsoft’s fast-growing partner ecosystem. As a builder and change agent, I build and turn around businesses by inspiring a vision for future customer relevance and engaging teams in developing the roadmap.
                              </p>
                              <div class="ts-speakers-social">
                                 <a target="_blank" href="https://twitter.com/gavriels1"><i class="fa fa-twitter"></i></a>
                                 <a target="_blank" href="https://www.linkedin.com/in/gavriella-schuster"><i class="fa fa-linkedin"></i></a>
                              </div>
                           </div><!-- ts-speaker-popup-content end-->
                        </div><!-- col end-->
                     </div><!-- row end-->
                  </div><!-- popup end-->
               </div><!-- col end-->
            </div><!-- row end-->
         </div><!-- container fluid end-->
      </section>
      <!-- ts experience end-->





      <section id="ts-speakers" class="ts-speakers">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 mx-auto">
                  <h2 class="section-title text-center">
                     <span>Listen to the</span>
                     Event Speakers
                  </h2>
               </div><!-- col end-->
            </div><!-- row end-->


            <div class="row">
            <?php
              require("speakerslist.php");

              $currentBio = 1;
              $wowDelayMs = 400;

                  // before iterating, sort the speakers by name
                  function cmp($a, $b)
                {
                    $lastname_a = explode (" ", $a["name"])[1];
                    $lastname_b = explode (" ", $b["name"])[1];
                    if ($lastname_a == $lastname_b) {
                        return 0;
                    }
                    return ($lastname_a < $lastname_b) ? -1 : 1;
                }

            usort($speakers, "cmp");
              foreach ($speakers as $speaker) {
                  $currentBio++;
                  $wowDelayMs += 100;
                  ?>

                  <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="<?php echo $wowDelayMs; ?>ms">
                          <div class="ts-speaker">
                             <div class="speaker-img">
                                <img class="img-fluid" src="<?php echo $speaker["picture"]; ?>" alt="">
                                <a href="#popup_<?php echo $currentBio; ?>" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                                            <i class="icon icon-plus"></i>
                                        </a>
                             </div>
                             <div class="ts-speaker-info">
                                <h3 class="ts-title"><a href="#"><?php echo $speaker["name"]; ?></a></h3>
                                <p>
                                    <?php echo $speaker["title"] ?>
                                </p>
                             </div>
                          </div>
                          <!-- popup start-->
                          <div id="popup_<?php echo $currentBio; ?>" class="container ts-speaker-popup mfp-hide">
                             <div class="row">
                                <div class="col-lg-6" >
                                   <div class="ts-speaker-popup-img">
                                       <?php if (array_key_exists("video", $speaker)) { ?>
                                             <video style="padding-top: 50px; width: 95%; padding-left: 10px;" width="555" autoplay muted loop>
                                        <source src="<?php echo $speaker["video"]; ?>" type="video/mp4">
                                                          Your browser does not support the video tag.
                                        </video>
                                    <?php } else { ?>
                                      <img src="<?php echo $speaker["picture"]; ?>" alt="">
                                    <?php } ?>
                                   </div>
                                </div><!-- col end-->
                                <div class="col-lg-6">
                                   <div class="ts-speaker-popup-content">
                                      <h3 class="ts-title"><?php echo $speaker["name"]; ?></h3>
                                      <span class="speakder-designation"><?php echo $speaker["title"] ?></span>
                                          <?php
                                          foreach ($speaker["companyLogos"] as $companyLogo) {
                                          ?>
                                          <img class="company-logo" src="<?php echo $companyLogo; ?>" alt="Company logo">
                                        <?php
                                        }
                                        ?>


                                        <?php
                                        foreach ($speaker["bio"] as $bio) {
                                          ?>
                                          <p ><?php echo $bio; ?></p>
                                        <?php
                                        }
                                        ?>

                                      <!--
                                      <h4 class="session-name">
                                         Sessions by Beatris
                                      </h4>
                                      <div class="row">
                                         <div class="col-lg-6">
                                            <div class="speaker-session-info">
                                               <span>
                                                           10.30 - 11.30 am
                                                     </span>
                                               <p>
                                                  Marketing Matters
                                               </p>
                                            </div>
                                         </div>
                                         <div class="col-lg-6">
                                         </div>
                                      </div>
                                      -->
                                      <div class="ts-speakers-social">
                                          <?php
                                        if (array_key_exists("socialTwitter", $speaker)) {
                                          ?>
                                          <a target="_blank" href="<?php echo $speaker["socialTwitter"]; ?>"><i class="fa fa-twitter"></i></a>
                                        <?php
                                        }
                                        ?>
                                        <?php
                                        if (array_key_exists("socialLinkedIn", $speaker)) {
                                          ?>
                                          <a target="_blank" href="<?php echo $speaker["socialLinkedIn"]; ?>"><i class="fa fa-linkedin"></i></a>
                                        <?php
                                        }
                                        ?>
                                      </div>
                                   </div><!-- ts-speaker-popup-content end-->
                                </div><!-- col end-->
                             </div><!-- row end-->
                          </div><!-- popup end-->
                       </div> <!-- col end-->
                <?php
              }
              ?>
              </div>
         </div><!-- container end-->

         <!-- shap img-->
         <div class="speaker-shap">
            <img class="shap1" src="images/shap/home_speaker_memphis1.png" alt="">
            <img class="shap2" src="images/shap/home_speaker_memphis2.png" alt="">
         </div>
         <!-- shap img end-->
      </section>


      <section class="ts-intro-sponsors" style="background-image: url(./images/sponsors/sponsor_img.jpg)" id="sponsors-section">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <h2 class="section-title white">
                     Our Sponsors
                  </h2><!-- section title end-->
               </div><!-- col end-->
            </div><!-- row end-->
            <div class="row">
               <div class="col-lg-12">
                  <div class="sponsors-logo text-center">
                     <img src="images/sponsors/prcision-door-service.png" alt="" style="width: 118px;">
                     <img src="images/sponsors/MilbrandtVineyards_Logo_rev.png" alt="" style="width: 250px;">
                     <a style="font-size: 31px;color:  white;/* max-width: 10%; */">R. Brooks Gekler</a>
                    <!--
                     <div class="sponsor-btn text-center">
                        <a href="#" class="btn">Become a Sponsor</a>
                     </div>
                 -->
                  </div><!-- sponsors logo end-->
               </div><!-- col end-->
            </div><!-- row end-->
         </div><!-- container end-->
      </section>



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

            <!-- =========================================================================== -->
            <!--                              ACTUAL SCHEDULE                                -->
            <!-- =========================================================================== -->

            <div class="row">
               <div class="col-lg-12">
                  <div class="tab-content schedule-tabs">
                    <div role="tabpanel" class="tab-pane active" id="date1">


                        <div class="schedule-listing">
                           <div class="schedule-slot-time">
                              <span> 9:00 AM </span>
                           </div>
                           <div class="schedule-slot-info">
                                 <!--
                              <a href="#">
                                <img class="schedule-slot-speakers" src="images/speakers/MS-Execs-Schuster-Gavriella-2018-01-0013-small.jpg" alt="">
                              </a>
                              -->
                              <div class="schedule-slot-info-content">
                                 <h3 class="schedule-slot-title">Registration Opens
                                    <strong>(headshots available)</strong>
                                 </h3>
                                 <p></p>
                              </div>
                              <!--Info content end -->
                           </div><!-- Slot info end -->
                        </div>
                        <!--schedule-listing end -->


                        <div class="schedule-listing">
                           <div class="schedule-slot-time">
                              <span>9:30 AM</span>
                              AM Sessions
                           </div>
                           <div class="schedule-slot-info">
                               <!--
                              <a href="#">
                                <img class="schedule-slot-speakers" src="images/speakers/" alt="">
                            </a>
                            -->
                              <div class="schedule-slot-info-content">
                                 <h3 class="schedule-slot-title">Keynote address: Authentic Leadership with Gavriella Schuster

                                 </h3>
                                 <h3 class="schedule-slot-title">Panel: Entrepreneurship and Innovation

                                 </h3>
                                 <h3 class="schedule-slot-title">Panel: Managing People

                                 </h3>
                                 <!-- <p>Authentic leadership</p> -->
                              </div>
                              <!--Info content end -->
                           </div><!-- Slot info end -->
                        </div>
                        <!--schedule-listing end -->


                        <div class="schedule-listing launce">
                           <div class="schedule-slot-time">
                              <span> 12:00 PM</span>
                           </div>
                           <div class="schedule-slot-info">

                              <div class="schedule-slot-info-content">
                                 <h3 class="schedule-slot-title">Lunch
                                    <strong>(headshots available)</strong>
                                 </h3>
                                 <a href="#">
                                    <!-- <img src="images/schedule_lunch.png" alt=""> -->
                                 </a>
                              </div>
                              <!--Info content end -->
                           </div><!-- Slot info end -->
                        </div>
                        <!--schedule-listing end -->


                        <div class="schedule-listing">
                           <div class="schedule-slot-time">
                              <span>1:00 PM</span>
                              PM Sessions
                           </div>
                           <div class="schedule-slot-info">
                               <!--
                              <a href="#">
                                 <img class="schedule-slot-speakers" src="images/speakers/speaker4.jpg" alt="">
                              </a>
                              -->
                              <div class="schedule-slot-info-content">
                                 <h3 class="schedule-slot-title">Lightning Talks: Critical Moments
                                    <strong></strong>
                                 </h3>
                                  <h3 class="schedule-slot-title">Resiliency and Well-being
                                    <strong></strong>
                                 </h3>
                                 <h3 class="schedule-slot-title">Workshop: Personal Finance
                                    <strong></strong>
                                 </h3>
                                 <h3 class="schedule-slot-title">Workshop: Negotiations
                                    <strong></strong>
                                 </h3>
                                  <h3 class="schedule-slot-title">Alumni Panel: How To Leverage Your MBA
                                    <strong></strong>
                                 </h3>
                                  <h3 class="schedule-slot-title">Building Authentic Relationships: Networking The Right Way
                                    <strong></strong>
                                 </h3>
                                 <!-- <p>Entreprenurship/Innovation & People Management </p> -->
                              </div>
                              <!--Info content end -->
                           </div><!-- Slot info end -->
                        </div>
                        <!--schedule-listing end -->


                        <div class="schedule-listing">
                           <div class="schedule-slot-time">
                              <span>4:30 PM</span>

                           </div>
                           <div class="schedule-slot-info">
                              <div class="schedule-slot-info-content">
                                 <h3 class="schedule-slot-title">Networking Reception
                                    <strong></strong>
                                 </h3>
                                 <p></p>
                              </div>
                              <!--Info content end -->
                           </div><!-- Slot info end -->
                        </div>
                        <!--schedule-listing end -->


                        <!--schedule-listing end -->
                        <!-- <div class="schedule-listing-btn">
                           <a href="#" class="btn">More Details</a>
                        </div>
                         -->
                     </div>

                  </div>
               </div>
            </div>
         </div><!-- container end-->
      </section>



      <section class="ts-pricing gradient" id="tickets" style="    background-position: left; background-image: url(./images/venue/pricing_img.jpg)">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <h2 class="section-title white" style="color:white">
                     Get your Ticket
                  </h2>
               </div><!-- section title end-->
            </div><!-- col end-->
            <!-- row end-->
            <div class="row">
               <div class="col-lg">
                  <div class="pricing-item disebled">
                     <img class="pricing-dot " src="images/pricing/dot.png" alt="">
                     <div class="ts-pricing-box">

                        <div class="ts-pricing-header">
                           <h2 class="ts-pricing-name">Early Bird</h2>
                           <h3 class="ts-pricing-price">
                              <span class="currency">$</span>80
                           </h3>
                        </div>
                        <div class="promotional-code">

                           <p class="promo-code-text">ON SALE THROUGH <br><b>FEBRUARY 29</b></p>
                           <p>
                              <ul>
                                 <li>Includes full conference and workshops</li>
                                 <li>Professional headshot (limited availability)</li>
                                 <li>Post-conference networking reception</li>
                              </ul>
                           </p>
                           <a class="btn pricing-btn">Sold out</a>
                        </div>
                     </div><!-- ts pricing box-->
                     <img class="pricing-dot1 " src="images/pricing/dot.png" alt="">
                  </div>
               </div><!-- col end-->

               <div class="col-lg">
                  <div class="pricing-item">
                     <img class="pricing-dot " src="images/pricing/dot.png" alt="">
                     <div class="ts-pricing-box">

                        <div class="ts-pricing-header">
                           <h2 class="ts-pricing-name">Advanced Registration</h2>
                           <h3 class="ts-pricing-price">
                              <span class="currency">$</span>95
                           </h3>
                        </div>
                        <div class="promotional-code">


                           <p>
                              <ul>
                                 <li>Includes full conference and workshops</li>
                                 <li>Professional headshot (limited availability)</li>
                                 <li>Post-conference networking reception</li>
                              </ul>
                           </p>
                           <a href="tickets.html" class="btn pricing-btn">Buy Ticket</a>
                        </div>
                     </div><!-- ts pricing box-->
                     <img class="pricing-dot1 " src="images/pricing/dot.png" alt="">
                  </div>
               </div><!-- col end-->

               <div class="col-lg">
                  <div class="pricing-item">
                     <img class="pricing-dot " src="images/pricing/dot.png" alt="">
                     <div class="ts-pricing-box">
                        <span class="big-dot"></span>
                        <div class="ts-pricing-header">
                           <h2 class="ts-pricing-name">Door Price</h2>
                           <h3 class="ts-pricing-price">
                              <span class="currency">$</span>195
                           </h3>
                        </div>
                        <div class="promotional-code">
                                                      <p>
                              <ul>
                                 <li>Includes full conference and workshops</li>
                                 <li>Professional headshot (limited availability)</li>
                                 <li>Post-conference networking reception</li>
                              </ul>
                           </p>
                           <p class="promo-code-text"> </p>
                           <a href="tickets.html" class="btn pricing-btn">Buy Ticket</a>
                        </div>
                     </div><!-- ts pricing box-->
                     <img class="pricing-dot1 " src="images/pricing/dot.png" alt="">
                  </div>
               </div><!-- col end-->


            </div>
         </div><!-- container end-->
         <div class="speaker-shap">
            <img class="shap2" src="images/shap/pricing_memphis1.png" alt="">
         </div>
      </section>


      <!-- ts map direction start-->
      <section class="ts-map-direction wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms" id="venue-section">
         <div class="container">
            <div class="row">
               <div class="col-lg-5">
                  <h2 class="column-title">
                     <span>The Venue</span>
                     Global Innovation Exchange
                  </h2>

                  <div class="ts-map-tabs">
                     <ul class="nav" role="tablist">

                        <li class="nav-item">
                           <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">Venue</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#buzz" role="tab" data-toggle="tab">What is GIX?</a>
                        </li>
                        <!--
                        <li class="nav-item">
                           <a class="nav-link" href="#references" role="tab" data-toggle="tab">How to get there</a>
                        </li>
                        -->
                     </ul>

                     <!-- Tab panes -->
                     <div class="tab-content direction-tabs">


                        <div role="tabpanel" class="tab-pane active" id="profile">
                           <div class="direction-tabs-content">
                              <h3>Global Innovation Exchange</h3>
                              <p class="derecttion-vanue">
                                 12280 NE District Way, <br/>
                                 Bellevue, WA 98005, USA<br/>
                                    United States
                              </p>
                              <a href="https://gixnetwork.org/" class="btn">Learn more</a>
                           </div><!-- direction tabs end-->
                        </div><!-- tab pane end-->


                        <div role="tabpanel" class="tab-pane fade" id="buzz">
                           <div class="direction-tabs-content">
                              <p class="derecttion-vanue">The Global Innovation Exchange (GIX) brings together the strengths of leading universities and crosssector partners from around the world. Founded by the University of Washington, Tsinghua University and Microsoft, GIX supports collaboration across boundaries.                              </p>
                              <a href="https://gixnetwork.org/" class="btn">Learn more</a>
                           </div><!-- direction tabs end-->
                        </div><!-- tab pane end-->

                     </div>

                  </div><!-- map tabs end-->

               </div><!-- col end-->
               <div class="col-lg-6 offset-lg-1">
                  <div class="ts-map">
                     <div class="mapouter">
                        <div class="gmap_canvas">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2689.241467949006!2d-122.1788801837249!3d47.62143729494505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54906cf6f9c23ca5%3A0x2f9b65b67e06e3d9!2sGlobal%20Innovation%20Exchange!5e0!3m2!1sen!2sus!4v1579337347868!5m2!1sen!2sus"></iframe>
                        </div>

                     </div>
                  </div>
               </div>
            </div><!-- col end-->
         </div><!-- container end-->
         <div class="speaker-shap">
            <img class="shap1 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="300ms" src="images/shap/Direction_memphis3.png"
               alt="">
            <img class="shap2 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="400ms" src="images/shap/Direction_memphis2.png"
               alt="">
            <img class="shap3 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="500ms" src="images/shap/Direction_memphis4.png"
               alt="">
            <img class="shap4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="600ms" src="images/shap/Direction_memphis1.png"
               alt="">
         </div>
      </section>
      <!-- ts map direction end-->

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
