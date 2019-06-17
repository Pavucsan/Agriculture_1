
<!-- high chart -->
<script src="https://code.highcharts.com/highcharts.js"></script>

<!-- High meter -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<!-- <script>
    document.addEventListener('DOMContentLoaded', function () {
            var myChart = Highcharts.chart('chartContainer', {
                chart: {
                    type: 'line'
                    //line,bar,pie,column
                },
                title: {
                    text: 'Temprature Consumption'
                },
                xAxis: {
                    title:{
                        text:'Month'
                    },
                    categories: ['Apples', 'Bananas', 'Oranges','April','May','June', 'July', 'Agust','September','October','November','December']
                },
                yAxis: {
                    title: {
                        text: 'Temprature'
                    }
                },
                series: [{
                    name: 'Actual Temprature',
                    data: [5, 7, 3,5,5,7,8,9,6,3,4,7,8,6,6,3,7]
                },{
                    name: 'Expect Temprature',
                    data: [4, 4, 4,4,4,4,4,4,4,4,4,4,4,4,4,4,4]
                }]//end serise
            });
        });//end chart function
</script> -->

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>   
<!-- <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Actual Moiture Level', 'Expect Moiture Level'],
          ['Jan',  9,      4],
          ['Feb',  5,      4],
          ['Mar',  6,       4],
          ['Apr',  3,      4],
          ['May',  4,      4],
          ['Jun',  5,      4],
          ['Jul',  6,       4],
          ['Aug',  4,      4]
        ]);

        var options = {
          title: 'Moiture Level',
          hAxis: {title: 'Month',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('MchartContainer'));
        chart.draw(data, options);
      }
</script> -->



<!-- Meter Chart -->
<!-- this for Temprature -->
<script>
    //get the data from 
    <?php    
        include "_JsonFiles/phpCode2.php";
    ?> 

    google.charts.load('current', {'packages':['gauge']});
    google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable(<?php echo "[",json_encode($json[0][0]).",".json_encode($json[0][1])."]";?>);

        var options = {
          width: 400, height: 200,
          redFrom: 35, redTo: 50,
          yellowFrom:25, yellowTo: 35,
          minorTicks: 5
        };

        var chart = new google.visualization.Gauge(document.getElementById('tempMeter'));

        chart.draw(data, options);

        setInterval(function() {
          //data.setValue(0, 1, 20 + Math.round(30 * Math.random()));
          chart.draw(data, options);
        }, 1000);        
      }
</script>
<!-- End temp meter -->
<!-- Moutre level -->

<script>
    
    google.charts.load('current', {'packages':['gauge']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],          
          ['Moutre', 25]          
        ]);

        var options = {
          width: 400, height: 200,
          redFrom: 35, redTo: 50,
          yellowFrom:25, yellowTo: 35,
          minorTicks: 5
        };

        var chart = new google.visualization.Gauge(document.getElementById('MotureMeter'));

        chart.draw(data, options);

        setInterval(function() {
          data.setValue(0, 1, 20 + Math.round(30 * Math.random()));
          chart.draw(data, options);
        }, 13000);
        setInterval(function() {
          data.setValue(1, 1, 20 + Math.round(30 * Math.random()));
          chart.draw(data, options);
        }, 5000);
        setInterval(function() {
          data.setValue(2, 1, 10 + Math.round(10 * Math.random()));
          chart.draw(data, options);
        }, 26000);
      }

</script>
<!-- End Moutre level -->

<!-- Humility Level -->
<script>
          google.charts.load('current', {'packages':['gauge']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],          
          ['Humility', 25]          
        ]);

        var options = {
          width: 400, height: 200,
          redFrom: 35, redTo: 50,
          yellowFrom:25, yellowTo: 35,
          minorTicks: 5
        };

        var chart = new google.visualization.Gauge(document.getElementById('humilityMeter'));

        chart.draw(data, options);

        setInterval(function() {
          data.setValue(0, 1, 20 + Math.round(30 * Math.random()));
          chart.draw(data, options);
        }, 13000);
        setInterval(function() {
          data.setValue(1, 1, 20 + Math.round(30 * Math.random()));
          chart.draw(data, options);
        }, 5000);
        setInterval(function() {
          data.setValue(2, 1, 10 + Math.round(10 * Math.random()));
          chart.draw(data, options);
        }, 26000);
      }
</script>
<!-- End humility meter -->


<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Dashboard</h2>
            <small class="text-muted">Welcome to ProjectAgro</small>
        </div>
        

        <!-- Current levels -->
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-chart col-blue"></i> </div>
                    <a href='#section1'>
                    <div class="content">
                        <div class="text">Temparature</div>
                        <div class="text" style="display:inline; color:blue"><small>Current Level:</small></div>
                        <div class="number" id="temp" style="display:inline">
                            <script>
                                var xmlhttp = new XMLHttpRequest();
                                xmlhttp.onreadystatechange = function() {
                                if (this.readyState == 4 && this.status == 200) {
                                    myObj = JSON.parse(this.responseText);
                                    document.getElementById("temp").innerHTML = myObj[0][2];
                                    document.getElementById("TempExpectLevel").innerHTML = myObj[0][1]+" <sup>0</sup>f";
                                }
                                };
                                // xmlhttp.open("GET", "_JsonFiles/phpCurrentTemp.php", true);
                                xmlhttp.open("GET", "_JsonFiles/TempPhpCodeActualResult.php", true);
                                xmlhttp.send();
                            </script>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-chart col-blush"></i> </div>
                    <div class="content">
                        <div class="text">Moisture</div>
                        <div class="text" style="display:inline; color:red"><small>Current Level:</small></div>   
                        <div class="number" id="moiture" style="display:inline;">
                            <script>
                                    var xmlhttp = new XMLHttpRequest();

                                    xmlhttp.onreadystatechange = function() {
                                    if (this.readyState == 4 && this.status == 200) {
                                        myObj = JSON.parse(this.responseText);
                                        document.getElementById("moiture").innerHTML = myObj[0][2]+"%";
                                        document.getElementById("MoiExpectLevel").innerHTML = myObj[0][1];
                                    }
                                    };
                                    // xmlhttp.open("GET", "_JsonFiles/phpCurrentTemp.php", true);
                                    xmlhttp.open("GET", "_JsonFiles/MoiturePhpCodeAll.php", true);
                                    xmlhttp.send();
                                </script>                            
                        
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-chart col-green"></i> </div>
                    <a href='#section2'>
                    <div class="content">
                        <div class="text">Humility</div>
                        <div class="text" style="display:inline; color:limegreen"><small>Current Level:</small></div>
                        <div class="number" id="humility" style="display:inline">
                            <script>
                                var xmlhttp = new XMLHttpRequest();

                                xmlhttp.onreadystatechange = function() {
                                if (this.readyState == 4 && this.status == 200) {
                                    myObj = JSON.parse(this.responseText);
                                    document.getElementById("humility").innerHTML = myObj[0][2];
                                    document.getElementById("HumiExpectLevel").innerHTML = myObj[0][1];
                                }
                                };
                                // xmlhttp.open("GET", "_JsonFiles/phpCurrentTemp.php", true);
                                xmlhttp.open("GET", "_JsonFiles/HumilityPhpCodeAll.php", true);
                                xmlhttp.send();
                            </script>                                  
                       </div>
                    </div>
                    </a>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-chart col-yello"></i> </div>
                    <div class="content">
                        <div class="text">Sensor additional</div>
                        <div class="number">None</div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-balance col-cyan"></i> </div>
                    <div class="content">
                        <div class="text">Hospital Earning</div>
                        <div class="number">$3,540</div>
                    </div>
                </div>
            </div> -->
        </div>

        <!-- Current Report -->
        <div class="row clearfix" id="#section1">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Current Report</h2>
                            <!-- Temprature meter -->
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="card">
                                        <div class="header">
                                            <h2>Temparature <small >Expect Level:
                                                <div id="TempExpectLevel" style="display:inline"></div>
                                            </small></h2>
                                            <ul class="header-dropdown">
                                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                                    <ul class="dropdown-menu float-right">
                                                        <li><a href="javascript:void(0);">Action</a></li>
                                                        <li><a href="javascript:void(0);">Another action</a></li>
                                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="body">
                                            <div class="stats-report">
                                            <div class="stat-item">
                                                <h5>Overall</h5>
                                                <b class="col-indigo">00.00</b></div>
                                            <div class="stat-item">
                                                <h5>Montly</h5>
                                                <b class="col-indigo">00.00</b></div>
                                            <div class="stat-item">
                                                <h5>Day</h5>
                                                <b class="col-indigo">00.00</b></div>
                                            </div>
                                            <div class="sparkline" id="tempMeter" > </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="card">
                                        <div class="header">
                                            <h2>Moiture <small >Expect Level:
                                                <div id="MoiExpectLevel" style="display:inline"></div>
                                            </small></h2>
                                            <ul class="header-dropdown">
                                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                                    <ul class="dropdown-menu float-right">
                                                        <li><a href="javascript:void(0);">Action</a></li>
                                                        <li><a href="javascript:void(0);">Another action</a></li>
                                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="body">
                                            <div class="stats-report">
                                            <div class="stat-item">
                                                <h5>Overall</h5>
                                                <b class="col-blush">00.00</b></div>
                                            <div class="stat-item">
                                                <h5>Montly</h5>
                                                <b class="col-blush">00.00</b></div>
                                            <div class="stat-item">
                                                <h5>Day</h5>
                                                <b class="col-blush">00.00</b></div>
                                            </div>
                                            <div class="sparkline" id="MotureMeter"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="card">
                                        <div class="header">
                                            <h2>Humility <small >Expect Level:
                                                <div id="HumiExpectLevel" style="display:inline"></div>
                                            </small></h2>
                                            <ul class="header-dropdown">
                                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                                    <ul class="dropdown-menu float-right">
                                                        <li><a href="javascript:void(0);">Action</a></li>
                                                        <li><a href="javascript:void(0);">Another action</a></li>
                                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="body">
                                            <div class="stats-report">
                                            <div class="stat-item">
                                                <h5>Overall</h5>
                                                <b class="col-green">00.00</b></div>
                                            <div class="stat-item">
                                                <h5>Montly</h5>
                                                <b class="col-green">00.00</b></div>
                                            <div class="stat-item">
                                                <h5>Day</h5>
                                                <b class="col-green">00.00</b></div>
                                            </div>
                                            <div class="sparkline" id="humilityMeter"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- <div class="body" id='chart_div' style=" min-width: 210px; max-width:400px; height: 200px; margin: 0 auto"> -->
                        <!-- Line chart -->
                        <!-- <canvas id="line_chart" height="70"></canvas> -->
                    <!-- </div> -->
                    <!-- <div class="body" id='MchartContainer'>                        
                    </div> -->
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> Current Report content <small>Values of the content...</small> </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                          <?php
                            include "_JsonFiles/tableDashboard.php";
                          ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="card">
                    <div class="header">
                        <h2>PATIENT Reports</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu float-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Charts</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Dean Otto</td>
                                        <td>
                                            <span class="sparkbar">5,8,6,3,5,9,2</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>K. Thornton</td>
                                        <td>
                                        <span class="sparkbar">10,8,9,3,5,8,5</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kane D.</td>
                                        <td>
                                            <span class="sparkbar">7,5,9,3,5,2,5</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jack Bird</td>
                                        <td>
                                            <span class="sparkbar">10,8,1,3,3,8,7</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Hughe L.</td>
                                        <td>
                                            <span class="sparkbar">2,8,9,8,5,1,5</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jack Bird</td>
                                        <td>
                                            <span class="sparkbar">1,8,2,3,9,8,5</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Hughe L.</td>
                                        <td>
                                            <span class="sparkbar">10,8,1,3,2,8,5</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="card">
                    <div class="header">
                        <h2>Visits from countries</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu float-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <ul class="country-state">
                            <li class="m-b-20">
                                <h4 class="m-b-0">6350</h4> <small>From India</small>
                                <div class="float-right">58%</div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:58%;"> <span class="sr-only">58% Complete</span></div>
                                </div>
                            </li>
                            <li class="m-b-20">
                                <h4 class="m-b-0">3250</h4> <small>From UAE</small>
                                <div class="float-right">90%</div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:90%;"> <span class="sr-only">90% Complete</span></div>
                                </div>
                            </li>
                            <li class="m-b-20">
                                <h4 class="m-b-0">1250</h4> <small>From Australia</small>
                                <div class="float-right">70%</div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%;"> <span class="sr-only">70% Complete</span></div>
                                </div>
                            </li>
                            <li  class="m-b-20">
                                <h4 class="m-b-0">1350</h4> <small>From USA</small>
                                <div class="float-right">70%</div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%;"> <span class="sr-only">70% Complete</span></div>
                                </div>
                            </li>
                            <li>
                                <h4 class="m-b-0">1250</h4> <small>From UK</small>
                                <div class="float-right">65%</div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:65%;"> <span class="sr-only">65% Complete</span></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="card">
                    <div class="header">
                        <h2>PATIENT prograss</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu float-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <ul class="basic-list">
                            <li>Mark Otto <span class="label-danger label">21%</span></li>
                            <li>Jacob Thornton <span class="label-purple label">50%</span></li>
                            <li>Jacob Thornton<span class="label-success label">90%</span></li>
                            <li>M. Arthur <span class="label-info label">75%</span></li>
                            <li>Jacob Thornton <span class="label-warning label">60%</span></li>
                            <li>M. Arthur <span class="label-success label">91%</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
	</div>
</section>