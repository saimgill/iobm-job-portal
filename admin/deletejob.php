<?php 
include("includes/dbcon.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM `job` WHERE `jId`='$id'";

    if(mysqli_query($conn,$sql)){
        header("Location: joblist.php?deleted");
    }
    if(mysqli($conn,$sql)){
        header("Location: jobdetail.php?id=".$id."&deletefailed");
    }
}

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