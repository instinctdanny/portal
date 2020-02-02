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
					<h4>create a new student</h4>
					<a href="cstudent.php" class="btn btn-primary">Create new student</a>
				</div>
				<div class="panel-body">
				<?php 
				if(isset($_POST['create'])){
				$admission = mysqli_real_escape_string($con,$_POST['admission']);
				$username = mysqli_real_escape_string($con,$_POST['username']);
				$fname = mysqli_real_escape_string($con,$_POST['fname']);
				$lname = mysqli_real_escape_string($con,$_POST['lname']);
				$adate = mysqli_real_escape_string($con,$_POST['adate']);
				$batch = mysqli_real_escape_string($con,$_POST['batch']);
				$class = $_POST['class'];
				$username2 =md5($username);
				$password2 = md5("password@1234");
				$type = "student";
				$date = date("d-m-y");
				$verify = mysqli_query($con,"SELECT * FROM users where userid = '$admission'");
				$num = mysqli_num_rows($verify);
					if($num > 0 ){
						die("admission number already exist");
					}
				$sql=mysqli_query($con,"INSERT INTO users(userid,userid2,password2,type,dates)VALUES('$username','$username2','$password2','$type','$date')");
				if(!$sql){
					die(mysqli_error($con));
				}
			$sql2 = mysqli_query($con,"INSERT INTO students(admission_no,fname,lname,username,class,date_admitted,batch)VALUES('$admission','$fname','$lname','$username2','$class', '$adate','$batch')");
			if(!$sql2){
				die(mysqli_error($con));
			}
			else{
				?>
					<div class="alert alert-success "> 
            <a href="#" class="close" data-dismiss="alert"> 
            &times; 
            </a> 
        The student has been added successfully
        </div>
				<?php
		}
	}
				?>
				<form method="POST">
					<input type="" name="admission" class="form-control" placeholder="admission No" required><br>
					<input type="" name="username" class="form-control" placeholder="username" required><br>
					<input type="" name="fname" class="form-control" placeholder="First name" required><br>
					<input type="" name="lname" class="form-control" placeholder="Last name" required><br>
					<input type="date" name="adate" class="form-control" placeholder="Admission date" required><br>
					<input type="" name="batch" class="form-control" placeholder="batch" required><br>
					<select name="class" class="form-control">
					<option value="">select class</option>
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
					<p class="text-center"><button class="btn btn-primary" name="create">Create</button></p>
				</form>
				</div>
				</div>
			</div>
			<?php include('linkpanel.php') ?>
			</div>
		</div>
	<?php include("footer.php") ?>