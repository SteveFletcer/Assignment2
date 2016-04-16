<?php
ob_start();
include("header3.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Car Actions",$buffer);
echo $buffer;
?>
<!-- Page Content -->
    <div class="container">
		<!-- Jumbotron Header -->
		<div class="jumbotron">
	  		<div class="container text-center">
	   			<h1>Car Actions</h1>      
	    	</div>
		</div>

		<hr>

		<?php echo form_open('site/createcars');?>

		<div class="panel panel-default">
  		<!-- Default panel contents -->
  		<div class="panel-heading">Add Car Details</div>
  		<div class="panel-body">
	
			<p>
				<div class="input-group">
					<span class="input-group-addon" for = "make">Car Make: </span>
		  			<input type="text" class="form-control" name="make" id="make" placeholder="Car Make" required>
				</div>
			</p>

			<p>
				<div class="input-group">
					<span class="input-group-addon" for = "model">Car Model: </span>
		  			<input type="text" class="form-control" name="model" id="model" placeholder="Car Model" required>
				</div>
			</p>

			<p>
				<div class="input-group">
					<span class="input-group-addon" for = "miles">Car Miles: </span>
		  			<input type="number" class="form-control" name="miles" id="miles" placeholder="Car Miles" required>
				</div>
			</p>

			<p>
				<div class="input-group">
					<span class="input-group-addon" for = "year">Car Year: </span>
		  			<input type="number" class="form-control" name="year" id="year" placeholder="Car Year" required>
				</div>
			</p>


			<p>
				<div class="input-group">
					<span class="input-group-addon" for = "price">Car Price: </span>
		  			<input type="number" class="form-control" name="price" id="price" placeholder="Car Price" required>
		  		</div>
			</p>


			<p>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2" for = "trans">Car Transmission: </span>
		  			<input type="text" class="form-control" name="trans" id="trans" placeholder="Car Transmission" required>
				</div>
			</p>


			<p>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2" for = "special">Special ID: </span>
		  			<input type="text" class="form-control" name="special" id="special" placeholder="Special ID" required>
				</div>
			</p>

			<p>
				<!--<input class="btn btn-primary" type = "submit" href="caractions"value="Create New Record"/>-->
				<button class="btn btn-primary pull-left" type="submit">Add Car Details</button>
			</p>

		</div>
    </div>
		<?php echo form_close();?>
		
    <hr>

		<div class="panel panel-default">
  		<!-- Default panel contents -->
  		<div class="panel-heading">Delete or Amend Car Details</div>
  		<div class="panel-body">

		
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

    <hr>
    <?php include 'footer2.php' ?>