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
				$department = $sh1['department'];
				
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
					<h4>profile</h4>
					<a href="edit.php?is=<?php echo $users ?>" id="btn" class="btn btn-default">Edit <span class="glyphicon glyphicon-pencil"></span></a>
				</div>
				<div class="panel-body">
					<table class="table table-bordered">
					<?php
					$user = $_SESSION['users'];
					$s2 = mysqli_query($con,"SELECT * FROM  staff where username = '$users'");
					$sh2 = mysqli_fetch_array($s2);
					$fname = $sh2['fname'];
					$lname = $sh2['lname'];
					$mname = $sh2['mname'];
					$email = $sh2['email'];
					$phone = $sh2['phone'];
					$gender = $sh2['gender'];
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
						<tr>
							<th>Employee id</th>
							<th><?php echo $employee ?></th>
						</tr>
						<tr>
							<th>First name</th>
							<th><?php echo $fname ?></th>
						</tr>
						<tr>
							<th>Last name</th>
							<th><?php echo $lname ?></th>
						</tr>
						<tr>
							<th>Other name</th>
							<th><?php echo $mname  ?></th>
						</tr>
						<tr>
							<th>date of birth</th>
							<th><?php echo $birthday ?></th>
						</tr>
						<tr>
							<th>email </th>
							<th><?php echo $email ?></th>
						</tr>
						<tr>
							<th>Phone</th>
							<th><?php echo $phone  ?></th>
						</tr>
						<tr>
							<th>age</th>
							<th><?php echo $age ?></th>
						</tr>
						<tr>
							<th>gender</th>
							<th><?php echo $gender ?></th>
						</tr>
						<tr>
							<th>Level</th>
							<th><?php echo $level  ?></th>
						</tr>
						<tr>
							<th>Qualification</th>
							<th><?php echo $qualification  ?></th>
						</tr>
						<tr>
							<th>Department</th>
							<th><?php echo $department ?></th>
						</tr>
						<tr>
							<th>Job description</th>
							<th><?php echo $job ?></th>
						</tr>
						<tr>
							<th>Religion</th>
							<th><?php echo $religion  ?></th>
						</tr>
						<tr>
							<th>Marital status</th>
							<th><?php echo $marital ?></th>
						</tr>
						<tr>
							<th>Address</th>
							<th><?php echo $address  ?></th>
						</tr>
						<tr>
							<th>lga</th>
							<th><?php echo $lga ?></th>
						</tr>
						<tr>
							<th>State</th>
							<th><?php echo $state  ?></th>
						</tr>
						<tr>
							<th>Country</th>
							<th><?php echo $country ?></th>
						</tr>
						<tr>
							<th>Bank name</th>
							<th><?php echo $bank ?></th>
						</tr>
						<tr>
							<th>Next of Kin</th>
							<th><?php echo $nok ?></th>
						</tr>
						<tr>
							<th>Relationship  of Next of kin</th>
							<th><?php echo $rnok ?></th>
						</tr>
						<tr>
							<th>Phone</th>
							<th><?php echo $pnok ?></th>
						</tr>
						<tr>
							<th>salary status</th>
							<th><?php echo $salary ?></th>
						</tr>
						<tr>
							<th>Account no</th>
							<th><?php echo $acc ?></th>
						</tr>
						<tr>
							<th>Date employed</th>
							<th><?php echo $datee ?></th>
						</tr>
						<tr>
							<th>Last update</th>
							<th><?php echo $last ?></th>
						</tr>
					</table>
				</div>
			</div>
			</div>
		</div>
	</div>
	<?php include("footer.php") ?>