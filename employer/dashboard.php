<?php 
include("includes/dbcon.php");
include("includes/header.php");

$eId = $_SESSION['emp'];

$sql1 = "SELECT * FROM job WHERE employer='$eId' AND `type`!='Internship' AND `approved`=1";
$sql2 = "SELECT * FROM job WHERE employer='$eId' AND `type`='Internship' AND `approved`=1";
$sql3 = "SELECT * FROM job WHERE employer='$eId' AND `approved`=0";

$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);

$jobs = mysqli_num_rows($result1);
$internship = mysqli_num_rows($result2);
$waiting = mysqli_num_rows($result3);
?> 
            
            <!-- End #right-sidebar -->
            <!-- .page-content -->
            <div class="page-content sidebar-page right-sidebar-page clearfix">
                <!-- .page-content-wrapper -->
                <div class="page-content-wrapper">
                    <div class="page-content-inner">
                        <!-- Start .page-content-inner -->
                        <div id="page-header" class="clearfix">
                            <div class="page-header">
                                <h2>Company Profile</h2>
                                <span class="txt">Welcome to IoBM Job Portal - Job Management System</span>
                            </div>
                        </div>
                        
                        <!-- / .col-md-3 -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" >
                            <!-- .col-md-3 -->
                            <div class="panel panel-success tile ">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">Approved Jobs</h4>
                                </div>
                                <div class="panel-body pt0">
                                    <div class="progressbar-stats-1">
                                        <div class="stats">
                                            
                                            <div class="stats-number" data-from="0" data-to="<?php echo $jobs; ?>" style="color : white; font-size:30px;"><?php echo $jobs; ?></div>
                                        </div>
                                        <!-- <div class="progress animated-bar flat transparent progress-bar-xs mb10 mt0">
                                            <div class="progress-bar progress-bar-white" role="progressbar" data-transitiongoal="<?php echo $jobs?>"></div>
                                        </div> -->
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- End .panel -->
                        </div>
                        <!-- / .col-md-3 -->
 
                        
                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <!-- .col-md-3 -->
                            <div class="panel panel-danger tile ">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title" style="color : white">Jobs Waiting Approval</h4>
                                </div>
                                
                                <div class="panel-body pt0">
                                    <div class="progressbar-stats-1 dark">
                                        <div class="stats">
                                           
                                            <div class="stats-number money" data-from="0" data-to="<?php echo $waiting; ?>" style="color : white; font-size:30px;"><?php echo $waiting; ?></div>
                                        </div>
                                       
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- End .panel -->
                        </div>
                        
                         
                        <!-- / .col-md-3 -->
                    </div>
                    <!-- / .row -->



                    


                        <?php 
                        $sql = "SELECT * FROM employer WHERE eId='$eId'";
                        $result = mysqli_query($conn, $sql);
                        
                        if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <!-- Start .row -->
                        <div class="row" style="">
                            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                

                                <div >
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="panel panel-default plain">
                                            <!-- Start .panel -->
                                            <div class="panel-heading">
                                                <h4 class="panel-title bb">Profile details</h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row profile">
                                                    <!-- Start .row -->
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="col-md-2">
                                                        <div class="profile-avatar">
                                                            <img src="../userFiles/employer_logo/<?php echo htmlspecialchars($row['logo']); ?>" alt="Avatar" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" >
                                                            <p class="mt10">
                                                                
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="profile-name">
                                                            <h3><?php echo htmlspecialchars($row['name']); ?></h3>
                                                            <p class="job-title mb0"><i class="fa  fa-info-circle"></i> Employer in IoBM Job Portal</p>
                                                            <p class="balance" style="margin-bottom: 10px; font-size: 20px;">
                                                                Status: 
                                                                <?php 
                                                                    if($row['approved'] == 1){
                                                                        echo"<span class='text-success' style='font-size: 20px;'>Active</span>";
                                                                    }
                                                                    else{
                                                                        echo"<span class='text-danger' style='font-size: 20px;'>Inactive</span>";
                                                                        echo"<h4>Please wait for approval</h4>";
                                                                    }
                                                                ?>
                                                            </p>
                                                            <a href="settings.php" style="" id="subcbtn"> <i class="l-basic-settings"></i> Update</a>
                                                            <br>
                                                            <br>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="contact-info bt">
                                                            <div class="row">
                                                                <!-- Start .row -->
                                                                <div class="col-md-6">
                                                                    <dl class="mt20">
                                                                        <dt class="text-muted">Phone</dt>
                                                                        <dd><?php echo htmlspecialchars($row['contact']); ?></dd>
                                                                        <dt class="text-muted">Email</dt>
                                                                        <dd><?php echo htmlspecialchars($row['email']); ?></dd>
                                                                        
                                                                    </dl>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <dl class="mt20">
                                                                        <dt class="text-muted">Address</dt>
                                                                        <dd><?php echo htmlspecialchars($row['address']); ?></dd>
                                                                        <dt class="text-muted">Website</dt>
                                                                        <dd><a href="#"><?php echo htmlspecialchars($row['website']); ?></a>
                                                                        </dd>
                                                                        
                                                                    </dl>
                                                                </div>
                                                            </div>

                                                            <!-- End .row -->

                                                            <div class="row">
                                                                <!-- Start .row -->
                                                                <div class="col-md-12">
                                                                    <dl class="mt20">
                                                                        <dt class="text-muted">Company Profile</dt>
                                                                        <dd><?php echo $row['company_profile']; ?></dd>
                                                                    </dl>
                                                                </div>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End .row -->
                                                <?php
                                                }
                                                } else echo "";
                                                mysqli_close($conn); ?>
                                            </div>
                                        </div>  
                                    </div>
                                </div>

                            </div>
                            <!-- col-lg-6 end here -->
                        </div>
                        <!-- End .row -->








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
                                //------------- Line chart with dots -------------//
                            var lineDotsData = {
                                labels : ["October","February","March","April","May","June","July"],
                                datasets : [
                                    {
                                        label: "Hits",
                                        fillColor : "rgba(132,0,35,.7)",
                                        strokeColor : "rgba(132,0,35,1)",
                                        pointColor : "rgba(132,0,35,1)",
                                        pointStrokeColor : "#fff",
                                        pointHighlightFill : "#fff",
                                        pointHighlightStroke : "rgba(132,0,35,1)",				
                                        data : [10000, 12000, 9000, 16000, 50000, 40000, 25000]
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
                                    value: 50,
                                    color:"#202020",
                                    highlight: "#202020",
                                    label: "Users Inactive: "
                                },
                                {
                                    value: 150,
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