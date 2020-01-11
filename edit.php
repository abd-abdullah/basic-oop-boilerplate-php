<?php
	spl_autoload_register(function($class){
		require_once "classes/".$class.".php";
	}); 

	$Query = new Essential_Query();
?>

<?php 
	if(isset($_GET['id'])){
		$user_id = $_GET['id'];
		$result = $Query->GetAllById("user", $user_id);
		 $data = $result->fetch_assoc();

	}
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<script src="js/jquery-1.12.4-jquery.min.js"></script>  
		<script src="js/bootstrap.min.js"></script>
		<script src="js/croppie.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/croppie.css" />
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	  <script src="js/jquery-1.12.4-jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="parsleyjs/dist/parsley.min.js"></script>




    <title>Form</title>
  </head>
  <body>
	
<div class="container">
	<div class="row justify-content-center">
	<header class="card-body">
		<a href="" data-toggle="modal" data-target="#myModal" >Update Password</a> <span style="color:#f0a2a3;"></span> <a href="edit_image?id=<?php echo $user_id; ?>" class="float-right btn btn-outline-primary mt-1">Update Image</a>
		<h4 class="card-title mt-2">Sign up</h4>
	</header>
	<article class="card-body">
			<!--
			<div class="col-lg-3">
			pp	
			</div>
			-->
			<div class="col-lg-12">
				<form method="post" class="form-horizontal">
					
					<div class="form-group">
					<label class="col-sm-3 control-label">Name</label>
					<div class="col-sm-3">
					<input type="text" name="f_name" class="form-control" required data-parsley-pattern="^[a-zA-Z ]+$" placeholder="First Name" />
					</div>
					<div class="col-sm-3">
					<input type="text" name="l_name" class="form-control" required data-parsley-pattern="^[a-zA-Z ]+$" placeholder="Last name" />
					</div>

					</div>
												
												
					<!-- <div class="form-group">
					<label class="col-sm-3 control-label"></label>
					<div class="col-sm-3">
					<input type="password" id="pass2" class="form-control" required data-parsley-length="[6, 10]" data-parsley-trigger="keyup" placeholder="Password" />			</div>
					<div class="col-sm-3">
					<input type="password" class="form-control" required data-parsley-equalto="#pass2" data-parsley-trigger="keyup" placeholder="Re-Type Password" />				</div>
						                </div> -->
												
					<div class="form-group">
					<label class="col-sm-3 control-label">E-Mail</label>
					<div class="col-sm-6">
					<input type="email" class="form-control" required data-parsley-type="email" data-parsley-trigger="keyup" placeholder="Enter a valid e-mail" />				</div>
					</div>
					
					<!-- <div class="form-group">
					<label class="col-sm-3 control-label">URL</label>
					<div class="col-sm-6">
					<input type="url" class="form-control" required data-parsley-type="url" placeholder="URL" />
					</div>
					</div> -->

					<div class="form-group">
					<label class="col-sm-1 col-sm-offset-2" >Gender</label>
					<div class="col-sm-2">
					<input class="form-check-input" type="radio" name="gender" required value="male">
					<span class="form-check-label"> Male </span>
					<input class="form-check-input" type="radio" name="gender" required value="female">
					<span class="form-check-label"> Female</span>
					</div>
					</div>

					<div class="form-group">
					<label class="col-sm-3 control-label">City</label>
					<div class="col-sm-6">
					<input type="text" name="f_name" class="form-control" required data-parsley-pattern="^[a-zA-Z ]+$" placeholder="First Name" />
					</div>

					</div>

					<div class="form-group">
					<label class="col-sm-3 control-label">Country</label>
					<div class="col-sm-6">
					<select class="form-control" required>
						<option value="" selected="selected"> - Select - </option>
						<option>First Value</option>
						<option>Second Value</option>
						<option>Third Value</option>
						<option>Fourth Value</option>
					</select>
					</div>
					</div>
					
					<!-- <div class="form-group">
					<label class="col-sm-3 control-label">Number</label>
					<div class="col-sm-6">
					<input type="text" class="form-control" required data-parsley-type="number" placeholder="City" />
					</div>
					</div>
					
					<div class="form-group">
					<label class="col-sm-3 control-label">Alphanumeric</label>
					<div class="col-sm-6">
					<input type="text" class="form-control" required data-parsley-type="alphanum" placeholder="Enter alphanumeric value" />
					</div>
					</div> -->
				<!-- 	
				<div class="form-group">
				<label class="col-sm-3 control-label">Select Box</label>
				<div class="col-sm-6">
				<select class="form-control" required>
					<option value="" selected="selected"> - Select - </option>
					<option>First Value</option>
					<option>Second Value</option>
					<option>Third Value</option>
					<option>Fourth Value</option>
				</select>
				</div>
				</div>
				
				<div class="form-group">
				<label class="col-sm-3 control-label">Textarea</label>
				<div class="col-sm-6">
				<textarea required class="form-control"></textarea>
				</div>
				</div> -->
					
					<div class="form-group">
					<div class="col-sm-offset-3 col-sm-9 m-t-15">
					<button type="submit" class="btn btn-primary">Submit</button>
					<button type="reset" class="btn btn-default m-l-5">Cancel</button>
					</div>
					</div>
					
				</form>
			</div>
			
			<!--
			<div class="col-lg-4">
				pp
			</div>
			-->
		</div>
		
		
		</div>
	</article>
</div>
</div>

 <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <button type="button" class="close_lft" data-dismiss="modal">&times;</button>
				   
				   <form id="signup" method="post" action="">
					   <div class="login-block">
						  <h1>Update passwords</h1>
						  <!-- <input type="text" value="" class ="username" placeholder="Full Name" id="name" name="name"  required/>
						  <input type="text" value="" class ="username" placeholder="address...." id="address" name="address"  required/>
						  <input type="email" value=""class ="username" placeholder="Email"id="email" name="email"  required/>
						  <input class="mobile"  id="signup-username mob" type="text"name="mob" data-parsley-type="digits" data-parsley-required="true" data-parsley-trigger="change" required required minlength="3"
						  		data-parsley-minlength="3" data-parsley-maxlength="15" placeholder="Mobile"> -->
						  <input type="password"  value="" class="password" placeholder="Old Password" id="check_old_password" name="password"  data-parsley-required data-parsley-checkpass="" />

						  <input type="password" id="pass2" class="form-control" required data-parsley-length="[6, 10]" data-parsley-trigger="keyup" placeholder="Password" />

						<input type="password" class="form-control" required data-parsley-equalto="#pass2" data-parsley-trigger="keyup" placeholder="Re-Type Password" />

						<input type="text" data-parsley-multiple-of="3" />

						  <span class="terms_tb">By signing up, you agree to our <a class="cond_tb" href="#">Terms and Conditions.</a></span> <br>
						  <br>

						  
						  <input id="sign_up" name="sign_up"  type="submit" value="Sign up" style="position: relative;" onclick="Signup()">
						  <br>
						  
						  <div class="signup_res" style="text-align:center;"></div>
						  <br>
						  <div class="account"><a data-dismiss="modal" href="#myModals"data-toggle="modal" data-target="#myModals">Already have an account?</a></div>
						  <div class="sign_in"  ><a data-dismiss="modal" href="#myModals"data-toggle="modal" data-target="#myModals">Sign In</a></div>
					   </div>
				   </form>
				  
            </div>
         </div>

<!--          <script type="text/javascript">
window.Parsley.addValidator('checkpass', {
  validateString: function(value) {
    return false;
  },
  messages: {
    en: 'This string is not the reverse of itself',
    fr: "Cette valeur n'est pas l'inverse d'elle même."
  }
});
</script> -->
	<script type="text/javascript">
		var email = "<?php echo $data['email']; ?>";
		var result = false;
		
		window.Parsley.addValidator('checkpass', {
			validateString: function(value) {
				$.ajax({
			        url:"check_pass.php",
			        type: "POST",
			        data:{email:email,password:value, table:"user"},

			        success:function(data)
			        {
			        	
			        result = data;
			        }
			      });
				return result;
			},
		
			messages: {
				en: 'This string is not the reverse of itself',
				fr: "Cette valeur n'est pas l'inverse d'elle même."
			}
		});
	</script>

<!--          <script>  
 $(document).ready(function(){  
   function check_password(){
   	alert("yrs");

     var password = document.getElementById('check_old_password').value;
     var email = "<?php echo $data['email']; ?>";
     if(password){
	     $.ajax({
	     	alert("yes");
	      url:'check_pass.php',
	      method:"POST",
	      data:{"email":email, "password":password},
	      success:function(data)
	      {
	       if(data != false)
	       {
	        $('#message').html('<span class="text-danger">Old password notmatch!</span>');
	        $('#update_pass').attr("disabled", true);
	       }
	       else
	       {
	        $('#update_pass').attr("disabled", false);
	       }
	      }
	     })
	 }

  };
 });  
</script> -->

											
										
	
<script>
$(document).ready(function(){
	$('form').parsley();
});
</script>
 
  </body>
</html>