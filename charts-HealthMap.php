<?php include 'header.php' ?>
<body>

<!-- Left Panel -->

<?php include 'sidebar.php' ?>

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
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="notification"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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


            <div class="col-sm-8">
                <p style="font-size:24px; color:#444444; font-variant:small-caps; font-weight:450; margin-bottom:0px; margin-top:12px; ">
                    Crop Health Monitoring using IoT </p>

            </div>
        </div>

    </header><!-- /header -->
    <!-- Header-->

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Dashboard</a></li>
                        <li class="active">Health Map</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn here">
            <div class="container" style="justify-content: center; display: flex;">
                <h5>Showing Health Map for latest NIR Images uploaded</h5>
            </div>

            <div class="form-group">
                <label for="node">Select month:</label>
                <select class="form-control" id="month">
                    <option value=1 selected>January, 2020</option>
                    <option value=2>Feburary, 2020</option>
                    <!-- <option value=2>February</option> -->
                                              <!-- <option value=3>March</option> -->
                                               <!-- <option value=4>April</option> -->
                                                <!-- <option value=5>May</option> -->
                                                 <!-- <option value=6>June</option> -->
                                                  <!-- <option value=7>July</option> -->
                                               <!-- <option value=8>August</option> -->
                                                <!-- <option value=9>September</option> -->
                                             <!-- <option value=10>October</option> -->
                    <option value=11>November, 2019</option>
                    <option value=12>December, 2019</option>
                </select>
            </div>

            <div class="container ndvi_map" style="margin-top: 10px">
                <img src="" style="width: 40%;" id="ndviImage">
                <i class="fa fa-arrow-right" style="font-size: 25px; width: 10%; padding-left: 8%"></i>
                <img src="" style="width: 40%; float: right;" id="healthMap">
            </div>
            <div class="container" id="loader" style="margin-left: 48%; margin-top: 100px">
                <i class="fa fa-spinner fa-pulse" style="font-size: 40px"></i>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->


</div><!-- /#right-panel -->

<!-- Right Panel -->


<script src="vendors/jquery/dist/jquery.min.js"></script>
<script src="vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
    const ndvi_map = $(".ndvi_map");
    $(".ndvi_map").hide();
    document.getElementById("loader").style.display = "block";

    var data = [];
    getLastHealthMap();

    function getLastHealthMap() {
        var xhr = new XMLHttpRequest();
        xhr.responseType = 'json';
        xhr.open('GET', 'http://111.68.101.17:8000/api/crohmi/ndvi/map/');
        xhr.send();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                data = xhr.response;
                document.getElementById("loader").style.display = "none";

                var maps = data.filter(ele => {
                    return ele["month"] === 1;
                });
                for (const map of maps) {
                    const ndvi_clone = ndvi_map.clone();
                    console.log(ndvi_clone.children($('#ndviImage')))
                    ndvi_clone.children('#ndviImage').attr("src", map['ndvi_image'].replace(/^http:\/\//i, 'http://'));
                    ndvi_clone.children('#healthMap').attr("src", map['health_map'].replace(/^http:\/\//i, 'http://'));
                    ndvi_clone.show().appendTo(".here");
                }
            }
        }
    }

    $('#month').on('change', function () {
        var month = $(this).val();

        var maps = data.filter(ele => {
            return ele["month"] === parseInt(month);
        });

        if (maps.length > 0) {
            $('.ndvi_map').hide();
        }

        for (const map of maps) {
            const ndvi_clone = ndvi_map.clone();
            ndvi_clone.children('#ndviImage').attr("src", map['ndvi_image'].replace(/^http:\/\//i, 'http://'));
            ndvi_clone.children('#healthMap').attr("src", map['health_map'].replace(/^http:\/\//i, 'http://'));
            ndvi_clone.show().appendTo(".here");
        }
    });
</script>

<!--  flot-chart js -->
</body>

</html>
