<?php
include('dbconn.php');

$Cname = $_REQUEST['Cname'];
$Loc = $_REQUEST['Location'];
$HRName = $_REQUEST['HRName'];
$uname = $_REQUEST['uname'];
$mobile = $_REQUEST['mobile'];
$Email = $_REQUEST['email'];
$Password = md5($_REQUEST['pwd']); // MD5 encryption is used for password



// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "insert into recruiter_info (r_name, r_loc, r_HRName, r_uname, r_mob, r_email, r_pwd) values ('$Cname', '$Loc', '$HRName', '$uname', '$mobile', '$Email', '$Password')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>