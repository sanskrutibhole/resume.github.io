<?php
 ob_start(); //turn on output buffering

 //...other code


$debug = ob_get_clean();
$response['debug'] = $debug; //comment this when live in production

header('Content-type: application/json');

echo json_encode($response);

  $name=$_POST['name'];
   $visitor_email =$_POST['email'];
   $visitor_subject =$_POST['subject'];
   $message =$_POST['message'];

// Create connection
$conn = mysqli_connect("localhost","root","9850","contact");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "insert into contactme(name,email,subject,message)
VALUES ('".$name."','".$visitor_email."','".$visitor_subject."','".$message."')";

mysqli_query($conn, $sql);

mysqli_close($conn);
?>