<?php
 include 'DatabaseConfig.php';
 
 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

 $email = $_POST['email'];
 $password = $_POST['password'];
 
 $Sql_Query = "select * from userlogintable where user_email = '$email' and user_password = '$password' ";
 
 $result  = mysqli_query($con,$Sql_Query);
 if(mysqli_num_rows($result) > 0)
 {
     echo "login sucess";
 }
 else
 {
     echo "Login failed";
 }
 //$check = mysqli_fetch_array(mysqli_query($con,$Sql_Query));
 
?>