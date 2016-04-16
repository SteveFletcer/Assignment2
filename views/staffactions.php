<?php
ob_start();
include("header2.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Staff Actions",$buffer);
echo $buffer;
?>

<!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
        	<div class="container text-center">
            	<h1>Staff Actions</h1>
            </div>
        </header>

        <hr>


		<?php echo form_open('site/staffactions');?>
			
		<div class="panel panel-default">
  			<!-- Default panel contents -->
  			<div class="panel-heading">Add Staff</div>
  			<div class="panel-body">
			
			<p>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Staff Forename: </span>
	  				<input type="text" class="form-control" name="uname" id="uname" placeholder="Forename" required>
				</div>
			</p>

			<p>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Staff Surname: </span>
	  				<input type="text" class="form-control" name="sname" id="sname" placeholder="Surname" required>
				</div>
			</p>

			<p>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Staff Address Line 1: </span>
	  				<input type="text" class="form-control" name="addl1" id="addl1" placeholder="Address Line 1" required>
				</div>
			</p>

			<p>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Staff Address Line 2: </span>
	  				<input type="text" class="form-control" name="addl2" id="addl2" placeholder="Address Line 2" required>
				</div>
			</p>

			<p>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Staff Address Line 3: </span>
	  				<input type="text" class="form-control" name="addl3" id="addl3" placeholder="Address Line 3" required>
				</div>
			</p>

			<p>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Staff Postcode: </span>
	  				<input type="text" class="form-control" name="pcode" id="pcode" placeholder="Passcode" required>
				</div>
			</p>
			<p>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Staff DOB: </span>
	  				<input type="text" class="form-control" name="dob" id="dob" placeholder="DOB" required>
				</div>
			</p>

			<p>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">Staff NI Numbeer: </span>
	  				<input type="text" class="form-control" name="nino" id="nino" placeholder="NI Number" required>
				</div>
			</p>
		
			<p>
				<!--<a class="btn btn-primary"  type="button" href="#" role="button">Add</a>-->
				<button class="btn btn-primary pull-left" href="staffactions" type="submit">Add Staff Details</button>
			</p>

 		</div>


    </div>

        <hr>

		<div class="panel panel-default">
  		<!-- Default panel contents -->
  		<div class="panel-heading">Delete or Amend Staff Details</div>
  		<div class="panel-body">
 		</div>

		<?php if(isset($records)): foreach($records as $row) : ?>
			
			<div>

			<table>
			<tr>
			<th>Car ID</th>
			<th>Car Make</th>
			<th>Car Model</th>
			<th>Car Miles</th>
			<th>Car Year</th>
			<th>Car Price</th>
			<th>Car Transmission</th>
			<th>Special ID</th>
			<th>Activity</th>
			</tr>
			
			<tr>
			<td><?php echo $row->car_id; ?></td>
			<td><?php echo $row->car_make; ?></td>
			<td><?php echo $row->car_model; ?></td>
			<td><?php echo $row->car_miles; ?></td>
			<td><?php echo $row->car_year; ?></td>
			<td><?php echo $row->car_price; ?></td>
			<td><?php echo $row->car_transmission; ?></td>
			<td><?php echo $row->special_id; ?></td>
			<td class = "buttons"><a class="btn btn-primary btn-lrg" href="<?php echo base_url("index.php/site/edit/$row->car_id"); ?>" style = "width:80px; height:35px; margin-right:10px;">UPDATE</a>
			<a class="btn btn-danger btn-lrg" href="<?php echo base_url("index.php/site/delete/$row->car_id"); ?>" style = "width:80px; height:35px; margin-right:10px;">DELETE</a></td>
			</tr>
			</table>
			</div>

		<?php endforeach; ?>
		<?php else : ?>
		<h2>No Records Returned</h2>
		<?php endif; ?>
		<p></p>
		</div>

		<?php echo form_close();?>
</div>

    <!-- /.container -->