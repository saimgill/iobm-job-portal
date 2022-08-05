<?php include("includes/header.php"); ?>
<?php include("includes/dbcon.php"); ?>
<?php include("includes/register-student.inc.php"); ?>
<?php 
$sql = "SELECT job.*, `employer`.`name` as `employerName`, `employer`.`logo` as `employerLogo`, `admin`.`name` as `approver`
FROM job
LEFT JOIN `employer` ON `job`.`employer` = `employer`.`eId`
LEFT JOIN `admin` ON `job`.`approved_by` = `admin`.`sId`
WHERE `job`.`approved` = 1
ORDER BY `job`.`created_at` DESC;";
$result = mysqli_query($conn, $sql);
  
$sql2 = "SELECT * FROM `employer`";
$result2 = mysqli_query($conn,$sql2);
?>
            <!-- .page-content -->
            <div class="page-content sidebar-page right-sidebar-page clearfix">
                <!-- .page-content-wrapper -->
                <div class="page-content-wrapper">
                    <div class="page-content-inner">
                        <!-- Start .page-content-inner -->
                        <div id="page-header" class="clearfix">
                            <div class="page-header">
                                <h2>Jobs And Internships</h2>
                                <span class="txt">Below is the list of all jobs and internships</span>
                            </div>
                            
                        </div>
                        <!-- Start .row -->


                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <form class="form-horizontal group-border stripped" role="form">
                                                        
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            <div class="col-lg-12">
                                                
                                                <div class="form-group">
                                                    
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="historydate" placeholder="Keyword(s)">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <button type="submit" class="btn btn-default" id="subcbtn" style="width:100%; padding-top: 2px; padding-bottom: 2px; padding-right: 3px; padding-left: 3px; font-size: 19px;"><i class="fa fa-search"></i> Filter</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-lg-12">
                                                
                                                <div class="form-group">
                                                    
                                                    <div class="col-sm-3">
                                                        <input type="text" class="form-control" id="" placeholder="Company">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <select name="" id="" class="form-control">
                                                            <option value="fulltime">Full Time</option>
                                                            <option value="parttime">Part Time</option>
                                                            <option value="internship">Internship</option>
                                                            <option value="contractual">Contractual</option>
                                                            <option value="trainee">Trainee</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input type="text" class="form-control" id="" placeholder="Location">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input type="date" class="form-control" id="" placeholder="Date Posted">
                                                    </div>
                                                </div>
                                            </div>
                                             -->
                                        </div>
                                    </div>
                                   
                                </form>
                   
                            </div>
                        </div>

                        
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- col-lg-12 start here -->
                                <div class="panel panel-default plain panelRefresh">
                                    <!-- Start .panel -->
                                    
                                    
                                  
                                    <div class="panel-body">
                                        
                                              
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-4"></div>
                                        <div style="col-lg-4">
                                            
                                               
                                            
                                        <div style="col-lg-4"><button type="submit" class="btn btn-default" id="subcbtn" style="float: right; margin: 0 5px 15px 5px;" data-toggle="modal" data-target="#modal-style4"> <i class="fa fa-plus-square-o"> </i> Add Job</button></div>
                                               
                                                
                                        </div>
                                        
                                        <br>
                                        <br>


                                        <table id="basic-datatables" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead >
                                                <tr style="color: white; background-color: #840023;">
                                                   
                                                    <th title="ID" style="font-size: 12px; text-align: center; width: 9%"><i class="fa fa-sort-numeric-asc"> </i> ID</th>
                                                    <th title="name" style="font-size: 12px; text-align: center;"><i class="fa fa-black-tie"> </i> Job Title</th>
                                                    <th title="name" style="font-size: 12px; text-align: center;"><i class="fa fa-anchor"> </i> Departent</th>
                                                    <th title="Image" style="font-size: 12px; text-align: center; width: 10%"><i class="fa fa-file-image-o"> </i> Company</th>
                                                    <th title="about" style="font-size: 12px; text-align: center; width: 15%;"><i class="fa fa-info-circle"> </i> Experience</th>
                                                    <th title="added by" style="font-size: 12px; text-align: center;"><i class="fa fa-user"> </i> Approved by</th>
                                                    <th title="add date" style="font-size: 12px; text-align: center;"><i class="fa fa-calendar"> </i> Added on</th>
                                                    
                                                    <th title="Edit" class="tableedit" style=" font-size: 12px; text-align: center;"><i class="l-software-pathfinder-subtract"> </i> Options</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <?php
                                                if (mysqli_num_rows($result) > 0) { 
                                                    $i=1;
                                                    while($job = mysqli_fetch_assoc($result)) { 
                                                        
                                                ?>
                                                <tr>
                                                    <td><?php echo $i?></td>
                                                    <td><?php echo htmlspecialchars($job['title']);?></td>
                                                    <td><?php echo htmlspecialchars($job['department']);?></td>
                                                    <td><img src="../userFiles/employer_logo/<?php echo htmlspecialchars($job['employerLogo']);?>" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"/></td>
                                                    <td><?php echo htmlspecialchars($job['experience']);?></td>
                                                    
                                                    
                                                    <td><?php echo htmlspecialchars($job['approver']);?></td>
                                                    <td><?php echo htmlspecialchars($job['created_at']);?></td>
                                                    <td> 
                                                        <div class="row content-justify" style="display: flex; justify-content: space-around;">
                                                            <div class="col">
                                                                <form action="jobdetail.php" method="GET" target="_blank">
                                                                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($job['jId']); ?>">
                                                                    <button type="submit" style="border:none; background:#5cb85c; color:white;"><i class="fa fa-eye"></i></button>
                                                                </form>
                                                            </div>     
                                                            <div class="col">
                                                                <button id="delete-button" data-id=<?php echo htmlspecialchars($job['jId']);?> style="border:none; background:#840023; color:white;"><i class="fa fa-trash"></i></button>
                                                            </div>                                                                                                        
                                                        </div>
                                                    </td>
                                                </tr>
                                               
                                                <?php $i++; } 
                                                } else {
                                                    echo "0 results";
                                                  }
                                                ?>   
                                                

                                            </tbody>
                                        </table>
                                                                                <!--ADD MODAL-->
                                        <div class="modal fade modal-style2" id="modal-style4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header" style="background-color:#840023">
                                                <button type="button" class="close" data-dismiss="modal" style="color:#fff">
                                                    <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                                </button>
                                                <h4 class="modal-title" id="mySmallModalLabel" style="color:#fff; text-align: center">Add Job</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form-horizontal group-border stripped" role="form" action="addjob.php" method="POST">
                                                    

                                                    <div class="form-group">
                                                        <div class="col-lg-12">
                                                            <div class="col-lg-12">
                                                                
                                                                <div class="form-group">
                                                                    <label for="" class="col-sm-12 control-label">Company</label>
                                                                    <div class="col-sm-12" id="companyBox">
                                                                        <select name="employer" id="" class="form-control">
                                                                            <option disabled selected>Choose Company</option>
                                                                            <?php 
                                                                          
                                                                            if(mysqli_num_rows($result2) > 0){
                                                                                while ($emp = mysqli_fetch_assoc($result2)) {
                                                                                    echo '<option value="'.$emp['eId'].'">'.$emp['name'].'</option>';
                                                                            }} 
                                                                            else{
                                                                                echo '<option value="">No results</option>';
                                                                            }    
                                                                            ?>
                                                                        </select>
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
                                                                            <label for="" class="col-sm-12 control-label">Title</label>
                                                                            <div class="col-sm-12">
                                                                                <input type="text" name="title" required class="form-control" id="" placeholder=""/>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="" class="col-sm-12 control-label">Department</label>
                                                                            <div class="col-sm-12">
                                                                                <input type="text" name="department" required class="form-control" id="" placeholder="">
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
                                                                        <textarea class="form-control summernote" id='' name="jd" required placeholder="" rows="5" style="resize: none;" ></textarea>
                                                                        
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
                                                                        <textarea class="form-control summernote" id='' name="skills" required placeholder="" rows="5" style="resize: none;" ></textarea>
                                                                        
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
                                                                                <input type="text" name="ed" required class="form-control" id="" placeholder="eg. BBA/BSCS"/>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="" class="col-sm-12 control-label">Job Type</label>
                                                                            <div class="col-sm-12">
                                                                                <select name="type" required id="" class="form-control">
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
                                                                                <input type="text" name="exp" required class="form-control" id="" placeholder="eg. Fresh/2+ Years"/>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="" class="col-sm-12 control-label">Salary</label>
                                                                            <div class="col-sm-12">
                                                                                <input type="text" name="salary" required class="form-control" id="" placeholder="eg. Rs. 30,000"/>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-lg-12">
                                                                        <div class="form-group">
                                                                            <label for="" class="col-sm-12 control-label">Application Deadline</label>
                                                                            <div class="col-sm-12">
                                                                                <input type="date" name="deadline" required class="form-control" id="" placeholder=""/>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                        
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-sm-offset-4 col-sm-4">
                                                            <br><br>
                                                            <button type="submit" name="add-job" class="btn btn-default" id="subcbtn" style="width:100%">Save</button>
                                                        </div>
                                                    </div>
                                                                                                                    
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    
                                       
                                    </div>    
                                </div>
                                <!-- End .panel -->
                            </div>
                            <!-- col-lg-12 end here -->
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
<script>
    $(document).ready(function() {
    $(document).on("click", "#delete-button", function() { 
        var result = confirm("Are you sure?");
        var ele = $(this).parent().parent().parent().parent();
        var id =  $(this).attr("data-id");
        if(result){
            $.ajax({
                url: "deletejob.php",
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

<?php include("includes/footer.php"); ?>