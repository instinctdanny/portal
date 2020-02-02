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
					<h4>Add an anouncement</h4>
				</div>
				<div class="panel-body">
				<?php 
				if(isset($_POST['create'])){
				$title = mysqli_real_escape_string($con,$_POST['title']);
				$content = mysqli_real_escape_string($con,$_POST['content']);
				$viewers = mysqli_real_escape_string($con,$_POST['viewers']);
				$date = date("d-m-y");
				$sql=mysqli_query($con,"INSERT INTO anoucement(title,content,viewers,dates)VALUES('$title','$content','$viewers','$date')");
				if(!$sql){
					die(mysqli_error($con));
				}
				else{
					?>
						<div class="alert alert-success "> 
            <a href="#" class="close" data-dismiss="alert"> 
            &times; 
            </a> 
        Announcement has been added successfully
        </div>
					<?php
				}
		
		}
				?>
				<form method="POST">
					<input type="" name="title" class="form-control" placeholder="title" required><br>
					<select name="viewers" class="form-control" required>
					<option value="">Viewers</option>
						<option value="all">All</option>
						<option value="staff">staff</option>
						<option value="student">student</option>
					</select><br>
					<textarea name="content" class="form-control" placeholder="content"></textarea><br>
					<p class="text-center"><button class="btn btn-primary" name="create">Create</button></p>
				</form>
				</div>
				</div>
			</div>
			<?php include("linkpanel.php") ?>
			</div>
		</div>
	<?php include("footer.php") ?>