<?php 

session_start();
if(isset($_SESSION['admin'])){
    header("location: dashboard.php");
    // echo"<script> window.location.replace('http://localhost/IoBM-Job-Portal-master/Panels/student/login-student.php'); </script>";
}
    if (isset($_POST['submit'])){
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $sql = "SELECT * FROM `admin` WHERE `email`= '$email'"; 
        $result = mysqli_query($conn, $sql);
        if (!mysqli_num_rows($result) > 0) {
            // output data of each row
            header("location: login-admin.php?error=loginfailed");
        
            }    
        else{
        
            while($row = mysqli_fetch_assoc($result)) {
                $pwdHashed = $row['password'];
        
                $checkPwd = password_verify($password, $pwdHashed);
                if($checkPwd === false){
                    header("location: login-admin.php?error=failed");
                }
                else{
                    
                    $_SESSION['admin'] = $row['sId'];
                    header("location: dashboard.php?message=loginsuccessful");
                }
            }
                
                
            }

        }        


?>