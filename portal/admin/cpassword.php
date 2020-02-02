	<?php include("header.php") ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-9">
			<div class="panel panel-default">
				<div class="panel-heading" id="p_heading">
					<?php 
				$users = $_SESSION['users'];
				$s1  = mysqli_query($con,"SELECT * FROM admin where username = '$users'");
				$sh1 = mysqli_fetch_array($s1);
				$name1 = $sh1['fname']." ".$sh1['lname'];
				$img = $sh1['picture'];
				$position = $sh1['position'];
				if($img==""){
					$img2 = "passport/default.png";
				}
				else{
					$img2 = $img;
				}
				?>
					<img src="<?php echo $img2 ?>" id="imgs" class="img-responsive">
					<h4><?php echo $name1 ?></h4>
					<i><?php echo $position ?></i>
				</div>
				<div class="panel-body">
					<h4> change your password</h4>
				</div>
				<div class="panel-body">
				<?php 
				if(isset($_POST['create'])){
				$user = $_SESSION['users'];
				$old = mysqli_real_escape_string($con,$_POST['old']);
				$new1 = mysqli_real_escape_string($con,$_POST['new1']);
				$new2 = mysqli_real_escape_string($con,$_POST['new2']);
				$olda = md5($old);
				$new1a = md5($new1);
				$new2a = md5($new2);
				$query1 = mysqli_query($con,"SELECT * from users where userid2 = '$user' ");
				$sh1 = mysqli_fetch_array($query1);
				$oldpassword = $sh1['password2'];
				$error = array();
                if($olda!= $oldpassword){
                 $error['old'] = "<p class='alert alert-danger'>Your old password is not correct</p>";
                 }
                 if($new2a!= $new1a){
                 	$error['new'] = "<p class='alert alert-danger'>your password does not match</p>";
                 }
                 if(count($error)==0){
				$sql=mysqli_query($con,"UPDATE users SET password = '$new2',password2 = '$new2a' where userid2 = '$user'");
				if(!$sql){
					die(mysqli_error($con));
				}
				else{
					echo "<p class='alert alert-success'>done</p>";
				}
		
		}
	}
				?>
				<form method="POST">
					<input type="password" name="old" class="form-control" placeholder="Enter your old password" required><br>
					<input type="password" name="new1" class="form-control" placeholder="enter the new password" required><br>
					<input type="password" name="new2" class="form-control" placeholder="enter the password again" required><br>
					 <?php
if(isset($error['old'])) echo $error['old']."<br>"; 
if(isset($error['new'])) echo $error['new']."<br>";
?>
					<p class="text-center"><button class="btn btn-primary" name="create">change</button></p>
				</form>
				</div>
				</div>
			</div>
			<?php include("linkpanel.php") ?>
			</div>
		</div>
	<?php include("footer.php") ?>