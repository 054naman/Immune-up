<?php

session_start();
$servername="localhost";
$username="root";
$password="";
$database_name="immuneup";

$conn=mysqli_connect($servername,$username,$password,$database_name);
 if(isset($_POST['submit']))
 {
   $slot=$_POST['slot'];
   $address=$_POST['address'];
   $name=$_SESSION['name'];
   $aadhar=$_SESSION['aadhar'];

   $sql="INSERT INTO booking(slot,address,name,aadhar) VALUES ('$slot','$address','$name','$aadhar')";
   $rs=mysqli_query($conn,$sql);
   if($rs)
   {
     echo "reg";
   }
   else {
     echo "nooooo";
   }

 }

 ?>
