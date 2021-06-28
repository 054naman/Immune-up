<?php
session_start();


$servername = "localhost";
$database = "immuneup";
$user = "root";
$password = ""; // Use the correct password here
// Create connection
$conn = mysqli_connect($servername, $user, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo " error";
}
else {
  echo "coonection succ";
}
$name=$_POST['name'];
$aadharno=$_POST['aadhar'];
$message=$_POST['message'];


echo $name;
echo $aadharno;
echo $message;
	//$sql="INSERT into registeration (Name,Aadhar,gender,password) values ('$name', '$aadharno', '$gender', '$passw')";
$sql="INSERT INTO feedback(Name,Aadhar,feed) VALUES('$name','$aadharno','$message')";
$rs=mysqli_query($conn,$sql);
if(!$rs)
{
  echo "Feedback is Submitted";//die('Error in posting value: ' . mysqli_error($rs));
}
else {
echo "Failed";  // code...
}

?>
