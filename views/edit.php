<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Staff Login Page",$buffer);
echo $buffer;
?>

<!-- Page Content -->
    <div class="container">
		<!-- Jumbotron Header -->
		<div class="jumbotron">
	  		<div class="container text-center">
	   			<h1>Edit Car Details</h1>      
	    	</div>
		</div>

		<hr>

		<?php echo form_open('site/carindex'); foreach ($record as $data) {?>
		<input type="hidden" name="id" title="id" value="<?php echo $data->car_id; ?>"></input>
	
		<div class="panel panel-default">
  		<!-- Default panel contents -->
  		<div class="panel-heading">Staff Login Details</div>
  		<div class="panel-body">


			<p>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2" for = "make">Car Make: </span>
		  			<input type="text" class="form-control" name="make" id="make" placeholder="Car Make" value="<?php echo $data->car_make; ?>">
				</div>
			</p>
			

			<p>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2" for = "model">Car Model: </span>
		  			<input type="text" class="form-control" name="model" id="model" placeholder="Car Model" value="<?php echo $data->car_model; ?>">
				</div>
			</p>


			<p>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2" for = "miles">Car Miles: </span>
		  			<input type="number" class="form-control" name="miles" id="miles" placeholder="Car Miles" value="<?php echo $data->car_miles; ?>">
				</div>
			</p>

			<p>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2" for = "year">Car Year: </span>
		  			<input type="number" class="form-control" name="year" id="year" placeholder="Car Year" value="<?php echo $data->car_year; ?>">
				</div>
			</p>

			<p>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2" for = "price">Car Price: </span>
		  			<input type="price" class="form-control" name="price" id="price" placeholder="Car Price" value="<?php echo $data->car_price; ?>">
				</div>
			</p>

			<p>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2" for = "trans">Car Transmission: </span>
		  			<input type="trans" class="form-control" name="trans" id="trans" placeholder="Car Transmission" value="<?php echo $data->car_transmission; ?>">
				</div>
			</p>

			<p>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2" for = "special">Special ID: </span>
		  			<input type="price" class="form-control" name="special" id="special" placeholder="Special ID" value="<?php echo $data->special_id; ?>">
				</div>
			</p>

			<p>
				<input class="btn btn-primary" type = "submit" href ="carindex" value="Update Record"/> <!--carindex-->
			</p>

		</div>
		<?php } echo form_close();?>
		</form>
	    </div>

	    <hr>

<?php include 'footer2.php' ?>