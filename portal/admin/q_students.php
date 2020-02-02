<?php include("conn/conn.php") ?>
<?php session_start();
if(!isset($_SESSION['users'])){
  header("location:..\index.php");
}
 ?>
 <style type="text/css">
		@media print {
		body *{ visibility: hidden; }
		#contentx *{visibility: visible;}
		#contentx {position: absolute; top: 40px; left: 30px;}
	}
	</style>
 				
						<?php
						if(isset($_POST['clas'])){
							$clas = $_POST['clas'];
				echo"<div id='contentx'><h4 style='text-align: center;'> list of cleared students in $clas  </h4>
 		<table class='table table-bordered'>
 		<tr><th>Name</th> <th>Admission number</th></tr>";
				$sl1 =mysqli_query($con,"SELECT * FROM  students where class = '$clas'");
				while($sh1 = mysqli_fetch_array($sl1)){
				$class = $sh1['class'];
				$admission  = $sh1['admission_no']; 
				$name = $sh1['fname']." ".$sh1['lname'];
				$msql3 = mysqli_query($con,"SELECT * FROM calender");
				$fetch3 = mysqli_fetch_array($msql3);
				$session = $fetch3['session'];
				$term = $fetch3['current_term'];
				$mis = mysqli_query($con,"SELECT * FROM fees where participant = 'All' or participant = '$class' or participant = '$admission' ");
				$num0 = mysqli_num_rows($mis);
				//echo $num0;
					$mis3 = mysqli_query($con,"SELECT * FROM paid_fees where student = '$admission' AND session = '$session' AND term = '$term' ");
				$num1 = mysqli_num_rows($mis3);
				//echo $num1;
				if($num1 == $num0){
				echo"

				<tr>
					<td>$name</td> 
					<td>$admission</td>
				</tr>";
			}
			}
		}
				
				?>
			</table>
		</div>
		<p class="text-center"><a class="btn"  href="printq_students.php?clas=<?php echo $clas ?>"> save</a></p>