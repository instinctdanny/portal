	<?php include("header.php") ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-9">
			<div class="panel panel-default">
				<div class="panel-heading" id="p_heading">
					<?php 
				$users = $_SESSION['users'];
				$s1  = mysqli_query($con,"SELECT * FROM admin where username = '$users'");
				$sh1 = mysqli_fetch_array($s1);
				$name1 = $sh1['fname']." ".$sh1['lname'];
				$img = $sh1['picture'];
				$position = $sh1['position'];
				if($img==""){
					$img2 = "passport/default.png";
				}
				else{
					$img2 = $img;
				}
				?>
					<img src="<?php echo $img2 ?>" id="imgs" class="img-responsive">
					<h4><?php echo $name1 ?></h4>
					<i><?php echo $position ?></i>
				</div>
				<div class="panel-body">
					<h4><span class="glyphicon glyphicon-bullhorn"></span> General Anouncement</h4>
				</div>
				<div class="panel-body">
				<?php
				$sl14 = mysqli_query( $con,"SELECT * from anoucement where viewers = 'all' OR viewers = 'staff' limit 5 ");
				while($sh19 = mysqli_fetch_array($sl14)){
					$title19 = $sh19['title'];
					$content19 = $sh19['content'];
				?>
				<h4><?php echo $title19 ?></h4>
				<p class="text-justify"><?php echo $content19 ?></p>
				<hr>
				<?php
					}
				?>
				</div>

			</div>
			</div>

		<?php
		 include("linkpanel.php") ?>
		</div>
	</div>
	<?php include("footer.php") ?>
