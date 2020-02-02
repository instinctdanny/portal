<?php include ("conn/conn.php"); ?>
<?php 
if(isset($_POST['student'])){
	$status = $_POST['stats'];
	$student = $_POST['student'];
	$clas = $_POST['clas'];
	$query0 = mysqli_query($con,"SELECT * FROM status WHERE student = '$student'");
	if(mysqli_num_rows($query0) >0){
		echo "this students faith has already been determined";
	}
	else{
	$query = mysqli_query($con,"INSERT INTO status (student,status,class)VALUES('$student','$status','$clas')");
	if(!$query){
		die(mysqli_error($con));
	}
	else{
		if($status=="promoted"){
			echo "promoted";
		}
		else{
			echo "to repeat";
			}
		}
	}
}
?>