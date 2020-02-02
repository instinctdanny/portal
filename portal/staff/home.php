
	<?php include("header.php") ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading" id="p_heading">
					<?php 
				$users = $_SESSION['users'];
				$s1  = mysqli_query($con,"SELECT * FROM staff where username = '$users'");
				$sh1 = mysqli_fetch_array($s1);
				$name1 = $sh1['fname']." ".$sh1['lname'];
				$img = $sh1['picture'];
				$department= $sh1['department'];
				if($img==""){
					$img2 = "passport/default.png";
				}
				else{
					$img2 = $img;
				}
				?>
					<img src="<?php echo $img2 ?>" id="imgs" class="img-responsive">
					<h4><?php echo $name1 ?></h4>
					<i><?php echo $department ?></i>
				</div>
				<div class="panel-body">
					<h4><span class="glyphicon glyphicon-bullhorn"></span> General Anouncement</h4>
				</div>
				<div class="panel-body" style="background-color: #eee;">

					<?php
				$sl14 = mysqli_query( $con,"SELECT * from anoucement where viewers = 'all' limit 5 ");
				while($sh19 = mysqli_fetch_array($sl14)){
					$title19 = $sh19['title'];
					$content19 = $sh19['content'];
				?>
				<h4><?php echo $title19 ?></h4>
				<p class="text-justify"><?php echo $content19 ?></p>
				<?php
					}
				?>
				</div>
				<div class="panel-body" style="background-color: #f7f7f7;">

					<?php
				$sl14 = mysqli_query( $con,"SELECT * from anoucement where viewers = 'staff' limit 5 ");
				while($sh19 = mysqli_fetch_array($sl14)){
					$title19 = $sh19['title'];
					$content19 = $sh19['content'];
				?>
				<h4><?php echo $title19 ?></h4>
				<p class="text-justify"><?php echo $content19 ?></p>
				<?php
					}
				?>
				</div>

			</div>
			</div>
		</div>
	</div>
	<?php include("footer.php") ?>