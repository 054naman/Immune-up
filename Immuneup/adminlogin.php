<?php

error_reporting(0);

$servername="localhost";
$username="root";
$password="";
$database_name="immuneup";
$conn=mysqli_connect($servername,$username,$password,$database_name);

$name=$_POST['name'];
$pass=$_POST['pass'];

$query = "SELECT * FROM admin WHERE name='$name' and pass='$pass' ";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0)
{
  while($result=mysqli_fetch_assoc($data))
  {
    echo "
    <tr>
    <td>".$result['name']."</td>
    <td>".$result['pass']."</td>


    ";
  }

  header("Location: admindashboard.php");
}
else {
  echo "No records found";
}
 ?>
</table>
</body>
</html>
