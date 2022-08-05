<?php
include("includes/dbcon.php");


if(isset($_POST['submit'])){
    session_start();
    $sId=$_SESSION['admin'];
    
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $dob= mysqli_real_escape_string($conn, $_POST['dob']);

    $sql = "UPDATE admin 
        SET 
        `email` = '$email',
        `name` = '$name',
        `contact` = '$contact',
        `address` = '$address',
        `dob` = '$dob'
        WHERE `sId`='$sId'";

    if (mysqli_query($conn, $sql)) {
    header("location: user.php?message=updated");
    } else {
    header("location: settings.php?error=updatefailed");
    }

}

if(isset($_POST['changePass'])){
    session_start();
    $sId=$_SESSION['admin'];
    $pwd = htmlspecialchars($_POST['current_pass']);
    $newPwd = htmlspecialchars($_POST['new_pass']);




    $sql = "SELECT * FROM `admin` WHERE `sId`= '$sId'"; 
    $result = mysqli_query($conn, $sql);
    if (!mysqli_num_rows($result) > 0) {
        // output data of each row
        header("location: settings.php?error=failed");
        }    
    else{
    
        while($info = mysqli_fetch_assoc($result)) {
            $pwdInfo= $info['password'];
    
            $checkPwd = password_verify($pwd, $pwdInfo);
            if($checkPwd === false){
                header("location: settings.php?error=wrongpass");
            }
            else{
                $pwdEnc = password_hash($newPwd, PASSWORD_DEFAULT);
                $sql = "UPDATE `admin` 
                        SET 
                        password = '$pwdEnc'
                        WHERE `sId` = '$sId'";
                if (mysqli_query($conn, $sql)) {
                        header("location: user.php?message=updated");
                } else {
                        header("location: settings.php?error=updatefailed");
                    }       
                            
            }
        }
                
            
        }     
}



if(isset($_POST['changePhoto'])){
    session_start();
    $sId=$_SESSION['admin'];

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
                $pFileDestination = '../userFiles/adminImgs/'. $pFileNameNew;
                $sql = "UPDATE `admin` 
                        SET 
                        `photo` = '$pFileNameNew'
                        WHERE `sId` = '$sId'";
                if (mysqli_query($conn, $sql)) {
                  move_uploaded_file($pFileTmpName, $pFileDestination);      
                  header("location: user.php?message=updated");
                } else {
                    header("location: settings.php?error=updatefailed");
                  }     
            } else{
                header("location: settings.php?error=fileTooBig");
              }
        }else{
            header("location: settings.php?error=errorInFile");
          }
    }  else{
            header("location: settings.php?error=incorrectFile");
        }


}





    


mysqli_close($conn);
?>