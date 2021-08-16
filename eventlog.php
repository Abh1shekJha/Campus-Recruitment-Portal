<?php
include('dbconn.php');

$Evname = $_REQUEST['Evname'];
$Evdesc = $_REQUEST['Evdesc'];
$Date = $_REQUEST['Evdate'];



// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "insert into eventtable (Evname, Evdesc, Evdate) values ('$Evname', '$Evdesc', '$Date');";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>