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
$aadharno=$_POST['text'];
$gender=$_POST['Gender'];
$passw=$_POST['pass'];


echo $name;
echo $aadharno;
echo $gender;
echo $passw;

$enpass=md5($passw);

	$sql="INSERT into registeration (Name,Aadhar,gender,password) values ('$name', '$aadharno', '$gender', '$enpass')";
$rs=mysqli_query($conn,$sql);
header('location:Loginphp.php');
exit;

if($rs)
{

    $_SESSION["flag"]=1;
     echo "reg succ";
    header('location:Loginphp.php');
}
else
{
   $_SESSION["flag"]=0;
  echo "not reg";
     //header("Location: index.html");
}



/*
$name=$_POST['name'];
$aadharno=$_POST['text'];
$gender=$_POST['Gender'];
$passw=$_POST['pass'];


echo $name;
echo $aadharno;
echo $gender;
echo $passw;


	// Database connection
	$conn = new mysqli('localhost','root','','immuneup');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
    echo $name;
    echo $aadharno;
    echo $gender;
    echo $passw;
		$stmt = $conn->prepare("INSERT into registeration(name,Aadhar Number,gender,password) values ($name, $aadharno, $gender, $passw)");
		//$stmt->bind_param("siss", $name, $aadharno, $gender, $passw);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}


/*


session_start();

if (isset($_POST['name'])) {
    $name = $_POST['name'];
}
//$name=$_POST['name'];
if (isset($_POST['text']))
{
$aadharno=$_POST['text'];}
if (isset($_POST['Gender'])){
$gender=$_POST['Gender'];
}
if (isset($_POST['pass'])){
$passw=$_POST['pass'];
}
if(!empty($name) || !empty($aadharno) || !empty($gender) || !empty($passw))
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname="immuneup";
  $conn = new mysqli($servername, $username, $password,$dbname);
  if(mysqli_connect_error())
  {
    die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
  }
  else
  {
    echo $name;
    echo $aadharno;
    echo $gender;
    echo $passw;
    $sel="select Aadhar Number from registeration where Aadhar Num= ? limit 1 ";
    $insert="INSERT INTO  registeration (name,Aadhar Num,gender,password) values (?,?,?,?)";
    $stmt=$conn->prepare($sel);
    //$stmt->bind_param("s",$aadharno);
    $stmt->store_result();
    $rnum=$stmt->num_rows; //
    if($rnum==0)
    {
      $stmt->close();
      $stmt=$conn->prepare($insert);
      $stmt->bind_param("ssss",$name,$aadharno,$gender,$passw);
      $stmt->execute();
      echo "reg succ";
    }
    else {
      echo "alreay reg";
    }
    $stmt->close();
    $conn->close();

  }

}





*/

/*
 session_start();
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
   echo "Connected successfully";

  mysqli_select_db($conn,'immuneup');
  if ( isset( $_POST['submit'] ) )
  {
  $name=$_POST['name'];
  $aadharno=$_POST['text'];
  $gender=$_POST['Gender'];
  $passw=$_POST['pass'];
  echo $name;
  echo $aadharno;
  echo $gender;
  echo $passw;
  $s="SELECT * from registeration where Aadhar Num = '$ aadharno' ";
  $result=mysqli_query($conn,$s);
  $num=mysqli_num_rows($result);
  if ($num==1)
  {
  	echo"username already taken";
  }
  else
  {

  	$reg="INSERT into registeration (name,Aadhar Num,gender,password) VALUES ($name,$aadharno,$gender,$passw)" ;
  	mysqli_query($conn,$reg);
  	echo" Registration Successful";
}
}
*/
?>
