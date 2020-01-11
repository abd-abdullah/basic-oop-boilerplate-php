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

<html>  
    <head>  
        <title>Make Price Range Slider using JQuery with PHP Ajax</title>  
		
		<script src="js/jquery-1.12.4-jquery.min.js"></script>  
		<script src="js/bootstrap.min.js"></script>
		<script src="js/croppie.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/croppie.css" />
    </head>  
    <body>  
        <div class="container">
          <br />
      <h3 align="center">Image Crop & Upload using JQuery with PHP Ajax</h3>
      <br />
      <br />


 <form role="form" method="post" enctype="multipart/form-data">
    
     <div class="form-group">
         <input type="file" name="upload_image" id="upload_image" />
            <br />
            <div id="uploaded_image"><img width="200px" height="200px; "src="<?php echo $data['image'];?>" /></div>
        </div>
                                      
  </form>
  		</div>
    </body>  
</html>

<div id="uploadimageModal" class="modal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
        		<h4 class="modal-title">Crop & Update Image</h4>
      		</div>
      		<div class="modal-body">
        		<div class="row">
  					<div class="col-md-8 text-center">
						  <div id="image_demo" style="width:350px; height:300px; margin-top:30px"></div>
  					</div>
  					<div class="col-md-4" style="padding-top:30px;">
  						<br />
  						<br />
  						<br/>
						  <button class="btn btn-success crop_image">Crop & Update Image</button>
					</div>
				</div>
      		</div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      		</div>
    	</div>
    </div>
</div>

<script>  
$(document).ready(function(){

	$image_crop = $('#image_demo').croppie({
    enableExif: true,
    viewport: {
      width:200,
      height:200,
      type:'square' //circle
    },
    boundary:{
      width:300,
      height:300
    }
  });

  $('#upload_image').on('change', function(){
    var reader = new FileReader();
    reader.onload = function (event) {
      $image_crop.croppie('bind', {
        url: event.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
    $('#uploadimageModal').modal('show');
  });

  $('.crop_image').click(function(event){
    $image_crop.croppie('result', {
      type: 'canvas',
      size: 'viewport'
    }).then(function(response){
      $.ajax({
        url:"upload.php",
        type: "POST",
        data:{"table":"user","image": response, "path":"images", "value":"<?php echo $user_id;?>"},
        success:function(data)
        {
          $('#uploadimageModal').modal('hide');
          $('#uploaded_image').html(data);
        }
      });
    })
  });

});  
</script>