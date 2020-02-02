
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
					<a href="c_assignment.php" class="btn">Create Assignment</a><p> </p>
					<div>
						<?php
							if(isset($_POST['send'])){
							$sbj_id = $_GET['is'];
							$title = mysqli_real_escape_string($con,$_POST['title']);
							$date_end = mysqli_real_escape_string($con,$_POST['date']);
							$time = mysqli_real_escape_string($con,$_POST['time']);
							$date =  date('d-m-Y');
							$ass_id = uniqid();
							$description = mysqli_real_escape_string($con,$_POST['description']);
							$file = $_FILES['file']['name'];
							$ext = pathinfo($file, PATHINFO_EXTENSION);
							$newname = "file_".uniqid().'.'.$ext;
							move_uploaded_file($_FILES["file"]["tmp_name"],"file/".$newname);
							$fdir = "file/".$newname;
							$insert = mysqli_query($con,"INSERT into assignment(ass_id,sbj_id,title,description,date_created,deadline_date,deadline_time,file,created_by)VALUES('$ass_id','$sbj_id','$title','$description','$date','$date_end','$time','$fdir','$employee')");
							if(!$insert){
								die(mysqli_error($con));
							}
							else{
								echo "<p class='alert alert-success'>done</p>";
							}
						}
						?>

						<form method="POST" enctype="multipart/form-data">
						<input type="" name="title" placeholder="title" class="form-control" required><br>
						<input type="date" name="date" placeholder="deadline date" class="form-control" required><br>
						<input type="time" name="time" placeholder="dead line time" class="form-control" required><br>
						<input type="file" name="file" placeholder="title" class="form-control" required><br>
						<textarea name="description" placeholder="description" class="form-control" required></textarea><br>
						<p class="text-center"><button class="btn btn-primary" name="send">SEND</button></p>
						</form>
					</div>
					
					</div>

				</div>
			</div>
		</div>
	</div>
	<?php include("footer.php") ?>