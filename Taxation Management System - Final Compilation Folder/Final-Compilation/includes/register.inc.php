<?php

		$name1=getElementById(name);
		$nic=getElementById(NIC);
		$pwd=getElementById(pwd);
		$address1=getElementById(address);
		$email=getElementById(email);
		$tpno=getElementById(tpno);
		$area=getElementById(Area);
	
		$sql = "INSERT INTO users ('name', 'NIC', 'password', 'address', 'email', 'Telephone', 'Area') 
		VALUES (name1, nic, pwd, address1, email, tpno, area)";

		mysqli_query($conn, $sql);


 ?>
