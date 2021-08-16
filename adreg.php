<?php
include('dbconn.php');

$Fname = $_REQUEST['fname'];
$Lname = $_REQUEST['lname'];
$Mobile = $_REQUEST['mobile'];
$Email = $_REQUEST['email'];
$Uname = $_REQUEST['uname'];
$Password = md5($_REQUEST['pwd']); // MD5 encryption is used for password
$Gender = $_REQUEST['gender'];
$Dob = $_REQUEST['dob'];



// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "insert into admin_info (ad_fname, ad_lname, ad_mobile, ad_email, ad_uname, ad_pwd, ad_gender, ad_dob) values ('$Fname', '$Lname', '$Mobile', '$Email', '$Uname', '$Password', '$Gender', '$Dob');";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>