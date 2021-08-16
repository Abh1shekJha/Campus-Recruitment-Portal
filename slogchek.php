<?php
    include "header.php";

    $username = $_POST['uname'];
    $password = md5($_POST['pwd']);
    
    $sql = "SELECT * FROM candidate_info where s_email='$username' AND s_pwd='$password';";
    $result = mysqli_query($conn,$sql);
    $rws = mysqli_fetch_array($result);
    

/*
    echo $rws[5]."<br>";
    echo $rws[6]."<br>";
    echo $username."<br>";
    echo $password."<br>";
*/

   if($username==$rws[6] && $password==$rws[7]){
        
       session_start();
       $_SESSION['s_uid']= $rws[0];
       $_SESSION['s_name']=$rws[1];
       
       header ('Location:studentdashboard.php');
       //echo "<h3>Login Successful</h3>";
   }
    else
        echo "login Failed";
//echo $username."\n".$password;

