<?php
session_start();
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

if(isset($_POST['submit']))
{
    $uname=$_POST['aadhar'];
    $password=($_POST['pass']);

    echo $uname;
    echo $password;
    $sql ="INSERT INTO login WHERE id=:uname and pass=:password";
    $result=mysqli_query($conn,$sql);
    if(rs)
    {
      echo "reg succ";
    }
    else {
      echo "fuck off";
    }

}
*/



/*
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

if($num>0)
{
  echo "how are u";
  header("location: Dashboard.php");
}
else {
  echo "login failed";
}
*/
?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="IMMUNE-UP​">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Login</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Login.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.17.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Bevan:400">


    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta property="og:title" content="Login">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
  </head>
  <body class="u-body"><header class="u-clearfix u-custom-color-5 u-header u-header" id="sec-23bd"><div class="u-clearfix u-sheet u-sheet-1">
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1.25rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-60 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-white u-text-black u-text-hover-white" href="Homephp.php" style="padding: 10px 0px;">Home</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-white u-text-black u-text-hover-white" href="Loginphp.php" style="padding: 10px 0px;">Login</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-white u-text-black u-text-hover-white" href="Admin.php" style="padding: 10px 0px;">Admin</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-white u-text-black u-text-hover-white" href="Contact-Usphp.php" style="padding: 10px 0px;">Contact Us</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Homephp.php" style="padding: 10px 0px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Loginphp.php" style="padding: 10px 0px;">Login</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact-usphp.php" style="padding: 10px 0px;">Contact Us</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <h2 class="u-custom-font u-subtitle u-text u-text-1">
          <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-custom-font u-heading-font u-hover-none u-none u-text-hover-black u-text-white u-btn-1" href="Homephp.php" data-page-id="1918604475">IMMUNE-UP<span style="font-size: 1.5rem;"></span>
          </a>
        </h2>
      </div></header>
    <section class="u-align-left u-clearfix u-image u-shading u-section-1" src="" id="sec-db76" data-image-width="1003" data-image-height="1280">
      <div class="u-form u-form-1">
        <form action="newuser.php" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 11px;" source="custom" name="form" redirect="true">
          <div class="u-form-group">
            <label for="email-11c8" class="u-form-control-hidden u-label u-text-black u-label-1">Email</label>
            <input type="text" placeholder="Enter your Aadhar number"  name="aadhar" class="u-border-1 u-border-black u-border-no-left u-border-no-right u-border-no-top u-custom-font u-input u-input-rectangle u-text-body-color u-text-font u-input-1" required="required">
          </div>
          <div class="u-form-group u-form-group-2">
            <label for="text-f2ab" class="u-form-control-hidden u-label u-text-black u-label-2"></label>
            <input type="password" placeholder="Enter your Password"  name="pass" class="u-border-1 u-border-black u-border-no-left u-border-no-right u-border-no-top u-custom-font u-input u-input-rectangle u-text-body-color u-text-font u-input-2">
          </div>
          <div class="u-align-center u-form-group u-form-submit">
            <a href="#" class="u-btn u-btn-submit u-button-style u-hover-palette-1-dark-1 u-btn-1">Submit</a>
            <input type="submit" value="submit" class="u-form-control-hidden">
          </div>
          <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
          <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
          <input type="hidden" value="" name="recaptchaResponse">
        </form>
      </div>
    </section>


    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-43fa"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Copyright&nbsp; @ 2021 , All rights reserved&nbsp;</p>
        <p class="u-small-text u-text u-text-variant u-text-2">Privacy Poliicy | Terms and Condtion&nbsp;&nbsp;</p>
      </div></footer>
  </body>
</html>
