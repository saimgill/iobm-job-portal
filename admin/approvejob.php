<?php 
include("includes/dbcon.php");
if (isset($_GET['id']) && $_GET['approved'] == 0){
    $id = $_GET['id'];

    $sql = "UPDATE `job` SET `approved` = 1 WHERE `jId` = '$id'";
    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: jobdetail.php?id=".$id."&message=success");
    }
    else{
        header("Location: jobdetail.php?id=".$id."&message=failed");
    }
}

if (isset($_GET['id']) && $_GET['approved'] == 1){
    $id = $_GET['id'];

    $sql = "UPDATE `job` SET `approved` = 0 WHERE `jId` = '$id'";
    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: jobdetail.php?id=".$id."&message=success");
    }
    else{
        header("Location: jobdetail.php?id=".$id."&message=failed");
    }
}