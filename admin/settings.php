<?php

include("includes/header.php");
include("includes/dbcon.php");
// session_start();
$sId = $_SESSION['admin'];
$sql = "SELECT * FROM `admin`WHERE `sId`='$sId'";
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
                                <h2>User Settings</h2>
                                <span class="txt">You can update your profile by using the forms provided below</span>
                            </div>
                            
                        </div>









                        <!-- Start .row -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 sortable-layout">
                                <!-- col-lg-6 start here -->
                                
                                <div class="tabs mb20" >
                                    <ul id="myTab" class="nav nav-tabs">
                                        <li>
                                            <a href="#tab1" data-toggle="tab" style="background: #fff;"><i class="fa fa-cogs"> </i> General</a>
                                        </li>   
                                    </ul>


                                    <div id="myTabContent2" class="tab-content">
                                        <div class="tab-pane fade active in" id="tab1">


                                            

                                            <div class="bs-callout bs-callout-info mt0">
                                                <p style="color: white;"> <i class="fa fa-file-picture-o" style="font-size:20px;">  </i> Display Picture</p>
                                            </div>
                                            <form class="form-horizontal group-border stripped" action="updateprofile.php" method="POST" enctype="multipart/form-data" role="form" class="col-lg-offset-4">
                                                <div class="form-group">
                                                    <div class="col-sm-3">
                                                        <img src="../userFiles/adminImgs/<?php echo htmlspecialchars($row['photo']); ?>" class="col-sm-12 col-lg-12 col-sx-12 col-md-12" />
                                                        <br>
                                                        <div class="col-sm-12 col-lg-12 col-sx-12 col-md-12">
                                                            <input type="file" class="form-control" name="photo" id="picture" placeholder="Your Picture" style="margin-top: 20px;">
                                                            <p style="color: grey;">Only .jpg and .png file accepted. Maximum file size: 1MB</p>
                                                            <p style="color: red; margin: 10px 0px;" id="photo-error"></p>
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                
                                                
                                                <div class="form-group">
                                                     <div class="col-sm-offset-4 col-sm-4">
                                                        <button type="submit" class="btn btn-default" name="changePhoto" id="subcbtn" style="width:100%">Upload</button>
                                                    </div>
                                                </div>
                                            </form>




                                                <div class="bs-callout bs-callout-info mt0">
                                                    <p style="color: white;"> <i class="fa fa-user" style="font-size:20px;">  </i> Account Details</p>
                                                </div>
                                                <form class="form-horizontal group-border stripped" role="form" id="update-form" action="updateprofile.php" method="POST">
                                                    <div class="form-group">
                                                        <label for="inputEmail4" class="col-sm-2 control-label">Email</label>
                                                        <div class="col-sm-10">
                                                            <input type="email" class="form-control" id="inputEmail4"  name="email" value="<?php echo htmlspecialchars($row['email']); ?>" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputFirstName" class="col-sm-2 control-label">Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="fname" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputContact" class="col-sm-2 control-label">Contact</label>
                                                        <div class="col-sm-10">
                                                            <input type="tel" class="form-control" id="" name="contact" value="<?php echo htmlspecialchars($row['contact']); ?>" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputAddress" class="col-sm-2 control-label">Address</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="" name="address" value="<?php echo htmlspecialchars($row['address']); ?>" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputAddress" class="col-sm-2 control-label">Date of Birth</label>
                                                        <div class="col-sm-10">
                                                            <input type="date" class="form-control" id="" name="dob" value="<?php echo htmlspecialchars($row['dob']); ?>"placeholder="">
                                                        </div>
                                                    </div>                                                   
                                                    
                                                    <div class="form-group">
                                                         <div class="col-sm-offset-4 col-sm-4">
                                                            <button type="submit" name="submit" class="btn btn-default" id="subcbtn" style="width:100%">Save Changes</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            
                                            
                                            
                                            


                                                





                                            
                                            <div class="bs-callout bs-callout-info mt0">
                                                    <p style="color: white;"> <i class="fa  fa-key" style="font-size:20px;">  </i> Change Password</p>
                                            </div>
                                                <form class="form-horizontal group-border stripped" id="changepwd-form" role="form" action="updateprofile.php" method="POST" onsubmit="return check()">
                                                    <div class="form-group">
                                                        <label for="inputcpass" class="col-sm-2 control-label">Current Password</label>
                                                        <div class="col-sm-10">
                                                            <input type="password" class="form-control" name="current_pass" id="inputcpass" placeholder="Current Psssword">
                                                            <p style="color: red; margin: 10px 0px;" id="password-error"></p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputnpass" class="col-sm-2 control-label">New Password</label>
                                                        <div class="col-sm-10">
                                                            <input type="password" name="new_pass" class="form-control" id="inputnpass" placeholder="New Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputrpass" class="col-sm-2 control-label">Repeat Password</label>
                                                        <div class="col-sm-10">
                                                            <input type="password" class="form-control" name="new_pass_2" id="inputrpass" placeholder="Repeat Password">
                                                            <span id='message'></span>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="form-group">
                                                         <div class="col-sm-offset-4 col-sm-4">
                                                            <button type="submit" class="btn btn-default" name="changePass" id="subcbtn" style="width:100%">Change Password</button>
                                                        </div>
                                                    </div>
                                                </form>




                                                
                                    
                                
                                        </div>
                                        
                                    </div>
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
        <?php
    }
    } else {
    echo "";
    }
    mysqli_close($conn);
    include("includes/setting_errors.inc.php");
    
?>



<!-- End .row -->
<?php include("includes/footer.php"); ?>