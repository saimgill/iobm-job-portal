<?php include("includes/header.php"); ?>
<?php include("includes/dbcon.php"); ?>
<?php include("includes/register-student.inc.php"); ?>
<?php 

// $sql = "SELECT * FROM member";
$sql = "SELECT member.*, `admin`.`name` as `approver`
FROM member
INNER JOIN `admin` ON `member`.`approved_by` = `admin`.`sId`
ORDER BY `member`.`created_at` DESC;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
?>
            <!-- .page-content -->
            <div class="page-content sidebar-page right-sidebar-page clearfix">
                <!-- .page-content-wrapper -->
                <div class="page-content-wrapper">
                    <div class="page-content-inner">
                        <!-- Start .page-content-inner -->
                        <div id="page-header" class="clearfix">
                            <div class="page-header">
                                <h2>Members List</h2>
                                <span class="txt">Below is the list of members</span>
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
                                            
                                               
                                            
                                        <div style="col-lg-4"><button type="submit" class="btn btn-default" id="subcbtn" style="float: right; margin: 0 5px 15px 5px;" data-toggle="modal" data-target="#modal-style2"> <i class="fa fa-plus-square-o"> </i> Add Member</button></div>
                                               
                                                
                                        </div>
                                        
                                        <br>
                                        <br>
                                              
                                        <table id="basic-datatables" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead >
                                                <tr style="color: #fff; background-color: #840023;">
                                                   
                                                    <th title="ID" style="font-size: 12px; text-align: center; width: 9%"><i class="fa fa-sort-numeric-asc"> </i> ID</th>
                                                    <th title="Image" style="font-size: 12px; text-align: center; width: 10%"><i class="fa fa-file-image-o"> </i> Image</th>
                                                    <th title="name" style="font-size: 12px; text-align: center;"><i class="fa fa-anchor"> </i> Name</th>
                                                
                                                    <th title="added by" style="font-size: 12px; text-align: center;"><i class="fa fa-user"> </i> Added by</th>
                                                    <th title="add date" style="font-size: 12px; text-align: center;"><i class="fa fa-calendar"> </i> Added on</th>
                                                    
                                                    <th title="Edit" class="tableedit" style=" font-size: 12px; text-align: center;"><i class="l-software-pathfinder-subtract"> </i> Options</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <?php 
                                                    $i=1;
                                                    while($member = mysqli_fetch_assoc($result)) { 
                                                        
                                                ?>
                                                    

                                                <tr>
                                                    <td><?php echo $i ?></td>
                                                    <td><img src="../userFiles/memberImgs/<?php echo htmlspecialchars($member['photo']); ?>" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-photo"/></td>
                                                    <td><?php echo htmlspecialchars($member['name']);?></td>
                                                   
                                                   
                                                    
                                                    <td><?php echo htmlspecialchars($member['approver']);?></td>
                                                    <td><?php echo htmlspecialchars($member['created_at']);?></td>
                                                    <td> 
                                                    <div class="row content-justify" style="display: flex; justify-content: space-around;">
                                                            <div class="col">
                                                                <form action="memberprofile.php" method="GET" target="_blank">
                                                                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($member['mId']); ?>">
                                                                    <button type="submit" name="view" style="border:none; background:#5cb85c; color:white;"><i class="fa fa-eye"></i></button>
                                                                </form>
                                                            </div>     
                                                            <div class="col">
                                                                <button id="delete-button" data-id=<?php echo htmlspecialchars($member['mId']);?> style="border:none; background:#840023; color:white;"><i class="fa fa-trash"></i></button>
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
                                    
                                    
                                    


                                        





                                        <!--EDIT MODAL-->
                                        <div class="modal fade modal-style2" id="modal-style2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color:#840023">
                                                    <button type="button" class="close" data-dismiss="modal" style="color:#fff">
                                                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                                    </button>
                                                    <h4 class="modal-title" id="mySmallModalLabel" style="color:#fff; text-align: center">Add Member</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-horizontal mt10" action="addmember.php" id="register-form" role="form" enctype="multipart/form-data" method="POST">
                                                        <div class="form-group">
                                                            <div class="col-lg-12">
                                                                <div class="input-group input-icon">
                                                                    <h3 style="text-align: center;">Student Registeration</h3>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-lg-12">
                                                                <div class="input-group input-icon">
                                                                    <input type="text" name="name" class="form-control" placeholder="Full Name" value="<?php echo htmlspecialchars($name); ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-lg-12">
                                                                <div class="input-group input-icon">
                                                                    <input type="text" name="iobmId" class="form-control"  placeholder="Student Id: e.g 20171-22637" pattern="[0-9]{5}-[0-9]{5}" value="<?php echo htmlspecialchars($iobmId); ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-lg-12">
                                                                <div class="input-group input-icon">
                                                                    <input type="email" name="email" class="form-control"  placeholder="Email" value="<?php echo htmlspecialchars($email); ?>">
                                                                </div>
                                                                <div style="color:red;"><?php echo $errors['email']; ?></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-lg-12">
                                                                <div class="input-group input-icon">
                                                                    <label class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Display Picture</label>
                                                                    <input type="file" name="photo" class="form-control col-lg-8 col-md-8 col-xs-8 col-sm-8"  placeholder="Photo">
                                                                </div>
                                                                <div><p>Only .jpg and .png file accepted.</p></div>
                                                                <div style="color:red;"><?php echo $errors['photo']; ?></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-lg-12">
                                                                <div class="input-group input-icon">
                                                                    <input type="date" name="dob" class="form-control"  placeholder="Date of Birth">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-lg-12">
                                                                <div class="input-group input-icon">
                                                                    <input type="text" name="address"  class="form-control"  placeholder="Address" value="<?php echo htmlspecialchars($address); ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-lg-12">
                                                                <div class="input-group input-icon">
                                                                    <input type="tel" pattern="[0][3][0-9]{2}[0-9]{7}" name="contact" class="form-control"  placeholder="Contact: e.g 03211234567" value="<?php echo htmlspecialchars($contact); ?>">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            
                                                            <div class="col-sm-12">
                                                                <select class="form-control" name="mType" id="mType">
                                                                    <option disabled selected>--- Choose type ---</option>
                                                                    <option value="Alumni">Alumni</option>
                                                                    <option value="Student">Student</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-lg-12">
                                                                <div class="input-group input-icon">
                                                                    <input type="hidden" name="semester" id="semester" class="form-control"  placeholder="Semester" value="completed" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-lg-12">
                                                                <div class="input-group input-icon">
                                                                    <input type="hidden" name="courses" id="courses" class="form-control"  placeholder="Number of courses completed" value="completed">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-lg-12">
                                                                <div class="input-group input-icon">
                                                                    <label class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Transcript</label>
                                                                    <input type="file" name="transcript" class="form-control col-lg-8 col-md-8 col-xs-8 col-sm-8"  placeholder="Transcript">
                                                                </div>
                                                                <div><p>Only .pdf file accepted.</p></div>
                                                                <div style="color:red;"><?php echo $errors['transcript']; ?></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-lg-12">
                                                                <div class="input-group input-icon">
                                                                    <label class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Curriculum Vitae</label>
                                                                    <input type="file" name="cv" class="form-control col-lg-8 col-md-8 col-xs-8 col-sm-8"  placeholder="Curriculum Vitae">
                                                                </div>
                                                                <div><p>Only .pdf file accepted.</p></div>
                                                                <div style="color:red;"><?php echo $errors['cv']; ?></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-lg-12">
                                                                <div class="input-group input-icon">
                                                                    <input type="password" name="password1" id="password" class="form-control"  placeholder="Password">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-lg-12">
                                                                <div class="input-group input-icon">
                                                                    <input type="password" name="password2" id="password2" class="form-control" placeholder="Confirm Password">
                                                                </div>
                                                                <div style="color:red;"><?php echo $errors['password']; ?></div>
                                                                <span style="color:red;" id="password-message"></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-lg-12">
                                                                <div class="input-group input-icon">
                                                                    <input type="hidden" name="status" class="form-control" value="Inactive">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="col-md-3"></div>
                                                        <input type="submit" name="submit" class="col-md-6 btn" id="subcbtn" value="submit"/>
                                                        
                                                    </form>
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



<script>

    $(document).ready(function() {
        $(document).on("click", "#delete-button", function() { 
            var result = confirm("Are you sure?");
            var ele = $(this).parent().parent().parent().parent();
            var id =  $(this).attr("data-id");
            if(result){
                $.ajax({
                    url: "deletemember.php",
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

mysqli_close($conn);
include("includes/footer.php");
?>  
 