<?php

 include('header.php') ;


 ?>

<div class="container">
	<div class="row">
		<div class="col-lg-12 " style="margin: 10px">
			<div class="jumbotron">

				<h1> Register form</h1>	
			
			</div>

			<form action="quizhandler.php " method="POST">
				  <div class="form-group">
				    <label for="exampleInputEmail1">first name</label>
				    <input type="text" class="form-control" name="firstname" iaria-describedby="firstname" 
				   value='<?php if(isset($_SESSION['firstname'])){echo $_SESSION["firstname"];} ?>' placeholder="Enter first name">
		
				  </div>


				  <div class="form-group">
				    <label for="exampleInputEmail1">last name</label>
				    <input type="text" class="form-control" name="lastname" iaria-describedby="lastname" 
				    value='<?php if(isset($_SESSION['firstname'])){echo $_SESSION["lastname"];} ?>'  placeholder="Enter last name">

				 
				  </div>

				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control" name="maill" id="exampleInputEmail1" aria-describedby="emailHelp" 
				    value='<?php if(isset($_SESSION['firstname'])){echo $_SESSION["emailAddress"];} ?>' placeholder="Enter email">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>


				  <div class="form-group">
				    <label for="exampleInputEmail1">location</label>
				    <input type="text" class="form-control" name = "location" aria-describedby="emailHelp" 
				    value='<?php if(isset($_SESSION['firstname'])){echo $_SESSION["location"];} ?>' placeholder="Enter location">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your location with anyone else.</small>
				  </div>
				  
				  
				  <input type="submit" name="submit" value="submit">
				 
			</form>
			
		</div>
		
		
	</div>
	
</div>



<?php include('footer.php') ?>
