<?php

  session_start();

  $servername="localhost";
  $username="root";
  $password="";
  $database_name="immuneup";

  $conn=mysqli_connect($servername,$username,$password,$database_name);

  $aadhar = $_POST['aadhar'];
  $pass = $_POST['pass'];
  $passw=md5($pass);
  $s = "select * from registeration where Aadhar = '$aadhar' && password = '$passw'";
  $result = mysqli_query($conn, $s);
  $num = mysqli_num_rows($result);
  if($num == 1)
  {
    $_SESSION['email'] = $email;
    //$rs = "select name from register where email = '$email'";
    //$sql = mysqli_query($conn, $rs);
    $row = mysqli_fetch_array($result);
    $username = $row["Name"];
    $useraadhar = $row["Aadhar"];
    $usergender = $row["gender"];

    $_SESSION['name'] = $username;
    $_SESSION['aadhar'] = $useraadhar;
    $_SESSION['gender'] = $usergender;
    header('location:Dashboardphp.php');
  }
  else
  {
    /*$log = "insert into login (email,password) values ('$email','$password')";
    mysqli_query($conn, $log);
    echo "Logged In successfull!!";*/
    echo "You are not registered. Kindly register !!";
    header('location:Loginphp.php');
  }
  mysqli_close($conn);
?>
