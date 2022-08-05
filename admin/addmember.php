<?php
include("includes/dbcon.php");
$name = $email = $contact = $address = $iobmId = '';

$errors = array( 'email'=>'','photo'=>'','transcript'=>'','password'=>'', 'cv' => '');

if(isset($_POST['submit'])){

  //upload operation on photo file
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
        $pFileDestination = '../userFiles/memberImgs/'. $pFileNameNew;
      }else{
        $errors['photo'] = "File size exceeds limit";
      }
    }else{
      $errors['photo'] = "There was an error uploading your file";
    }
  }else{
    $errors['photo'] = "You cannot upload this file type.";
  }


  //upload operation on transcript file
  $transcriptFile = $_FILES['transcript'];

  $tFileName = $_FILES['transcript']['name'];
  $tFileTmpName = $_FILES['transcript']['tmp_name'];
  $tFileSize = $_FILES['transcript']['size'];
  $tFileError = $_FILES['transcript']['error'];

  $tFileExt = explode('.',$tFileName);
  $tFileActualExt = strtolower(end($tFileExt));

  if($tFileActualExt == "pdf"){
    if($tFileError === 0){
      if($tFileSize < 1000000){
        $tFileNameNew = uniqid('', FALSE). '.' . $tFileActualExt;
        $tFileDestination = '../userFiles/transcripts/'. $tFileNameNew;
        
      }else{
        $errors['transcript'] = "File size exceeds limit";
      }
    }else{
      $errors['transcript'] = "There was an error uploading your file";
    }
  }else{
    $errors['transcript'] = "You cannot upload this file type.";
  }


  //upload operation on CV file
  $cvFile = $_FILES['cv'];

  $cvFileName = $_FILES['cv']['name'];
  $cvFileTmpName = $_FILES['cv']['tmp_name'];
  $cvFileSize = $_FILES['cv']['size'];
  $cvFileError = $_FILES['cv']['error'];

  $cvFileExt = explode('.',$cvFileName);
  $cvFileActualExt = strtolower(end($cvFileExt));

  if($cvFileActualExt == "pdf"){
    if($cvFileError === 0){
      if($cvFileSize < 1000000){
        $cvFileNameNew = uniqid('', FALSE). '.' . $cvFileActualExt;
        $cvFileDestination = '../userFiles/resumes/'. $cvFileNameNew;
      }else{
        $errors['cv'] = "File size exceeds limit";
      }
    }else{
      $errors['cv'] = "There was an error uploading your file";
    }
  }else{
    $errors['cv'] = "You cannot upload this file type.";
  }

  if($_POST['password2'] == $_POST['password1']){
    $errors['password'] = '';
  }else{
    $errors['password'] = 'Passwords do not match';
  }

  $name = $_POST['name'];
  $iobmId = $_POST['iobmId'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $address = $_POST['address'];


  //Validate email
  $sql_1 = "SELECT * FROM `member` WHERE `email` = '$email'";
  $res_1=mysqli_query($conn,$sql_1);

  if (mysqli_num_rows($res_1) > 0) {
    $errors['email'] = 'Email already exists';
  } else{
    $errors['email'] = '';
    }


  if(array_filter($errors)){
    //echo errors in form
  } else {
      session_start();
      $approved_by = $_SESSION['admin'];
			// escape sql chars
			$mtype = mysqli_real_escape_string($conn, $_POST['mType']);
      $name = mysqli_real_escape_string($conn, $_POST['name']);
      $iobmId = mysqli_real_escape_string($conn, $_POST['iobmId']);
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$photo = $pFileNameNew;
			$dob = mysqli_real_escape_string($conn, $_POST['dob']);
			$contact = mysqli_real_escape_string($conn, $_POST['contact']);
			$address = mysqli_real_escape_string($conn, $_POST['address']);
			$semester = mysqli_real_escape_string($conn, $_POST['semester']);
			$courses = mysqli_real_escape_string($conn, $_POST['courses']);
      $transcript = $tFileNameNew;
      $cv = $cvFileNameNew;
      $password = mysqli_real_escape_string($conn, $_POST['password1']);
      $passwordEnc = password_hash($password,PASSWORD_DEFAULT);

      $status = mysqli_real_escape_string($conn, $_POST['status']);
      
      // Insertion query
			$sql_2 = "INSERT INTO `member`(`type`, `name`,`iobm_id`, `email`, `photo`, `dob`, `contact`, `address`, `semester`, `courses`, `transcript`,`cv`, `password`, `approved`,`approved_by`)
      VALUES ('$mtype','$name','$iobmId','$email','$photo','$dob','$contact','$address','$semester','$courses','$transcript','$cv','$passwordEnc','1','$approved_by')";

			// save to db and check
			if(mysqli_query($conn, $sql_2)){
                // success
                move_uploaded_file($pFileTmpName, $pFileDestination);
                move_uploaded_file($tFileTmpName, $tFileDestination);
                move_uploaded_file($cvFileTmpName, $cvFileDestination);
                header('Location: members.php?registrationSuccess');
                
			} else {
                echo 'query error: '. mysqli_error($conn);
                
			}
		}
}
?>