<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Car Showroom",$buffer);
echo $buffer;
?>

<!-- Page Content -->
    <div class="container">

        <hr>
               
		<!-- /.row -->
        <!-- Each Car Record -->
        <div class="row text-center">

		<!-- Write PHP around this container to produce the information for each record in one of these display containers, LOOP -->
		<?php if(isset($records)): foreach($records as $row) : ?>

            <div class="col-md-3 col-sm-6 hero-feature">
            <div class="panel panel-default">
            <div class="panel-heading"><h4><?php echo $row->car_year ."  ". $row->car_make ."  ". $row->car_model; ?></h4>
            <p class = "price"><?php echo "£".$row->car_price ?></p></div>
                <div class="thumbnail">
                    <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                     <div class="caption">
                        <a class="btn btn-primary btn-lg btn-block" type="button" href="car_information" role="button">More Information</a>
                    </div>
                    </div>
                </div>
            </div>

			<?php endforeach; ?>
        <?php else : ?>
            <h2>No Records Returned</h2>
        <?php endif; ?>


        </div>
        <!-- /.row -->

        <hr>
    
    <?php include 'footer.php' ?>
    </div>
    <!-- /.container -->

