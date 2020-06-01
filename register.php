<?php include('header.php');
	  
		
 ?>

<div class="forr container">
	<h3> Registration form</h3>

	<?php 
		if(isset($_GET['empty'])) {
			$message = $_GET['empty'];
			$message = "fill in all the inputs";

			echo "<div class='alert alert-danger'> $message </div>";
		}elseif (isset($_GET['pass'])) {
			$pass = $_GET['pass'];
			$pass = ' password not equal to confirm password';
			echo "<div class='alert alert-danger'> $pass </div>";
		}elseif(isset($_GET['uname'])) {
			$uname = $_GET['uname'];
			$uname = 'inavalid username';
			echo "<div class='alert alert-danger'> $uname </div>";

		}elseif (isset($_GET['mail'])) {
			$mail = $_GET['mail'];
			$mail = 'invalid email';
			echo "<div class='alert alert-danger'> $mail </div>";

		}elseif(isset($_GET['userExist'])) {
			$userExist = $_GET['userExist'];
			$userExist = 'that user exists';
			echo "<div class='alert alert-danger'> $userExist </div>";
		}elseif (isset($_GET['success'])) {
			$success = $_GET['success'];
			$success = "successfully signed up";
			echo "<div class='alert alert-success'> $success </div>";
		}

	?>

	

	<form action="singup_handler.php" method="post">
		<div class="form-group">
				<label for="username">username</label>
				<input type="text" class="form-control" name="username" aria-describedby="username" placeholder="username">
				<small class="form-text text-muted">enter username</small>
			
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" name="maill" aria-describedby="emailHelp" placeholder="Enter email">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" name="password" placeholder="Password">
				
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Confirm Password</label>
				<input type="password" class="form-control" name="password2" placeholder="confirm Password">
			
			</div>
			
				  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
				  <p class="lead text-muted"> You Arleady registered <a href="login.php">Signing</a> </p>
	</form>
</div>



<?php include('footer.php') ?>

