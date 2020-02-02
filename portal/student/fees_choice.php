	<?php
			$is = $_GET['is'];
			if(isset($_POST['proceed'])){
				$method = $_POST['method'];
				if($method == "pin"){
					header("location:fees_authentication.php?is=$is");
				}
				else{
				    header("location:card_payment.php?is=$is");

				}
			}

			?>
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
					<h4>Select payment option</h4>
					<form method="POST" action="">
				<p>Manual Pin <input type="radio" name="method" value="pin"></p>
				<p>Card <input type="radio" name="method" value="card"></p>
				<p><button type="submit" name="proceed" class="btn btn-default">PROCEED</button></p>
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