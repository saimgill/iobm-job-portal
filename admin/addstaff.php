<?php
include("includes/dbcon.php");
session_start();
$sId = $_SESSION['admin'];
echo $sId;
if(isset($_POST['add-staff'])){

  $photoFile = $_FILES['photo'];

  $pFileName = $_FILES['photo']['name'];
  $pFileTmpName = $_FILES['photo']['tmp_name'];
  $pFileSize = $_FILES['photo']['size'];
  $pFileError = $_FILES['photo']['error'];

  $pFileExt = explode('.',$pFileName);
  $pFileActualExt = strtolower(end($pFileExt));

  if($pFileActualExt == "jpg" || $pFileActualExt == "png" || $pFileActualExt == "jpeg"){
      if($pFileError === 0){
          if($pFileSize < 1000000){
              $pFileNameNew = uniqid('', FALSE). '.' . $pFileActualExt;
              $pFileDestination = '../userFiles/adminImgs/'. $pFileNameNew;

              
              $name = mysqli_real_escape_string($conn, $_POST['name']);
              $contact = mysqli_real_escape_string($conn, $_POST['contact']);
              $address = mysqli_real_escape_string($conn, $_POST['address']);
              $dob = mysqli_real_escape_string($conn, $_POST['dob']);
              $email = mysqli_real_escape_string($conn, $_POST['email']);
              $password1 = mysqli_real_escape_string($conn, $_POST['password']);
              $password2 = mysqli_real_escape_string($conn, $_POST['password2']);
              $role = mysqli_real_escape_string($conn, $_POST['role']);
              $status = "Active";

              if($_POST['password'] != $_POST['password2']){
                header("location: staff.php?error=password");
              } else{
              
                  $encpassword = password_hash($password1, PASSWORD_DEFAULT);
                  
                  $sql = "INSERT INTO `admin`(`photo`, `name`,`contact`, `address`, `dob`, `email`, `password` , `role`, `status`,`added_by`)
                          VALUES (
                                  '$pFileNameNew',
                                  '$name',
                                  '$contact',
                                  '$address',
                                  '$dob',
                                  '$email',
                                  '$encpassword',
                                  '$role',
                                  '$status',
                                  '$sId')";

                      // save to db and check
                  if(mysqli_query($conn, $sql)){
                            // success
                    // echo"<script> window.location.replace('http://localhost/IoBM-Job-Portal-master/employer/jobapproval.php?success'); </script>";
                    move_uploaded_file($pFileTmpName, $pFileDestination); 
                    header("Location: staff.php?addstaffsuccess".$sId);
                            
                  } else{
                            echo 'query error: '. mysqli_error($conn);
                    } 
                }  
          } else{
              header("location: staff.php?error=fileTooBig");
            }
      } else{
          header("location: staff.php?error=errorInFile");
        }
  } else{
        header("location: staff.php?error=incorrectFile");
    }

  
}