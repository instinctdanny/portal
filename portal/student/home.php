<?php include("conn/conn.php") ?>
<?php session_start();
if(!isset($_SESSION['users'])){
  header("location:..\index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<meta name="viewport" content="width=device-width, initial- scale=1.0">
<title>student portal</title>
</head>
<body>
		<?php 
	$users = $_SESSION['users'];
	$first_query = mysqli_query($con,"SELECT * from graduated where username = '$users'");
	
	if(mysqli_num_rows($first_query)==0){
		include("linker.php");
	}
	else{
		$first_fetch = mysqli_fetch_array($first_query);
		$name = $first_fetch['lname']." ".$first_fetch['fname'];
		//$year = $first_fetch['year'];
		?>
					

		<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading" id="p_heading" style="height: 600px;">
				<h4 style="margin-top: 300px; text-align: center;">Dear <?php echo $name ?>, You have Graduated from elyon college.<br>We wish you well in life and hope to see you scale higher heights <br> have a nice day <br><br><a href="logout.php" class="btn">Logout</a></h4>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
}

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
				$student = $sh1['admission_no'];
				?>
					<img src="<?php echo $img ?>" id="imgs" class="img-responsive" alt="your passport here">
					<h4><?php echo $name1 ?></h4>
					<i><?php echo $class ?></i>
				</div>
				<div class="panel-body">
					<h4><span class="glyphicon glyphicon-bullhorn"></span> General Anouncement</h4>
				</div>
				<div class="panel-body" style="background-color: #eee;">

					<?php
				$sl14 = mysqli_query( $con,"SELECT * from anoucement where viewers = 'all' limit 5 ");
				while($sh19 = mysqli_fetch_array($sl14)){
					$title19 = $sh19['title'];
					$content19 = $sh19['content'];
				?>
				<h4><?php echo $title19 ?></h4>
				<p class="text-justify"><?php echo $content19 ?></p>
				<?php
					}
				?>
				</div>
				<div class="panel-body" style="background-color: #f7f7f7;">
					<?php
				$sl14 = mysqli_query( $con,"SELECT * from anoucement where viewers = 'student' limit 5 ");
				while($sh19 = mysqli_fetch_array($sl14)){
					$title19 = $sh19['title'];
					$content19 = $sh19['content'];
				?>
				<h4><?php echo $title19 ?></h4>
				<p class="text-justify"><?php echo $content19 ?></p>
				<?php
					}
				?>
				</div>
				<hr>
				<div class="panel-body" style="background-color: #f7f7f7;">
					<h4 class="text-center">Todays Report (<?php echo date('l, d F, Y') ?>)</h4>
					<table class="table table-bordered">
						<tr>
							<th>Attendance</th>
							<td>
								<?php
							$today = date('d-m-y');
							$js_query = mysqli_query($con,"SELECT * FROM attendance where date = '$today' and admission_no = '$student' ");
							if(!$js_query){
								die(mysqli_error());
							}
								$report = mysqli_fetch_array($js_query);
								$status = $report['status'];
								if($status == 1){
									$attendancex = 'present';

								}
								else{
									$attendancex = 'absent';
								}
								echo $attendancex;
								?>
							</td>
						</tr>
						<tr>
						<th>
							Daily Report
						</th>
						<td>
							<?php
							$today = date('d-m-y');
							$js_report = mysqli_query($con,"SELECT * FROM daily_report where date = '$today' and admission_no = '$student' ");
							
								$report = mysqli_fetch_array($js_report);
								$status = $report['report'];
								
								echo $status;
								?>
						</td>
						</tr>
					</table>
					
				</div>

			</div>
			</div>
		</div>
	</div>
	<?php include("footer.php") ?>
<script type="text/javascript" src='jquery.js'></script>
<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>