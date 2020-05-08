<?php

	include_once 'dbh.inc.php';

		$name1=$_POST['name'];
		$nic=$_POST['nic'];
		$pwd=$_POST['pwd'];
		$address1=$_POST['address'];
		$email=$_POST['email'];
		$tpno=$_POST['tpno'];
		$area=$_POST['job'];
	
		$sql = "INSERT INTO users ('name', 'NIC', 'password', 'address', 'email', 'Telephone', 'Area') 
		VALUES ('$name1', '$nic', '$pwd', '$address1', '$email', '$tpno', '$area');";

		mysqli_query($conn, $sql);

		header("Location: ../HomePage.php?Registered Successfully");


 ?>
