<?php

session_start();

$servername="localhost";
$username="root";
$password="";
$database_name="immuneup";
$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn)
{
  die("Connection Failed:" . mysqli_connect_error());
}
if(isset($_POST['save']))
{
  $slot = $_POST['slot'];
  $address = $_POST['address'];
  $name=$_SESSION['name'];
  $aadhar=$_SESSION['aadhar'];
  $vdate=$_POST['vdate'];
  echo $slot;
  echo $address;
  echo $name;
  echo $aadhar;


  $sql_query = "INSERT INTO booking (slot,vdate,address,name,aadhar) VALUES ('$slot','$vdate','$address','$name','$aadhar')";

  if(mysqli_query($conn, $sql_query))
  {
    header('location:Dashboardphp.php');
    echo "Your slot has been booked !";
  }
  else
  {
      echo "Error: " . $sql_query . "" . mysqli_error($conn);
  }
  mysqli_close($conn);
}
?>
