<?php include("header.php"); error_reporting(0)
?>
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
					<img src="<?php echo $img ?>" id="imgs" class="img-responsive">
					<h4><?php echo $name1 ?></h4>
					<i><?php echo $class ?></i>
				</div>
				<div class="panel-body">
					<p>View past result</p>
					<div class="row">
						<div class="col-lg-6">
							<select class="form-control ses">
								<option value="">Session</option>
								<?php
								$old_res = mysqli_query($con, "SELECT * FROM  oldresult where student = '$admission' GROUP BY session ");
								while ($old_res2 = mysqli_fetch_array($old_res)) {
									$ses = $old_res2['session'];
									echo "<option  value='$ses'>$ses</option>";
								}
								?>
							</select>
						</div>
						<div class="col-lg-6" >
							<select class="form-control tem">
								<option value="">Term</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
							</select>
						</div>
					</div>
					<br>
					<?php
					$sql1 = mysqli_query($con,"SELECT * FROM result_access");
					$sql2 = mysqli_fetch_array($sql1);
					$status = $sql2['status'];
					if($status==0){
						echo"<p class='alert alert-danger'>result computation in progess ...</p>";
					}
					else{
						?>
						<div id="contentx">
							<div style="border:1px solid #d7d7d7; border-radius: 4px; padding: 5px;">
								<div id="editor"></div>
								<div class="row">
									<div class="col-lg-1"><img src="logo.png" style="width: 70px; height: 70px;"></div>

									<div class="col-lg-10"><h4 class="text-center" style="font-weight: bold;">ELYON COLLEGE</h4><p style="text-align: center; font-weight: bold;">Report Sheet</p></div>
								</div>

								<br>

								<div class="table-responsive panel-1">
									<table class="table">
										<tr>
											<th>Name:</th><td> <?php echo $name1 ?></td>
											<th>Class:</th><td> <?php echo $class ?></td>
											<th>Admission no:</th><td> <?php echo $admission ?></td>
											<th>Term:</th><td> <?php echo $return1 ?></td>
											<th>Session:</th><td> <?php echo $return2 ?></td>
										</tr>
									</table>
									
										<table class="table table-bordered">
											<tr>
												<th>Subject</th>
												<th>C.A.T 1</th>
												<th>C.A.T 2</th>
												<th>C.A.T 3</th>
												<th>C.A.T total</th>
												<th>ETT</th>
												<th>Total 1</th>
												<th>last term cul</th>
												<th>Total 2</th>
												<th>Grade</th>
											</tr>
											<?php
											$uman = $_SESSION['users2'];
											$run2 = mysqli_query($con,"SELECT * FROM result where student = '$uman' ");
											while($result2 = mysqli_fetch_array($run2)){
												$subject = $result2['subject'];
												$score = $result2['score'];
												$score2 = $result2['score2'];
												$score3 = $result2['score3'];
												$total1 = $score+$score2+$score3;
												$score4 = $result2['score4'];
												$last = $result2['last'];
												$total3 = $total1+$score4;
												if($last == ""){
													$total2 = $total3 ;
												}
												else{
													$total2 = ceil(($total3+$last)/2);
												}
												if($total2 >= 75){
													$grade = "A1";
												}
												elseif($total2 >=70){
													$grade = "B2";
												}
												elseif ($total2 >=65) {
													$grade = "B3";
												}
												elseif ($total2 >=60) {
													$grade = "C4";
												}
												elseif ($total2 >=55) {
													$grade = "C5";
												}
												elseif ($total2 >=50) {
													$grade = "C6";
												}
												elseif ($total2 >=45) {
													$grade = "D7";
												}
												elseif ($total2 >=40) {
													$grade = "E8";
												}
												else {
													$grade = "F9";
												}
												if($score<8){
													$color = "#f30";
												}
												else{
													$color = "#03f";
												}
												if($score2<8){
													$color5 = "#f30";
												}
												else{
													$color5 = "#03f";
												}
												if($score3<5){
													$color1 = "#f30";
												}
												else{
													$color1 = "#03f";
												}
												if($total1<20){
													$color2 = "#f30";
												}
												else{
													$color2 = "#03f";
												}
												if($score4<30){
													$color3 = "#f30";
												}
												else{
													$color3 = "#03f";
												}
												if($total2<50){
													$color4 = "#f30";
												}
												else{
													$color4 = "#03f";
												}
												?>
												<tr>
													<th><?php echo $subject ?></th>
													<td style="color: <?php echo $color ?>"><?php echo $score ?></td>
													<td style="color: <?php echo $color5 ?>"><?php echo $score2 ?></td>
													<td style="color: <?php echo $color1 ?>"><?php echo $score3 ?></td>
													<td style="color: <?php echo $color2 ?>"><?php echo $total1 ?></td>
													<td style="color: <?php echo $color3 ?>"><?php echo $score4 ?></td>
													<td style="color: <?php echo $color4 ?>"><?php echo $total3 ?></td>
													<td style="color: <?php echo $color4 ?>"><?php echo $last ?></td>
													<td style="color: <?php echo $color4 ?>"><?php echo $total2 ?></td>
													<td style="color: <?php echo $color4 ?>"><?php echo $grade ?></td>

												</tr>
												<?php
											}
											?>
										</table>
										<?php 
										$xs = mysqli_query($con,"SELECT * From status where student = '$admission' ");
										$it = mysqli_num_rows($xs);
										if($it == 0){
											echo "";
										}
										else{
											$ir = mysqli_fetch_array($xs);
											$stats = $ir['status'];
											echo " &nbsp <h4 class='' id='stamp'>$stats</h4><p>&nbsp</p>";
										}
										?>
									</div>


								<div class="panel-2"></div>
								<?php
							}
							?>
						</div>
					</div>
					<p class="text-center"><br><button class="btn btn-info" id="" onclick="window.print()" >Print Result</button></p>

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
		$(".tem,.ses"). change(function(){
			var tem = $(".tem").val();
			var ses = $(".ses").val()
			$('.panel-1').hide();
			$.ajax({
				method:"POST",
				url:"other.php",
				data:{tem:tem,ses:ses},
				success:function(data){
					$('.panel-2').html(data);
				}
			})
		})
	})
</script>
</body>
</html>