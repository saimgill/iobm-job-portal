<?php include("includes/header.php"); ?>   
<?php include("includes/dbcon.php"); ?>
<?php

    
    //joining query for "jobs" and "employer_info" tables
    $sql = "SELECT job.*, employer.name as `employerName`, employer.logo as `employerLogo` FROM `job` INNER JOIN `employer` ON job.employer = employer.eId WHERE job.approved=0 ORDER BY job.created_at DESC";
    $result = mysqli_query($conn, $sql);

   

?>  
            <!-- .page-content -->
            <div class="page-content sidebar-page right-sidebar-page clearfix">
                <!-- .page-content-wrapper -->
                <div class="page-content-wrapper">
                    <div class="page-content-inner">
                        <!-- Start .page-content-inner -->
                        <div id="page-header" class="clearfix">
                            <div class="page-header">
                                <h2>Recent Job Applications</h2>
                                <span class="txt">Below is the list of jobs waiting approval</span>
                            </div>
                            
                        </div>
                        <!-- Start .row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- col-lg-12 start here -->
                                <div class="panel panel-default plain panelRefresh">
                                    <!-- Start .panel -->
                                    
                                    
                                  
                                    <div class="panel-body">

                                        <table id="basic-datatables" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead >
                                                <tr style="color: white; background-color: #840023;">
                                                   
                                                    <th title="ID" style="font-size: 12px; text-align: center; width: 9%"><i class="fa fa-sort-numeric-asc"> </i> ID</th>
                                                    <th title="name" style="font-size: 12px; text-align: center;"><i class="fa fa-black-tie"> </i> Job Title</th>
                                                    <th title="name" style="font-size: 12px; text-align: center;"><i class="fa fa-anchor"> </i> Departent</th>
                                                    <th title="Image" style="font-size: 12px; text-align: center; width: 10%"><i class="fa fa-file-image-o"> </i> Company</th>
                                                    <th title="about" style="font-size: 12px; text-align: center; width: 15%;"><i class="fa fa-info-circle"> </i> Experience</th>
                                                    <th title="added by" style="font-size: 12px; text-align: center;"><i class="fa fa-user"> </i> Added by</th>
                                                    <th title="add date" style="font-size: 12px; text-align: center;"><i class="fa fa-calendar"> </i> Added on</th>
                                                    
                                                    <th title="Edit" class="tableedit" style=" font-size: 12px; text-align: center;"><i class="l-software-pathfinder-subtract"> </i> Options</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <?php 
                                                    $i=1;
                                                    if (mysqli_num_rows($result) > 0) {
                                                    while($job = mysqli_fetch_assoc($result)) { 
                                                        
                                                ?>
                                                <tr>
                                                    <td><?php echo $i?></td>
                                                    <td><?php echo htmlspecialchars($job['title']);?></td>
                                                    <td><?php echo htmlspecialchars($job['department']);?></td>
                                                    <td><img src="../userFiles/employer_logo/<?php echo htmlspecialchars($job['employerLogo']);?>" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"/></td>
                                                    <td><?php echo htmlspecialchars($job['experience']);?></td>
                                                    
                                                    
                                                    <td><?php echo htmlspecialchars($job['employer']);?></td>
                                                    <td><?php echo htmlspecialchars($job['created_at']);?></td>
                                                    <td> 
                                                        <div class="row content-justify" style="display: flex; justify-content: space-around;">
                                                            <div class="col">
                                                                <form action="jobdetail.php" method="GET" target="_blank">
                                                                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($job['jId']); ?>">
                                                                    <button type="submit" name="view" style="border:none; background:#5cb85c; color:white;"><i class="fa fa-eye"></i></button>
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