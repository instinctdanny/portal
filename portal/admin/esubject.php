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
					<h4>Create new subject</h4>
					<a href="csubject.php" class="btn btn-primary">Create new Subject</a>
				</div>
				<div class="panel-body">
				<?php 
				if(isset($_POST['create'])){
				$sn1 = $_GET['is'];
				$title = mysqli_real_escape_string($con,$_POST['title']);
				$code = mysqli_real_escape_string($con,$_POST['code']);
				$department = mysqli_real_escape_string($con,$_POST['department']);
				$teacher = mysqli_real_escape_string($con,$_POST['teacher']);
				$participant = mysqli_real_escape_string($con,$_POST['participant']);
				$type = mysqli_real_escape_string($con,$_POST['type']);
				$sqlx = mysqli_query($con,"SELECT * FROM staff where employee = '$teacher' ");
				$sh4x = mysqli_fetch_array($sqlx);
				$name =$sh4x["lname"]." ".$sh4x["fname"];
				$date = date("d-m-y");
				$sql=mysqli_query($con,"UPDATE subject SET title='$title', code='$code', department='$department', teacher = '$teacher',participant='$participant', type = '$type' where sn = '$sn1'");
				if(!$sql){
					die(mysqli_error($con));
				}
				else{
					?>
						<div class="alert alert-success "> 
            <a href="#" class="close" data-dismiss="alert"> 
            &times; 
            </a> 
        subjct has been updated successfully
        </div>
					<?php
				}
		}
				?>
				<?php
				$sn= $_GET['is'];
				$s2  = mysqli_query($con,"SELECT * FROM subject where sn = '$sn' ");
				$sh2 = mysqli_fetch_array($s2);
				$sn = $sh2['sn'] ;
				$title = $sh2['title'];
				$code= $sh2['code'];
				$department = $sh2['department'];
				$participant = $sh2['participant'];
				$teacher = $sh2['teacher'];
				$type = $sh2['type'];
				?>
				<form method="POST">
					<input type="" name="title" class="form-control" placeholder="title" value="<?php echo $title ?>" required><br>
					<input type="" name="code" class="form-control" placeholder="code" value="<?php echo $code ?>" required><br>
					<select name="department" class="form-control" required id="dept" readonly>
								<option value="">Select</option>
								<option style="display: none;" value="<?php echo $department ?>" selected><?php echo $department?></option>
						<option  value="Art">Art</option>
						<option value="Science">Science</option>
						<option value="Commericial">Commericial</option>
							</select><br>
						<select class="form-control" name="teacher">
						<option style="display: none;" value="<?php echo $teacher ?>" selected ><?php echo $teacher?></option>
							<?php 
							$sql1 = mysqli_query($con,"SELECT * FROM staff where department = '$department' ");
							while($sh4 = mysqli_fetch_array($sql1)){
							$employee = $sh4['employee'];
							$name =$sh4["lname"]." ".$sh4["fname"];
							?>
			<option value="<?php echo $employee ?>"><?php echo $name ?></option>
					<?php
					}
					?>
						</select><br>
						<select name="participant" class="form-control" required>
					<option value="">participant</option>
					<option style="display: none;" value="<?php echo $participant?>" selected ><?php echo $participant ?></option>
						<?php 
						$sl3 = mysqli_query($con,"SELECT * FROM class");
						while($sh13=mysqli_fetch_array($sl3)){
							$class = $sh13['class'];
							?>

							<option value="<?php echo $class ?>"><?php echo $class ?></option>
							<?php
						}
							?>
					</select><br>
					<br>
					<select class="form-control" name="type"  required>
						<option style="display: none;" selected value="<?php echo $type ?>"><?php echo $type ?></option>
						<option value="">Type</option>
						<option value="compouslry">compouslry</option>
						<option value="elective">elective</option>
						
					</select><br>
					<button class="btn btn-primary" name="create">Update</button>
				</form>
				</div>
				</div>
			</div>
			<?php include("linkpanel.php") ?>
			</div>
		</div>
	<?php include("footer.php") ?>