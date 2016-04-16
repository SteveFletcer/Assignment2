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
        <header class="jumbotron hero-spacer">
            <h1>Customer Registration</h1>
            <p>Register with our company</p>
        </header>

        <hr>


		<?php echo form_open('site/signup');?>
	
		
		<div class="panel panel-default">
  			<!-- Default panel contents -->
  			<div class="panel-heading">Customer Registration</div>
  			<div class="panel-body">
		
			<p>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Forename: </span>
	  				<input type="text" class="form-control" name="fname" id="fname" placeholder="Forename" required>
				</div>
			</p>

			<p>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Surname: </span>
	  				<input type="text" class="form-control" name="sname" id="sname" placeholder="Surname" required>
				</div>
			</p>

			<p>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Username: </span>
	  				<input type="text" class="form-control" name="uname" id="uname" placeholder="Username" required>
				</div>
			</p>
			
			<p>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Password: </span>
	  				<input type="password" class="form-control" name="pword" id="pword" placeholder="Password" required>
				</div>
			</p>

			<p>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Confirmation Password: </span>
	  				<input type="password" class="form-control" name="pwordconf" id="pwordconf" placeholder="Confirm Password" required>
				</div>
			</p>

			<p>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">E-mail Address: </span>
	  				<input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required>
				</div>
			</p>

			<p>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">E-mail Address Confirmation: </span>
	  				<input type="email" class="form-control" name="emailconf" id="emailconf" placeholder="Email Address Confirmation" required>
				</div>
			</p>

			<p>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Mobile Phone: </span>
	  				<input type="number" class="form-control" name="mobile" id="mobile" placeholder="Mobile Number" required>
	  			</div>
			</p>

			<p>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Home Phone: </span>
	  				<input type="number" class="form-control" name="home" id="home" placeholder="Home Telephone Number" required>
				</div>
			</p>

			<p>
				<!--<a class="btn btn-primary"  type="button" href="sign_up" role="button">Register</a>-->
				<button class="btn btn-primary pull-left" type="submit">Register New Customer</button>
			</p>

 		</div>

		<?php echo form_close();?>

        <hr>
    
    <?php include 'footer.php' ?>
    </div>
    <!-- /.container -->


