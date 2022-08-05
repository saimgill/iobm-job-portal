<?php
    include("includes/dbcon.php");
    
    if(isset($_POST['id'])){
        $id=$_POST['id'];
        $sql = "DELETE FROM `job` WHERE jId=$id";
        
        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("statusCode"=>200));
        } 
        else {
            echo json_encode(array("statusCode"=>201));
        }
    }
    


    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM `job` WHERE jId=$id";
    
        if (mysqli_query($conn, $sql)) {
            header("location: dashboard.php?deleted");
        } 
        else {
            header("location: jobdetail.php?job_to_view=".$id."&message=deletefailed");
        }
    }

    mysqli_close($conn);

?>