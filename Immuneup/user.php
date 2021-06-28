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


    $uname=$_POST['aadhar'];
    $password=$_POST['pass'];

    echo $uname;
    echo $password;


    $sql = "select * fr"
    $rs=mysqli_query($conn,$sql);
    if($result)
    {
      echo "reg succ";
    }
    else {
      echo "fuck off";
    }


/*

/*

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
$aadhar=$_POST['aadhar'];
$pass=$_POST['pass'];


echo $pass;
echo $aadhar;


//$s="select * from user where name= '$name' && password='$pass' ";
//$result=mysqli_query($con,$s);
//$num=mysqli_num_rows($result);

$query="SELECT * from registeration where Aadhar = '$aadhar' && pass = '$pass' ";
$result=mysqli_query($conn,$query);
$num=mysqli_num_rows($result);
if($num==1)
{
  echo "how are u";
  header("location: Dashboard.php");
}
else {
  echo "login failed";
}

*/
*/
?>
