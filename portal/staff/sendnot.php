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
						$type = $sh2['type'];
						$subject_id = $sh2['sn'];
					}
					?>
					<h4>Students taking <?php echo $code ?></h4>
					<?php 
					if($type == "elective"){
						$sl3 = mysqli_query($con,"SELECT * FROM elective_subject where subject_id = '$subject_id' ");
					}
					else{
						$sl3 = mysqli_query($con,"SELECT * from students where class = '$participant'" );
					}
					$num1 = mysqli_num_rows($sl3);
					?>
					<small>Total number of students:<?php echo $num1 ?></small>
				</div>
				<div class="panel-body">
					<?php
					if(isset($_POST['send'])){
						$title = mysqli_real_escape_string($con,$_POST['title']);
						$body = mysqli_real_escape_string($con,$_POST['body']);
						$date = date('d-m-y');
						if($type == "elective"){
							$sli = mysqli_query($con,"SELECT * FROM elective_subject where subject_id = '$subject_id' ");
							while($show_us = mysqli_fetch_array($sli)){
								$idm = $show_us['student_id'];
//echo $idm;
								$no = mysqli_num_rows($sli);
//echo $no;
								$sqlx = mysqli_query($con,"SELECT * FROM students where admission_no = '$idm' ");
								if(!$sqlx){
									die(mysqli_error($con));
								}
								$sqlxx = mysqli_fetch_array($sqlx);
								$admission = $sqlxx['username'];
								$ins1 = mysqli_query($con,"INSERT INTO notification(admission,title,content,dates,audience,sender)VALUES('$admission','$title','$body','$date', '$participant', '$name1')");
								if(!$ins1){
									die(mysqli_error($con));
								}
							}
						}
						else{
							$sl4 = mysqli_query($con,"SELECT * from students where class = '$participant'" );
							while($sh4= mysqli_fetch_array($sl4)){
								$admission = $sh4['username'];
								$ins1 = mysqli_query($con,"INSERT INTO notification(admission,title,content,dates,audience,sender)VALUES('$admission','$title','$body','$date', '$participant', '$name1')");
								if(!$ins1){
									die(mysqli_error($con));
								}
							}
						}
						?>
						<div class="alert alert-success "> 
							<a href="#" class="close" data-dismiss="alert"> 
								&times; 
							</a> 
							notification sent sucessfully
						</div>
						<?php
					}

					?>
					<form method="POST">
						<input type="" name="title" placeholder="title" class="form-control" required><br>
						<textarea name="body" placeholder="notificaton" class="form-control" required></textarea><br>
						<p class="text-center"><button class="btn btn-primary" name="send">SEND</button></p>
					</form>		
				</div>
			</div>
		</div>
	</div>
</div>
<?php include("footer.php") ?>