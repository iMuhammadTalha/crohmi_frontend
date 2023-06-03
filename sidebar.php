<html>

<body>
<?php
// session_start();
        // echo "Email " . $_SESSION["email"] .;
if(empty($_SESSION))
{
    // header("Location: index.php");
}
?>


<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <!-- LOGO IS HERE, DO CHANGE -->
            <a class="navbar-brand" href="portal.php"><img style="width:120px" src="images/logo1.png" alt="Logo"
                                                           title="Crop Health Monitoring via IoT"></a>
            <a class="navbar-brand hidden" href="portal.php"><img src="images/logo2.png" alt="Logo"></a>
        </div>

        <div style="" id="main-menu" class="main-menu collapse navbar-collapse">
        <?php 
            
        ?>
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="portal.php"> <i class="menu-icon fa fa-dashboard"></i> Dashboard </a>
                </li>
                <h3 class="menu-title"> Data & Graphs </h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Visual Analytics</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-AirMois.php">Humidity</a></li>
                        <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-AirTemp.php">Air Temperature</a>
                        </li>
                        <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-SoilMois.php">Soil Moisture</a>
                        </li>
                        <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-SoilTemp.php">Soil Temperature</a>
                        </li>
                        <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-Custom.php">Comparative Analysis</a></li>
                    </ul>
                </li>

                <li id="admin-panel" class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Drone Imagery Data</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-line-chart"></i><a href="viewNDVI.php">NDVI Images</a>
                        </li>
                        <li><i class="menu-icon fa fa-line-chart"></i><a href="viewNRI.php">NIR Images</a>
                        </li>
                        <li><i class="menu-icon fa fa-area-chart"></i><a href="maps-ndvi.php">Satellite Map</a></li>
                    </ul>
                </li>
                <li id="user-panel">
                    <a href="maps-ndvi.php"> <i class="menu-icon fa fa-area-chart"></i></i>Satellite Map</a>
                </li>
                <!-- <li>
                    <a href="charts-Custom.php"> <i class="menu-icon fa fa-area-chart"></i></i>Comparative Analysis </a>
                </li> -->
                <li>
                    <a href="charts-HealthMap.php"> <i class="menu-icon fa fa-area-chart"></i></i>Predictive Health Map</a>
                </li>
                <!-- <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Predictive Analytic</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-HealthMap.php">Health Map</a></li>
                    </ul>
                </li> -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Real time data</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="tables-dataview.php?from=<?php echo date("Y-m-d",strtotime('-1 months'))?>&to=<?php echo date("Y-m-d")?>">Soil Parameter</a></li>
                        <li><i class="fa fa-table"></i><a href="tables-airview.php?from=<?php echo date("Y-m-d",strtotime('-1 months'))?>&to=<?php echo date("Y-m-d")?>">Air Parameter</a></li>
                    </ul>
                </li>
                <?php
                    if(!strcmp($_SESSION["role"],'false')) //If this function returns 0, the two strings are equal.
                    {
                    //    echo "TRUEEE " . $_SESSION["role"] . ".<br>"; 
                    ?>        
                     <style type="text/css">#admin-panel{
                        display:none;
                        }</style>            
                <?php
                    } else {
                        ?>
                        <style type="text/css">#user-panel{
                        display:none;
                        }</style>
                        <?php        
                    }
                ?>
                        <!-- <h3 id="admin-panel" class="menu-title">Admin Panel</h3> -->
                        <!-- /.menu-title -->
                        <!-- <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Data Archives</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-table"></i><a href="tables-data.php">IoT Data Archive</a></li>
                                <li><i class="fa fa-table"></i><a href="tables-air.php">Air Data Archive</a></li>
                            </ul>
                        </li> -->
                        <!-- <li id="admin-panel">
                            <a href="charts-NDVIMap.php"> <i class="menu-icon fa fa-area-chart"></i></i>NDVI Image Upload </a>
                        </li> -->
                        <!-- <li id="admin-panel">
                            <a href="charts-NIRMap.php"> <i class="menu-icon fa fa-area-chart"></i></i>Spectral Image Upload </a>
                        </li> -->
                
                

                <h3 class="menu-title"></h3><!-- /.menu-title -->
                <li>
                    <a href="index.php"> <i class="menu-icon fa fa-sign-out"></i></i>Logout </a>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->
</body>
</html>