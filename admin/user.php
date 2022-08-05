<?php 
include("includes/dbcon.php");
include("includes/header.php"); 

$sId = $_SESSION['admin'];
$sql = "SELECT * FROM `admin` WHERE `sId`='$sId'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
?>           


            
            <!-- .page-content -->
            <div class="page-content sidebar-page clearfix">
                <!-- .page-content-wrapper -->
                <div class="page-content-wrapper">
                    <div class="page-content-inner">
                        <!-- .page-content-inner -->
                        <div id="page-header" class="clearfix">
                            
                            <div class="page-header">
                                <h2>Admin Profile</h2>
                                <span class="txt">Welcome to IoBM Job Portal</span>
                            </div>
                            
                        </div>
                        
                        





                        <div class="row" >
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="panel panel-default plain">
                                    <!-- Start .panel -->
                                    <div class="panel-heading">
                                        <h4 class="panel-title bb">Profile details</h4>
                                    </div>
                                    <div class="panel-body">
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
                                                    <h3><?php echo htmlspecialchars($row['name']); ?></h3>
                                                    <p class="job-title mb0"><i class="fa  fa-info-circle"></i> <?php echo htmlspecialchars($row['role']); ?> at IoBM</p>
                                                    <p class="balance" style="margin-bottom: 30px; font-size: 20px;">
                                                        Status:
                                                        <?php 
                                                                echo"<span class='text-success' style='font-size: 20px;'>Active</span>";
                                                        ?>
                                                    </p>
                                                    <a href="settings.php" style="" id="subcbtn"> <i class="l-basic-settings"></i> Update</a>
                                                    <br>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12 mt15">
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
                                                    <?php
                                                        }
                                                        } else echo "";
                                                        mysqli_close($conn); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End .row -->
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

        
