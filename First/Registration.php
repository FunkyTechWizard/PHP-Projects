<?php
session_start();

?>

<html>
<head>
    <title>Registration Page</title>
    <link rel="stylesheet" href="Style.css" type="text/css">
</head>
<body>
  
   <ul>
  <li><a href="Loginpage.html">Login </a></li>
  <li><a href="Registration.php">Registration</a></li>
  <li><a href="#Contact">Contact</a></li>
   </ul>
   <fieldset>
   <legend class="hi">Registration Form</legend>
	<div class="container">
		<form action="Resultpage.php" method="POST">
			<label for="username">Username:</label>
			<input type="text" placeholder=" Username" id="username" name="username"  value="<?php echo $_SESSION["username"]; ?>" readonly><br><br>

			<label for="source">Source City:</label>
			<input type="text" id="source" name="source" required><br><br>
			
			<label for="destination">Destination City:</label>
			<input type="text" id="destination" name="destination" required><br><br>
			
			<label for="trip">Trip:</label>
		
			<input type="radio" name="Myradio" id="One-Way" value="One-Way" />
			<label for="One-Way">One-Way</label>
			<input type="radio" name="Myradio" id="Round-Trip" value="Round-Trip" />
			<label for="Round-Trip">Round-Trip</label><br><br>

			<label for="date">Date:</label>
			<input type="date" id="date" name="date" value="date"  required><br><br>
			
			<label for="price">Price Budget:</label>
			<input type="number" id="price" name="price" min="0" max="99999" step="0.01" required><br><br>
			<input type="submit" value="Submit" name="Submit">
			<input type="reset" value="Reset">
		</form>
	</div>
	</fieldset>
	<footer>
      &copy;Utsav Patel
</footer>
        
</body>
</html>
    
    
