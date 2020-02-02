<!DOCTYPE html>
<?php include("conn/conn.php") ?>
<?php session_start();
if(!isset($_SESSION['users'])){
header("location:..\index.php");
}
?>
<html>
<head>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css.css">
<meta name="viewport" content="width=device-width, initial- scale=1.0">
<title>admin portal</title>
<script type="text/javascript" src='jquery.js'></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="jquery.tabledit.min.js"></script>
</head>
<body>
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
				$department = $sh1['position'];
				
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
				</div>
				<div class="panel-body">
					<table class="table table-bordered">
					<?php
					$user = $_SESSION['users'];
					$s2 = mysqli_query($con,"SELECT * FROM  admin where username = '$users'");
					$sh2 = mysqli_fetch_array($s2);
					$fname = $sh2['fname'];
					$lname = $sh2['lname'];
					$mname = $sh2['mname'];
					$employee = $sh2['employee_id'];
					$position = $sh2['position'];
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
							<th>Position</th>
							<th><?php echo $position ?></th>
						</tr>
					</table>
				</div>
			</div>
			</div>
		</div>
	</div>
	<?php include("footer.php") ?>
</body>
</html>