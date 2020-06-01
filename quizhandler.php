<?php
session_start();

require_once('db_config.php');
require_once('auth.php');

if(isset($_POST['submit'])) {
	

	$firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
	$lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
	$emailAddress = mysqli_real_escape_string($conn,$_POST['maill']);
	$location = mysqli_real_escape_string($conn,$_POST['location']);

	$_SESSION['firstname'] = $firstname;
	$_SESSION['lastname'] = $lastname;
	$_SESSION['emailAddress'] = $emailAddress;
	$_SESSION['location'] = $location;





	/*$firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
	$lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
	$emailAddress = mysqli_real_escape_string($conn,$_POST['maill']);
	$location = mysqli_real_escape_string($conn,$_POST['location']);*/


	 $firstname = $_SESSION['firstname'];
	 $lastname  =   $_SESSION['lastname'];
	$emailAddress = $_SESSION['emailAddress'] ;
	$location =  $_SESSION['location'] ;
	


	$sql = "INSERT INTO QUIZ (firstname,lastname,emailAddress,location) VALUES('$firstname','$lastname','$emailAddress','$location') ";
	

	if(mysqli_query($conn,$sql)) {
		echo " data inserted successfully";
	}else {
		die('error inserting data ' . mysqli_error($conn));
	}



	
}



?>