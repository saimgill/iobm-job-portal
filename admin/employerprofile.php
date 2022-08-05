<?php 
    include("includes/header.php");
    include("includes/dbcon.php");
    include("includes/employerprofile.inc.php")


?>

            
            
            
            
            <!-- .page-content -->
            <div class="page-content sidebar-page clearfix">
                <!-- .page-content-wrapper -->
                <div class="page-content-wrapper">
                    <div class="page-content-inner">
                        <!-- .page-content-inner -->
                        <div id="page-header" class="clearfix">
                            
                            <div class="page-header">
                                <h2>Employer Profile</h2>
                                <span class="txt">Below is the detailed employer profile</span>
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
                                        <div class="row profile">
                                            <!-- Start .row -->
                                            <div class="col-lg-12 col-md-12">
                                                <div class="col-md-2">
                                                <div class="profile-avatar">
                                                    <img src="../userFiles/employer_logo/<?php echo htmlspecialchars($employer['logo']); ?>" alt="Avatar" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" >
                                                    <p class="mt10">
                                                        
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="profile-name">
                                                    <h3><?php echo htmlspecialchars($employer['name']); ?></h3>
                                                    <p class="job-title mb0"><i class="fa  fa-info-circle"></i> Employer in IoBM Job Portal</p>
                                                    <p class="balance" style="margin-bottom: 10px; font-size: 20px;">
                                                        Status: <span class="text-success" style="font-size: 20px;">Active</span>
                                                    </p>
                                                    <?php 
                                                        if($employer['approved'] == 1){
                                                    
                                                            echo'<a href="approveemployer.php?id='.$employer['eId'].'&approved=1" class="Napprovebtn"> <i class="fa fa-times"></i> Dispprove</a>';
                                                        }
                                                        else{
                                                            echo'<a href="approveemployer.php?id='.$employer['eId'].'&approved=0 "  class="approvebtn"> <i class="fa fa-check"></i> Approve</a>';
                                                        }
                                                    ?>
                                                   
                                                   
                                                    <a href="deleteemployer.php?id=<?php echo $employer['eId']; ?>" id="subcbtn"> <i class="fa fa-trash"></i> Delete</a>
                                                    <br>
                                                    <span style="color: transparent;">fff</span>
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
                                                                <dd><?php echo htmlspecialchars($employer['contact']); ?></dd>
                                                                <dt class="text-muted">Email</dt>
                                                                <dd><?php echo htmlspecialchars($employer['email']); ?></dd>
                                                                
                                                            </dl>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <dl class="mt20">
                                                                <dt class="text-muted">Address</dt>
                                                                <dd><?php echo htmlspecialchars($employer['address']); ?></dd>
                                                                <dt class="text-muted">Website</dt>
                                                                <dd><a href="#"><?php echo htmlspecialchars($employer['website']); ?></a>
                                                                </dd>
                                                                
                                                            </dl>
                                                        </div>
                                                    </div>
                                                    <!-- End .row -->
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="profile-info bt">
                                                    <h5 class="text-muted">Company Profile</h5>
                                                    <p>Pakistan International Airlines is the national flag carrier of Pakistan under the administrative control of the Secretary to the Government of Pakistan for Aviation. PIA is Pakistan's largest airline and operates a fleet of more than 30 aircraft. The airline operates nearly 100 flights daily, servicing 18 domestic destinations and 25 international destinations across Asia, Europe, the Middle East and North America.</p>
                                                </div>
                                                
                                                <div class="social bt">
                                                    <h5 class="text-muted">Jobs Posted</h5>
                                                    

                                                    <br>

                                                    <table id="basic-datatables" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                        <thead >
                                                            <tr style="color: white; background-color: #840023;">
                                                               
                                                                <th title="ID" style="font-size: 12px; text-align: center; width: 9%"><i class="fa fa-sort-numeric-asc"> </i> ID</th>
                                                                <th title="name" style="font-size: 12px; text-align: center;"><i class="fa fa-black-tie"> </i> Job Title</th>
                                                                <th title="name" style="font-size: 12px; text-align: center;"><i class="fa fa-anchor"> </i> Departent</th>
                                                                <th title="about" style="font-size: 12px; text-align: center; width: 15%;"><i class="fa fa-info-circle"> </i> Experience</th>
                                                                <th title="add date" style="font-size: 12px; text-align: center;"><i class="fa fa-calendar"> </i> Added on</th>
                                                                
                                                                <th title="Edit" class="tableedit" style=" font-size: 12px; text-align: center;"><i class="l-software-pathfinder-subtract"> </i> Options</th>
                                                            </tr>
                                                        </thead>
                                                        
                                                        <tbody>
                                                        <?php

                                                        //id defined for auto-incremnent 
                                                        $id = 0;

                                                        if (mysqli_num_rows($result2) > 0) {
                                                          // output data of each row
                                                          while($job = mysqli_fetch_assoc($result2)) {
                                                            
                                                         
                                                        //id intiated to 0 for auto-inc
                                                        

                                                        ?>
                                                            <tr>
                                                                <td>
                                                                <!-- displaying id -->
                                                                <?php 
                                                                    //increment on every iteration 
                                                                    $id++;
                                                                    echo $id; 
                                                                ?></td>
                                                                <td><?php echo htmlspecialchars($job['title']); ?></td>
                                                                <td><?php echo htmlspecialchars($job['department']); ?></td>
                                                                <td><?php echo htmlspecialchars($job['experience']); ?></td>
                                                                <td><?php $timestamp = strtotime($job['created_at']);; echo  date("d-m-Y",$timestamp); ?></td>
                                                                <td> 
                                                                    <div class="row content-justify" style="display: flex; justify-content: space-around;">
                                                                        <div class="col">
                                                                            <form action="jobdetail.php" method="GET" target="_blank">
                                                                                <input type="hidden" name="job_to_view" value="<?php echo $job['jId']; ?>">
                                                                                <button type="submit" name="view" style="border:none; background:#5cb85c; color:white;"><i class="fa fa-eye"></i></button>
                                                                            </form>
                                                                        </div>     
                                                                        <div class="col">
                                                                            <button id="delete-button" data-id="<?php echo $job['jId'];?>" style="border:none; background:#840023; color:white;"><i class="fa fa-trash"></i></button>
                                                                        </div>                                                                                                        
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                        }
                                                        } else {
                                                          echo "0 results";
                                                        }     ?>                                                   
                                                        
                                                        </tbody>
                                                    </table>





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
        
        <?php include("includes/footer.php"); ?>