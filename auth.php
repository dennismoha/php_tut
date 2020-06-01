

<?php
#used to limit users not logged in from accessing the pages
	if(!isset($_SESSION['username'])) {
		header('location:login.php');
	}

	
?>

