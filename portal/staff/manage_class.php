
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
					$employee = $sh1['employee'];
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
					<?php
					$check_query = mysqli_query($con,"SELECT * FROM class_arm where teacher = '$employee'");
					$mon = mysqli_num_rows($check_query);
					if($mon == 0){
						echo "<h4 class='text-center'>You do not currently administer any class</h4>";
					}
					else{
						$data = mysqli_fetch_array($check_query);
						$class = $data['class'];
						$arm = $data['arm'];
						$arm_id = $data['arm_id'];
						echo "<h4 class='text-center'>You Currently Administer $class $arm</h4><br>
						<p class='text-center'><a href='attendance.php' class='btn'>Attendance & daily report</a></p>";		

						?>
						<?php
						$show_students = mysqli_query($con,"SELECT * FROM students where arm =  '$arm_id'");
						$num = mysqli_num_rows($show_students);
						echo "<p class='text-center'>SETDENTS in $class $arm $num students in total</p>";
						?>
						<div class="table-responsive">
							<br>
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>Admission no</th>
										<th>First name</th>
										<th>Last name</th>
									</tr>
								</thead>
								<?php
								while($show_it = mysqli_fetch_array($show_students)){
									$fname = $show_it['fname'];
									$lname = $show_it['lname'];
									$admin = $show_it['admission_no'];
									?>
									<tr>
										<td><?php echo $admin ?></td>
										<td><?php echo $fname ?></td>
										<td><?php echo $lname ?></td>
									</tr>
									<?php
								}
							}
							?>
						</table>
					</div>


				</div>
			</div>
		</div>
	</div>
	<?php include("footer.php") ?>