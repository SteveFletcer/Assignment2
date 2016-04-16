<?php
ob_start();
include("header2.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","News Actions",$buffer);
echo $buffer;
?>

<!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
        	<div class="container text-center">
            	<h1>News Actions</h1>
        	</div>
        </header>

        <hr>


		<?php echo form_open('site/newsindex');?>
			
		<div class="panel panel-default">
  			<!-- Default panel contents -->
  			<div class="panel-heading">Add Articles and Promotions</div>
  			<div class="panel-body">
			
			<p>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2" for = "title">Article Title: </span>
	  				<input type="text" class="form-control" name="title" id="title" placeholder="Story Title" required>
				</div>
			</p>

			<p>
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2" for = "story">Article Title: </span>
	  				<input type="text" class="form-control" name="story" id="story" placeholder="Content" required>
				</div>
			</p>
		
			<p>
				<!--<input class="btn btn-primary" type = "submit" value="Create New Article"/> -->
				<button class="btn btn-primary pull-left" type="submit">Create New Article</button>
			</p>
 		</div>

		<?php echo form_close();?>

    </div>
    
        <hr>

		<div class="panel panel-default">
  		<!-- Default panel contents -->
  		<div class="panel-heading">Delete or Amend News Stories</div>
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

    <hr>

    <?php include 'footer.php' ?>

    <!-- /.container -->