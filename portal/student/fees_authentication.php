	<?php include("header.php"); ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading" id="P_heading">
					<?php 
				$users = $_SESSION['users'];
				$s1  = mysqli_query($con,"SELECT * FROM students where username = '$users'");
				$sh1 = mysqli_fetch_array($s1);
				$name1 = $sh1['fname']." ".$sh1['lname'];
				$img = $sh1['picture'];
				$class = $sh1['class'];
				$admission = $sh1['admission_no'];
				if($img==""){
					$img2="passport/default.png";
				}
				else{
					$img2 = $img;
				}
				?>
					<img src="<?php echo $img2 ?>" id="imgs" class="img-responsive">
					<h4><?php echo $name1 ?></h4>
					<i><?php echo $class ?></i>
				</div>
				<div class="panel-body">
					<h4>Pin Authentication</h4>
				</div>
				<div class="panel-body">
				<?php
				if(isset($_POST['pay'])){
				$is = $_GET['is'];
				$pin = mysqli_real_escape_string($con,$_POST['pin']);
				$sql = mysqli_query($con,"SELECT * FROM pin where pin = '$pin'");
				$sql2 = mysqli_num_rows($sql);
				$sql5 = mysqli_fetch_array($sql);
				$sql6 = $sql5['status'];
				$sql17 = $sql5['admission'];
				$sql8 = $sql5['fees_id'];
				if($sql2==0){
					echo "this pin does not exist";
				}
				elseif ($sql6==1) {
					echo "this pin has already been used";
				}
				elseif ($sql17 != $admission) {
					echo "your admission number does not match the admission number for the pin";
				}
				elseif($sql8 != $is){
					echo "this pin does not belong to this Fee";
				}
				else{
					$sl2 = mysqli_query($con,"UPDATE pin set status = '1' where pin = '$pin' ");
				
				$sql3 = mysqli_query($con,"SELECT * FROM fees where sn = '$is' ");
				$sh3 = mysqli_fetch_array($sql3);
				$date = date('d-m-y');
				$receipt = rand(1000000,1000000000);
				$q1 = $sh3['sn'];
				//$q2 = $sh3['title'];
				$q4 = $admission;
				$q5 = $sh3['amount'];
				$q6 = $sh3['title'];
				$msql3 = mysqli_query($con,"SELECT * FROM calender");
				$fetch3 = mysqli_fetch_array($msql3);
				$session = $fetch3['session'];
				$term = $fetch3['current_term'];
				$sql4 = mysqli_query($con,"INSERT into paid_fees (fees_id,student,receiptid,dates,amount,title,session,term) VALUES ('$is', '$q4','$receipt','$date','$q5','$q6','$session','$term')");
				
				if(!$sql4){
					die(mysqli_error($con));
				}
				else{

				?>
					<div class="alert alert-success "> 
            <a href="#" class="close" data-dismiss="alert"> 
            &times; 
            </a> 
        payment made successfully you can print your receipt
        </div>
				<?php
			}
				}
		}
		
				?>
				<form method="POST">
					<input type="" name="pin" placeholder="pin" class="form-control" ><br>
					<button type="submit" class="btn btn-primary" name="pay">Make payment</button>
				</form>
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