<?php include('header.php') ?>

<div class="forr container">
	<h3> login form</h3>

	<?php
		if(isset($_GET['empt'])) {
			$empt = $_GET['empt'];
			$empt = 'fill in all the required gaps';
			echo "<div class='alert alert-danger'> $empt </div>";

		}elseif(isset($_GET['passErr'])) {
			$passErr = $_GET['passErr'];
			$passErr = 'invalid password';
			echo "<div class='alert alert-danger'> $passErr </div>";

		}elseif(isset($_GET['noUser'])) {
			$noUser = $_GET['noUser'];
			$noUser = "email not registered";
			echo "<div class='alert alert-danger'> $noUser </div>";
		}

	?>

	<form action="login_handler.php" method="post">
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" name="maill" aria-describedby="emailHelp" placeholder="Enter email">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" name="password" placeholder="Password">
			</div>
			
			
				  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
				  <p class="lead text-muted"> You not registered? <a href="index.php">Signup</a> </p>
	</form>
</div>



<?php include('footer.php') ?>