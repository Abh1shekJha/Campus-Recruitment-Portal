<?php
    include "header.php";

    $username = $_POST['uname'];
    $password = md5($_POST['pwd']);
    
    $sql = "SELECT * FROM recruiter_info where r_uname='$username' AND r_pwd='$password';";
    $result = mysqli_query($conn,$sql);
    $rws = mysqli_fetch_array($result);
    

/*
    echo $rws[5]."<br>";
    echo $rws[6]."<br>";
    echo $username."<br>";
    echo $password."<br>";
*/

    if($username==$rws[4] && $password==$rws[7]){
        
       session_start();
       $_SESSION['r_uid']= $rws[0];
       $_SESSION['r_name']=$rws[1];
       
       header ('Location:recruiterdashboard.php');
       //echo "<h3>Login Successful</h3>";
   }
            
    else
        echo "login Failed";
//echo $username."\n".$password;

