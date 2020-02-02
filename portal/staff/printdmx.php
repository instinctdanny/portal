<?php include("header.php") ?>
<style type="text/css">
		@media print {
		body *{ visibility: hidden; }
		#contentx *{visibility: visible;}
		#contentx {position: absolute; top: 40px; left: 30px;}
	}
	</style>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<?php error_reporting(0) ;?>
						<?php 
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
						<?php 
						if(isset($_GET['is'])){
							$is = $_GET['is'];
							$sl2 = mysqli_query($con,"SELECT * from subject where sn = '$is'" );
							$sh2 = mysqli_fetch_array($sl2);
							$code = $sh2['code'];
							$participant = $sh2['participant'];
							$subject = $sh2['title'];
						}
						?>
					</div>
					<div class="panel-body" id="contentx">
						<?php 
						$msquery = mysqli_query($con,"SELECT * FROM result_record where subjectid = '$is' ");
						$sh4 = mysqli_fetch_array($msquery);
						$result_name = $sh4['name'];
						$result_session = $sh4['session'];
						$result_term = $sh4['term'];
						$result_subject= $sh4['subject']; 
						?>
						<div style="background-color:#fff; color: #999; border:1px solid #D7D7D7; padding:10px; border-radius: 4px;"> 
								<div class="row">
								<div class="col-lg-1"><img src="logo.png" style="width: 90px; height: 90px;"></div>
								
								<div class="col-lg-10"><h4 class="text-center" style="font-weight: bold;">ELYON COLLEGE</h4><p style="text-align: center; font-weight: bold;">Score Sheet</p></div>
							</div>
							<br>
							<table class="table table-striped table-bordered">
								<tr>
									<th>SUBJECT</th>
									<th>SUBJECT CODE</th>
									<th>CLASS</th>
									<th>SESSION</th>
									<th>TERM</th>
								</tr>
								<tr>
									<td><?php echo $subject ?></td>
									<th><?php echo $code ?></th>
									<td><?php echo $participant ?></td>
									<td><?php echo $result_session ?></td>
									<td><?php echo $result_term ?></td>
								</tr>
							</table>
							<table class="table table-striped table-bordered">
								<tr>
									<th>Admission no</th>
									<th>CA1</th>
									<th>CA2</th>
									<th>CA3</th>
									<th>CAT total</th>
									<th>Ett</th>
									<th>Total 1</th>
									<th>Last term cummul.</th>
									<th>Total 2</th>
									<th>Grade</th>
								</tr>
								<?php 
								$msquery2 = mysqli_query($con,"SELECT * FROM result where resultid = $is ");
								$grade1 = array();
								while($sh5 = mysqli_fetch_array($msquery2)){
									$admno = $sh5['student'];
									$ca1 = $sh5['score'];
									$ca2 = $sh5['score2'];
									$ca3 = $sh5['score3'];
									$ett = $sh5['score4'];
									$last = $sh5['last'];
									$catotal = $ca1 + $ca2 + $ca3;
									$total1 = $catotal + $ett;

									//color
									if($ca1<8){
										$color = "#f30";
									}
									else{
										$color = "#03f";
									}
									if($ca2<8){
										$color5 = "#f30";
									}
									else{
										$color5 = "#03f";
									}
									if($ca3<5){
										$color1 = "#f30";
									}
									else{
										$color1 = "#03f";
									}
									if($catotal<20){
										$color2 = "#f30";
									}
									else{
										$color2 = "#03f";
									}
									if($ett<30){
										$color3 = "#f30";
									}
									else{
										$color3 = "#03f";
									}
									if($total1<50){
										$color4 = "#f30";
									}
									else{
										$color4 = "#03f";
									}
									if($last==""){
										$total2 = $total1;
									}
									else{
										$total2 = ceil(($last+$total1)/2);
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
									$grade1[] = $grade; 
									?>

									<tr>
										<td><?php echo $admno ?></td>
										<td style="color: <?php echo $color ?>"><?php echo $ca1 ?></td>
										<td style="color: <?php echo $color5 ?>"><?php echo $ca2 ?></td>
										<td style="color: <?php echo $color1 ?>"><?php echo $ca3 ?></td>
										<td style="color: <?php echo $color2 ?>"><?php echo $catotal ?></td>
										<td style="color: <?php echo $color3 ?>"><?php echo $ett ?></td>
										<td style="color: <?php echo $color4 ?>"><?php echo $total1 ?></td>
										<td style="color: <?php echo $color4 ?>"><?php echo $last ?></td>
										<td style="color: <?php echo $color4 ?>"><?php echo  $total2 ?></td>
										<td style="color: <?php echo $color4 ?>" ><?php echo $grade ?></td>
									</tr>

									<?php
									
								}
								?>

							</table>
							<hr>
							<h4 class="text-center">Result Summary</h4>
							<div class="row">
								<div class="col-lg-4">
							<?php 
								$ss = array_count_values($grade1);
								if(empty($ss['A1'])){
									$ss1  = "0";
								}
								else{
									$ss1 = $ss['A1'];
								}
								if(empty($ss['B2'])){
									$ss2  = "0";
								}
								else{
									$ss2 = $ss['B2'];
								}
								if(empty($ss['B3'])){
									$ss3  = "0";
								}
								else{
									$ss3 = $ss['B3'];
								}
								if(empty($ss['C4'])){
									$ss4  = "0";
								}
								else{
									$ss4 = $ss['C4'];
								}
								if(empty($ss['C5'])){
									$ss5  = "0";
								}
								else{
									$ss5 = $ss['C5'];
								}
								if(empty($ss['C6'])){
									$ss6  = "0";
								}
								else{
									$ss6 = $ss['C6'];
								}
								if(empty($ss['D7'])){
									$ss7  = "0";
								}
								else{
									$ss7 = $ss['D7'];
								}
								if(empty($ss['E8'])){
									$ss8  = "0";
								}
								else{
									$ss8 = $ss['E8'];
								}
								if(empty($ss['F9'])){
									$ss9  = "0";
								}
								else{
									$ss9 = $ss['F9'];
								}
								echo "<table class='table table-bordered table-striped'><tr><th>Grades </th><th>No of students</th></tr>
								<tr>
									<td>A1</td><td>$ss1</td>
								</tr>
								<tr>
									<td>B2</td><td>$ss2</td>
								</tr>
								<tr>
									<td>B3</td><td>$ss3</td>
								</tr>
								<tr>
									<td>C4</td><td>$ss4</td>
								</tr>
								<tr>
									<td>C5</td><td>$ss5</td>
								</tr>
								<tr>
									<td>C6</td><td>$ss6</td>
								</tr>
								<tr>
									<td>D7</td><td>$ss7</td>
								</tr>
								<tr>
									<td>E8</td><td>$ss8</td>
								</tr>
								<tr>
									<td>F9</td><td>$ss9</td>
								</tr></table>";
								?>
							</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<p>recorded by:</p>
									<small>name........................................................................</small>
									<small>signature & date ..................................................................</small>
								</div>
								<div class="col-lg-6">
									<p>approved by:</p>
									<small>name ..........................................................................</small>
									<small>signature & date .....................................................................</small>
								</div>
							</div>

							<p class="text-center"><br><button class="btn btn-info" onclick="window.print()">print result</button></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include("footer.php") ?>