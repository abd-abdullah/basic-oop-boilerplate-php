<?php
	spl_autoload_register(function($class){
		require_once "classes/".$class.".php";
	}); 

	$Query = new Essential_Query();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Form</title>
  </head>
  <body>
    
	<div class="container">
	<div class="row justify-content-center">
	<div class="col-md-6">
	<div class="card">
	<header class="card-header">
		<a href="" class="float-right btn btn-outline-primary mt-1">Log in</a>
		<h4 class="card-title mt-2">Sign up</h4>
	</header>
	<article class="card-body">

	<?php
		if ($_SERVER['REQUEST_METHOD']=='POST') {
			$result = $Query->Insert("user", $_POST, $_FILES, "images");
			echo '<div class="alert alert-success alert-dismissable"><a ref="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>'.$result.'</strong> </div>';
 		 }
	?>
	 <form role="form" method="post" enctype="multipart/form-data">
		<div class="form-row">
			<div class="col form-group">
				<label>First name </label>   
			  	<input type="text" name="f_name" class="form-control" required  placeholder="">
			</div> <!-- form-group end.// -->
			<div class="col form-group">
				<label>Last name</label>
			  	<input type="text" name="l_name" class="form-control" required placeholder=" ">
			</div> <!-- form-group end.// -->
		</div> <!-- form-row end.// -->
		
		<div class="form-group">
          <label for="">Choose a Picture</label>
          <input required type="file" name="image"  id="">
        </div>
                
		<div class="form-group">
			<label>Email address</label>
			<input type="email" name="email" class="form-control" required placeholder="">
			<small class="form-text text-muted">We'll never share your email with anyone else.</small>
		</div> <!-- form-group end.// -->
		<div class="form-group">
				<label class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="gender" required value="male">
			  <span class="form-check-label"> Male </span>
			</label>
			<label class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="gender" required value="female">
			  <span class="form-check-label"> Female</span>
			</label>
		</div> <!-- form-group end.// -->
		<div class="form-row">
			<div class="form-group col-md-6">
			  <label>City</label>
			  <input type="text" name="city" required class="form-control">
			</div> <!-- form-group end.// -->
			<div class="form-group col-md-6">
			  <label>Country</label>
			  <select id="inputState" name="country" required class="form-control">
			    <option> Choose...</option>
			      <option>Uzbekistan</option>
			      <option>Russia</option>
			      <option selected="">United States</option>
			      <option>India</option>
			      <option>Afganistan</option>
			  </select>
			</div> <!-- form-group end.// -->
		</div> <!-- form-row.// -->
		<div class="form-group">
			<label>Create password</label>
		    <input class="form-control" type="password" name="password">
		</div> <!-- form-group end.// -->  
	    <div class="form-group">
	        <button type="submit" value="register" class="btn btn-primary btn-block"> Register  </button>
	    </div> <!-- form-group// -->      
	    <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                          
	</form>
	</article> <!-- card-body end .// -->
	<div class="border-top card-body text-center">Have an account? <a href="details.php/">Log In</a></div>
	</div> <!-- card.// -->
	</div> <!-- col.//-->

	</div> <!-- row.//-->


	</div> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-1.12.4-jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>