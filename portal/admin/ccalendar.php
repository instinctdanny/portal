<?php include("conn/conn.php") ?>
<?php 
$msql3 = mysqli_query($con,"SELECT * FROM calender");
$fetch3 = mysqli_fetch_array($msql3);
$session = $fetch3['session'];
$term = $fetch3['current_term'];
?>
<?php
//move all result from result to result old
$st = mysqli_query($con,"INSERT into oldresult (resultid, score,score2,score3,score4,last,subject,student,code,status,set_by,session,term) SELECT resultid, score,score2,score3,score4,last,subject,student,code,status,set_by,session,term FROM result");
if(!$st){
	die(mysqli_error());
}
else{
		$sql  = mysqli_query($con,"TRUNCATE result_record ");
		$sql3 = mysqli_query($con,"TRUNCATE anoucement");
		$sql4 = mysqli_query($con,"TRUNCATE result");
		$sql6 = mysqli_query($con,"TRUNCATE status");
		$sql6 = mysqli_query($con,"TRUNCATE notification");
		$sql5 = mysqli_query($con,"UPDATE result_query SET status = '1'");

	}
?>
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
						<h4>set up a new term</h4>
						<?php 
				$s2  = mysqli_query($con,"SELECT * FROM  calender ");
				$sh2 = mysqli_fetch_array($s2);
				$sn = $sh2['sn'] ;
				$session= $sh2['session'];
				$term= $sh2['current_term'];
				$sstart = $sh2['s_start'];
				$sstop = $sh2['s_stop'];
				$tstart = $sh2['t_start'];
				$tstop = $sh2['t_stop'];
				if($term == '1'){
					$new_term = '2';
					$new_session = $session;
					$new_sstart = $sstart;
					$new_sstop = $sstop;
				}
				elseif($term == '2'){
					$new_term = '3';
					$new_session = $session;
					$new_sstart = $sstart;
					$new_sstop = $sstop;
				}
				elseif($term=='3'){
					$new_term = '1';
					$fyear = substr($session, 0,4)+1;
					$syear = substr($session, -4)+1;
					$new_session = $fyear.'/'.$syear;
					$new_sstart = '';
					$new_sstop = '';
				}
				$current_date = date("d-m-Y");
						if(isset($_POST['create'])){
							$session = $_POST['session'];
							$term = $_POST['term'];
							$sstart = $_POST['sstart'];
							$sstop = $_POST['sstop'];
							$tstart = $_POST['tstart'];
							$tstop = $_POST['tstop'];
							$query = mysqli_query($con,"UPDATE calender set session = '$session', current_term = '$term', s_start = '$sstart', s_stop = '$sstop', t_start = '$tstart', t_stop = '$tstop' ");
							if(!$query){
								die(mysqli_errno($con));
							}
							else{
								?>
							</div>
							<div class="panel-body">
								<div class="alert alert-success "> 
									<a href="#" class="close" data-dismiss="alert"> 
										&times; 
									</a> 
									term has been added successfully
								</div>
								<?php
							}
						}
						?>
						<form method="POST">
							<input type="" name="session" class="form-control" placeholder="session" value="<?php echo $new_session ?>" required><br>
							<input type="" name="term" class="form-control" placeholder="term" value="<?php echo $new_term ?>" required>
							<br>
							<input type="" name="tstart" placeholder="Term starts" class="form-control" required>
							<br>
							<input type="" name="tstop" placeholder="Term stops" class="form-control" required><br>
							<input type="" name="sstart" placeholder="session starts" class="form-control" value="<?php echo $new_sstart ?>" required>
							<br>
							<input type="" name="sstop" placeholder="session stops" class="form-control" required value="<?php echo $new_sstop ?>"><br>
							<button class="btn btn-primary" name="create">Create</button>
						</form>
					</div>
				</div>
			</div>
			<?php include("linkpanel.php") ?>
		</div>
	</div>
	<?php include("footer.php") ?>
	<script type="text/javascript" src='jquery.js'></script>
	<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>