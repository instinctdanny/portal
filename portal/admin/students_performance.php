
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
				$department = $sh1['position'];
				
				if($img==""){
					$img2="passport/default.png";
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
					<h4 class="text-center">View students performance</h4>
						<form method="POST" action="students_performance.php">
									<div class="row">
								<div class="col-lg-8 col-lg-offset-2">
								<input type="" name="admission_no" class="form-control" placeholder="Admission number" required><br>
								<div class="text-center"><button class="btn btn-info" name="view">View</button>
								</div>
								</div>
							
							</div>
						</form>

					
				</div>
				<div class="panel-body">
					<?php
					if(isset($_POST["view"])){
						$admission_no = mysqli_real_escape_string($con,$_POST['admission_no']);
						$check = mysqli_query($con,"SELECT * FROM students where admission_no = '$admission_no'");
						$num = mysqli_num_rows($check);
						if($num ==0){
							echo "<p class='alert alert-danger'>admission number does not exist</p>";
						}
						else{
							$data = mysqli_fetch_array($check);
							$name = $data['lname']." ".$data['fname'];
							$class = $data['class'];
							$admission = $data['admission_no'];
						?>
						<div style="background-color: #FFF; padding: 5px; color: #666;">
						<table class="table">
							<tr>
								<th>Name:</th>
								<th><?php echo $name ?></th>
							
								<th>Admission no:</th>
								<th><?php echo $admission ?></th>
							
								<th>Class:</th>
								<th><?php echo $class ?></th>
							</tr>
						</table>
						<h4 class="text-center">Current Result</h4>
						<table class="table table-bordered">
				<tr>
							<th>subject</th>
							<th>C.A.T 1</th>
							<th>C.A.T 2</th>
							<th>C.A.T 3</th>
							<th>C.A.T total</th>
							<th>Examination</th>
							<th>Total 1</th>
							<th>last term cumul</th>
							<th>total culum</th>
							<th>grade</th>
						</tr>
						<?php
						$run2 = mysqli_query($con,"SELECT * FROM result where student = '$admission' ");
						while($result2 = mysqli_fetch_array($run2)){
							$subject = $result2['subject'];
							$score = $result2['score'];
							$score2 = $result2['score2'];
							$score3 = $result2['score3'];
							$total1 = $score+$score2+$score3;
							$score4 = $result2['score4'];
							$last = $result2['last'];
							$total3 = $total1+$score4;
							if($last == ""){
							$total2 = $total3 ;
							}
							else{
								$total2 = intval(($total3+$last)/2);
							}
							if($total2 >= 75){
								$grade = "A1";
							}
							elseif($total2 >=70){
								$grade = "B2";
							}
							elseif ($total2 >=65) {
								$grade = "B3";
							}
							elseif ($total2 >=60) {
								$grade = "C4";
							}
							elseif ($total2 >=55) {
								$grade = "C5";
							}
							elseif ($total2 >=50) {
								$grade = "C6";
							}
							elseif ($total2 >=45) {
								$grade = "D7";
							}
							elseif ($total2 >=40) {
								$grade = "E8";
							}
							else {
								$grade = "F9";
							}
							?>
						<tr>
							<th><?php echo $subject ?></th>
							<td><?php echo $score ?></td>
							<td><?php echo $score2 ?></td>
							<td><?php echo $score3 ?></td>
							<td><?php echo $total1 ?></td>
							<td><?php echo $score4 ?></td>
							<td><?php echo $total3 ?></td>
							<td><?php echo $last ?></td>
							<td><?php echo $total2 ?></td>
							<td><?php echo $grade ?></td>
						</tr>
						<?php
					}
					?>
					</table>
				</div>
					<?php
					}
				}
					?>
					</div>
				</div>
			</div>
			<?php include("linkpanel.php") ?>
		</div>
	</div>
	<?php include("footer.php") ?>