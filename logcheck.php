<?php
    include "header.php";

    $username = $_POST['uname'];
    $password = md5($_POST['pwd']);
    
    $sql = "SELECT * FROM admin_info where ad_uname='$username' AND ad_pwd='$password';";
    $result = mysqli_query($conn,$sql);
    $rws = mysqli_fetch_array($result);
    

/*
    echo $rws[5]."<br>";
    echo $rws[6]."<br>";
    echo $username."<br>";
    echo $password."<br>";
*/

    if($username==$rws[5] && $password==$rws[6]){
	$_SESSION['userId'] = $rws[0];
	header ('Location:admindashboard.php');
}
        //echo "<h3>Login Successful</h3>";
    else
        echo "login Failed";
//echo $username."\n".$password;

