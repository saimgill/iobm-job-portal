
<?php 

// approve list employer
$sql = "SELECT *
FROM employer
WHERE `approved` = 0
ORDER BY `employer`.`created_at` DESC;";
$result = mysqli_query($conn, $sql);
$employers = mysqli_fetch_all($result, MYSQLI_ASSOC);


// approve list member
$sql2 = "SELECT *
FROM member
WHERE `approved` = 0
ORDER BY `member`.`created_at` DESC;";
$result2 = mysqli_query($conn, $sql2);
$members = mysqli_fetch_all($result2, MYSQLI_ASSOC);


// cards
$sql_admin = "SELECT * FROM `admin`";
$sql_student = "SELECT * FROM `member` WHERE `type`= 'Student'";
$sql_alumni = "SELECT * FROM `member` WHERE `type`= 'Alumni'";
$sql_company = "SELECT * FROM `employer` WHERE `approved`= 1";
$sql_job = "SELECT * FROM `job` WHERE `approved`= 1 AND `type` != 'Internship'";
$sql_internship = "SELECT * FROM `job` WHERE `approved`= 1 AND `type` = 'Internship'";

$adminCount = mysqli_num_rows(mysqli_query($conn,$sql_admin));
$studentCount = mysqli_num_rows(mysqli_query($conn,$sql_student));
$alumniCount = mysqli_num_rows(mysqli_query($conn,$sql_alumni));
$companyCount = mysqli_num_rows(mysqli_query($conn,$sql_company));
$internshipCount = mysqli_num_rows(mysqli_query($conn,$sql_internship));
$jobCount = mysqli_num_rows(mysqli_query($conn,$sql_job));


//active inactive users
$sql_active = "SELECT * FROM `member` WHERE `approved`= 1";
$sql_inactive = "SELECT * FROM `member` WHERE `approved`= 0";

$activeCount = mysqli_num_rows(mysqli_query($conn,$sql_active));
$inactiveCount = mysqli_num_rows(mysqli_query($conn,$sql_inactive));


//monthly hits

$sql_hits_jan = "SELECT * FROM `hits` WHERE MONTH(created_at) = 1";  
$sql_hits_feb = "SELECT * FROM `hits` WHERE MONTH(created_at) = 2";  
$sql_hits_mar = "SELECT * FROM `hits` WHERE MONTH(created_at) = 3";  
$sql_hits_apr = "SELECT * FROM `hits` WHERE MONTH(created_at) = 4";  
$sql_hits_may = "SELECT * FROM `hits` WHERE MONTH(created_at) = 5";  
$sql_hits_jun = "SELECT * FROM `hits` WHERE MONTH(created_at) = 6";  
$sql_hits_jul = "SELECT * FROM `hits` WHERE MONTH(created_at) = 7";  
$sql_hits_aug = "SELECT * FROM `hits` WHERE MONTH(created_at) = 8";  
$sql_hits_sep = "SELECT * FROM `hits` WHERE MONTH(created_at) = 9";  
$sql_hits_oct = "SELECT * FROM `hits` WHERE MONTH(created_at) = 10";  
$sql_hits_nov = "SELECT * FROM `hits` WHERE MONTH(created_at) = 11";  
$sql_hits_dec = "SELECT * FROM `hits` WHERE MONTH(created_at) = 12";  
 
$hits_jan = mysqli_num_rows(mysqli_query($conn,$sql_hits_jan));
$hits_feb = mysqli_num_rows(mysqli_query($conn,$sql_hits_feb));
$hits_mar = mysqli_num_rows(mysqli_query($conn,$sql_hits_mar));
$hits_apr = mysqli_num_rows(mysqli_query($conn,$sql_hits_apr));
$hits_may = mysqli_num_rows(mysqli_query($conn,$sql_hits_may));
$hits_jun = mysqli_num_rows(mysqli_query($conn,$sql_hits_jun));
$hits_jul = mysqli_num_rows(mysqli_query($conn,$sql_hits_jul));
$hits_aug = mysqli_num_rows(mysqli_query($conn,$sql_hits_aug));
$hits_sep = mysqli_num_rows(mysqli_query($conn,$sql_hits_sep));
$hits_oct = mysqli_num_rows(mysqli_query($conn,$sql_hits_oct));
$hits_nov = mysqli_num_rows(mysqli_query($conn,$sql_hits_nov));
$hits_dec = mysqli_num_rows(mysqli_query($conn,$sql_hits_dec));




?>