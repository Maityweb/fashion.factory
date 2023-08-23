<?php
// Enter your Host, username, password, database below.

	$conn = new mysqli("localhost","root","","cart_system");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>

