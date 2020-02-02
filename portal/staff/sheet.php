<?php include("conn/conn.php") ?>
<?php session_start();
if(!isset($_SESSION['users'])){
	header("location:..\index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>staff portal</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<?php 
if(isset($_GET['is'])){
	$is = $_GET['is'];
	$sl2 = mysqli_query($con,"SELECT * from subject where sn = '$is'" );
	$sh2 = mysqli_fetch_array($sl2);
	$title = $sh2['title'];
	$code = $sh2['code'];
	$participant = $sh2['participant'];
	$type = $sh2['type'];
	$subject_id = $sh2['sn'];
	$i = 0;
}
?>
<div class="container">
<h4 style="text-align: center;">Score sheet for <?php echo $title."($code)"?>
<?php 
if($type == "elective"){
	$sl3 = mysqli_query($con,"SELECT * FROM elective_subject where subject_id = '$subject_id' ");
}
else{
	$sl3 = mysqli_query($con,"SELECT * from students where class = '$participant'" );
}
$num1 = mysqli_num_rows($sl3);
?>
<br><small>Total number of students:<?php echo $num1 ?></small></h4>
<table class="table2excel table table-bordered table-stripped"  data-tableName='Test Table 1'>
	<tr>
		<th>SN</th>
		<th>Admission no</th>
		<th>CA 1</th>
		<th>CA 2</th>
		<th>CA 3</th>
		<th>CA(T)</th>
		<th>ETT</th>
		<th>T1</th>
		<th>LTC</th>
		<th>T2</th>
		<th>G</th>
		<th>S</th>						
	</tr>
	<?php 
	if($type == "elective"){
		$sli = mysqli_query($con,"SELECT * FROM elective_subject where subject_id = '$subject_id' ");
		while($show_us = mysqli_fetch_array($sli)){
			$idm = $show_us['student_id'];
			$no = mysqli_num_rows($sli);
			$i++;
			$sqlx = mysqli_query($con,"SELECT * FROM students where admission_no = '$idm' ");
			if(!$sqlx){
				die(mysqli_error($con));
			}
			$sqlxx = mysqli_fetch_array($sqlx);
			$admission = $sqlxx['admission_no'];
			$name = $sqlxx['fname']." ".$sqlxx['lname'];
			?>
			<tr>
				<td><?php echo $i ?></td>
				<td><?php echo $admission ?></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<?php

		}
	}
	else{

		?>
		<?php
		$sqlx = mysqli_query($con,"SELECT * from students where class = '$participant'");
		while($sqlxx = mysqli_fetch_array($sqlx)){
			$admission =  $sqlxx['admission_no'];
			$name = $sqlxx['fname']." ".$sqlxx['lname'];
			$i++;
			?>
			<tr>
				<td><?php echo $i ?></td>
				<td><?php echo $admission ?></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<?php

		}
	}

	?>
</table>
</div>
</body>
</html>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
	$(window).load(function(){
		window.print();
	})
</script>