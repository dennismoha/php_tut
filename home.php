<?php

 include('header.php') ;
 require_once('auth.php');
 ?>

<div class="container">
	<div class="row">
		<div class="col-lg-12 " style="margin: 10px">
			<div class="jumbotron">

			<h1> this is the home page</h1>
			<p> welcom <?php echo $_SESSION['username'] . ' ' . $_SESSION['maill']?>

			<?php
				

				if(!isset($_SESSION['AGE'])) {
					echo "the age session isn't set ";
				}else {
					echo "</br> the age is " . $_SESSION['AGE'] . ' , ' . 'and the year is ' . $_SESSION['YEAR'];
				unset($_SESSION['AGE']);
				}

			


				
			?>
			
		</div>
			
		</div>
		
		
	</div>
	
</div>



<?php include('footer.php') ?>

