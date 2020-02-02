<?php include("header.php");  ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading" id="p_heading">
					<?php 
					$users = $_SESSION['users'];
					$s1  = mysqli_query($con,"SELECT * FROM students where username = '$users'");
					$sh1 = mysqli_fetch_array($s1);
					$name1 = $sh1['fname']." ".$sh1['lname'];
					$img = $sh1['picture'];
					$class = $sh1['class'];
					$admission = $sh1['admission_no'];
					$s2  = mysqli_query($con,"SELECT * FROM  calender ");
					$sh2 = mysqli_fetch_array($s2);
					$sn = $sh2['sn'] ;
					$return2= $sh2['session'];
					$return1= $sh2['current_term'];

					?>
					<img src="<?php echo $img ?>" id="imgs" class="img-responsive" style="border:1px solid #51be78" >
					<h4><?php echo $name1 ?></h4>
					<i><?php echo $class ?></i>
				</div>
				<div class="panel-body">
					<fieldset>
						<legend>Compulsory Subjects</legend>
						<?php
						$sub = mysqli_query($con, "SELECT * from subject where participant = '$class' and type = 'compulsory'");
						while($subjects = mysqli_fetch_array($sub)){
							$subject_name = $subjects['title'];
							$subject_code = $subjects['sn'];
							echo "<a href = 'view_subject.php?is=$subject_code' style='color:#5a738e;' ><h5>$subject_name</h5></a>";
						}

						?>
					</fieldset>	
					<fieldset>
						<legend>Elective Subjects</legend>
						<?php 
						$el_show = mysqli_query($con,"SELECT * FROM elective_subject where student_id = '$admission'");
						if(!$el_show){
							die(mysqli_error($con));
						}
						while($el_show2 = mysqli_fetch_array($el_show)){
							$subject_ids = $el_show2['subject_id'];
							$fetch_sub = mysqli_query($con,"SELECT * FROM subject where sn = '$subject_ids'");
							$sb_name = mysqli_fetch_array($fetch_sub);
							$name = $sb_name['title'];
							$code = $sb_name['sn'];
							echo "<a href = 'view_subject.php?is=$code' style='color:#5a738e;' ><h5>$name</h5></a>";
						}
						?>

					</fieldset>	
					<fieldset>
						<legend>Register Elective subjects</legend>
						<?php
						$check_leg = mysqli_query($con,"SELECT * FROM elective_window");
							$stat = mysqli_fetch_array($check_leg);
							$stat2 =  $stat['status'];
							if($stat2 == 1){
								echo "<h4 class='text-center' style='opacity:0.7;'>Elective subject registration is non opened at the monent</h4>";
							}
						else{
							?>
							<table class='table table-bordered'>
								<tr>
									<th>Subject</th>
									<th>Select</th>
								</tr>
								<?php
								$sub = mysqli_query($con, "SELECT * from subject where participant = '$class' and type = 'elective'");
								if(!$sub){
									die(mysqli_error($con));
								}
								else{
									while($subjects = mysqli_fetch_array($sub)){
										$subject_name = $subjects['title'];

										$subject_id = $subjects['sn'];
										$mon = mysqli_query($con,"SELECT * FROM elective_subject where subject_id = '$subject_id' and  student_id = '$admission'");
										if(mysqli_num_rows($mon) == 0){
											$bib = "<button type='button' class='btn btn-select' data='$subject_id'>SELECT</button>";
										}
										else{
											$bib = "<button type='button' class='btn btn-select' data='$subject_id' disabled>SELECTED</button>";
										}
										echo "
										<tr>
										<td>$subject_name</td>
										<td>$bib</td>
										</tr>
										";
									}
								}
								echo "</table>";
								?>
							</fieldset>	
							<?php
						}
						?>	

					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="pop"></div>
	<?php include("footer.php") ?>
	<script type="text/javascript" src='jquery.js'></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".btn-select").click(function(){
				var subject_id = $(this).attr("data");
				var student = "<?php echo $admission ?>";
				$.ajax({
					method:"POST",
					url:"register.php",
					data:{subject_id:subject_id,student:student},
					success:function(data){
						window.location.reload();
					}
				})
			})
		})
	</script>
</body>
</html>