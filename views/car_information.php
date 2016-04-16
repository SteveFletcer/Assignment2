<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Car Information",$buffer);
echo $buffer;
?>

<!-- Page Content -->
    <div class="container">
		<!-- Jumbotron Header -->
		<div class="jumbotron">
	  		<div class="container text-center">
	   			<h1>Car Information</h1> 

	   			<?php foreach ($posts as $post) {
	   				echo $post->post_id;
	   				echo $post->car_make;
    			}?>

	    	</div>
		</div>

		<hr>
		
		<div class="panel panel-default">
  			<!-- Default panel contents -->
  			<div class="panel-heading">Car Information</div>
  			<div class="panel-body">
			
				<div class="row">
   					<div class="col-sm-6">
   						<p></p>
				      	<p><img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></p>
	    			</div>

	    			<div class="col-sm-6">
						<div class="input-group">
							<span class="input-group-addon" id="sizing-addon1">Car Make:</span>
	  						<input type="text" class="form-control" placeholder="Car Make:" readonly>
						</div>
						
						<p></p>
						<div class="input-group">
							<span class="input-group-addon" id="sizing-addon1">Car Model: </span>
	  						<input type="text" class="form-control" placeholder="Car Model:" readonly>
						</div>

						<p></p>
						<div class="input-group">
							<span class="input-group-addon" id="sizing-addon1">Car Miles: </span>
	  						<input type="text" class="form-control" placeholder="Car Miles:" readonly>
						</div>

						<p></p>
						<div class="input-group">
							<span class="input-group-addon" id="sizing-addon1">Car Year: </span>
	  						<input type="text" class="form-control" placeholder="Car Year:" readonly>
						</div>

						<p></p>
						<div class="input-group">
							<span class="input-group-addon" id="sizing-addon1">Car Price: </span>
	  						<input type="text" class="form-control" placeholder="Car Price:" readonly>
						</div>

						<p></p>
						<div class="input-group">
							<span class="input-group-addon" id="sizing-addon1">Car Transmission: </span>
	  						<input type="text" class="form-control" placeholder="Car Transmission:" readonly>
						</div>						

						<p></p>
						<div class="input-group">
							<span class="input-group-addon" id="sizing-addon1">Special ID: </span>
	  						<input type="text" class="form-control" placeholder="Special ID:" readonly>
						</div>

						<p></p>
						<a class="btn btn-primary btn-lg  pull-right"  type="button" href="showroom" role="button">Return To Showroom</a>
	    			</div>

				</div>
				</div>	
			    </div>
			  </div>
			</div>

 		</div>

		</form>
	    
	    </div>
	 	<?php include 'footer.php' ?>
	 </div>
