<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Contact Us Page",$buffer);
echo $buffer;
?>

<!-- Page Content -->
    <div class="container">
		<!-- Jumbotron Header -->
		<div class="jumbotron">
	  		<div class="container text-center">
	   			<h1>Contact Page</h1>      
	    	</div>
		</div>

		<hr>

		<?php echo form_open('site/contactus');?>

		<div class="panel panel-default">
  			<!-- Default panel contents -->
  			<div class="panel-heading">Contact Us</div>
  			<div class="panel-body">
			
			<p>

				<div class="row">
   					<div class="col-sm-5">
      					<p>Contact us and we'll get back to you within 24 hours.</p>
				      	<p><span class="glyphicon glyphicon-map-marker"></span> Taunton, Somerset</p>
				      	<p><span class="glyphicon glyphicon-phone"></span> 01823 333333</p>
				      	<p><span class="glyphicon glyphicon-envelope"></span> thecardealership@gmail.com</p>	   
	    		</div>

	    		<div class="col-sm-7 slideanim">
      				<div class="row">
	        		<div class="col-sm-6 form-group">
	          		<input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
       			</div>

				<div class="col-sm-6 form-group">
			         <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
			        </div>
			     </div>
			      
			      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="8" type="text" required></textarea><br>
			      <div class="row">
				     <div class="col-sm-12 form-group">
				         <button class="btn btn-primary btn-lg btn-block pull-right" type="submit">Send</button>
			        </div>
			      </div>	
			    </div>
			  </div>
			</div>
 		</div>

 		<hr>

        <div class="panel panel-default">
  			<!-- Default panel contents -->
  			<div class="panel-heading">Staff Members</div>
  			<div class="panel-body"> 
  					<div class="row">
  						<div class="col-md-3 col-sm-6">
    						<div class="thumbnail">
     							<img src="http://placehold.it/150x80?text=IMAGE" class="img" style="width:100%" alt="Image">
       							<div class="caption">
        						<h4>Staff Name</h4>
      							</div>
    						</div>
  						</div>
					</div>
  			</div>
  		</div>


 		<hr>

 		<!-- <div id="googleMap" style="height:400px;width:100%;"></div>-->

		<!-- Add Google Maps--> 
		<!-- <script src="http://maps.googleapis.com/maps/api/js"></script> -->

		<div class="jumbotron">
	  		<div class="container text-center">
	   			<h1>Google Map</h1>      
	    	</div>
		</div>

		<?php echo form_close(); ?>
		</form>
	   
	    </div>
	 	<?php include 'footer.php' ?>
	</div>