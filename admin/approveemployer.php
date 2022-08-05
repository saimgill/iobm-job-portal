<?php 
include("includes/dbcon.php");
if (isset($_GET['id']) && $_GET['approved'] == 0){
    $id = $_GET['id'];

    $sql = "UPDATE `employer` SET `approved` = 1 WHERE `eId` = '$id'";
    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: employerprofile.php?employer_to_view=".$id."&view=&message=success");
    }
    else{
        header("Location: employerprofile.php?employer_to_view=".$id."&view=&message=failed");
    }
}

if (isset($_GET['id']) && $_GET['approved'] == 1){
    $id = $_GET['id'];

    $sql = "UPDATE `employer` SET `approved` = 0 WHERE `eId` = '$id'";
    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: employerprofile.php?employer_to_view=".$id."&view=&message=success");
    }
    else{
        header("Location: employerprofile.php?employer_to_view=".$id."&view=&message=failed");
    }
}

//ajax dashboard

if(isset($_POST['id'])){
    $id=$_POST['id'];
    $sql = "UPDATE `employer` SET `approved` = 1 WHERE `eId` = '$id'";
    
    if (mysqli_query($conn, $sql)) {
        echo json_encode(array("statusCode"=>200));
    } 
    else {
        echo json_encode(array("statusCode"=>201));
    }
}