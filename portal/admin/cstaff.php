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
					<h4>Create new staff</h4>
					<a href="cstaff.php" class="btn btn-primary">Create new staff member</a>
				</div>
				<div class="panel-body">
					<?php 
					if(isset($_POST['create'])){
						$employee = mysqli_real_escape_string($con,$_POST['employee']);
						$username = mysqli_real_escape_string($con,md5($_POST['employee']));
						$fname = mysqli_real_escape_string($con,$_POST['fname']);
						$lname = mysqli_real_escape_string($con,$_POST['lname']);
						$department = mysqli_real_escape_string($con,$_POST['department']);
						$password2 = md5("password@1234");
						$type = "staff";
						$date = date("d-m-y");
						$sql=mysqli_query($con,"INSERT INTO users(userid,userid2,password2,type,dates)VALUES('$employee','$username','$password2','$type','$date')");
						if(!$sql){
							die(mysqli_error($con));
						}
						$sql2 = mysqli_query($con,"INSERT INTO staff(employee,fname,lname,username,department)VALUES('$employee','$fname','$lname','$username','$department')");
						if(!$sql2){
							die(mysqli_error($con));
						}
						else{
							?>
							<div class="alert alert-success "> 
								<a href="#" class="close" data-dismiss="alert"> 
									&times; 
								</a> 
								The staff has been added successfully
							</div>
							<?php
						}
					}
					?>
					<form method="POST">
						<input type="" name="employee" class="form-control" placeholder="employee id" required><br>
						<input type="" name="fname" class="form-control" placeholder="First name" required><br>
						<input type="" name="lname" class="form-control" placeholder="Last name" required><br>
						<select name="department" class="form-control">
							<option value="">Select</option>
							<option value="Art">Art</option>
							<option value="Commericial">Commericial</option>
							<option value="Science">Science</option>
							<option value="Admin">Admin</option>
							<option value="Bursary">Bursary</option>
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