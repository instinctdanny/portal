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
					<?php 
					if(isset($_GET['is'])){
						$is = $_GET['is'];
						$sl2 = mysqli_query($con,"SELECT * from subject where sn = '$is'" );
						$sh2 = mysqli_fetch_array($sl2);
						$code = $sh2['code'];
						$participant = $sh2['participant'];
						$subject= $sh2['title'];
						$type = $sh2['type'];
						$subject_id = $sh2['sn'];
					}
					if($type == "elective"){
						$sl3 = mysqli_query($con,"SELECT * FROM elective_subject where subject_id = '$subject_id' ");
					}
					else{
						$sl3 = mysqli_query($con,"SELECT * from students where class = '$participant'" );
					}
					$num1 = mysqli_num_rows($sl3);
					?>
				</div>
				<div class="panel-body">
					<div style="border:1px solid #d7d7d7; border-radius: 4px; padding: 3px;">
						<div class="row">
							<div class="col-lg-1"><img src="logo.png" style="width: 90px; height: 90px;"></div>

							<div class="col-lg-10"><h4 class="text-center" style="font-weight: bold;">ELYON COLLEGE</h4><p style="text-align: center; font-weight: bold;">Subject Sheet</p></div>
							
						</div>
						<br>
						<a href="sheet.php?is=<?php echo $subject_id ?>" class=" btn btn-default"> score sheet</a>
						<a href="sheet2.php?is=<?php echo $subject_id ?>" class=" btn btn-default">attendance </a> <p> </p>
						<!--<p><button class="btn" onclick="codespeedy()">Print Attendance Sheet</button></p>-->
						<div class="table-responsive">
							<table class="table table-bordered">
								<tr>
									<th>Subject</th>
									<th>Subject code</th>
									<th>class</th>
									<th>anchor</th>
									<th>no of students</th>
								</tr>
								<tr>
									<td><?php echo $subject ?></td>
									<td><?php echo $code ?></td>
									<td><?php echo  $participant ?></td>
									<td><?php echo $name1 ?></td>
									<td><?php echo $num1 ?></td>
								</tr>
							</table>
							<table class="table table-bordered">
								<tr>
									<th>Admission no</th>
									<th>Students</th>						
								</tr>
								<?php 
								if($type == "elective"){
									$sli = mysqli_query($con,"SELECT * FROM elective_subject where subject_id = '$subject_id' ");
									while($show_us = mysqli_fetch_array($sli)){
										$idm = $show_us['student_id'];
										$no = mysqli_num_rows($sli);

										$sqlx = mysqli_query($con,"SELECT * FROM students where admission_no = '$idm' ");
										if(!$sqlx){
											die(mysqli_error($con));
										}
										$sqlxx = mysqli_fetch_array($sqlx);
										$admission = $sqlxx['admission_no'];
										$name = $sqlxx['fname']." ".$sqlxx['lname'];
										?>
										<tr>
											<td><?php echo $admission ?></td>
											<td><?php echo $name ?></td>
										</tr>
										<?php
									}
								}
								else{
									$sqlx = mysqli_query($con,"SELECT * from students where class = '$participant'");
									while($sqlxx = mysqli_fetch_array($sqlx)){
										$admission =  $sqlxx['admission_no'];
										$name = $sqlxx['fname']." ".$sqlxx['lname'];

										?>
										<tr>
											<td><?php echo $admission ?></td>
											<td><?php echo $name ?></td>
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
	</div>
</div>
<?php include("footer.php") ?>