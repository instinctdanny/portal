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
					<h4>cleared students</h4>
					<a href="cfee.php" class="btn btn-primary">Create New fee</a> <a href="verify.php" class="btn btn-success">create pin</a> <a href="view_pin.php" class="btn btn-info">View existing pin</a> <a href="cleared_students.php" class="btn btn-warning">Cleared students</a>

				</div>
				<div class="panel-body">

					
						<h4 class="text-center">Select the class here </h4>
				<select class="form-control" id="clas">
				<option value="">Select class</option>
					<?php 
						$sl3 = mysqli_query($con,"SELECT * FROM class");
						while($sh13=mysqli_fetch_array($sl3)){
							$class = $sh13['class'];
							?>
							<option value="<?php echo $class ?>"><?php echo $class ?></option>
							<?php
						}
							?>
				</select>
				<div class="table-responsive" id="contentx">
				</div>
				</div>
			</div>
			</div>
			<?php include("linkpanel.php") ?>
		</div>
	</div>
	<?php include("footer.php") ?>

 <script type="text/javascript">
    $(document).ready(function(){
       $('#clas').change(function(){
         var clas = $("#clas").val();
         $.ajax({
         url:"q_students.php",
         method:"POST",
         data:{clas:clas,},
         success:function(data){
         $('#contentx').html(data);
              }
   });    
 });
 });

        </script>
