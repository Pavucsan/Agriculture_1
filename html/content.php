<!-- high chart -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<!-- High meter -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<!-- Meter Chart -->
<?php include "AjaxJaso/meterCharts.php";?>
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
                            <?php include "AjaxJaso/TopNav.php";?>                               
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
                            <?php include "AjaxJaso/TopNav.php";?>   
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
                            <?php include "AjaxJaso/TopNav.php";?> 
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
                          <script>
                            $(document).ready(function(){
                                //setInterval(function(){    
                                    $.getJSON("employees.json",function(data){
                                        var employeeData='';
                                        $.each(data,function(key,value){
                                            employeeData+='<tr>';
                                            employeeData+='<td>'+value.firstName+'</td>';
                                            employeeData+='<td>'+value.employeeCode+'</td>';
                                            employeeData+='<td>'+value.emailAddress+'</td>';
                                            employeeData+='<td>'+value.region+'</td>';
                                            employeeData+='</tr>';
                                        });
                                        $("#empData").append(employeeData);
                                    });

                                //},5000);
                            });
                        </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
	</div>
</section>