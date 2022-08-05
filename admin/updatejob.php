<?php
include("includes/dbcon.php");
if(isset($_POST['submit'])){
    $jId = mysqli_real_escape_string($conn, $_POST['jId']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $jd = mysqli_real_escape_string($conn, $_POST['jd']);
    $skills = mysqli_real_escape_string($conn, $_POST['skills']);
    $edu = mysqli_real_escape_string($conn, $_POST['ed']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $salary = mysqli_real_escape_string($conn, $_POST['salary']);
    $deadline = mysqli_real_escape_string($conn, $_POST['deadline']);
    $experience = mysqli_real_escape_string($conn, $_POST['exp']);

    $sql = "UPDATE `job` SET 
    
            `title` = '$title', 
            `department` = '$department',
            `description` = '$jd', 
            `skills` = '$skills', 
            `education` = '$edu', 
            `type` = '$type', 
            `salary`= '$salary', 
            `deadline` = '$deadline', 
            `experience` = '$experience'

            WHERE jId = '$jId'";
    
    // save to db and check
        if(mysqli_query($conn, $sql)){
            // success
            header('Location: jobdetail.php?id='.$jId.'&message=updated');
            
        } else {
            echo 'query error: '. mysqli_error($conn);
            
        }
                

}