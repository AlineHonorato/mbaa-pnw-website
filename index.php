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
   <link rel="stylesheet" href="css/style.css">
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
                        <a href="#venue-section" class="">Venue</a>
                     </li>

                     <li class="nav-item">
                        <a href="#speakers-section" class="">Speakers</a>
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
        <!-- <div class="banner-item overlay" style="background-image:url(http://127.0.0.1:8081/mbaa-pics/2019%20PNW%20MBA-23.jpg)"> -->
         <!--   <div class="banner-item overlay" style="background-image:url(assets/mbaa-pics/20190427-UWB_9685.jpg)"> -->
         	<?php
         	     if (isset($_GET["feature"]) &&  $_GET["feature"] == "0") {
         	     	?><div class="banner-item " style="background-image:url(assets/mbaa-pics/k.jpg);"><?php

         	     } else if (isset($_GET["feature"]) &&  $_GET["feature"] == "1") {
         	     	?><div class="banner-item " style="background-image:url(assets/mbaa-pics/200116a_hero-merge-small.jpg);"><?php

         	     } else if (isset($_GET["feature"]) &&  $_GET["feature"] == "2") {
         	     	?><div class="banner-item " style="background-image:url(assets/mbaa-pics/20190427-UWB_9685.jpg);"><?php

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
                  <div class="exp-img" style="background-image:url(./images/speakers/MS-Execs-Schuster-Gavriella-2018-01-0013-small.jpg)">
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
                              <img src="images/speakers/MS-Execs-Schuster-Gavriella-2018-01-0013-small.jpg" alt="">
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


      <?php 
      $speakers = [ 
      	[	
      		// Speaker /////////////////////////////////
      		"name" => "Beatris A. Mendez Gandica", 
      		"title"=> "Founder, Nuevo Foundation & Program Manager, Microsoft",
      		"picture" => "images/speakers/beatris.jpg",
      		"socialTwitter" => "https://twitter.com/beagandica",
      		"socialLinkedIn" => "https://www.linkedin.com/in/mendezgandica/",
      		"companyLogos" => [
      			"images/logos/msft.png",
      			"images/logos/nuevofoundation.png"
      		],
      		"bio" => [
      			"Beatris Alejandra Mendez Gandica originates from San Cristobal, Venezuela. She is an engineer working as a Security Program Manager at Microsoft. In this role, she runs the daily operations of two services, one that is a fabric for hosting engineering bits and another that performs static analysis automation on source code for Azure, Bing, SQL and Microsoft Teams. Her work is essential to Microsoft as it yields the most secure services for their customers.",
      			"Beatris' enjoys giving back to the community. In 2018, she started a nonprofit organization, <a href=\"https://nuevofoundation.org/\">Nuevo Foundation</a>, where she works to prepare underrepresented minorities to become tomorrow’s leaders. Nuevo Foundation’s mission is to inspire kids to be curious, confident and courageous by discovering the world of STEM. The nonprofit has taught more than 3,000 students about Computer Science and STEM education across eight countries and Puerto Rico.",
      			"In 2019, Beatris was awarded with the HACR Young Hispanic Corporate Achievers’ 40 under 40 award, the Outstanding Recent Alumni award from her alma matter in Wisconsin, and selected to be one of the 125 ambassadors for the American Association for the Advancement of Science IF/THEN to help shift the way our country—and the world—thinks about women in STEM. Lastly, she loves volunteering for youth causes such as TechnoloChicas and DigiGirlz."
      		]
      	],
      	[	
      		// Speaker /////////////////////////////////
      		"name" => "Britt Provost", 
      		"title"=> "Executive Vice President, People and Culture, Accolade",
      		"picture" => "images/speakers/britt.jpg",
      		"socialTwitter" => "https://twitter.com/brittprovost?lang=en",
      		"socialLinkedIn" => "https://www.linkedin.com/in/britt-provost-2ba461/",
      		"companyLogos" => [
      			"images/logos/accolade.jpg"
      		],
      		"bio" => [
      			"Britt Provost is the Executive Vice President of People and Culture at Accolade. She plays a key role in shaping the employee experience across Accolade to ensure they attract, develop, retain and engage their talent. ",
      			"Britt has over 15 years of experience leading People teams in global and growth organizations. Prior to joining Accolade, Britt was Chief HR Officer at Promethean, a global educational technology company, serving millions of teachers and classrooms worldwide. Britt also lead the People function at Apptio through many transitions during her tenure (as a private VC-funded company, through their initial public offering, to a publicly traded company, and finally, through a private equity acquisition). ",
				"She has also held many senior People leadership roles at Avanade, an innovative leader in digital & cloud services and business solutions, as well as Real Networks and Microsoft. ",
				"Britt is also an accomplished speaker and facilitator on topics including: enabling and growing great people managers; building organizational culture; developing high performing and engaged teams; and career empowerment. ",
				"Britt has a bachelor’s degree in Art History from the University of Washington and a Masters in Business Administration (MBA) from University of Colorado. "
      		]
      	],
		[	
			// Speaker /////////////////////////////////
      		"name" => "Joseph Robinson", 
      		"title"=> "Senior Vice President, Health Systems Solutions, Philips Healthcare North America",
      		"picture" => "images/speakers/joerobinson.jpg",
      		"socialLinkedIn" => "https://www.linkedin.com/in/joe-robinson-5519251/",
      		"companyLogos" => [
      			"images/logos/philips.png"
      		],
      		"video" => "images/speakers/JoeRobinson.mp4",
      		"bio" => [
	             "Joe is currently the Commercial Leader at Philips Healthcare.  Joe also holds the position of Board Chairman for MITA (Medical Imaging & Technology Alliance) and was nominated in 2017 by Senator Elizabeth Dole to serve on the Department of Veterans Affairs (VA) Veterans’ Family, Caregiver, and Survivor Advisory Committee. ",
	             "Joe’s career has been focused in Medical Imaging, starting with a small business in the Mid-Atlantic region.  Joe has managed sales, marketing and service organizations in North America for many years.  He has spent 30 years in Medical Systems across multiple large healthcare companies.  Joe’s other roles at Philips include Sr.  Vice President of Commercial Sales USA, Government VA/DoD Sales & Military Contracts, Service Solutions, GPO and Government Affairs, Sr. Vice President of Imaging Systems Sales & Marketing, Sr. Vice President of Enterprise & Government Solutions, Vice President of MR Sales, Vice President of Imaging Systems Marketing, Vice President of Sales South Zone and Registered Radiologic Technologist. ",
	             "Joe received his Bachelor of Science degree in Healthcare Administration from Columbia Union College.  In 2008, he co-authored \"Radiology Business Practice: How to Succeed\". ",
				 "Joe is a proponent of collaboration, accountability and accelerating growth through empowered teams. ",
				 "Joe enjoys playing golf, basketball, downhill skiing and spending time with his family."
      		]
      	],
		[	
			// Speaker /////////////////////////////////
      		"name" => "Katie Young", 
      		"title"=> "Vice President, Urban Market Operations, Starbucks",
      		"picture" => "images/speakers/katie.jpg",
      		"socialLinkedIn" => "https://www.linkedin.com/in/katie-young-573a9b2/",
      		"companyLogos" => [
      			"images/logos/starbucks.png"
      		],
      		"bio" => [
				"Katie Young is vice president of urban market operations at Starbucks. She joined Starbucks in 2012 as a director of Food Strategy.  She ran the $2B+ food P&L for several years then launched the food innovation team.  She currently leads the integrated operations and strategy for complex urban markets.  She also currently sits on the boards of Global Washington and the NW chapter of Trust for Public Land. ",
	          	"Prior to Starbucks, Katie worked at McKinsey & Company, specializing in the social sector, CPG, and agribusiness. She was part of the team that developed the first-ever agriculture strategy for the Gates Foundation.  Other strategy work included: food security for 16 countries and creating transformational frontline change for the Ethiopian Government’s 60,000 extension agents.  ",
	          	"Katie holds a Masters in Public Policy (MPP, International Development) from the University of Chicago and a Bachelors in Spanish and Honors Political Science from Kenyon College."
      		]
      	],
      	[	
      		// Speaker /////////////////////////////////
      		"name" => "Megan Kennedy", 
      		"title"=> "Interim Director of the UW Resilience Lab",
      		"picture" => "images/speakers/MeganKennedy2.jpg",
      		"socialLinkedIn" => "https://www.linkedin.com/in/mkennedy37/",
      		"companyLogos" => [
      			"images/logos/uw.png"
      		],
      		"bio" => [
				"Megan Kennedy is the Interim Director of the UW Resilience Lab. A clinically trained leader and passionate community advocate, Megan is addressing issues of policy, organizational structures, programs, and services to improve student mental health and well-being at the UW. Her passion lies in applying strategies of adaptive leadership and collective impact to bridge gaps and strengthen system-wide collaborations and partnerships. Megan has produced and directed an award-winning documentary, spearheaded community-wide initiatives, designed and implemented new programs and service sites, and trained thousands of providers and organizational leaders on issues of mental health, resilience, and well-being. Megan was previously a Clinical Director at Youth Eastside Services, a community-based mental health agency, where she developed targeted interventions for LGBTQ youth and families. Since 2013, Megan has served on the Board of Directors of Eastside Pathways, a collective impact organization that serves as the \“backbone\" for 70+ partner agencies in East King County. Megan received a BA from Western Washington University, a Master’s in Applied Behavioral Science from Bastyr University, and is currently pursuing a doctoral degree in Educational Leadership at Seattle University.",
      		]
      	],
      	[	
			// Speaker /////////////////////////////////
      		"name" => "Kristen Forecki", 
      		"title"=> "Vice President of Supply at Convoy",
      		"picture" => "images/speakers/forecki2.jpg",
      		"socialLinkedIn" => "https://www.linkedin.com/in/kristen-forecki-2765057/",
      		"companyLogos" => [
      			"images/logos/convoy.png"
      		],
      		"bio" => [
				"As one of Convoy's earliest employees, Kristen has run a diverse set of teams throughout the rapid growth of the business, including Operations, Legal, PR, Marketing, and Finance. She currently leads Supply, including Convoy's industry-leading Quality & Compliance team. Kristen is experienced in finance, product management, strategy, and operations, with prior experience at industry leaders General Mills, Amazon, the Boston Consulting Group, and Rover.com. As a strong supporter of technological innovation, Kristen serves on the Board of the Washington Technology Industry Association. She was also named a Top Woman to Watch in 2019 by Women in Trucking. Kristen earned an MBA from Harvard Business School and a BA in finance and marketing from the University of Wisconsin–Madison. ",
      		]
      	],
      	[	
			// Speaker /////////////////////////////////
      		"name" => "Jeff Marcoux", 
      		"title"=> "Marketing Executive",
      		"picture" => "images/speakers/Jeff Marcoux.jpg",
      		"socialLinkedIn" => "https://www.linkedin.com/in/jeffmarcoux/",
      		"companyLogos" => [
      			"images/logos/"
      		],
      		"bio" => [
				"Jeff Marcoux brings entrepreneurial innovation to a big-tech world. With an emphasis on customer experience and digital transformation, he provides a strategic marketing approach that helps companies understand their current marketing maturity, where they want to go, and how they'll get there.",
				"Jeff combines a passion for technology with a talent for storytelling, backing marketing insights with behavioral science and research. A results-driven leader, he focuses on meaningful ROI metrics that integrate both marketing and sales data to provide a holistic view of how marketing impacts pipeline and demand generation.",
				"As Vice President of Marketing at TTEC, Jeff guides the company's digital transformation, helping the business shift to a more holistic customer-centric focus away from fragmented business units. He sits across TTEC's two business units: TTEC Digital (focusing on CX strategy and technology) and TTEC Engage (delivering on CX and creating brand ambassadors) leading segment marketing, demand generation, field marketing, and web.",
				"Jeff is a Husky squared having done undergraduate at UW Seattle and his MBA between UW Bothell & Seattle. He is a loyal season ticket holder for Husky Football and loves teaching marketing for Oregon State & GreenFig university."
      		]
      	],
      	[	
			// Speaker /////////////////////////////////
      		"name" => "Brett Clay", 
      		"title"=> "Management consultant, certified executive coach, speaker, author, and part-time faculty at the University of Washington",
      		"picture" => "images/speakers/Brett-Clay-Photo-Brown-medium-res.jpg",
      		"socialLinkedIn" => "https://www.linkedin.com/in/brettclay/",
      		"companyLogos" => [
      			"images/logos/"
      		],
      		"bio" => [
				"Brett Clay, Ph.D. is a management consultant, certified executive coach, speaker, author, and part-time faculty at the University of Washington. A veteran of three decades of management consulting and international sales and marketing management, he is currently the founder and principal of Change Leadership Group, a management consulting firm.  Prior to Change Leadership Group, he was a group product manager at Microsoft Corporation, and held executive positions as vice president of sales, business development, and marketing in Silicon Valley high-technology companies.",
				"Brett’s interdisciplinary scholarship centers on the question of how leaders and organizations change. He is the author of a human development theory of change leadership and a personality assessment for identifying styles of leading change. He is the author of various books, scholarly chapters, and articles, including the award-winning book, Selling Change: 101+ Secrets for Growing Sales By Leading Change, and a chapter entitled, “John Kotter, A pragmatic observer of manager’s life worlds,” in The Palgrave Handbook of Organizational Change Thinkers.",
				"Brett holds a Ph.D. in human and organizational development, masters degrees in organizational systems and business administration, and a bachelor of science degree in electrical engineering."
			]
      	],
      	      	[	
			// Speaker /////////////////////////////////
      		"name" => "Rob Pasterick ", 
      		"title"=> " President of Boeing Shared Services Group (SSG) (Retired)",
      		"picture" => "images/speakers/Rob Pasterick.jpg",
      		"socialLinkedIn" => "",
      		"companyLogos" => [
      			"images/logos/"
      		],
      		"bio" => [
				"Rob Pasterick retired from the Boeing Company in 2016. Rob’s last position was President of Boeing Shared Services Group (SSG), an 8,000-person, multi-billion dollar business unit that provides common internal services across Boeing’s global enterprise. He led SSG from February 2010.",
				"A 30-year Boeing veteran, Pasterick brought to the job significant experience in asset and process management, financial and reporting policy and leadership development. Prior to taking on his SSG assignment, Pasterick was vice president, finance and corporate controller, responsible for managing the company’s financial cost accounting, external reporting cost policy, companywide estimating, and common business systems.",
				"Pasterick has also served as Chief Financial Officer for Boeing Commercial Airplanes, where he was responsible for the overall financial management of the $57 billion business unit, as well as its contracts and business operations functions. Before assuming CFO duties at Commercial Airplanes, Pasterick served as the group’s vice president and controller.",
				"In this capacity, he was responsible for accounting, financial planning and reporting, pricing, estimating and cost management activities at the global aircraft manufacturer.",
				"Previously, Pasterick served as Boeing Vice President of Financial Planning and analysis. He joined Boeing through the company’s acquisition of the aerospace and defense units of Rockwell in December 1996.  Pasterick joined Rockwell in 1979 and progressed through a series of management positions in finance and material/subcontract management.",
				"Pasterick has been a member of Financial Executives International Committee on Corporate Reporting. He participated in the CFO Council at the University of Washington and the Puget Sound CFO Roundtable. He also is a member of the Board of Visitors of the University of Pittsburgh Graduate School of Business, the Boeing Classic Golf Tournament Advisory Board, and was involved with the March of Dimes.",
				"Pasterick earned an undergraduate degree in economics from the University of Pittsburgh and a master’s degree in business administration from the University of Pittsburgh Graduate School of Business.",
				"He is married with two sons. He enjoys running, skiing, and golf.",
      		]
      	],
      	/*
      	[	
			// Speaker /////////////////////////////////
      		"name" => "", 
      		"title"=> "",
      		"picture" => "images/speakers/",
      		//"socialLinkedIn" => "",
      		"companyLogos" => [
      			"images/logos/"
      		],
      		"bio" => [
				"",
				"",
      		]
      	],
      	*/
      ];
      ?>

      
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
			  $currentBio = 1;
			  $wowDelayMs = 400;

			  	// before iterating, sort the speakers by name
			  	function cmp($a, $b)
				{
				    if ($a["name"] == $b["name"]) {
				        return 0;
				    }
				    return ($a["name"] < $b["name"]) ? -1 : 1;
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
                       		      		<video style="padding-top: 50px; padding-left: 10px;" width="555" autoplay muted loop>
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



      <section class="ts-intro-sponsors" style="background-image: url(./images/sponsors/sponsor_img.jpg)">
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
                     <a href=""><img src="images/sponsors/prcision-door-service.png" alt="" style="width: 118px;"></a>
            		 <a href=""><img src="images/sponsors/MilbrandtVineyards_Logo_rev.png" alt="" style="width: 250px;"></a>
                     <a href="" style="
						    font-size: 31px;
						    color:  white;
						    /* max-width: 10%; */
						">R. Brooks Gekler</a>

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
      


	   <section class="ts-schedule">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 align-self-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms" style="visibility: visible; animation-duration: 1.5s; animation-delay: 400ms; animation-name: fadeInUp;">
                  <div class="ts-schedule-content">
                     <h2 class="column-title">
                        <span>Schedule Details</span>
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
            <!-- =========================================================================== -->
            <!-- =========================================================================== -->
            <!-- =========================================================================== -->
			<!--  							ACTUAL SCHEDULE 								 -->
            <!-- =========================================================================== -->

            <div class="row">
               <div class="col-lg-12">
                  <div class="tab-content schedule-tabs">
                    <div role="tabpanel" class="tab-pane active" id="date1">


                        <div class="schedule-listing">
                           <div class="schedule-slot-time">
                              <span> 9.00 AM </span>
                           </div>
                           <div class="schedule-slot-info">
                           	  <!--
                              <a href="#">
                                <img class="schedule-slot-speakers" src="images/speakers/MS-Execs-Schuster-Gavriella-2018-01-0013-small.jpg" alt="">
                              </a>
                              -->
                              <div class="schedule-slot-info-content">
                                 <h3 class="schedule-slot-title">Registration | Networking coffee (headshots available) 
                                    <strong></strong>
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
                                 <h3 class="schedule-slot-title">Authentic leadership
                                    <strong>Gavriella Schuster </strong> 
                                 </h3>
                                 <h3 class="schedule-slot-title">Panel: Making change through entrepreneurship and innovation
                                   
                                 </h3>
                                 <h3 class="schedule-slot-title">Panel: Managing people
                                  
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
                                 <h3 class="schedule-slot-title">Lunch Break
                                    
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
                              <span> 01:00 PM</span>
                              PM Sessions
                           </div>
                           <div class="schedule-slot-info">
                           	<!--
                              <a href="#">
                                 <img class="schedule-slot-speakers" src="images/speakers/speaker4.jpg" alt="">
                              </a>
                          	-->
                              <div class="schedule-slot-info-content">
                                 <h3 class="schedule-slot-title">Lightning talks: Critical moments
                                    <strong></strong>
                                 </h3>
                                  <h3 class="schedule-slot-title">Resiliency and well-being
                                    <strong></strong>
                                 </h3>
                                 <h3 class="schedule-slot-title">Workshop: Personal finance
                                    <strong></strong>
                                 </h3>
                                 <h3 class="schedule-slot-title">Workshop: Negotiations
                                    <strong></strong>
                                 </h3>
                                  <h3 class="schedule-slot-title">How to leverage your MBA: Alumni panel
                                    <strong></strong>
                                 </h3>
                                  <h3 class="schedule-slot-title">Building Authentic Relationships: Networking thre right way 
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
                                 <h3 class="schedule-slot-title">Networking reception
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
                  <div class="pricing-item ">
                     <img class="pricing-dot " src="images/pricing/dot.png" alt="">
                     <div class="ts-pricing-box">

                        <div class="ts-pricing-header">
                           <h2 class="ts-pricing-name">Early Bird</h2>
                           <h3 class="ts-pricing-price">
                              <span class="currency">$</span>80
                           </h3>
                        </div>
                        <!--
                        <div class="ts-pricing-progress">
                           <p class="amount-progres-text">Available tickets for this price</p>
                           <div class="ts-progress">
                              <div class="ts-progress-inner" style="width: 100%"></div>
                           </div>
                           <p class="ts-pricing-value">500/500</p>
                        </div>
                     -->
                        <div class="promotional-code">

                           <p class="promo-code-text">ON SALE THROUGH <br><b>FEBRUARY 29</b></p>
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
                           <h2 class="ts-pricing-name">General Admission</h2>
                           <h3 class="ts-pricing-price">
                              <span class="currency">$</span>195
                           </h3>
                        </div>

                        <!--
                        <div class="ts-pricing-progress">
                           <p class="amount-progres-text">Available tickets for this price</p>
                           <div class="ts-progress">
                              <div class="ts-progress-inner" style="width: 75%"></div>
                           </div>
                           <p class="ts-pricing-value">350/500</p>
                        </div>
                        -->

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
