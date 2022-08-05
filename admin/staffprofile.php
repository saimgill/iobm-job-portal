<?php include("includes/header.php"); ?>  
<?php 
$id = $_GET['staff_id'];

if(isset($id)){
    $sql = "SELECT * FROM `admin` where `sId`='$id'";

    $result = mysqli_query($conn, $sql);

   
?>         
            <!-- .page-content -->
            <div class="page-content sidebar-page clearfix">
                <!-- .page-content-wrapper -->
                <div class="page-content-wrapper">
                    <div class="page-content-inner">
                        <!-- .page-content-inner -->
                        <div id="page-header" class="clearfix">
                            
                            <div class="page-header">
                                <h2>Staff Profile</h2>
                                <span class="txt">Below is the detailed profile of Kausar Saeed</span>
                            </div>
                            
                        </div>
                        
                        





                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="panel panel-default plain">
                                    <!-- Start .panel -->
                                    <div class="panel-heading">
                                        <h4 class="panel-title bb">Profile details</h4>
                                    </div>
                                    <div class="panel-body">
                                    <?php 
                                        if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                            while($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <div class="row profile">
                                            <!-- Start .row -->
                                            <div class="col-md-2">
                                                <div class="profile-avatar">
                                                    <img src="../userFiles/adminImgs/<?php echo htmlspecialchars($row['photo']); ?>" alt="Avatar" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" >
                                                    <p class="mt10">
                                                        
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="profile-name">
                                                    <h3>Kausar Saeed</h3>
                                                    <p class="job-title mb0"><i class="fa  fa-info-circle"></i> Admin at IoBM Job Portal</p>
                                                    <p class="balance" style="margin-bottom: 30px; font-size: 20px;">
                                                        Status: <span class="text-success" style="font-size: 20px;"><?php echo htmlspecialchars($row['status']); ?></span>
                                                    </p>
                                                    <a href="deletestaff.php?id=<?php echo $row['sId'] ?>" onclick="confirm('are you sure?');" style="" id="subcbtn"> <i class="fa fa-trash"></i> Delete</a>

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
                                                                <dt class="text-muted">Date of Birth</dt>
                                                                <dd><?php echo htmlspecialchars($row['dob']); ?></dd>
                                                                <dt class="text-muted">Address</dt>
                                                                <dd><?php echo htmlspecialchars($row['address']); ?></dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                    <!-- End .row -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End .row -->
                                        <?php 
                                            }}else{
                                                echo ("No result found!");
                                            }}
                                        ?>
                                    </div>
                                </div>  
                            </div>
                        </div>






                       
                        
                        
                        
                        
                         
                        
                        
                        
                        </div>
                    </div>
                    <!-- / .page-content-inner -->
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
        
    </body>
</html>