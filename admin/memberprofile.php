<?php 
include("includes/dbcon.php");
include("includes/header.php");

if($_GET['id']){
$mId = $_GET['id'];
$sql = "SELECT * FROM member WHERE mId='$mId'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
?> 
            <!-- .page-content -->
    <div class="page-content sidebar-page clearfix">
        <!-- .page-content-wrapper -->
        <div class="page-content-wrapper">
            <div class="page-content-inner">
                <!-- .page-content-inner -->
                <div id="page-header" class="clearfix">
                    
                    <div class="page-header">
                        <h2>Member Profile</h2>
                        <span class="txt">Below is the detailed profile</span>
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
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <div class="row profile">
                                    <!-- Start .row -->
                                    <div class="col-md-2">
                                        <div class="profile-avatar">
                                            <img src="../userFiles/memberImgs/<?php echo htmlspecialchars($row['photo']); ?>" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" id="member-photo" >
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="profile-name">
                                            <h3><?php echo htmlspecialchars($row['name']); ?></h3>
                                            <p class="job-title mb0"><i class="fa  fa-info-circle"></i> <?php echo $row['type']; ?> at IoBM</p>
                                            <p class="balance" style="margin-bottom: 10px; font-size: 20px;">
                                                Status: 
                                                <?php 
                                                    if($row['approved'] == 1){
                                                        echo"<span class='text-success' style='font-size: 20px;'>Active</span>";
                                                    }
                                                    else{
                                                        echo"<span class='text-danger' style='font-size: 20px;'>Inactive</span>";
        
                                                    }
                                                ?>
                                            </p>
                                                <?php 
                                                    if($row['approved'] == 1){
                                                        ?>
                                                        <a href="approvemember.php?id=<?php echo htmlspecialchars($row['mId']); ?>&approved=1" class="Napprovebtn"><i class="fa fa-times"></i> Disapprove</a>
                                                        <?php
                                                    }
                                                    else{
                                                        ?>
                                                        <a href="approvemember.php?id=<?php echo htmlspecialchars($row['mId']); ?>&approved=0"  class="approvebtn"><i class="fa fa-check"></i> Approve</a>
                                                        <?php
                                                    }
                                                ?>
                                            
                                            <a href="deletemember.php?id=<?php echo htmlspecialchars($row['mId']); ?>" style="margin-top: 20px;" id="subcbtn"> <i class="fa fa-trash"></i> Delete</a>
                                            <br>
                                            <br>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt15">
                                        <div class="contact-info bt">
                                            <div class="row">
                                                <!-- Start .row -->
                                                <div class="col-md-3">
                                                    <dl class="mt20">
                                                        <dt class="text-muted">Phone</dt>
                                                        <dd><?php echo htmlspecialchars($row['contact']); ?></dd>
                                                        <dt class="text-muted">Email</dt>
                                                        <dd><?php echo htmlspecialchars($row['email']); ?></dd>
                                                        
                                                    </dl>
                                                </div>
                                                <div class="col-md-3">
                                                    <dl class="mt20">
                                                        <dt class="text-muted">Date of Birth</dt>
                                                        <dd><?php echo htmlspecialchars($row['dob']); ?></dd>
                                                        <dt class="text-muted">Address</dt>
                                                        <dd><?php echo htmlspecialchars($row['address']); ?></dd>
                                                    </dl>
                                                </div>
                                            
                                        
                                                
                                                <div class="col-md-3">
                                                    <dl class="mt20">
                                                        <dt class="text-muted">IoBM ID</dt>
                                                        <dd><?php echo htmlspecialchars($row['iobm_id']); ?></dd>
                                                        <dt class="text-muted">Semester</dt>
                                                        <dd><?php echo htmlspecialchars($row['semester']); ?></dd>
                                                        
                                                    </dl>
                                                </div>
                                                <div class="col-md-3">
                                                    <dl class="mt20">
                                                        <dt class="text-muted">Courses Completed</dt>
                                                        <dd><?php echo htmlspecialchars($row['courses']); ?></dd>
                                                        <dt class="text-muted">Transcript</dt>
                                                        <dd?><a href="../userFiles/transcripts/<?php echo htmlspecialchars($row['transcript']);?>" target='_black'>download</a></dd>
                                                    </dl>
                                                </div>

                                                <div class="col-md-3">
                                                    <dl class="mt20">
                                                        <dt class="text-muted">Curriculam Vitae</dt>
                                                        <dd?><a href="../userFiles/resumes/<?php echo htmlspecialchars($row['cv']);?>" target='_black'>download</a></dd>
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
                                mysqli_close($conn);
                             } ?>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>                                                
<?php include("includes/footer.php");?>                        
            