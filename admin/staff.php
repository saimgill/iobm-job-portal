<?php
include("includes/header.php");
include("includes/dbcon.php"); 

$sId = $_SESSION['admin'];
    $sql = "SELECT * FROM `admin` WHERE `sId` != '$sId'" ;

    $result = mysqli_query($conn, $sql);

    $admin = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
                                <h2>Staff Management</h2>
                                <span class="txt">Below is the list of all the admins in IoBM Job Portal</span>
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
                                            
                                               
                                            
                                        <div style="col-lg-4"><button type="submit" class="btn btn-default" id="subcbtn" style="float: right; margin: 0 5px 15px 5px;" data-toggle="modal" data-target="#modal-style2"> <i class="fa fa-plus-square-o"> </i> Add Staff</button></div>
                                               
                                                
                                        </div>
                                        
                                        <br>
                                        <br>
                                              
                                        <table id="basic-datatables" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead >
                                                <tr style="color: white; background-color: #840023;">
                                                   
                                                    <th title="ID" style="font-size: 12px; text-align: center; width: 9%"><i class="fa fa-sort-numeric-asc"> </i> ID</th>
                                                    <th title="Image" style="font-size: 12px; text-align: center; width: 10%"><i class="fa fa-file-image-o"> </i> Image</th>
                                                    <th title="name" style="font-size: 12px; text-align: center;"><i class="fa fa-anchor"> </i> Name</th>
                                                    <th title="name" style="font-size: 12px; text-align: center;"><i class="fa fa-anchor"> </i> Role</th>
                                          
                                                    <th title="status" style="font-size: 12px; text-align: center;"><i class="fa fa-cogs"> </i> Status</th>
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
                                            foreach($admin as $admins): 
                                            ?>

                                            <tr>
                                                    <td>
                                                    <!-- displaying id -->
                                                    <?php 
                                                        //increment on every iteration 
                                                        $id++;
                                                        echo $id; 
                                                    ?></td>
                                                    <td><img src="../userFiles/adminImgs/<?php echo htmlspecialchars($admins['photo']); ?>" class="table-photo" alt=""></td>
                                                    <td><?php echo htmlspecialchars($admins['name']); ?></td>
                                                    <td><?php echo htmlspecialchars($admins['role']); ?></td>
                                                    <td><?php echo htmlspecialchars($admins['status']); ?></td>
                                                    <td><?php echo htmlspecialchars($admins['added_by']); ?></td>
                                                    <td><?php $timestamp = strtotime($admins['created_at']);; echo  date("d-m-Y",$timestamp); ?></td>
                                                    <td>                                                                                                           
                                                        <div class="row content-justify" style="display: flex; justify-content: space-around;">
                                                            <div class="col">
                                                                <form action="staffprofile.php" method="GET" target="_blank">
                                                                    <input type="hidden" name="staff_id" value="<?php echo $admins['sId']; ?>">
                                                                    <button type="submit" name="view" style="border:none; background:#5cb85c; color:white;"><i class="fa fa-eye"></i></button>
                                                                </form>
                                                            </div>     
                                                            <div class="col">
                                                                <button id="delete-button" data-id="<?php echo $admins['sId'];?>" style="border:none; background:#840023; color:white;"><i class="fa fa-trash"></i></button>
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
                                                    <button type="button" class="close" data-dismiss="modal" style="color:white">
                                                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                                    </button>
                                                    <h4 class="modal-title" id="mySmallModalLabel" style="color:white; text-align: center">Add Staff</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-horizontal group-border stripped" role="form" id="register-form" action="addstaff.php" method="POST" enctype="multipart/form-data">

                                                        <div class="form-group">
                                                            <label for="inputAddress" class="col-sm-12 control-label">Profile Picture</label>
                                                            <div class="col-sm-12">
                                                                <input type="file"  name="photo" class="form-control" id="" placeholder="Your image Comes Here.." required>
                                                                <p style="color: grey;">Only .jpg and .png file accepted. Maximum file size: 1MB</p>
                                                                <p style="color: red; margin: 10px 0px;" id="photo-error"></p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputEmail4" class="col-sm-12 control-label">Email</label>
                                                            <div class="col-sm-12">
                                                                <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email"required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputEmail4" class="col-sm-12 control-label">Password</label>
                                                            <div class="col-sm-12">
                                                                <input type="password" name="password" id="inputnpass" class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputEmail4" class="col-sm-12 control-label">Repeat Password</label>
                                                            <div class="col-sm-12">
                                                                <input type="password" name="password2" id="inputrpass" class="form-control" required>
                                                                <span id="message"></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputFirstName" class="col-sm-12 control-label">Name</label>
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" name="name" id="fname" placeholder="Name" required>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label for="inputContact" class="col-sm-12 control-label">Contact e.g. 03#########</label>
                                                            <div class="col-sm-12">
                                                                <input type="tel" class="form-control" name="contact" id="" placeholder="Contact No."required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputAddress" class="col-sm-12 control-label">Address</label>
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" name="address" id="" placeholder="Current Address.."required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputAddress" class="col-sm-12 control-label">Date of Birth</label>
                                                            <div class="col-sm-12">
                                                                <input type="date" class="form-control" name="dob" id="" placeholder="Your Birth Date Comes Here.."required>
                                                            </div>
                                                        </div>
    
    
                                                        
    
                                                        <div class="form-group">
                                                            <label for="inputAddress" class="col-sm-12 control-label">Assign Role</label>
                                                            <div class="col-sm-12">
                                                                <select class="form-control" name="role" id="role" required>
                                                                    <option value="Admin">Admin</option>
                                                                    <option value="Moderator">Moderator</option>
                                                                </select>
                                                            </div>
                                                        </div>
    
                                                        
                                                        
                                                        <div class="form-group">
                                                             <div class="col-sm-offset-4 col-sm-4">
                                                                <button type="submit" name="add-staff" class="btn btn-default" id="subcbtn" style="width:100%">Register Staff</button>
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
       
        <!-- / #wrapper -->
        <script>

                $(document).ready(function() {
                    $(document).on("click", "#delete-button", function() { 
                        var result = confirm("Are you sure?");
                        var ele = $(this).parent().parent().parent().parent();
                        var id =  $(this).attr("data-id");
                        if(result){
                            $.ajax({
                                url: "deletestaff.php",
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

            <script>
                
            </script>
        
<?php include("includes/footer.php"); ?>