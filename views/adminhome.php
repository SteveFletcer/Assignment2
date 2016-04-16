<?php
ob_start();
include("header2.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Admin Home",$buffer);
echo $buffer;
?>

<!-- Page Content -->
    <div class="container">
		<!-- Jumbotron Header -->
		<div class="jumbotron">
	  		<div class="container text-center">
	   			<h1>Admin Home</h1>  
	   			<p>This is the section where administrators can add work with news articles and staff details</p>    
	    	</div>
		</div>

		<hr>

			<?php echo form_open('site/adminhome');?>
			<div class="panel panel-default">
  			<!-- Default panel contents -->
  			<div class="panel-heading">Contact Us</div>
  			<div class="panel-body">
			
				<div class="row">
   					<div class="col-sm-6">
				      	<p>
				      		<span class="glyphicon glyphicon-envelope"></span> Click for news page</p>  
				      		<a class="btn btn-primary btn-lg  pull-left"  type="button" href="newsactions" role="button">News Actions</a>
	    			</div>

	    			 <div class="col-sm-6">
				      	<p>
				      	<span class="glyphicon glyphicon-user"></span> Click for staff page</p>
						<a class="btn btn-primary btn-lg  pull-left"  type="button" href="staffactions" role="button">Staff Actions</a>
	    			</div>
				</div>
				</div>	
			    </div>
			  </div>
			</div>
 		</div>
			<?php echo form_close(); ?>
		</form>
	    
	    </div>
	 	<?php include 'footer2.php' ?>
	</div>