<?php include("includes/header.php"); ?>
<?php include("includes/dbcon.php"); ?>
<?php include("includes/dashboard.inc.php"); ?>
            <!-- .page-content -->
            <div class="page-content sidebar-page right-sidebar-page clearfix">
                <!-- .page-content-wrapper -->
                <div class="page-content-wrapper">
                    <div class="page-content-inner">
                        <!-- Start .page-content-inner -->
                        <div id="page-header" class="clearfix">
                            <div class="page-header">
                                <h2>Dashboard</h2>
                                <span class="txt">Welcome to IoBM Job Portal - Job Management System</span>
                            </div>
                            
                        </div>


                           <!-- .row -->
                           <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                            <!-- .col-md-3 -->
                            <div class="panel panel-info tile" style="width:100%">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">Admins</h4>
                                </div>
                                <div class="panel-body pt0">
                                    <div class="progressbar-stats-1">
                                        <div class="stats">
                                            
                                            <div id="visitor_number" class="stats-number" data-from="0" data-to="<?php echo $adminCount; ?>" style="color : white; font-size:30px;"></div>
                                        </div>
                                       
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- End .panel -->
                        </div>
                        <!-- / .col-md-3 -->
                        <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                            <!-- .col-md-3 -->
                            <div class="panel tile yellowback">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title" style="color:white" >Students</h4>
                                </div>
                                <div class="panel-body pt0">
                                    <div class="progressbar-stats-1">
                                        <div class="stats">
                                            
                                            <div class="stats-number" data-from="0" data-to="<?php echo $studentCount; ?>" style="font-size:30px"></div>
                                        </div>
                                       
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- End .panel -->
                        </div>
                        <!-- / .col-md-3 -->
                        <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12" >
                            <!-- .col-md-3 -->
                            <div class="panel panel-success tile ">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">Alumnis</h4>
                                </div>
                                <div class="panel-body pt0">
                                    <div class="progressbar-stats-1">
                                        <div class="stats">
                                            
                                            <div class="stats-number" data-from="0" data-to="<?php echo $alumniCount; ?>" style="color : white; font-size:30px;"></div>
                                        </div>
                                      
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- End .panel -->
                        </div>
                        <!-- / .col-md-3 -->
                        <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                            <!-- .col-md-3 -->
                            <div class="panel panel-danger tile ">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title" style="color : white">Companies</h4>
                                </div>
                                <div class="panel-body pt0">
                                    <div class="progressbar-stats-1 dark">
                                        <div class="stats">
                                            
                                            <div class="stats-number money" data-from="0" data-to="<?php echo $companyCount; ?>" style="color : white; font-size:30px;"></div>
                                        </div>
                                        
                                       
                                    </div>
                                </div>
                            </div>
                            <!-- End .panel -->
                        </div>
                        
                         <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                            <!-- .col-md-3 -->
                            <div class="panel salmonback tile ">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title" style="color : white">Jobs</h4>
                                </div>
                                
                                <div class="panel-body pt0">
                                    <div class="progressbar-stats-1 dark">
                                        <div class="stats">
                                           
                                            <div class="stats-number money" data-from="0" data-to="<?php echo $jobCount; ?>" style="color : white; font-size:30px;"></div>
                                        </div>
                                       
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- End .panel -->
                        </div>
                        
                         <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                            <!-- .col-md-3 -->
                            <div class="panel lblueback tile ">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title" style="color : white">Internships</h4>
                                </div>
                                
                                <div class="panel-body pt0">
                                    <div class="progressbar-stats-1 dark">
                                        <div class="stats">
                                             
                                            <div class="stats-number money" data-from="0" data-to="<?php echo $internshipCount; ?>" style="color : white; font-size:30px;">0</div>
                                        </div>

                                       
                                    </div>
                                </div>
                            </div>
                            <!-- End .panel -->
                        </div>
                        <!-- / .col-md-3 -->
                    </div>
                    <!-- / .row -->



                        <!-- Start .row -->
                        <div class="row" style="">
                            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                    <div class="panel panel-default ">
                                        <div class="panel-heading" style=" background-color:#840023; color: #ffffff;">
                                                <h4 class="panel-title" style="text-align: center; font-size:25px; color: #ffffff;"><i class="fa fa-arrow-up" style="font-size:25px; "></i> Total Monthly Hits</h4>
                                        </div>
                                        <div class="panel-body">
                                            <div class="canvas-holder">
                                                <canvas id="line-dots-chartjs" height="100"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                    <div class="panel panel-default ">
                                        <div class="panel-heading" style=" background-color:#840023; color: #ffffff;">
                                                <h4 class="panel-title" style="text-align: center; font-size:25px; color: #ffffff;"><i class="fa fa-user" style="font-size:25px; "></i> Active/Inactive Users</h4>
                                        </div>
                                        <div class="panel-body">
                                            <div class="canvas-holder">
                                                <canvas id="donut-chartjs" height="214"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            




















                            <div class="col-lg-6" style="display: none;">
                                <!-- col-lg-6 start here -->
                                <div class="panel panel-default toggle panelMove panelClose panelRefresh" style="display: none;">
                                    <!-- Start .panel -->
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Line chart</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="canvas-holder">
                                            <canvas id="line-chartjs" height="100"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <!-- End .panel -->
                                <div class="panel panel-default toggle panelMove panelClose panelRefresh">
                                    <!-- Start .panel -->
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Line chart unfilled
                                            <small>and curved</small>
                                        </h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="canvas-holder">
                                            <canvas id="line-unfilled-chartjs" height="100"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <!-- End .panel -->
                                <div class="panel panel-default toggle panelMove panelClose panelRefresh">
                                    <!-- Start .panel -->
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Pie chart</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="canvas-holder">
                                            <canvas id="pie-chartjs" height="100"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <!-- End .panel -->
                                <div class="panel panel-default toggle panelMove panelClose panelRefresh">
                                    <!-- Start .panel -->
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Radar chart</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="canvas-holder">
                                            <canvas id="radar-chartjs" height="100"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <!-- End .panel -->
                            </div>
                            <!-- col-lg-6 end here -->
                            <div class="col-lg-6" style="display: none;">
                                <!-- col-lg-6 start here -->
                                
                                <!-- End .panel -->
                                <div class="panel panel-default toggle panelMove panelClose panelRefresh">
                                    <!-- Start .panel -->
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Bar chart</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="canvas-holder">
                                            <canvas id="bar-chartjs" height="100" class="col-md-12 col-lg-12"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <!-- End .panel -->


                                
                                <!-- / .row -->
                                <div class="panel panel-default toggle panelMove panelClose panelRefresh">
                                    <!-- Start .panel -->
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Donut chart</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="canvas-holder">
                                            <canvas id="donut-chartjs" height="100"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <!-- End .panel -->
                                <div class="panel panel-default toggle panelMove panelClose panelRefresh">
                                    <!-- Start .panel -->
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Polar area</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="canvas-holder">
                                            <canvas id="polar-chartjs" height="100"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <!-- End .panel -->
                            </div>
                            <!-- col-lg-6 end here -->
                        </div>
                        <!-- End .row -->



                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-lg-12">
                                    <!-- col-lg-12 start here -->
                                    <div class="panel panel-default plain panelRefresh">
                                        <!-- Start .panel -->
                                        
                                        <div class="panel-heading" style=" background-color:#840023; color: #ffffff;">
                                            <h5 class="panel-title" style="text-align: center; font-size:25px; color: #ffffff;">Recent Students Registered</h5>
                                        </div>  
                                      
                                        <div class="panel-body">
                                            <table id="basic-datatables" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead >
                                                    <tr style="">
                                                       
                                                        <th title="ID" style="font-size: 12px; text-align: center; width: 12%"><i class="fa fa-sort-numeric-asc"> </i> Sr No.</th>
                                                        <th title="name" style="font-size: 12px; text-align: center;"><i class="fa fa-user"> </i> Name</th>
                                                        
                                                        <th title="email" style="font-size: 12px; text-align: center; "><i class="fa fa-envelope"> </i> Email</th>
                                                    
                                                        <th title="request date" style="font-size: 12px; text-align: center;"><i class="fa fa-calendar"> </i> Added on</th>
                                                    
                                                        <th title="Edit" class="tableedit" style=" font-size: 12px; text-align: center;"><i class="l-software-pathfinder-subtract"> </i> Options</th>
                                                    </tr>
                                                </thead>
                                                
                                                <tbody>
                                                <?php 
                                                    $i=1;
                                                    foreach((array)$members as $member): 
                                                ?>
                                                    
                                                    <tr>
                                                         
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo htmlspecialchars($member['name'])?></td>
                                                        <td><?php echo htmlspecialchars($member['email'])?></td>
                                                        <td><?php echo htmlspecialchars($member['created_at'])?></td>
                                                   
                                                 
                                                        <td>
                                                            <a href="memberprofile.php?id=<?php echo $member['mId']?>">
                                                                <i class="fa fa-eye" id="tablebtns" style="background-color: #5cb85c; color: white; padding: 5px;"></i>
                                                            </a>
                                                            <span style="margin:3px"></span>
                                                            <a id="approve-btn-s" data-id="<?php echo htmlspecialchars($member['mId'])?>"><i class="fa fa-check" id="tablebtns" style="background-color: #5cb85c; color: white; padding: 5px;" > Approve</i></a>
                                                        </td>
                                                        
                                                    </tr>

                                                 
                                                </tr>
                                                    
                                                <?php 
                                                    $i++;
                                                    endforeach; 
                                                ?>

                                                   
                                                </tbody>
                                            </table>
    
                                        </div>    
                                    </div>
                                    <!-- End .panel -->
                                </div>
                                <!-- col-lg-12 end here -->
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-lg-12">
                                    <!-- col-lg-12 start here -->
                                    <div class="panel panel-default plain panelRefresh">
                                        <!-- Start .panel -->
                                        
                                        <div class="panel-heading" style=" background-color:#840023; color: #ffffff;">
                                            <h5 class="panel-title" style="text-align: center; font-size:25px; color: #ffffff;">Recent Companies Registered</h5>
                                        </div>  
                                      
                                        <div class="panel-body">
                                            <table id="basic-datatables" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead >
                                                    <tr style="">
                                                       
                                                        <th title="ID" style="font-size: 12px; text-align: center; width: 12%"><i class="fa fa-sort-numeric-asc"> </i> Sr No.</th>
                                                        <th title="name" style="font-size: 12px; text-align: center;"><i class="fa fa-user"> </i> Name</th>
                                                        
                                                        <th title="email" style="font-size: 12px; text-align: center; "><i class="fa fa-envelope"> </i> Email</th>
                                                    
                                                        <th title="request date" style="font-size: 12px; text-align: center;"><i class="fa fa-calendar"> </i> Added on</th>
                                                    
                                                        <th title="Edit" class="tableedit" style=" font-size: 12px; text-align: center;"><i class="l-software-pathfinder-subtract"> </i> Options</th>
                                                    </tr>
                                                </thead>
                                                
                                                <tbody>
                                                    <?php 
                                                        $i=1;
                                                        foreach((array)$employers as $employer): 
                                                    ?>
                                                    
                                                    <tr>
                                                         
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo htmlspecialchars($employer['name'])?></td>
                                                        <td><?php echo htmlspecialchars($employer['email'])?></td>
                                                        <td><?php echo htmlspecialchars($employer['created_at'])?></td>
                                                        <td>
                                                            <a href="employerprofile.php?employer_to_view=<?php echo $employer['eId']?>&view">
                                                                <i class="fa fa-eye" id="tablebtns" style="background-color: #5cb85c; color: white; padding: 5px;"></i>
                                                            </a>
                                                            <span style="margin:3px"></span>
                                                            <a id="approve-btn-e" data-id="<?php echo htmlspecialchars($employer['eId'])?>">
                                                                <i class="fa fa-check" id="tablebtns" style="background-color: #5cb85c; color: white; padding: 5px;"> Approve</i>
                                                            </a>
                                                           
                                                        </td>
                                                        
                                                    </tr>

                                                    <?php 
                                                        $i++;
                                                        endforeach; 
                                                    ?>                                                     
                                                </tbody>
                                            </table>
    
                                        </div>    
                                    </div>
                                    <!-- End .panel -->
                                </div>
                                <!-- col-lg-12 end here -->
                            </div>
                        </div>



                    </div>
                    <!-- End .page-content-inner -->
                </div>
                <!-- / page-content-wrapper -->
            </div>
            <!-- / page-content -->
        </div>
        <!-- / #wrapper -->

        
        <!-- End #footer  -->
        <!-- Back to top -->
        <div id="back-to-top"><a href="#">Back to Top</a>
        </div>
        <!-- Javascripts -->
        <!-- Load pace first -->
        <script src="plugins/core/pace/pace.min.js"></script>
        <!-- Important javascript libs(put in all pages) -->
        <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script>
        window.jQuery || document.write('<script src="js/libs/jquery-2.1.1.min.js">\x3C/script>')
        </script>
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script>
        window.jQuery || document.write('<script src="js/libs/jquery-ui-1.10.4.min.js">\x3C/script>')
        </script>
        <!--[if lt IE 9]>
  <script type="text/javascript" src="js/libs/excanvas.min.js"></script>
  <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <script type="text/javascript" src="js/libs/respond.min.js"></script>
<![endif]-->
        <!-- Bootstrap plugins -->
        <script src="js/bootstrap/bootstrap.js"></script>
        <!-- Core plugins ( not remove ) -->
        <script src="js/libs/modernizr.custom.js"></script>
        <!-- Handle responsive view functions -->
        <script src="js/jRespond.min.js"></script>
        <!-- Custom scroll for sidebars,tables and etc. -->
        <script src="plugins/core/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="plugins/core/slimscroll/jquery.slimscroll.horizontal.min.js"></script>
        <!-- Remove click delay in touch -->
        <script src="plugins/core/fastclick/fastclick.js"></script>
        <!-- Increase jquery animation speed -->
        <script src="plugins/core/velocity/jquery.velocity.min.js"></script>
        <!-- Quick search plugin (fast search for many widgets) -->
        <script src="plugins/core/quicksearch/jquery.quicksearch.js"></script>
        <!-- Bootbox fast bootstrap modals -->
        <script src="plugins/ui/bootbox/bootbox.js"></script>
        <!-- Other plugins ( load only nessesary plugins for every page) -->

        <script src="js/libs/date.js"></script>
        <script src="plugins/charts/flot/jquery.flot.custom.js"></script>
        <script src="plugins/charts/flot/jquery.flot.pie.js"></script>
        <script src="plugins/charts/flot/jquery.flot.resize.js"></script>
        <script src="plugins/charts/flot/jquery.flot.time.js"></script>
        <script src="plugins/charts/flot/jquery.flot.growraf.js"></script>
        <script src="plugins/charts/flot/jquery.flot.categories.js"></script>
        <script src="plugins/charts/flot/jquery.flot.stack.js"></script>
        <script src="plugins/charts/flot/jquery.flot.orderBars.js"></script>
        <script src="plugins/charts/flot/jquery.flot.tooltip.min.js"></script>
        <script src="plugins/charts/flot/jquery.flot.curvedLines.js"></script>
        <script src="plugins/charts/sparklines/jquery.sparkline.js"></script>
        <script src="plugins/charts/progressbars/progressbar.js"></script>
        <script src="plugins/ui/waypoint/waypoints.js"></script>
        <script src="plugins/ui/weather/skyicons.js"></script>
        <script src="plugins/ui/notify/jquery.gritter.js"></script>
        <script src="plugins/misc/vectormaps/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="plugins/misc/vectormaps/maps/jquery-jvectormap-world-mill-en.js"></script>
        <script src="plugins/misc/countTo/jquery.countTo.js"></script>
        <script src="js/jquery.dynamic.js"></script>
        <script src="js/main.js"></script>
        <script src="plugins/forms/bootstrap-datepicker/bootstrap-datepicker.js"></script>
         <script src="plugins/forms/fancyselect/fancySelect.js"></script>
        <script src="plugins/forms/select2/select2.js"></script>
        <script src="plugins/forms/maskedinput/jquery.maskedinput.js"></script>
        <script src="plugins/forms/dual-list-box/jquery.bootstrap-duallistbox.js"></script>
        <script src="plugins/forms/spinner/jquery.bootstrap-touchspin.js"></script>
        <script src="plugins/forms/bootstrap-datepicker/bootstrap-datepicker.js"></script>
        <script src="plugins/forms/bootstrap-timepicker/bootstrap-timepicker.js"></script>
        <script src="plugins/forms/bootstrap-colorpicker/bootstrap-colorpicker.js"></script>
        <script src="plugins/forms/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
        <script src="plugins/charts/chartjs/Chart.js"></script>
        <script src="js/pages/dashboard.js"></script>
        <script src="plugins/charts/sparklines/jquery.sparkline.js"></script>
        <script src="plugins/charts/chartjs/Chart.js"></script>
        <script src="js/jquery.dynamic.js"></script>
        <script src="js/main.js"></script>
        <script src="js/pages/charts-chartjs.js"></script>
        <script src="plugins/charts/sparklines/jquery.sparkline.js"></script>
        <script src="plugins/tables/datatables/jquery.dataTables.js"></script>
        <script src="plugins/tables/datatables/dataTables.tableTools.js"></script>
        <script src="plugins/tables/datatables/dataTables.bootstrap.js"></script>
        <script src="plugins/tables/datatables/dataTables.responsive.js"></script>
        <script src="js/jquery.dynamic.js"></script>
        <script src="js/main.js"></script>
        <script src="js/pages/tables-data.js"></script>
        
        <script>
            $(document).ready(function() {
                $(document).on("click", "#approve-btn-e", function() { 
                  
                    var result = confirm("Are you sure?");
                    var ele = $(this).parent().parent();
                    var id =  $(this).attr("data-id");
                    if(result){
                        $.ajax({
                            url: "approveemployer.php",
                            type: "POST",
                            data:{
                                id: id
                            },
                            success: function(dataResult){
                                var dataResult = JSON.parse(dataResult);
                                if(dataResult.statusCode==200){
                                    ele.fadeOut().remove();
                                }
                            }
                        });
                    }
                });

                $(document).on("click", "#approve-btn-s", function() { 
                
                    var result = confirm("Are you sure?");
                    var ele = $(this).parent().parent();
                    var id =  $(this).attr("data-id");
                    if(result){
                        $.ajax({
                            url: "approvemember.php",
                            type: "POST",
                            data:{
                                id: id
                            },
                            success: function(dataResult){
                                var dataResult = JSON.parse(dataResult);
                                if(dataResult.statusCode==200){
                                    ele.fadeOut().remove();
                                }
                            }
                        });
                    }
                });
                
            });
        </script>                                      




        <script>

            $(document).ready(function() {
                            //------------- Line chart with dots -------------//
                        var lineDotsData = {
                            labels : ["January","February","March","April","May","June","July","Aug","Sep","Nov","Dec"],
                            datasets : [
                                {
                                    label: "Hits",
                                    fillColor : "rgba(0,0,0,0.1)",
                                    strokeColor : "rgba(132,0,35,1)",
                                    pointColor : "rgba(132,0,35,1)",
                                    pointStrokeColor : "#fff",
                                    pointHighlightFill : "#fff",
                                    pointHighlightStroke : "rgba(132,0,35,1)",				
                                    data : [<?php echo $hits_jan .','. $hits_feb.','. $hits_mar.','. $hits_apr.','. $hits_may.','. $hits_jun.','. $hits_jul .','. $hits_aug .','. $hits_sep .','. $hits_oct .','. $hits_nov .','. $hits_dec ?>]
                                },
                                
                            ]

                        }
                        var ctxDots = document.getElementById("line-dots-chartjs").getContext("2d");
                        var myLineDotsChart = new Chart(ctxDots).Line(lineDotsData, {
                            responsive: true,
                            scaleShowGridLines : true,
                            scaleGridLineColor : "#bfbfbf",
                            scaleGridLineWidth : 0.2,
                            bezierCurve : false,
                            bezierCurveTension : 0.4,
                            //points
                            pointDot : true,
                            pointDotRadius : 4,
                            pointDotStrokeWidth : 1,
                            pointHitDetectionRadius : 20,
                            datasetStroke : true,
                            datasetStrokeWidth : 2,
                            datasetFill : true,
                            //animations
                            animation: true,
                            animationSteps: 60,
                            animationEasing: "easeOutQuart",
                            //scale
                            showScale: true,
                            scaleFontFamily: "'Roboto'",
                            scaleFontSize: 13,
                            scaleFontStyle: "normal",
                            scaleFontColor: "#333",
                            //tooltips
                            showTooltips: true,
                            tooltipFillColor: "#344154",
                            tooltipFontFamily: "'Roboto'",
                            tooltipFontSize: 13,
                            tooltipFontColor: "#fff",
                            tooltipYPadding: 8,
                            tooltipXPadding: 10,
                            tooltipCornerRadius: 2,
                            tooltipTitleFontFamily: "'Roboto'",
                        });







                                                //------------- Donut chart  -------------//
                        var donutData = [
                            {
                                value: <?php echo $inactiveCount?>,
                                color:"#202020",
                                highlight: "#202020",
                                label: "Users Inactive: "
                            },
                            {
                                value:  <?php echo $activeCount?>,
                                color: "#840023",
                                highlight: "#840023",
                                label: "Users Active: "
                            }
                            
                        ];

                        var ctxDonut = document.getElementById("donut-chartjs").getContext("2d");
                        myDonut = new Chart(ctxDonut).Doughnut(donutData, {
                            responsive : true,
                            //donut options
                            segmentShowStroke : true,
                            segmentStrokeColor : "#fff",
                            segmentStrokeWidth : 2,
                            percentageInnerCutout : 45, // This is 0 for Pie charts
                            //animations
                            animation: true,
                            animationSteps: 100,
                            animationEasing: "easeOutBounce",
                            animateRotate : true,
                            animateScale : true,
                            //tooltips
                            showTooltips: true,
                            tooltipFillColor: "#344154",
                            tooltipFontFamily: "'Roboto'",
                            tooltipFontSize: 13,
                            tooltipFontColor: "#fff",
                            tooltipYPadding: 8,
                            tooltipXPadding: 10,
                            tooltipCornerRadius: 2,
                            tooltipTitleFontFamily: "'Roboto'",
                        });




            });
            
        </script>




        
    </body>
</html>