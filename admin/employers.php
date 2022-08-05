<?php include("includes/header.php") ?>
<?php include("includes/dbcon.php") ?>

<?php

    //joining query for "employers" and "admin" tables

    $sql = "SELECT employer.*, `admin`.`name` as adminname
            FROM employer
            LEFT JOIN `admin` ON `employer`.`approved_by` = `admin`.`sId`
            WHERE `employer`.`approved`=1
            ORDER BY `employer`.`created_at` DESC;";

    $result = mysqli_query($conn, $sql);

    $employers = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
            <!-- .page-content -->
                <div class="page-content sidebar-page right-sidebar-page clearfix">
                    <!-- .page-content-wrapper -->
                <div class="page-content-wrapper">
                    <div class="page-content-inner">
                        <!-- Start .page-content-inner -->
                        <div id="page-header" class="clearfix">
                            <div class="page-header">
                                <h2>Employers List</h2>
                                <span class="txt">Below is the list of Employers Registered</span>
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
                                            
                                               
                                            
                                        <div style="col-lg-4"><button type="submit" class="btn btn-default" id="subcbtn" style="float: right; margin: 0 5px 15px 5px;" data-toggle="modal" data-target="#modal-style2"> <i class="fa fa-plus-square-o"> </i> Add Employer</button></div>
                                               
                                                
                                        </div>
                                        
                                        <br>
                                        <br>
                                              
                                        <table id="basic-datatables" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead >
                                                <tr style="color: white; background-color: #840023;">
                                                   
                                                    <th title="ID" style="font-size: 12px; text-align: center; width: 9%"><i class="fa fa-sort-numeric-asc"> </i> ID</th>
                                                    <th title="Image" style="font-size: 12px; text-align: center; width: 10%"><i class="fa fa-file-image-o"> </i> Image</th>
                                                    <th title="name" style="font-size: 12px; text-align: center;"><i class="fa fa-anchor"> </i> Name</th>
                                                    <th title="about" style="font-size: 12px; text-align: center; width: 15%;"><i class="fa fa-info-circle"> </i> Email</th>
                                                    <th title="status" style="font-size: 12px; text-align: center;"><i class="fa fa-cogs"> </i> Status</th>
                                                    <th title="added by" style="font-size: 12px; text-align: center;"><i class="fa fa-user"> </i> Added by</th>
                                                    <th title="add date" style="font-size: 12px; text-align: center;"><i class="fa fa-calendar"> </i> Added on</th>
                                                    
                                                    <th title="Edit" class="tableedit" style=" font-size: 12px; text-align: center;"><i class="l-software-pathfinder-subtract"> </i> Options</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>

                                            <?php
                                                //intiating auto inc id var
                                                $id=0;

                                                //start of foreach
                                                foreach((array)$employers as $employer):
                                            ?>
                                                <tr>
                                                    <td>
                                                    <?php
                                                        //displaying auto inc ids
                                                        $id++;
                                                        echo $id;
                                                    ?>
                                                    </td>
                                                    <td><img src="../userFiles/employer_logo/<?php echo htmlspecialchars($employer['logo']); ?>" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"/></td>
                                                    <td><?php echo htmlspecialchars($employer['name']); ?></td>
                                                    <td><?php echo htmlspecialchars($employer['email']); ?></td>
                                                    <td>
                                                    <?php 
                                                    
                                                    if($employer['approved'] == 1) {
                                                        echo "Active";
                                                    }
                                                    else {
                                                        echo "Inactive";
                                                    }
                                                    
                                                    ?>
                                                    </td>
                                                    
                                                    <td><?php echo htmlspecialchars($employer['adminname']); ?></td>
                                                    <td><?php echo htmlspecialchars($employer['created_at']); ?></td>
                                                    <td> 
                                                        <div class="row content-justify" style="display: flex; justify-content: space-around;">
                                                            <div class="col">
                                                                <form action="employerprofile.php" method="GET" target="_blank">
                                                                    <input type="hidden" name="employer_to_view" value="<?php echo $employer['eId']; ?>">
                                                                    <button type="submit" name="view" style="border:none; background:#5cb85c; color:white;"><i class="fa fa-eye"></i></button>
                                                                </form>
                                                            </div>
                                                            <div class="col">
                                                                <button id="delete-button" data-id="<?php echo $employer['eId']; ?>" style="border:none; background:#840023; color:white;"><i class="fa fa-trash"></i></button>
                                                            </div>                                                       
                                                        </div>
                                                    </td>
                                                </tr>

                                            <?php
                                                //end of foreach loop
                                                endforeach;
                                            ?>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- End .page-content-inner -->
                                </div>
                                <!-- / page-content-wrapper -->
                            </div>
                            <!-- / page-content -->
                        </div>
                        </div>
                        </div>
                        </div>
                        <!-- / #wrapper -->
        
        <!-- // Ajax for deleting employer -->
        <script>
            $(document).ready(function() {
                $(document).on("click", "#delete-button", function() { 
                    var result = confirm("Are you sure?");
                    var ele = $(this).parent().parent().parent().parent();
                    var id =  $(this).attr("data-id");
                    if(result){
                        $.ajax({
                            url: "deleteemployer.php",
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