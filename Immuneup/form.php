<?php
session_start();

 ?>

<!DOCTYPE html>


<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>form</title>
  </head>
  <body>
<form action="newbooking.php" method="post">
  <label for="slot">Choose a car:</label>
<select name="slot" id="cars">

  <option value="9:00 AM - 11:00 AM">9:00 AM - 11:00 AM</option>
  <option value="11:00 AM - 1:00 PM">11:00 AM - 1:00 PM</option>
  <option value="1:00 PM - 3:00 PM">1:00 PM - 3:00 PM</option>
  <option value="3:00 PM - 5:00 PM">3:00 PM - 5:00 PM</option>

</select>
<select name="address" id="address">
  <option value="Address -1">Address -1</option>
  <option value="Address -2">Address -2</option>
  <option value="Address -3">Address -3</option>
  <option value="Address -3">Address -3</option>

</select>
  <input type="submit" name="submit"  value="Submit">
</a>
<?php
if (isset($_SESSION['flag']))
{
  echo "reg succ";
}
else {
  echo "unsucces";
}
   ?>


</form>
  </body>
</html>
