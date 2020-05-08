<!DOCTYPE html>
<html>
<head>
	<title>Taxation Management System</title>
    <link rel="stylesheet" type="text/css" href="Register.css">
	<?php
		include_once 'Final-Compilation/includes/dbh.inc.php';
	?>
 

</head>
<body>
	<div class="a">

		<form id="registration">
		<h2>Registration</h2><br>

		<input type="text" name="fname" class="button" id="name" placeholder="Enter Your Full Name" required="">
		<br><br>

        <input type="text" name="fname" class="button" id="NIC" placeholder="Enter Your NIC number" required="">
		<br><br>

        <input type="password" name="fname" class="button" id="password" placeholder="Enter Your password" required="">
		<br><br>

		<input type="password" name="fname" class="button" id="password" placeholder="ReEnter Your password" required="">
		<br><br>

		<input type="text" name="fname" class="button" id="address" placeholder="Enter Your Address" required="">
		<br><br>

		<input type="email" name="fname" class="button" id="email" placeholder="Enter Your Email Address" required="">
		<br><br>

		<input type="text" name="fname" class="button" id="tpno" placeholder="Enter Your Contact number" required="">
		<br><br>

		<input type="text" name="fname" class="button" id="Area" placeholder="Enter Your Area of Job" required="">
		<br><br>

		<input type="submit" value="Register" id="but1" onclick="detail()">

		
		</form>
	</div>

	<?php
		$sql = "INSERT INTO users";

	?>

</body>
</html>