<?php 
include("includes/header.php");
include("includes/dbcon.php");
include("includes/jobdetails.inc.php");
if($job){
?>
            <!-- .page-content -->
            <div class="page-content sidebar-page clearfix">
                <!-- .page-content-wrapper -->
                <div class="page-content-wrapper">
                    <div class="page-content-inner">
                        <!-- .page-content-inner -->
                        <div id="page-header" class="clearfix">
                            
                        
                            <div class="page-header">
                                
                                <h2><?php echo htmlspecialchars($job['title']); ?> @ <?php echo htmlspecialchars($job['name']); ?></h2>
                                <span class="txt">Below is the complete job description of this posting</span>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="panel panel-default plain">
                                    <!-- Start .panel -->
                                    <div class="panel-heading">
                                        <h4 class="panel-title bb">Job Details</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row profile">
                                            <!-- Start .row -->
                                            <div class="col-lg-12 col-md-12">
                                                <div class="col-md-2">
                                                <div class="profile-avatar">
                                                    <img src="../userFiles/employer_logo/<?php echo htmlspecialchars($job['logo']); ?>" alt="Avatar" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" >
                                                    <p class="mt10">
                                                        
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="profile-name">
                                                    <h3><?php echo htmlspecialchars($job['title']); ?></h3>
                                                    <h5 class="job-title mb0"><i class="fa  fa-building"></i> <?php echo htmlspecialchars($job['name']); ?> (<?php echo htmlspecialchars($job['email']); ?>)</h5>
                                                    <p class="balance" style="margin-bottom: 7px; font-size: 20px;">
                                                        Status: 
                                                        <?php 
                                                            if($job['approved'] == 1){
                                                                echo"<span class='text-success' style='font-size: 20px;'>Active</span>";
                                                            }
                                                            else{
                                                                echo"<span class='text-danger' style='font-size: 20px;'>Inactive</span>";
                                                            }
                                                        ?>
                                                    </p>
                                                    <span style="font-size: 1.1rem;">Posted: <?php echo time_elapsed_string(htmlspecialchars($job['created_at'])); ?> ago</span>
                                                    
                                                    <span style="font-size: 1.1rem; margin-left: 20px;">Deadline: <?php $timestamp = strtotime($job['deadline']);; echo  date("d-m-Y",$timestamp); ?></span>
                                                    <br> 
                                                    <br> 
                                                        <?php 
                                                            if($job['approved'] == 1){
                                                        
                                                                echo'<a href="approvejob.php?id='.$job['jId'].'&approved=1" class="Napprovebtn"> <i class="fa fa-times"></i> Disapprove</a>';
                                                            }
                                                            else{
                                                                echo'<a href="approvejob.php?id='.$job['jId'].'&approved=0 "  class="approvebtn"> <i class="fa fa-check"></i> Approve</a>';
                                                            }
                                                        ?>
                                                        <a href="jobedit.php?id=<?php echo htmlspecialchars($job['jId']); ?>"  class="editbtn"> <i class="fa fa-edit"></i> Edit</a>
                                                        <a href="deletejob.php?id=<?php echo htmlspecialchars($job['jId']); ?>" onclick="return confirm('Are you sure?');" id="subcbtn"> <i class="fa fa-trash-o"></i> Delete</a>
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
                                                                <dt class="text-muted">Education</dt>
                                                                <dd><?php echo htmlspecialchars($job['education']); ?></dd>
                                                                <dt class="text-muted">Experience</dt>
                                                                <dd><?php echo htmlspecialchars($job['experience']); ?></dd>
                                                                
                                                            </dl>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <dl class="mt20">
                                                                <dt class="text-muted">Job Type</dt>
                                                                <dd><?php echo htmlspecialchars($job['type']); ?></dd>
                                                                <dt class="text-muted">Salary</dt>
                                                                <dd><?php echo htmlspecialchars($job['salary']); ?></dd>
                                                                
                                                            </dl>
                                                        </div>
                                                    </div>
                                                    <!-- End .row -->
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="profile-info bt">
                                                    <h5 class="text-muted">Company Profile</h5>
                                                    <p><?php echo $job['company_profile']; ?></p>
                                                </div>

                                                <div class="profile-info bt">
                                                    <h5 class="text-muted">Job Description</h5>
                                                    <p><?php echo $job['description']; ?></p>
                                                </div>

                                                <div class="profile-info bt">
                                                    <h5 class="text-muted">Knowledge, Skills, and Abilities</h5>
                                                    <p><?php echo $job['skills']; ?></p>
                                                </div>
                                                
            
                                            </div>
                                        </div>
                                        <!-- End .row -->
                                    </div>
                                </div>  
                            </div>
                        </div>
                    <div>
<?php
}
else{
   echo '<div class="page-content sidebar-page clearfix">
                <!-- .page-content-wrapper -->
                <div class="page-content-wrapper">
                    <div class="page-content-inner">
                        <!-- .page-content-inner -->
                        <div id="page-header" class="clearfix">
                            
                        
                            <div class="page-header">
                                
                                <center>
                                <span class="txt-center">This job does not exist</span>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
        </div>';
}
include("includes/footer.php"); 
?>




