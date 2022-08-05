<?php 
include("includes/header.php");
include("includes/dbcon.php");

if(isset($_GET['id'])){
    $jobid = mysqli_real_escape_string($conn, $_GET['id']);

    //joining query for "jobs" and "employer_info" tables
    $sql = "SELECT * FROM job WHERE jId = '$jobid'";

    $result = mysqli_query($conn, $sql);

    $job = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);

}


?>


            
            
            
            
            <!-- .page-content -->
            <div class="page-content sidebar-page clearfix">
                <!-- .page-content-wrapper -->
                <div class="page-content-wrapper">
                    <div class="page-content-inner">
                        <!-- .page-content-inner -->
                        <div id="page-header" class="clearfix">
                            
                            <div class="page-header">
                                <h2><?php echo htmlspecialchars($job['title']); ?></h2>
                                <span class="txt">Below is the complete job description of this posting</span>
                            </div>
                            
                        </div>

                        <div class="row" style="">
                            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="panel">
                                        <!-- Start .panel -->
                                        
                                        <div class="panel-body">
                                            <form class="form-horizontal group-border stripped" role="form" action="updatejob.php" method="POST">
                                                <div class="form-group">
                                                    <div class="col-lg-12">
                                                        
                                                        <div class="col-md-12 col-lg-12" id="">
                                                            <div class="row" id="row">
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="" class="col-sm-12 control-label">Title</label>
                                                                        <div class="col-sm-12">
                                                                            <input type="text" name="title" class="form-control" id="" placeholder="" value="<?php echo htmlspecialchars($job['title']); ?>"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="" class="col-sm-12 control-label">Department</label>
                                                                        <div class="col-sm-12">
                                                                            <input type="text" name="department" class="form-control" value="<?php echo htmlspecialchars($job['department']); ?>" id="" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                       
                                                        
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="" class="col-sm-12 control-label">Job Description</label>
                                                                <div class="col-sm-12">
                                                                    <textarea class="form-control summernote" name="jd" id='' placeholder="" rows="5" style="resize: none;" ><?php echo $job['description']; ?></textarea>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="" class="col-sm-12 control-label">Skills / Requirements</label>
                                                                <div class="col-sm-12">
                                                                    <textarea class="form-control summernote" id='' name="skills" placeholder=""  rows="5" style="resize: none;" ><?php echo htmlspecialchars($job['skills']); ?></textarea>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                

                                                <div class="form-group">
                                                    <div class="col-lg-12">
                                                        
                                                        <div class="col-md-12 col-lg-12" id="">
                                                            <div class="row" id="row">
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="" class="col-sm-12 control-label">Education</label>
                                                                        <div class="col-sm-12">
                                                                            <input type="text" class="form-control" name="ed" value="<?php echo htmlspecialchars($job['education']); ?>"id="" placeholder="eg. BBA/BSCS"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="" class="col-sm-12 control-label">Job Type</label>
                                                                        <div class="col-sm-12">
                                                                            <select name="type" id="" class="form-control">
                                                                                <option value="<?php echo htmlspecialchars($job['type']); ?>"><?php echo htmlspecialchars($job['type']); ?></option>
                                                                                <option value="fulltime">Full Time</option>
                                                                                <option value="parttime">Part Time</option>
                                                                                <option value="internship">Internship</option>
                                                                                <option value="contractual">Contractual</option>
                                                                                <option value="trainee">Trainee</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="" class="col-sm-12 control-label">Experience</label>
                                                                        <div class="col-sm-12">
                                                                            <input type="text" name="exp" class="form-control" id="" value="<?php echo htmlspecialchars($job['experience']); ?>" placeholder="eg. Fresh/2+ Years"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="" class="col-sm-12 control-label">Salary</label>
                                                                        <div class="col-sm-12">
                                                                            <input type="text" name="salary" class="form-control" id="" value="<?php echo htmlspecialchars($job['salary']); ?>" placeholder="eg. Rs. 30,000"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-lg-12">
                                                                    <div class="form-group">
                                                                        <label for="" class="col-sm-12 control-label">Application Deadline</label>
                                                                        <div class="col-sm-12">
                                                                            <input type="date" name="deadline" class="form-control" value="<?php echo htmlspecialchars($job['deadline']); ?>" id="" placeholder=""/>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                       
                                                        
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-offset-4 col-sm-4">
                                                        <input type="hidden" name="jId" value="<?php echo htmlspecialchars($job['jId']); ?>">
                                                        <br><br>
                                                        <button type="submit" name="submit" class="btn btn-default" id="subcbtn" style="width:100%">Save</button>
                                                    </div>
                                                </div>
                                                            
                                                            
                                                </form>
                                        </div>
                                    </div>
                                    <!-- End .panel -->
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
        
    </body>
</html>