<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Main Options",$buffer);
echo $buffer;
?>
		<h2>Create</h2>
	
		<p>
			<label class = "test"  for = "title">Title:</label>
			<input type = "text" name="title" id="title"/>
		</p>
		
		<p>
			<label class = "test"  for = "story">Story:</label>
			<input type = "text" name="story" id="story"/>
		</p>

		<p>
			<input type = "submit" value="Create New Record"/>
		</p>

		
		<p></p>

		
		<?php if(isset($records)): foreach($records as $row) : ?>
			<td><?php echo $row->news_id; ?></td>
			<td><?php echo $row->news_title ?></td>
			<td><?php echo $row->news_story; ?></td>
		<?php endforeach; ?>
		<?php else : ?>
			<h2>No Records Returned</h2>
		<?php endif; ?>

<?php include 'footer.php'; ?>