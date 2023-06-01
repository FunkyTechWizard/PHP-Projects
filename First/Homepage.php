<?php
session_start();
$_SESSION["username"] = $_POST["username"];
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="Style.css" type="text/css">
</head>
<body>

 <ul>
  <li><a href="Loginpage.html">Login </a></li>
  <li><a href="Registration.php">Registration</a></li>
  <li><a href="#Contact">Contact</a></li>
 </ul>
 <img src="Image/Car.jpg" alt="Car">
<footer>
      &copy;Utsav Patel
</footer>

</body>
</html>
