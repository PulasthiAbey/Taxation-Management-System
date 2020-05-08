<!DOCTYPE html>
<html>
<head>
	<title>Taxation Management System</title>
    <link rel="stylesheet" type="text/css" href="Register.css">
</head>
<body>
	<div class="a">

		<form id="registration" action="includes/register.inc.php" method="POST">
		<h2>Registration</h2><br>

		<input type="text" name="name" class="button" id="name" placeholder="Enter Your Full Name" required="">
		<br><br>

        <input type="text" name="nic" class="button" id="NIC" placeholder="Enter Your NIC number" required="">
		<br><br>

        <input type="password" name="pwd" class="button" id="pwd" placeholder="Enter Your password" required="">
		<br><br>

		<input type="password" name="pwd1" class="button" id="password" placeholder="ReEnter Your password" required="">
		<br><br>

		
		<input type="text" name="address" class="button" id="address" placeholder="Enter Your Address" required="">
		<br><br>

		<input type="email" name="email" class="button" id="email" placeholder="Enter Your Email Address" required="">
		<br><br>


		<input type="text" name="tpno" class="button" id="tpno" placeholder="Enter Your Contact number" required="">
		<br><br>

		<input type="text" name="job" class="button" id="Area" placeholder="Enter Your Area of Job" required="">
		<br><br>

		<input type="submit" value="Register" id="but1" onclick="detail()">

		
		</form>
	</div>

</body>
</html>