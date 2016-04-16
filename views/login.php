<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Customer Login Page",$buffer);
echo $buffer;
?>

<!-- Page Content -->
    <div class="container">
		<!-- Jumbotron Header -->
		<div class="jumbotron">
	  		<div class="container text-center">
	   			<h1>Customer Login Page</h1>      
	    	</div>
		</div>

		<hr>

		<?php echo form_open('site/showroom');?>

		<div class="panel panel-default">
  			<!-- Default panel contents -->
  			<div class="panel-heading">Customer Login Details</div>
  			<div class="panel-body">
			

			<p>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Username: </span>
	  				<input type="text" class="form-control" name="uname" id="uname" placeholder="Username" required>
				</div>
			</p>

			<p>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Password: </span>
	  				<input type="password" class="form-control" name="pword" id="pwrod" placeholder="Password" required>
				</div>
			</p>

		<p>
			<button class="btn btn-primary pull-left" href="showroom" type="submit">Login</button>
		</p>

 		</div>
		
		<?php echo form_close(); ?>
		</form>
	    
	    </div>
	 	<?php include 'footer.php' ?>
	</div>
   