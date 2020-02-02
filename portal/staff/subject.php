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
					<h4>View subject</h4>
				</div>
				<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-bordered">
						<tr>
							<th>Subject</th>
							<th>send notification</th>
							<th>View students</th>
							<th>Upload result</th>
							<th>View uploaded result</th>
							<th>Print Dmx</th>
							<th>Assignment</th>
						</tr>
						<?php
					$user = $_SESSION['users2'];
				$s2  = mysqli_query($con,"SELECT * FROM subject where teacher = '$user'");
				while($sh2 = mysqli_fetch_array($s2)){
				$sn1 = $sh2['sn'] ;
				$title = $sh2['title'];
				?>
						<tr>
							<th><?php echo $title ?></th>
							<th><a href="sendnot.php?is=<?php echo $sn1 ?>" class="btn btn-default">Send noticication</a></th>
							<th><a href="viewstudents.php?is=<?php echo $sn1 ?>" class="btn btn-default">View students</a></th>
							<th><a href="passresult.php?is=<?php echo $sn1 ?>" class=" btn btn-default">Upload result</a></th>
							<th><a href="uploaded.php?is=<?php echo $sn1 ?>" class=" btn btn-default">View Upload result</a></th>
							<th><a href="printdmx.php?is=<?php echo $sn1 ?>" class=" btn btn-default">Print dmx</a></th>
							<th>
								<a href="assignment.php?is=<?php echo $sn1 ?>" class=" btn btn-default">Assignment</a>
							</th>

						</tr>
						<?php
					}
					?>
					</table>
				</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	<?php include("footer.php") ?>