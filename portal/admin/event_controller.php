<?php
include("conn/conn.php");
if(isset($_POST['event'])){
	$event  = mysqli_real_escape_string($con, $_POST['event']);
	$date = $_POST['date'];
	$time = $_POST['time'];
	$insert_query = mysqli_query($con,"INSERT into event (event,date, time)VALUES('$event','$date','$time')");
	if(!$insert_query){
		die(mysqli_error($con));
	}
	else{
		echo "<p class='alert alert-success'>Event Added Succesfully</p>";
	}
}
