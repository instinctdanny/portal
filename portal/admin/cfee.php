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
					<h4>Create New Fee</h4>
					<a href="cfee.php" class="btn btn-primary">Create new Fees</a>
				</div>
				<div class="panel-body">
				<?php 
				if(isset($_POST['create'])){
				$cal  = mysqli_query($con,"SELECT * FROM  calender ");
				$sh2 = mysqli_fetch_array($cal);
				$session= $sh2['session'];
				$term= $sh2['current_term'];
				$snx = md5(uniqid());
				$title = mysqli_real_escape_string($con,$_POST['title']);
				$amount = mysqli_real_escape_string($con,$_POST['amount']);
				if($_POST['participant2'] != ""){
					$participant = mysqli_real_escape_string($con,$_POST['participant2']);
				}
				else{
				$participant = mysqli_real_escape_string($con,$_POST['participant']);
			}

				$date = date("d-m-y");
				$sql=mysqli_query($con,"INSERT INTO fees(sn,title,amount,participant,dates,session,term)VALUES('$snx','$title','$amount','$participant','$date','$session','$term')");
				if(!$sql){
					die(mysqli_error($con));
				}
				else{
				?>
				<div class="alert alert-success "> 
            <a href="#" class="close" data-dismiss="alert"> 
            &times; 
            </a> 
       Fees has been added successfully
        </div>
				<?php
				}
		
		}
				?>
				<form method="POST">
					<select name="title" class="form-control" required>
						<option value="">Select fees title</option>
						<option value="tution">tution fees</option>
						<option value="lesson">Lesson fees</option>
						<option value="Books">Books</option>
						<option value="uniform">Uniform</option>
						<option value="Ceea">Ceea Level</option>
						<option value="damages">Damages</option>
						<option value="others">others</option>
						</select><br>
					<input type="" name="amount" class="form-control" placeholder="amount" required><br>
					<select name="participant" class="form-control" required>
						<option value="">Participant</option>
						<option value="all">ALL</option>
						<option value="JSS1">JSS1</option>
						<option value="JSS2">JSS2</option>
						<option value="JSS3">JSS3</option>
						<option value="SS1">SS1</option>
						<option value="SS2">SS2</option>
						<option value="SS3">SS3</option>
						<option value="" id="ind">individual</option>
						</select>
										<br>
					<input type="" name="participant2" class="form-control" id="oth" placeholder="Enter Admission no" style="display: none;"><br>
					<div class="form-group">
					<p class="text-center"><button class="btn btn-primary" name="create">Create</button></p>
				</div>
				</form>
				</div>
				</div>
			</div>
			<?php include("linkpanel.php") ?>
			</div>
		</div>
<script type="text/javascript">
	$('#ind').click(function(){
		$('#oth').show()
	})
</script>
<script type="text/javascript">
$(function() {
    $('.multiselect-ui').multiselect({
        includeSelectAllOption: true,
         enableFiltering: true,
    });
});
</script>
