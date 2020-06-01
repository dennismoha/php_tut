<?php
	session_start();

	require_once('db_config.php');

	if(isset($_POST['submit'])) {
		if(empty($_POST['maill']) || empty($_POST['password'])) {
			header('location:login.php?empt');
		}else {
			$maill = $_POST['maill'];
			$password = $_POST['password'];

			$sql = "SELECT * FROM  register where maill = '".$maill."'";
			$result  = mysqli_query($conn,$sql);

			if($row=mysqli_fetch_assoc($result)) {
				$hash = password_verify($password, $row['password']);

				if($hash == false) {
					header('location:login.php?passErr');
					exit();
				}else {
					$_SESSION['id'] = $row['id'];
					$_SESSION['username'] = $row['username'];
					$_SESSION['password'] = $row['password'];
					$_SESSION['maill'] = $row['maill'];

					
					
					$url = $_SESSION['url'];

					if(!isset($_SESSION['url'])) {
							header('location:home.php');
					}else {
							header('location:'.$url);
					}

					
					

				}
			}else {
				header('location:login.php?noUser');
				exit();
			}

		}

	}else {
		header('location:login.php?empt');
		exit();
	}
	



	

	
?>
