<?php 
    // ob_start();
    include("includes/header.php"); 
    include("includes/dbcon.php");
    include("includes/jobapproval.inc.php"); 
    // include("includes/addjob.inc.php"); 
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
                                <h2>Jobs And Internships Awaiting Approval</h2>
                                <span class="txt">Below is the list of all jobs and internships waiting for approval by Admin</span>
                            </div>
                            
                        </div>
                        <!-- Start .row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- col-lg-12 start here -->
                                <div class="panel panel-default plain panelRefresh">
                                    <!-- Start .panel -->
                                    
                                    
                                  
                                    <div class="panel-body">
                                        
                                              
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-4"></div>
                                        <div style="col-lg-4">
                                            
                                               
                                            
                                        <div style="col-lg-4"><button type="submit" class="btn btn-default" id="subcbtn" style="float: right; margin: 0 5px 15px 5px;" data-toggle="modal" data-target="#modal-style2"> <i class="fa fa-plus-square-o"> </i> Add Job</button></div>
                                               
                                                
                                        </div>
                                        
                                        <br>
                                        <br>


                                        <table id="basic-datatables" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead >
                                                <tr style="color: white; background-color: #840023;">
                                                   
                                                    <th title="ID" style="font-size: 12px; text-align: center; width: 9%"><i class="fa fa-sort-numeric-asc"> </i> ID</th>
                                                    <th title="name" style="font-size: 12px; text-align: center;"><i class="fa fa-black-tie"> </i> Job Title</th>
                                                    <th title="name" style="font-size: 12px; text-align: center;"><i class="fa fa-anchor"> </i> Departent</th>
                                                    <th title="about" style="font-size: 12px; text-align: center; width: 15%;"><i class="fa fa-info-circle"> </i> Experience</th>
                                                    <th title="about" style="font-size: 12px; text-align: center; width: 15%;"><i class="fa fa-info-circle"> </i> Job Type</th>
                                                    <th title="Image" style="font-size: 12px; text-align: center; width: 10%"><i class="fa fa-calendar"> </i> Deadline</th>
                                                    <th title="added by" style="font-size: 12px; text-align: center;"><i class="fa fa-user"> </i> Added by</th>
                                                    <th title="add date" style="font-size: 12px; text-align: center;"><i class="fa fa-calendar"> </i> Added on</th>
                                                    
                                                    <th title="Edit" class="tableedit" style=" font-size: 12px; text-align: center;"><i class="l-software-pathfinder-subtract"> </i> Options</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                            <?php
                                            //id intiated to 0 for auto-inc
                                            $id = 0;
                                            // foreach started
                                            foreach($jobs as $job): 
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
                                                    <td><?php echo htmlspecialchars($job['type']); ?></td>
                                                    <td><?php $timestamp = strtotime($job['deadline']);; echo  date("d-m-Y",$timestamp); ?></td>
                                                    <td><?php echo htmlspecialchars($job['name']); ?></td>
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
                                            <?php endforeach; ?> 
                                            </tbody>
                                        </table>
                                        
                                    
                             
                                        


                                        





                                        <!--EDIT MODAL-->
                                        <div class="modal fade modal-style2" id="modal-style2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color:#840023">
                                                    <button type="button" class="close" data-dismiss="modal" style="color:#fff">
                                                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                                    </button>
                                                    <h4 class="modal-title" id="mySmallModalLabel" style="color:#fff; text-align: center">Add Job Wizard</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-horizontal group-border stripped" role="form" action="addjob.php" method="POST">
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
                        </div>
                                <!-- End .panel -->
                    </div>
                    <!-- col-lg-12 end here -->
                </div>
                <!-- End .row -->
            </div>
            <!-- End .page-content-inner -->
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

        
<?php
// ob_end_flush(); 
include("includes/footer.php"); 
?>