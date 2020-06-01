<?php

	require_once('db_config.php');
	
	if(isset($_POST['submit'])) {

		$err = "";

		
		$password = $_POST['password'];
		$password2 = $_POST['password2'];

		if(empty($_POST['maill']) || empty($_POST['password']) || empty($_POST['password2']) || empty($_POST['username'])) {
			header('location: register.php?empty');

		}elseif ($password != $password2) {

			header('location: register.php?pass');

		}else {

			$username = mysqli_real_escape_string($conn,$_POST['username']);
			$maill = mysqli_real_escape_string($conn,$_POST['maill']);
			$password = mysqli_real_escape_string($conn,$_POST['password']);

			if(!preg_match("/^[a-zA-Z]*$/", $username)){
				header('location: register.php?uname');
				exit();

			}else{			

			if(!filter_var($maill,FILTER_VALIDATE_EMAIL)) {
					header('location: register.php?mail');
					exit();

			}else {

				$query = "SELECT * FROM register WHERE maill='".$maill."'";
				$result = mysqli_query($conn, $query);

				if(mysqli_fetch_assoc($result)) {
					header('location: register.php?userExist');
					exit();
				}else {
					
					$hash = password_hash($password, PASSWORD_DEFAULT);
					$sql = "INSERT INTO register (maill,password,username) VALUES('$maill','$hash','$username')";

					if (mysqli_query($conn, $sql)) {
					  header('location: register.php?success');

					} else {
					  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}


					
				}
			}

		}

	}
}else {
		header('location: index.php');
		exit();
	}


?>