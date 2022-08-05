<?php
include("includes/dbcon.php");
if(isset($_POST['add-job'])){

  $employer = mysqli_real_escape_string($conn, $_POST['employer']);;
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $department = mysqli_real_escape_string($conn, $_POST['department']);
  $jd = mysqli_real_escape_string($conn, $_POST['jd']);
  $skills = mysqli_real_escape_string($conn, $_POST['skills']);
  $edu = mysqli_real_escape_string($conn, $_POST['ed']);
  $type = mysqli_real_escape_string($conn, $_POST['type']);
  $salary = mysqli_real_escape_string($conn, $_POST['salary']);
  $deadline = mysqli_real_escape_string($conn, $_POST['deadline']);
  $experience = mysqli_real_escape_string($conn, $_POST['exp']);
  


  $sql = "INSERT INTO `job`(`title`, `department`,`description`, `skills`, `education`, `type`, `salary` , `deadline`, `employer`,`experience`)
          VALUES (
                  '$title',
                  '$department',
                  '$jd',
                  '$skills',
                  '$edu',
                  '$type',
                  '$salary',
                  '$deadline',
                  '$employer',
                  '$experience')";

			// save to db and check
			if(mysqli_query($conn, $sql)){
                // success
        // echo"<script> window.location.replace('http://localhost/IoBM-Job-Portal-master/employer/jobapproval.php?success'); </script>";
        header("Location: jobapproval.php?success");
                
			} else {
                echo 'query error: '. mysqli_error($conn);
                
			}
}