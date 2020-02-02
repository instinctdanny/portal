<?php include("conn/conn.php") ?>
<?php session_start();
if(!isset($_SESSION['users'])){
  header("location:..\index.php");
}
 ?>
<?php
$date = date('d-m-Y');
 if(isset($_POST['admission'])){
 	$admission = $_POST['admission'];
 	$sql1 =  mysqli_query($con,"SELECT * FROM students where admission_no = '$admission'");
 	if(!$sql1){
 		die(mysqli_error($con));
 	}
 	else{
 		$sql2 = mysqli_fetch_array($sql1);
 		$student = $sql2['admission_no'];

 		$sql3 = mysqli_query($con,"INSERT INTO gone(fname,mname,lname,admission_no,email,phone,gender,class,address,religion,lga,state,country,picture,house,status,active,dates,parents,parents_phone1,parents_phone2,date_admitted,batch) SELECT fname,mname,lname,admission_no,email,phone,gender,class,address,religion,lga,state,country,picture,house,status,active,dates,parents,parents_phone1,parents_phone2,date_admitted,batch FROM students where admission_no = '$student'" );
 	}
 	if(! $sql3){
 		die(mysqli_error($con));
 	}
 	else{
 		$sql5 = mysqli_query($con, "DELETE from students where admission_no ='$student'");

 		if(! $sql5){
 			die(mysqli_error($con));
 		}
 		else{
 		$sql6 = mysqli_query($con, "UPDATE users set presence = '0' where userid = '$admission'");
 		if(!$sql6){
 			die(mysqli_error($con));
 		}
 		else{

 		echo "You have marked this student has left $student";
 	}
 	}
 	}

 }
?>