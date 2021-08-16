<?php
include('dbconn.php');

$Fname = $_REQUEST['fname'];
$Lname = $_REQUEST['lname'];
$Branch = $_REQUEST['branch'];
$Erlno = $_REQUEST['erlno'];
$Mobile = $_REQUEST['mobile'];
$Email = $_REQUEST['email'];
$Password = md5($_REQUEST['pwd']); // MD5 encryption is used for password
$Gender = $_REQUEST['gender'];
$Dob = $_REQUEST['dob'];



// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "insert into candidate_info (s_fname, s_lname, s_branch, s_erlno, s_mob, s_email, s_pwd, s_gender, s_dob) values ('$Fname', '$Lname', '$Branch', '$Erlno', '$Mobile', '$Email', '$Password', '$Gender', '$Dob');";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>