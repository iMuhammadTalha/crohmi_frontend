<?php include 'header.php' ?>
<body>


    <!-- Left Panel -->

   <?php include 'sidebar.php'?>

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-4">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">0</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 0 Notification</p><!--
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>-->
                            </div>
                        </div>
                    </div>

                </div>



                <div class="col-sm-8" >
                    <p style="font-size:24px; color:#444444; font-variant:small-caps; font-weight:450; margin-bottom:0px; margin-top:12px; "> Crop Health Monitoring using IoT </p>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Home</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">



			<!-- BOOTSTRAP -->
			<div class="bootstrap-wrap-class">
             <div class="col-sm-12" style="margin-bottom:24px;">
                <!--img style="width:100%;" src="images/background.jpg"></img-->

				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					
				  </ol>
				  <div class="carousel-inner">
					<div class="carousel-item active">
					  <img class="d-block w-100" height="222px" src="images/background.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
					  <img class="d-block w-100" height="222px" src="images/background5.jpg" alt="Third slide">
					</div>
					<div class="carousel-item">
					  <img class="d-block w-100" height="222px" src="images/background2.jpg" alt="Second slide">
					</div>
					
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				</div>

             </div>
			</div>

            <div class="col-sm-12" style="margin-bottom:24px;">
                <p style="color:#333333;">
				Our project aims to produce an efficient crop health monitoring system based on IoT to improve crop yield significantly and facilitate
				the farmers. The system will be automated based on the sensed parameters such as temperature, humidity, soil moisture and multi-spectral images
				of the crop during the growing season. These images will be captured using an imaging sensor mounted on a drone for low altitude remote sensing.
				</p>


            </div>


			<div class="col-sm-12" style="margin-bottom:24px;">
				<h2> View Data </h2><br/>
                <div class="col-sm-12 mb-4">
					<div class="card-group">
						<div class="card col-lg-2 col-md-6 no-padding bg-flat-color-1" style="margin:auto">
						<a href="charts-AirMois.php">
							<div class="card-body" id="choice-card1">
								<div class="h1 text-muted text-right mb-4">
									<img src="images/Water_Drop.svg.hi.png" width="35px">
								</div>

								<div class="h4 mb-0 text-light" style="font-size:18px;">Humidity
								</div>
								<small class="text-uppercase font-weight-bold text-light"></small>
								<div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
							</div>
						</a>
						</div>
						<div class="card col-lg-2 col-md-6 no-padding no-shadow" style="margin:auto">
						<a href="charts-AirTemp.php">
							<div class="card-body bg-flat-color-2"  id="choice-card2">
								<div class="h1 text-muted text-right mb-4">
									<img src="images/temp2.png" width="70px">
								</div>
								<div class="h4 mb-0 text-light"  style="font-size:18px;">Air Temperature
								</div>
								<small class="text-uppercase font-weight-bold text-light"></small>
								<div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
							</div>
						</a>
						</div>
						<div class="card col-lg-2 col-md-6 no-padding no-shadow" style="margin:auto">
						<a href="charts-SoilMois.php">
							<div class="card-body bg-flat-color-3"  id="choice-card3">
								<div class="h1 text-right mb-4">
									<img src="images/Water_Drop.svg.hi.png" width="35px">
								</div>
								<div class="h4 mb-0 text-light" style="font-size:18px;">Soil Moisture
								</div>
								<small class="text-light text-uppercase font-weight-bold"></small>
								<div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
							</div>
						</a>
						</div>
						<div class="card col-lg-2 col-md-6 no-padding no-shadow" style="margin:auto">
						<a href="charts-SoilTemp.php">
							<div class="card-body bg-flat-color-5" id="choice-card4">
								<div class="h1 text-right text-light mb-4">
									<img src="images/temp.png" width="25px">
								</div>
								<div class="h4 mb-0 text-light" style="font-size:16px;">Soil Temperature
								</div>
								<small class="text-uppercase font-weight-bold text-light"></small>
								<div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
							</div>
						</a>
						</div>
						<div class="card col-lg-2 col-md-6 no-padding no-shadow" style="margin:auto">
						<a href="maps-ndvi.php">
							<div class="card-body bg-flat-color-4" id="choice-card5">
								<div class="h1 text-light text-right mb-4">
									<img src="images/vegetation-icon.png" width="50px">
								</div>
								<div class="h4 mb-0 text-light" style="font-size:18px;">Map</div>
								<small class="text-light text-uppercase font-weight-bold"></small>
								<div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
							</div>
						</a>
						</div>
					</div>


				</div>
			</div>

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>