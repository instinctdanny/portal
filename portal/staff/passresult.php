<?php include("header.php") ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading" id="p_heading">

					<?php 
					//display teachers details
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
					<h4>result</h4>
				</div>
				<div class="panel-body">
					<?php 
					//get some details from the calander
					$qx = mysqli_query($con,"SELECT * FROM calender ");
					$sh3 = mysqli_fetch_array($qx);
					$session = $sh3['session'];
					$term = $sh3['current_term'];
					?>
					<?php
					if(isset($_POST['create'])){
						//post record
						$name = mysqli_real_escape_string($con,$_POST['name']);// name of result
						$session2 = $_POST['session'];
						$term2 = $_POST['term'];
						$subject2 = $_POST['subject'];
						$code2 = $_POST['code'];
						$type = $_POST['type'];
						$subjectid = $_POST['subjectid'];// from an hidden field
						$sqlmix = mysqli_query($con,"SELECT * FROM  result_record where code = '$code2' AND type= '$type'");

						if(mysqli_num_rows($sqlmix) > 0){
							die("The result of this form already exist");
						}
						else{
							$sqlxx = mysqli_query($con,"INSERT INTO result_record (name,session,term,subject,code,type,subjectid)VALUES('$name','$session2','$term2','$subject2','$code2','$type','$subjectid')");
							if($type == 'CA1'){ 
								$fetch = $_GET['is'];
								$g1 = mysqli_query($con,"SELECT * FROM subject where sn = '$fetch'");
								$li1 = mysqli_fetch_array($g1);
								$partx = $li1['participant'];
								$type2 = $li1['type'];
								$subject_id = $li1['sn'];
								if($type2 == "elective"){
									$sli = mysqli_query($con,"SELECT * FROM elective_subject where subject_id = '$subject_id' ");
									while($show_us = mysqli_fetch_array($sli)){
										$idm = $show_us['student_id'];
										$no = mysqli_num_rows($sli);
										$sqlx = mysqli_query($con,"SELECT * FROM students where admission_no = '$idm' ");
										$sqlxx = mysqli_fetch_array($sqlx);
										$student = $sqlxx['admission_no'];
										$run2 = mysqli_query($con,"INSERT into result(subject,code,student,resultid,session,term)VALUES('$subject2','$code2','$student','$fetch','$session','$term')");
									}
									header("location:uploadresult.php?is=$subject_id&&type=$type");

								}
								else{
									$live1 = mysqli_query($con,"SELECT * FROM students where class = '$partx'");
									while($ans = mysqli_fetch_array($live1)){
										$student = $ans['admission_no'];
										$run2 = mysqli_query($con,"INSERT into result(subject,code,student,resultid,session,term)VALUES('$subject2','$code2','$student','$fetch','$session','$term')");
									}
									header("location:uploadresult.php?is=$subjectid&&type=$type");

								}
							}
							else{
								$g2 = mysqli_query($con,"SELECT * FROM result_record where code = '$code2' AND type = 'CA1'");
								header("location:uploadresult.php?is=$subjectid&&type=$type");
							}
						}
					}
					?>
					<form method="POST">	
					<?php 
				if(isset($_GET['is'])){
				$snx = $_GET['is'];
				}
				$q1 = mysqli_query($con,"SELECT * FROM subject where sn = '$snx'");
				$sh2 = mysqli_fetch_array($q1);
				$subject = $sh2['title'];
				$code = $sh2['code'];
				?>			
						<input type="" name="name" placeholder="Result name" class="form-control"  required>
						<small>eg MATJSS1 test 1 result for 1st term of 2017/2018 session </small><br><br>
						<input type="" name="session" placeholder="session" class="form-control" value="<?php echo $session ?>" readonly required><br>
						<input type="" name="term"  class="form-control" value="<?php echo $term ?>" readonly required><br>
						<input type="" name="subject" placeholder="" class="form-control" required value="<?php echo $subject ?>" readonly><br>
						<input type="" name="code" placeholder="" class="form-control" required value="<?php echo $code ?>" readonly><br>
						<select name="type" class="form-control" required>
							<option value="">Select exam type</option>
							<option value="last">Last term final score</option>
							<option value="CA1"> C.A.T 1</option>
							<option value="CA2"> C.A.T 2</option>
							<option value="CA3"> C.A.T 3</option>
							<option value="ett">Examination</option>
						</select><br>
						<input  type="hidden" name="subjectid" value="<?php echo $snx ?>">
						<button class="btn btn-primary" name="create">Proceed</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include("footer.php") ?>