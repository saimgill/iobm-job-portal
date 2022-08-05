<?php 
include("includes/dbcon.php");
if (isset($_GET['id']) && $_GET['approved'] == 0){
    $id = $_GET['id'];

    $sql = "UPDATE `member` SET `approved` = 1 WHERE `mId` = '$id'";
    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: memberprofile.php?id=".$id."&message=success");
    }
    else{
        header("Location: memberprofile.php?id=".$id."&message=failed");
    }
}

if (isset($_GET['id']) && $_GET['approved'] == 1){
    $id = $_GET['id'];

    $sql = "UPDATE `member` SET `approved` = 0 WHERE `mId` = '$id'";
    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: memberprofile.php?id=".$id."&message=success");
    }
    else{
        header("Location: memberprofile.php?id=".$id."&message=failed");
    }
}


if(isset($_POST['id'])){
    $id=$_POST['id'];
    $sql = "UPDATE `member` SET `approved` = 1 WHERE `mId` = '$id'";
    
    if (mysqli_query($conn, $sql)) {
        echo json_encode(array("statusCode"=>200));
    } 
    else {
        echo json_encode(array("statusCode"=>201));
    }
}