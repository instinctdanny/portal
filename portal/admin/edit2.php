	<?php include("header.php") ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
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
					<h4> edit profile</h4>
				</div>
				<div class="panel-body">
				<?php
if(isset($_POST['update'])){
$is = $_GET['is'];
$fname2 = mysqli_real_escape_string($con,$_POST['fname']);
$lname2 = mysqli_real_escape_string($con,$_POST['lname']);
$othname = mysqli_real_escape_string($con,$_POST['mname']);
$dob2 = mysqli_real_escape_string($con,$_POST['dob']);
$class2 = mysqli_real_escape_string($con,$_POST['class']);
$email2 = mysqli_real_escape_string($con,$_POST['email']);  
$phone2 = mysqli_real_escape_string($con,$_POST['phone']);
$gender2 = mysqli_real_escape_string($con,$_POST['gender']);
$religion2 = mysqli_real_escape_string($con,$_POST['religion']);
$address2 = mysqli_real_escape_string($con,$_POST['address']);
$lga2 = mysqli_real_escape_string($con,$_POST['lga']);
$state2 = mysqli_real_escape_string($con,$_POST['state']);
$country2 = mysqli_real_escape_string($con,$_POST['country']);
$parents2 = mysqli_real_escape_string($con,$_POST['parents']);
$parentsp22 = mysqli_real_escape_string($con,$_POST['parentsp2']);
$parentsp12 = mysqli_real_escape_string($con,$_POST['parentsp1']);
$p_email2 = mysqli_real_escape_string($con,$_POST['parentse']);
$date = date('d-m-y');
$slm = mysqli_query($con,"UPDATE students set fname = '$fname2', lname= '$lname2', mname = '$othname', dob ='$dob2', email = '$email2', phone = '$phone2',gender = '$gender2',  religion = '$religion2',address = '$address2', lga = '$lga2', state = '$state2', country = '$country2', parents = '$parents2', parents_phone1 = '$parentsp12', parents_phone2  = '$parentsp22', p_email = '$p_email2',   last_update = '$date', class = '$class2' where username = '$is' ");
if(!$slm){
	die(mysqli_error($con));
}
else{
	?>
	 <div class="alert alert-success "> 
            <a href="#" class="close" data-dismiss="alert"> 
            &times; 
            </a> 
        <span class="glyphicon glyphicon-ok"></span> updated successfully
        </div>
	<?php
}
}

?>

					<table class="table table-bordered">
					<?php
					$user = $_GET['is'];
					$s2 = mysqli_query($con,"SELECT * FROM  students where username = '$user'");
					$sh2 = mysqli_fetch_array($s2);
					$fname = $sh2['fname'];
					$lname = $sh2['lname'];
					$mname = $sh2['mname'];
					$email = $sh2['email'];
					$phone = $sh2['phone'];
					$admission = $sh2['admission_no'];
					$gender = $sh2['gender'];
					$class = $sh2['class'];
					$address = $sh2['address'];
					$parents = $sh2['parents'];
					$parentsp1 = $sh2['parents_phone1'];
					$parentsp2 = $sh2['parents_phone2'];
					$pemail = $sh2['p_email'];
					$religion = $sh2['religion'];
					$state = $sh2['state'];
					$lga = $sh2['lga'];
					$country = $sh2['country'];
					$batch = $sh2['batch'];
					$last = $sh2['last_update'];
					$birthday = $sh2['dob'];
					$arm = $sh2['arm'];
				function ageProcessor($bday = ''){
				$broken_pieces = explode('-',$bday);
				$dob = date_create( date('d-m-Y H:i:s', strtotime($bday)) );
				$now = date_create( date('Y-m-d H:i:s') );
				return date_diff( $dob, $now )->format('%y');}
				$ageget =  ageProcessor ($birthday); 
				$age =  $ageget;
					?>
					<form method="POST" enctype="multipart/form-data">
					<tr>
							<th>Admission Number</th>
							<th><input type="" name="admission" id="name" class="form-control" value="<?php echo $admission ?>" required ></th>
						</tr>
						<tr>
							<th>First name</th>
							<th><input type="" name="fname" id="name" class="form-control" value="<?php echo $fname ?>" required ></th>
						</tr>
						<tr>
							<th>Last name</th>
							<th><input type="" name="lname" class="form-control" value="<?php echo $lname ?>" required ></th>
						</tr>
						<tr>
							<th>Other name</th>
							<th><input type="" name="mname" class="form-control" value="<?php echo $mname  ?>" required></th>
						</tr>
						<tr>
							<th>date of birth</th>
							<th><input type="date" name="dob" class="form-control" value="<?php echo $birthday ?>" required></th>
						</tr>
						<tr>
							<th>Class</th>
							<th><select class="form-control" name="class" required="">
								<option value="">Select</option>
								<option style="display: none;" value="<?php echo $class ?>" selected = $con,"selected" ><?php echo $class ?></option>
								<?php 
						$sl3 = mysqli_query($con,"SELECT * FROM class");
						while($sh13=mysqli_fetch_array($sl3)){
							$class2 = $sh13['class'];
							?>
							<option value="<?php echo $class ?>"><?php echo $class2 ?></option>
							<?php
						}
							?>
							</select></th>
						</tr>
						<th>Arm</th>
							<th><select class="form-control" name="class" required="">
								<option value="">Select</option>
								<option style="display: none;" value="<?php echo $arm?>" selected = $con,"selected" ><?php echo $arm?></option>
								<?php 
						$sl = mysqli_query($con,"SELECT * FROM class_arm where class = '$class'");
						if(!$sl) {die(mysqli_error($con));}
						while($sh1=mysqli_fetch_array($sl)){
							$arm2 = $sh1['arm'];
							?>
							<option value="<?php echo $arm2 ?>"><?php echo $arm2 ?></option>
							<?php
						}
							?>
							</select></th>
						</tr>
						<tr>
							<th>email </th>
							<th><input type="" name="email" class="form-control" value="<?php echo $email ?>" required></th>
						</tr>
						<tr>
							<th>Phone</th>
							<th><input type="" name="phone" class="form-control" value="<?php echo $phone?>" required></th>
						</tr>
						<tr>
							<th>gender</th>
							<th><select name="gender" class="form-control" required>
								<option value="">Select</option>
								<option style="display: none;" value="<?php echo $gender ?>" selected = $con,"selected" ><?php echo $gender ?></option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select></th>
						</tr>
						<tr>
							<th>Religion</th>
							<th><select class="form-control" name="religion" required="">
								<option value="">Select</option>
								<option style="display: none;" value="<?php echo $religion ?>" selected = $con,"selected" ><?php echo $religion ?></option>
								<option value="christainity">Christainity</option>
								<option value="islam">Islam</option>
								<option value="others">Others</option>
							</select></th>
						</tr>
						<tr>
							<th>Address</th>
							<th><input type="" name="address" class="form-control" value="<?php echo $address ?>" required></th>
						</tr>
						<tr>
							<th>lga</th>
							<th><input type="" name="lga" class="form-control" value="<?php echo $lga ?>" required></th>
						</tr>
						<tr>
								<th>state</th>
								<th><input type="" name="state" class="form-control" value="<?php echo $state?>" required></th>
							</tr>
							<tr>
								<th>country</th>
								<th><input type="" name="country" class="form-control" value="<?php echo $country?>" required></th>
							</tr>
							<tr>
								<th>parents name</th>
								<th><input type="" name="parents" class="form-control" value="<?php echo $parents?>" required></th>
							</tr>
							<tr>
								<th>parents phone</th>
								<th><input type="" name="parentsp1" class="form-control" value="<?php echo $parentsp1?>" required></th>
							</tr>
							<tr>
								<th>parents phone 2</th>
								<th><input type="" name="parentsp2" class="form-control" value="<?php echo $parentsp2?>" required></th>
							</tr>
							<tr>
								<th>parents email</th>
								<th><input type="" name="parentse" class="form-control" value="<?php echo $pemail?>" required></th>
							</tr>
						<tr>
							<th>
								update
							</th>
							<th>
								<button type="submit" name="update" class="btn btn-success">update</button>
							</th>
						</tr>
					</table>
					</form>
				</div>
			</div>
			</div>
		</div>
	</div>
	<?php include("footer.php") ?>