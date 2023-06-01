<?php
session_start();

?>

<html>
<head>
    <title>Result Page</title>
    <link rel="stylesheet" href="Style.css" type="text/css">
</head>
<body>
<ul>
  <li><a href="Loginpage.html">Login </a></li>
  <li><a href="Registration.php">Registration</a></li>
  <li><a href="#Contact">Contact</a></li>
   </ul>
<?php
$source = $_POST['source'];
$destination = $_POST['destination'];
$source = $_POST['source'];
$radioVal = $_POST["Myradio"];
$date = $_POST["date"];
$price = $_POST["price"];
?>

		<h1>Booking Details</h1>
		<label>Username:</label>
        <span><?php echo $_SESSION["username"];?></span><br>
		<label>Source City:</label>
        <span><?php echo $source; ?></span><br>
		<label>Destination City:</label>
        <span><?php echo $destination; ?></span><br>
		<label>Trip:</label>
		<span> <?php echo $_POST["Myradio"];?></span><br>
		<label>Trip:</label>
		<span> <?php echo $_POST["date"];?></span><br>
		<label>Price Budget:</label>
		<span> <?php echo $_POST["price"];?></span><br>
		<div class="hu"> 
<img style="height:80px; width:80px; float:left; padding-top:300px;" src="Image/cssval.png" alt="Css validation">
</div>
<footer>
      &copy;Utsav Patel
	  
</footer>
</body>
</html>