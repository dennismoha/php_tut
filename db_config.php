<?php
	
	$servername = 'localhost';
	$username = 'root';
	$password = "";
	$database = "register";


	$conn = new mysqli($servername,$username,$password,$database);

	if(!$conn) {
		die('connection failed to the server </br> '.mysqli_connect_error());
	}else {
		echo "server successfully connected </br>";
	}


	?>