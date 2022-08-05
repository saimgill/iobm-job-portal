<?php 

if(isset($_GET['view'])){

//getting view button data from joblist.php
$employerid = mysqli_real_escape_string($conn, $_GET['employer_to_view']);

$sql2 = "SELECT * FROM `job` WHERE `employer`='$employerid'";
$result2 = mysqli_query($conn, $sql2);

$sql = "SELECT * FROM employer WHERE eId = '$employerid'";
$result = mysqli_query($conn, $sql);
$employer = mysqli_fetch_assoc($result);
mysqli_free_result($result);

}

?>