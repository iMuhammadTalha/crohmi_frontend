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
                            <p class="red">You have 0 Notification</p>
                            <!--
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
                        </a>!-->
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
                        <li class="active">Database table</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

            <form  action="tables-airview.php" method="GET">
                <div class="col-sm-4">
                Starting date:
                <input name="from" type="date" value=<?php echo $_GET['from']?>>
                </div>
        
                <div class="col-sm-4">
                Ending date: 
                <input name="to" type="date" value=<?php echo $_GET['to']?>>   
                </div>

                <div class="col-sm-4">
                <input style="margin:auto; font-size:24px;" type="submit" class="btn btn-primary btn-sm">
                </div>
                </form>
            </div>
            </br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table (Air)</strong>
                        </div>
                        <div class="card-body">
                            <table id="table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th data-field="timestamp">Date/Time</th>
                                    <th data-field="nh3">NH3</th>
                                    <th data-field="co">CO</th>
                                    <th data-field="no2">NO2</th>
                                    <th data-field="c3h8">C3H8</th>
                                    <th data-field="c4h10">C4H10</th>
                                    <th data-field="ch4">CH4</th>
                                    <th data-field="c2h5oh">C2H5OH</th>
                                    <th data-field="node_id">Pole</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>

                <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
                <script src="vendors/jquery/dist/jquery.min.js"></script>
                <link rel="stylesheet"
                      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.8.1/bootstrap-table.css">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.8.1/bootstrap-table.js"></script>

                <script type="text/javascript">
                    function findGetParameter(parameterName) {
                        var result = null,
                            tmp = [];
                        location.search
                            .substr(1)
                            .split("&")
                            .forEach(function (item) {
                                tmp = item.split("=");
                                if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
                            });
                        return result;
                    }


                    function load(data) {
                        $('table').bootstrapTable({data: data, pagination: true, pageSize: 50});
                    }
                    setTimeout(function() {
                        $.ajax({
                            url: "http://111.68.101.17:8000/api/crohmi/air/reading/?action=table-view&start_date=" +
                                findGetParameter('from') + '&end_date=' + findGetParameter('to'),
                            type: "get",
                            success: function (response) {
                                console.log('date:' + response[0]['timestamp']);

                                data = [];
                                for (var counter = 0; counter < response.length; counter++) {
                                    response[counter]['timestamp'] = new Date(response[counter]['timestamp']).toLocaleString();
                                    response[counter]['c2h5oh'] = response[counter]['c2h5oh'].toFixed(2);
                                }
                                load(response);
                            }
                        });
                    }, 50);
                </script>


            </div>
            <!-- <div style="margin:auto; padding-bottom:12px" class="col-lg-12"><form  action="tables-airview.php" method="GET">
						Start date:
						<div class="form-group">
                            <input name="from" type="date" value=<?php echo $_GET['from']?>>
                        </div>
                        </br>
                        Ending date:
                        <div>
                            <input name="to" type="date" value=<?php echo $_GET['to']?>>
                        </div>
                        </br>
						<input style="margin:auto; font-size:24px;" type="submit" class="btn btn-primary btn-sm">
						</form>
            </div> -->
        </div><!-- .animated -->
    </div><!-- .content -->


</div><!-- /#right-panel -->

<!-- Right Panel -->


<script src="vendors/jquery/dist/jquery.min.js"></script>
<script src="vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>

</body>

</html>
