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
$email2 = mysqli_real_escape_string($con,$_POST['email']);
$phone2 = mysqli_real_escape_string($con,$_POST['phone']);
$gender2 = mysqli_real_escape_string($con,$_POST['gender']);
$level2 = mysqli_real_escape_string($con,$_POST['level']);
$qualification2 = mysqli_real_escape_string($con,$_POST['qualification']);
$department2 = mysqli_real_escape_string($con,$_POST['department']);
$job_description2 = mysqli_real_escape_string($con,$_POST['job']);
$religion2 = mysqli_real_escape_string($con,$_POST['religion']);
$marital_status2 = mysqli_real_escape_string($con,$_POST['marital']);
$address2 = mysqli_real_escape_string($con,$_POST['address']);
$lga2 = mysqli_real_escape_string($con,$_POST['lga']);
$state2 = mysqli_real_escape_string($con,$_POST['state']);
$country2 = mysqli_real_escape_string($con,$_POST['country']);
$bank2 = mysqli_real_escape_string($con,$_POST['bank']);
$nok2 = mysqli_real_escape_string($con,$_POST['nok']);
$rnok2 = mysqli_real_escape_string($con,$_POST['rnok']);
$pnok2 = mysqli_real_escape_string($con,$_POST['pnok']);
$salary_status2 = mysqli_real_escape_string($con,$_POST['salary']);
$account = mysqli_real_escape_string($con,$_POST['acc']);
$date = date('d-m-y');
$slm = mysqli_query($con,"UPDATE staff set fname = '$fname2', lname= '$lname2', mname = '$othname', dob ='$dob2', email = '$email2', phone = '$phone2',gender = '$gender2', level = '$level2', qualification = '$qualification2', department = '$department2', job_description = '$job_description2', religion = '$religion2', marital_status = '$marital_status2', address = '$address2', lga = '$lga2', state = '$state2', country = '$country2', bank = '$bank2', nok = '$nok2',  rnok = '$rnok2', pnok = '$pnok2', salary_status = '$salary_status2', acc= '$account',last_update = '$date' where username = '$is' ");
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
					$s2 = mysqli_query($con,"SELECT * FROM  staff where username = '$user'");
					$sh2 = mysqli_fetch_array($s2);
					$fname = $sh2['fname'];
					$lname = $sh2['lname'];
					$mname = $sh2['mname'];
					$email = $sh2['email'];
					$phone = $sh2['phone'];
					$gender = $sh2['gender'];
					$picture = $sh2['picture'];
					$department = $sh2['department'];
					$employee = $sh2['employee'];
					$address = $sh2['address'];
					$religion = $sh2['religion'];
					$lga = $sh2['lga'];
					$state = $sh2['state'];
					$country = $sh2['country'];
					$level = $sh2['level'];
					$qualification = $sh2['qualification'];
					$job = $sh2['job_description'];
					$bank = $sh2['bank'];
					$acc = $sh2['acc'];
					$nok = $sh2['nok'];
					$rnok = $sh2['rnok'];
					$pnok = $sh2['pnok'];
					$salary = $sh2['salary_status'];
					$datee = $sh2['date_employed'];
					$marital = $sh2['marital_status'];
					$last = $sh2['last_update'];
					$birthday = $sh2['dob'];

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
							<th>Level</th>
							<th><input type="" name="level" class="form-control" value="<?php echo $level ?>" required></th>
						</tr>
						<tr>
							<th>Qualification</th>
							<th><input type="" name="qualification" class="form-control" value="<?php echo $qualification ?>" required></th>
						</tr>
						<tr>
							<th>Department</th>
							<th><select name="department" class="form-control" required>
								<option value="">Select</option>
								<option style="display: none;" value="<?php echo $department ?>" selected = $con,"selected" ><?php echo $department ?></option>
								<option value="Art">Art</option>
								<option value="Science">Science</option>
								<option value="Commericial">Commericial</option>
							</select></th>
						</tr>
						<tr>
							<th>Job discription</th>
							<th><input type="" name="job" class="form-control" value="<?php echo $job ?>" required></th>
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
							<th>Marital status</th>
							<th><select name="marital" class="form-control" required>
							<option value="">select</option>
								<option style="display: none;" value="<?php echo $marital ?>" selected = $con,"selected" ><?php echo $marital ?></option>
								<option value="single">Single</option>
								<option value="Dating">Dating</option>
								<option value="Married">Married</option>
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
							<th>State</th>
							<th><input type="" name="state" class="form-control" value="<?php echo $state ?>" required></th>
						</tr>
						<tr>
							<th>Country</th>
							<th><input type="" name="country" class="form-control" value="<?php echo $country ?>" required></th>
						</tr>
						<tr>
							<th>Bank name</th>
							<th><input type="" name="bank" class="form-control" value="<?php echo $bank ?>" required></th>
						</tr>
						<tr>
							<th>Next of Kin</th>
							<th><input type="" name="nok" class="form-control" value="<?php echo $nok ?>" required></th>
						</tr>
						<tr>
							<th>Relationship  of Next of kin</th>
							<th><input type="" name="rnok" class="form-control" value="<?php echo $rnok ?>" required></th>
						</tr>
						<tr>
							<th>Phone</th>
							<th><input type="" name="pnok" class="form-control" value="<?php echo $pnok ?>" required></th>
						</tr>
						<tr>
							<th>salary status</th>
							<th><input type="" name="salary" class="form-control" value="<?php echo $salary ?>" required></th>
						</tr>
						<tr>
							<th>Account no</th>
							<th><input type="" name="acc" class="form-control" value="<?php echo $acc ?>" required></th>
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