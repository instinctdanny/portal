<?php
include("conn/conn.php");
 session_start();
if(!isset($_SESSION['users'])){
  header("location:..\index.php");
}
if(isset($_POST['admission'])){
$sn = $_POST['admission'];
$ssl = mysqli_query($con,"UPDATE  students set active = '1' where admission_no = '$sn' ");
$ssi = mysqli_query($con,"UPDATE users set active = '1' where userid = '$sn' ");
$ssj = mysqli_query($con,"DELETE from inactive where admission_no = '$sn'");
	if(!$ssl){
		die(mysqli_error($con));
	}
	else{
echo "<p style='text-align:center'><span class='glyphicon glyphicon-ok-circle'></span><br> student reactivated </p>";
}
}
 ?>
