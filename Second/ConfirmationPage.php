<!DOCTYPE html>
<html>
<head>
     
	<title>Confirmation Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="ui">
	<h2 class="j">Congrats!</h2>
	<?php
		$lastName = $_POST['lastName'];
		date_default_timezone_set('America/Toronto');
		$datetime = date('Y-m-d H:i:s');

		echo "<b>Form Completed by $lastName<b><br>";
		
		echo "<b>On $datetime  (yy/mm/dddd Hour:Minute:Second)<b>";
	
	?>
	</div>
	<footer class="ki">
	<img src="./pics/htmlvalidator.png" alt=" html Validator logo">
	<img src="./pics/cssval.png" alt=" css Validator logo">
	</footer>
</body>
</html>