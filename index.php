<?php include('header.php') ?>


<?php  

	if(isset($_GET['logout'])) {
		$logout = $_GET['logout'];
		$logout = 'logged out successfully';
		echo "<div class='alert alert-success'> $logout </div>";
		

	}

?>

<div class="container">
	<div class="row">
		<div class="col-lg-12 " style="margin: 10px">
			<div class="jumbotron">

			<h1> this is the Index page</h1>

			<?php if(!isset($_SESSION['username'])) {
				echo "<p> this line will show when your not logged in </p>";
			}else {
				echo "<p> this line will show after your logged in </p>";
			}  ?>

			<P>BELOW IS WHERE I HAVE DONE PHP SESSIONS</P>

			<?php
				$_SESSION['AGE'] = 20;
				$_SESSION['YEAR'] = 2020;
			?>
			
		</div>
			
		</div>
		
		
	</div>
	
</div>



<?php include('footer.php') ?>

