<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CroHMI</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/icon.png" rel="icon">
  <link href="img/icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  <!--==========================
  Header
  ============================-->
  <header id="header">

    <div id="topbar"></div>

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->

        <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Features</a></li>
          <li><a href="#why-us">Why Us</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li><a href="portal-login.php">Sign In</a></li>
        <!--
          <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#footer">Contact Us</a></li>
        -->
        </ul>
      </nav><!-- .main-nav -->

    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>CroHMI<br>Crop Health Monitoring Using <span>IOT</span></h2>
          <div>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>

        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="img/intro-img.png" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">

      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6" color:>
            <div class="about-img">
              <img src="img/about-img.jpg" alt="">
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content">
              <h2>About Us</h2>
              <h3> A crop health monitoring system using IoT and low altitude remote sensing. </h3>
              <p>Crohmi is an IoT enabled agriculture monitoring system which monitors agricultural lands in real-time and helps in crop health and yield prediction.</p>
              <p>Our product and services aim to produce an efficient crop health monitoring system based on IoT to improve crop yield significantly and facilitate the farmers. The system is automated based on the sensed parameters such as temperature, humidity, soil moisture, and multi-spectral images of the crop during the growing season. We also capture multi-spectral images of the field for remote surveillance. These images are captured using an imaging sensor mounted on a drone for low altitude remote sensing. We provide the following services:  </p>
              <ul>
                <li><i class="ion-android-checkmark-circle"></i> A drone with a multispectral camera to capture spectral images of the field.</li>
                <li><i class="ion-android-checkmark-circle"></i> A wireless network of IoT nodes to provide real-time data of different parameters.</li>
                <li><i class="ion-android-checkmark-circle"></i> A fully functional and user-friendly web portal for interactive data exploration, visualization, and statistical analysis.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </section><!-- #about -->


    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Features</h3>
          <p>Our system includes following features.</p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fceef3;"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Multi-model integration</a></h4>
              <p class="description">Our system integrates data from Iot nodes and spectral imagery to generate more accurate and precise readings.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="ion-ios-sunny-outline" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href="">Solar powered solution</a></h4>
              <p class="description">The whole system is powered by a solar panel and battery for 24-hour monitoring. </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e6fdfc;"><i class="material-icons" style="color: #3fcdc7;">portable_wifi_off</i></div>
              <h4 class="title"><a href="">Works in no-signal zone</a></h4>
              <p class="description">The nodes communicate through a microcontroller to the LoRA module to a localized gateway in the WSN. </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #eafde7;"><i class="material-icons" style="color:#41cf2e;">agriculture</i></div>
              <h4 class="title"><a href="">Portable hardware</a></h4>
              <p class="description">All the hardware i.e. the IoT nodes and the drone is completely portable, so it is easy to place the system anywhere. </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e1eeff;"><i class="material-icons" style="color: #2282ff;">map</i></div>
              <h4 class="title"><a href="">Crop health map</a></h4>
              <p class="description">An NDVI image is given as input to the model and it generates a health map of the image.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #ecebff;"><i class="material-icons" style="color: #8660fe;">desktop_windows</i></div>
              <h4 class="title"><a href="">Web Portal</a></h4>
              <p class="description">Our web portal provides services like data visualization, data analytics, NDVI mapping, and comparative analysis. </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container-fluid">

        <header class="section-header">
          <h3>Why choose us?</h3>
          <p>A fully wireless system for collecting field data, processing, logging and visualization. The wireless sensor network is laid out in a star topology in which the sensor devices communicate with a localized gateway connected to the internet.</p>
        </header>

        <div class="row">

          <div class="col-lg-6">
            <div class="why-us-img">
              <img src="img/why-us.png" alt="" class="img-fluid">
              <p> </p>
              <img src="img/background.png" alt="" class="img-fluid">
            </div>
          </div>

          <div class="col-lg-6">
            <div class="why-us-content">
              <p>It's time to apply science-based decisions to stop wasting our valuable resources like water, energy, and nutrients.</p>
              <p>
                Our aim is to help the farmers in optimizing their farming practices leading to significant water, fertilzer, energy and labor savings.

                Our multi-model system collects data from two different sources to generate highly accurate and precise results. It will help farmers in taking timely decisions, generate more yield, and saving resources.
                Our system has three main modules.
              </p>

              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-fighter-jet" style="color: #f058dc;"></i>
                <h4>Drone attached to a multispectral camera</h4>
                <p>A multispectral camera mounted on DJI Phantom 4 is used to collect spectral images of the crop field. The images are then preprocessed for usage in a predictive model that uses the data collected from the WSN and these preprocessed images, which serves the role of an early warning system. </p>
              </div>

              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-wifi" style="color: #ffb774;"></i>
                <h4>Wireless Sensor network</h4>
                <p>Our system collects data through the Wireless Sensor Network. The data consists of the real-time values of humidity, air temperature, soil moisture, and soil temperature.</p>
              </div>

              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-code" style="color: #589af1;"></i>
                <h4>CroHMI Webportal</h4>
                <p>Our web portal is used display the collected data. The data obtained from the IoT nodes are displayed in the form of graphs and charts. The user of the website also has an option of performing comparative analysis between two parameters.</p>
              </div>

            </div>

          </div>

        </div>

      </div>
 <!--==========================
      <div class="container">
        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">274</span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">421</span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,364</span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">18</span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section>
    ============================-->

    <!--==========================
      Call To Action Section
    ============================-->
    <!--
    <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Call To Action</h3>
            <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section> #call-to-action -->

    <!--==========================
      Features Section
    ============================-->
    <section id="features">
      <div class="container">

        <div class="row feature-item">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/realtime.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>24/7 real-time monitoring of crops</h4>
            <p>
              Primitive methods of checking crop health are very tedious and inefficient and require human resources.
            </p>

            <p>
              Our solution uses hardware technology to monitor crop in real-time 24/7 and use a predictive model to generate health maps which give accurate health status of the crop, health map can be generated every week or month and in a matter of minutes as compared to primitive methods of checking crop manually which may take many hours to complete.
            </p>
            <p>
              This will not only solve time and human resources but also the cost is reduced.
            </p>
          </div>
        </div>

        <div class="row feature-item mt-5 pt-5">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="img/comparison.PNG" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>How are we different?</h4>
            <p>
              We provide value to our solution by integrating multi-modal data, the rest of the existing solutions provide either IoT based monitoring or drone-based multispectral imagery. Our solution integrates both of these models to create accurate predictions and real-time monitoring solutions.
            </p>
            <p>
              It also involves a user friendly web portal where users can interact and view different crop health parameters. Another aspect of this solution is that we have created predictive models to generate health maps that depict the current health status of the crop.
            </p>
            <p>
              All of this is accessible by a user-friendly web portal.
            </p>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>


        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-drone">Drone</li>
              <li data-filter=".filter-node">IoT Nodes</li>
              <li data-filter=".filter-web">Web Portal</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-drone">
            <div class="portfolio-wrap">
              <img src="img/portfolio/drone 1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>DJI Phantom 4 </h4>
                <p>Drone</p>
                <div>
                  <a href="img/portfolio/drone 1.png" data-lightbox="portfolio" data-title="DJI Phantom 4" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/web p 1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web Portal</h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/web p 1.png" class="link-preview" data-lightbox="portfolio" data-title="Web Portal" title="Preview"><i class="ion ion-eye"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-drone" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/drone 2.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sentera TrueNDVI Sensor</h4>
                <p>Drone</p>
                <div>
                  <a href="img/portfolio/drone 2.png" class="link-preview" data-lightbox="portfolio" data-title="Sentera TrueNDVI Single Sensor" title="Preview"><i class="ion ion-eye"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-node">
            <div class="portfolio-wrap">
              <img src="img/portfolio/node 1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>A single Node</h4>
                <p>IoT Node</p>
                <div>
                  <a href="img/portfolio/node 1.png" class="link-preview" data-lightbox="portfolio" data-title="A single Node" title="Preview"><i class="ion ion-eye"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/web p 2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web Portal</h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/web p 2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web Portal" title="Preview"><i class="ion ion-eye"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-node" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/node 2.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>A closer look at the node</h4>
                <p>IOT Node</p>
                <div>
                  <a href="img/portfolio/node 2.png" class="link-preview" data-lightbox="portfolio" data-title="A closer look at the node" title="Preview"><i class="ion ion-eye"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="img/portfolio/web p 3.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web portal</h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/web p 3.png" class="link-preview" data-lightbox="portfolio" data-title="Web portal" title="Preview"><i class="ion ion-eye"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-node" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/node 3.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>A single IoT Node</h4>
                <p>IOT Node</p>
                <div>
                  <a href="img/portfolio/node 3.png" class="link-preview" data-lightbox="portfolio" data-title="IOT Node" title="Preview"><i class="ion ion-eye"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-drone" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/drone 3.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>DJI Phantom 4 in the field</h4>
                <p>Drone</p>
                <div>
                  <a href="img/portfolio/drone 3.pmg" class="link-preview" data-lightbox="portfolio" data-title="Drone" title="Preview"><i class="ion ion-eye"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Clients Section

    <section id="testimonials">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">

              <div class="testimonial-item">
                <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                </p>
              </div>

            </div>

          </div>
        </div>


      </div>
    </section>

    ============================-->


    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header">
          <h3>Team</h3>
          <p>Meet the team that made it possible.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/maam.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Dr. Rafia Mumtaz</h4>
                  <span>Principal Investigator</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/dr_faisal.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Dr. Faisal Shafait</h4>
                  <span>Co PI</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/uferah.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Uferah Shafi</h4>
                  <span>Team Lead</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/Moeez.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Moeez Malik</h4>
                  <span>Embedded System Engineer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/usamaS.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Usama Shujaat</h4>
                  <span>Embedded System Engineer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/ihsan.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Ihsan Haq</h4>
                  <span>Embedded System Engineer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/osama.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Osama Jamil</h4>
                  <span>Imaging and ML Engineer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>



        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Clients Section

    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Clients</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/client-1.png" alt="">
          <img src="img/clients/client-2.png" alt="">
          <img src="img/clients/client-3.png" alt="">
          <img src="img/clients/client-4.png" alt="">
          <img src="img/clients/client-5.png" alt="">
          <img src="img/clients/client-6.png" alt="">
          <img src="img/clients/client-7.png" alt="">
          <img src="img/clients/client-8.png" alt="">
        </div>

      </div>
    </section>
    ============================-->

    <!--==========================
      Pricing Section
    ============================-->
    <section id="pricing" class="wow fadeInUp">

      <div class="container">

        <header class="section-header">
          <h3>Pricing</h3>
            <p>*Travelling cost will depend on area and will be fixed.</p>
        </header>

        <div class="row flex-items-xs-middle flex-items-xs-center">

          <!-- Basic Plan  -->
          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3><span class="currency">$</span>700<span class="period"></span></h3>
              </div>
              <div class="card-block">
                <h4 class="card-title">
                  One-time fixed cost
                </h4>
                <ul class="list-group">
                  <li class="list-group-item">Master Node</li>
                  <li class="list-group-item">Slave Node</li>
                  <li class="list-group-item">Training Service</li>
                </ul>
                <!--<a href="#" class="btn">Choose Plan</a>-->
              </div>
            </div>
          </div>

          <!-- Regular Plan  -->
          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3><span class="currency">$</span>100<span class="period">/hr</span></h3>
              </div>
              <div class="card-block">
                <h4 class="card-title">
                  Hourly services
                </h4>
                <ul class="list-group">
                  <li class="list-group-item">Drone Survey Service (Subscription)</li>
                  <li class="list-group-item">Drone Survey Service (Visit)</li>
                  <li class="list-group-item">Travelling cost*</li>
                  <!--<li class="list-group-item">24/7 Support System</li>-->
                </ul>
                <!--<a href="#" class="btn">Choose Plan</a>-->
              </div>
            </div>
          </div>

          <!-- Premium Plan  -->
          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3><span class="currency">$</span>39<span class="period">/month</span></h3>
              </div>
              <div class="card-block">
                <h4 class="card-title">
                  Monthly services
                </h4>
                <ul class="list-group">
                  <li class="list-group-item">Machine learning service</li>
                  <li class="list-group-item">Historic data</li>
                  <li class="list-group-item">24/7 Support System</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section><!-- #pricing -->

    <!--==========================
      Frequently Asked Questions Section

    <section id="faq">
      <div class="container">
        <header class="section-header">
          <h3>Frequently Asked Questions</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </header>

        <ul id="faq-list" class="wow fadeInUp">
          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="ion-android-remove"></i></a>
            <div id="faq1" class="collapse" data-parent="#faq-list">
              <p>
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="ion-android-remove"></i></a>
            <div id="faq2" class="collapse" data-parent="#faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="ion-android-remove"></i></a>
            <div id="faq3" class="collapse" data-parent="#faq-list">
              <p>
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="ion-android-remove"></i></a>
            <div id="faq4" class="collapse" data-parent="#faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="ion-android-remove"></i></a>
            <div id="faq5" class="collapse" data-parent="#faq-list">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="ion-android-remove"></i></a>
            <div id="faq6" class="collapse" data-parent="#faq-list">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section>
    ============================-->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">

                <div class="col-sm-6">

                  <div class="footer-info">
                    <h3>CROHMI</h3>
                    <p>An expert health monitoring system for crops based on the data collected from wireless sensor network and spectral images.</p>
                  </div>

                  <div class="footer-links">
                    <h4>Contact Us</h4>
                    <p>
                      NUST H-12 <br>
                      Islamabad<br>
                      Pakistan <br>
                      <!--
                      <strong>Phone:</strong> +92 301 1234567<br>
                      -->
                      <p></p>
                      <strong>Email:</strong> iotlab@seecs.edu.pk<br>
                    </p>
                  </div>

                </div>

                <div class="col-sm-6">
                  <div class="footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                      <li><a href="#">Home</a></li>
                      <li><a href="#about">About us</a></li>
                      <li><a href="#services">Features</a></li>

                    </ul>
                  </div>


                  <div class="social-links">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                  </div>

                </div>

            </div>

          </div>

          <div class="col-lg-6">

            <div class="form">

              <h4>Send us a message</h4>
              <p>We are here to help and answer any question you might have. We look forward to hearing from you.</p>
              <form action="mailto:iotlab@seecs.edu.pk" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>

                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>

                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>

          </div>



        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; 2020 Copyright <strong>CroHMI</strong>. All Rights Reserved
      </div>
      <div class="credits">

      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>