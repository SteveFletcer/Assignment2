<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Sign Up Form",$buffer);
echo $buffer;
?>

<!-- Page Content -->
    <div class="container">
		<!-- Jumbotron Header -->
		<div class="jumbotron">
	  		<div class="container text-center">
	  			<img src = "F:/xampp/htdocs/banner.jpg">
	   			<h1>Welcome to the Car Dealership Company</h1>      
	    	</div>
		</div>

		<hr>

		<?php echo form_open('site/home');?>
		

		<div class="container text-center">    
		  <div class="row content">	
		    <div class="col-sm-9 text-left"> 
		      <h1>Welcome</h1>
		      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		      <br><hr><br>
		      <h3>Further Information</h3>
		       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		    </div>
		    <div class="col-sm-3 sidenav">
		      <div class="well">
		        <p>NEWS</p>
		      </div>
		    </div>
		  </div>
		</div>


		<?php echo form_close(); ?>
		</form>
	    
	    </div>
	 	<?php include 'footer.php' ?>
	</div>