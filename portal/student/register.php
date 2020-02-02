<?php
include("conn/conn.php");
if(isset($_POST['student'])){
	$student = $_POST['student'];
	$subject_id = $_POST['subject_id'];
	$sql = mysqli_query($con,"INSERT into elective_subject (subject_id,student_id)VALUES('$subject_id','$student')");
	if(!$sql){
		die(mysqli_error($con));
	}
}
?>