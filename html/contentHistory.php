    <!-- google core chart -->
        <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->
        <!-- <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                //get the data from database and pass via variable data
                var data = google.visualization.arrayToDataTable([
                ['Time', 'Actual', 'Expect'],
                ['1',  34,      30],
                ['2',  35,      30],
                ['3',  28,       30],
                ['4',  34,      30],
                ['5',  35,      30],
                ['6',  28,       30],
                ['7',  34,      30],
                ['8',  35,      30],
                ['9',  28,       30],
                ['10',  34,      30],
                ['11',  35,      30],
                ['12',  28,       30],
                ['13',  32,      30]
                ]);1

                var options = {
                title: 'Temprature History',
                //hAxis:{title:'Time'},
                vAxis:{title:'Celcious'},
                curveType: 'function',
                legend: { position: 'bottom' }
                };

                var chart = new google.visualization.LineChart(document.getElementById('curve_chartX'));

                chart.draw(data, options);
            }
        </script> -->

    <!-- Highcharts -->
    <script
            src="http://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
        </script>
        <script src="https://code.highcharts.com/highcharts.js"></script>       

    <!-- Curve Temp level -->
    <script>
            $(document).ready(function(){
                
                var options={
                    chart:{
                        renderTo:'curve_TempChart',
                        type:'line'
                    },
                    title:{
                        text:'Tempreture'
                    },
                    series:[{name:'Actual'},{name:'Expect'}]
                };
                var chart=new Highcharts.chart(options);
                $.getJSON('_JsonFiles/TempPhpCodeAll.php',
                function(dataParam)
                {
                    options.series[0].data=dataParam;                
                    
                    var chart=new Highcharts.chart(options);
                });
                $.getJSON('_JsonFiles/TempPhpCodeActualResult.php',function(dataParam)
                {
                    options.series[1].data=dataParam;
                    var chart=new Highcharts.chart(options);
                
                });
            });
        
    </script>
    <!-- Curve Humility level -->
    <script>
            $(document).ready(function(){
                
                var options={
                    chart:{
                        renderTo:'curve_HumiChart',
                        type:'line'
                    },
                    series:[{name:'Actual'},{name:'Expect'}]
                };
                var chart=new Highcharts.chart(options);
                $.getJSON('_JsonFiles/phpCode.php',
                function(dataParam)
                {
                    options.series[0].data=dataParam;                
                    
                    var chart=new Highcharts.chart(options);
                });
                $.getJSON('_JsonFiles/data.php',function(dataParam)
                {
                    options.series[1].data=dataParam;
                    var chart=new Highcharts.chart(options);
                
                });
            });
        
    </script>
    <!-- Curve moiture level -->
    <script>
            $(document).ready(function(){
                
                var options={
                    chart:{
                        renderTo:'curve_MoisChart',
                        type:'line'
                    },
                    series:[{name:'Actual'},{name:'Expect'}]
                };
                var chart=new Highcharts.chart(options);
                $.getJSON('_JsonFiles/MoiturePhpCodeActualResult.php',
                function(dataParam)
                {
                    options.series[0].data=dataParam;                
                    
                    var chart=new Highcharts.chart(options);
                });
                $.getJSON('_JsonFiles/MoiturePhpCodeAll.php',function(dataParam)
                {
                    options.series[1].data=dataParam;
                    var chart=new Highcharts.chart(options);                
                });
            });
        
    </script>

    <script>
        var mydata=JSON.parse("_JsonFiles/phpCode3.php");

        alert("hello");
        // var temp=document.getElementById('Temp_data');
        // temp.innerHTML=json

    </script>

            <style>
                .CustomClass1{
                    text-decoration: none;
                    position: sticky;
                    top: 0;
                    z-index: 1;  
                    background-color: white;
                    opacity: 40%;
                    text-decoration:none
                                      
                }
                .info-box-4 {
                    border-color: green;                 
                }
                .a:hover {
                    text-decoration: none;
                }

            </style>
    
    <section class="content home">
        <div class="container-fluid">
            <div class="block-header">
                <h2>History</h2>
                <small class="text-muted">Welcome to ProjectAgro</small>
            </div>
            <!-- top lable Start -->
            <div class="row clearfix CustomClass1" style="padding-top:10px padding-bottom:0px">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <a href="#section1" style="text-decoration: none;">
                        <div class="info-box-4 hover-zoom-effect">
                            <div class="icon"> <i class="zmdi zmdi-chart col-blue"></i> </div>                        
                                <div class="content">
                                    <div class="text">Temparature</div>
                                    <div class="number" id="Temp_data">27</div>
                                </div>                        
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <a href="#section2" style="text-decoration: none;">
                        <div class="info-box-4 hover-zoom-effect">
                            <div class="icon"> <i class="zmdi zmdi-chart col-green"></i> </div>                        
                                <div class="content">
                                    <div class="text">Humility</div>
                                    <div class="number"><?php ?></div>
                                </div>
                        </div>                
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <a href="#section3" style="text-decoration: none;">
                        <div class="info-box-4 hover-zoom-effect">
                            <div class="icon"> <i class="zmdi zmdi-chart col-blush"></i> </div>
                            <div class="content">
                                <div class="text">Moisture</div>
                                <div class="number">23</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="info-box-4 hover-zoom-effect">
                        <div class="icon"> <i class="zmdi zmdi-chart col-yello"></i> </div>
                        <div class="content">
                            <div class="text">Sensor additional</div>
                            <div class="number">27</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top lable End -->
            
            <!-- Temp history start -->
            <div class="row clearfix" id="section1" style="padding-top:115px">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Temparature Report</h2>
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
                            <!-- Line chart -->
                            <div id="curve_TempChart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2> Temprature History Report <small>Values of the content...</small> </h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                            <?php
                                include "_JsonFiles/tableHistryTemp.php"
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Temp history End -->

            <!-- Humility start -->
            <div class="row clearfix" id="section2" style="padding-top:115px">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Humility Report</h2>
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
                            <!-- Line chart -->
                            <div id="curve_HumiChart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2> Humility History Report <small>Values of the content...</small> </h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <?php
                                    //include "_JsonFiles/tableHistryMoiture.php";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Humility history End -->

            <!-- Moiture start -->
            <div class="row clearfix" id="section3" style="padding-top:115px">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Moisture Report</h2>
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
                            <!-- Line chart -->
                            <div id="curve_MoisChart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2> Moiture History Report <small>Values of the content...</small> </h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Temperature</th>
                                    <th>Himility</th>
                                    <th>Moutre</th>
                                    <th>Diseases</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Virginia </td>
                                    <td>Rose</td>
                                    <td>@Rose</td>
                                    <td><span class="label label-danger">Fever</span> </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Julie </td>
                                    <td>Gaylord</td>
                                    <td>@Julie </td>
                                    <td><span class="label label-info">Cancer</span> </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Jacqueline </td>
                                    <td>Woods</td>
                                    <td>@Woods</td>
                                    <td><span class="label label-warning">Lakva</span> </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Jonathan </td>
                                    <td>Lewis</td>
                                    <td>@Jonathan </td>
                                    <td><span class="label label-success">Dental</span> </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Margaret </td>
                                    <td>Griffin</td>
                                    <td>@Margaret </td>
                                    <td><span class="label label-info">Cancer</span> </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Joseph </td>
                                    <td>Hunter</td>
                                    <td>@Hunter</td>
                                    <td><span class="label label-success">Dental</span> </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Moiture history End -->

            <!-- you can add dive row clearfix -->
        </div>
    </section>