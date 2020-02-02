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
					<h4 class="text-center">Fees Details</h4>
				</div>
				<div class="panel-body">
					<?php
						$fees_id = $_GET['is'];
						$my_query = mysqli_query($con,"SELECT * FROM fees where sn = '$fees_id'");
						$array = mysqli_fetch_array($my_query);
						$title = $array['title'];
						$amount =$array['amount'];
						$participant = $array['participant'];
						$date = $array['dates'];
						if($participant  = 'all'){
						$ms_query = mysqli_query($con,"SELECT * FROM students");
						}
						else{
						$ms_query = mysqli_query($con,"SELECT * FROM students where class = '$participant'");

						}
						$count = mysqli_num_rows($ms_query);
						$expected = $count*$amount;
						?>
						<div class="table-responsive">
							<table class="table table-bordered">
								<tr>
									<th>Fees Title</th>
									<td><?php echo $title ?></td>
								</tr>
								<tr>
									<th>Amount</th>
									<td><?php echo number_format($amount) ?></td>
								</tr>
								<tr>
									<th>Participant</th>
									<td><?php echo $participant ?></td>
								</tr>
								<tr>
									<th>Date Created</th>
									<td><?php echo $date ?></td>
								</tr>
								<tr>
									<th>Total No of participant </th>
									<td><?php echo $count ?></td>
								</tr>
								<tr>
									<th>Expected return</th>
									<td><?php echo number_format($expected) ?></td>
								</tr>
							</table>

						</div>

					</div>
				</div>
			</div>
			<?php include("linkpanel.php") ?>
		</div>
	</div>