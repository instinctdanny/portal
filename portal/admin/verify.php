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
					<h4>Create Pin</h4>

				</div>
				<div class="panel-body">
					<?php
					if(isset($_POST['verify'])){
						$date = date('d-m-y');
						$date2 = date('dmy');
						$time = date('hi');
						$adno = mysqli_real_escape_string($con,$_POST['adno']);
						$teller = mysqli_real_escape_string($con,$_POST['teller']);
						$fees = $_POST['fees'];
						$pin = "999".rand(1000000,5000000)."$date2"."$time";
						$check = mysqli_query($con,"SELECT * FROM pin where fees_id = '$fees' and admission = '$adno'");
						if(mysqli_fetch_array($check)>=1){
							echo "<p class='alert alert-danger'>A pin alerady exist for this student and fee category</p>";
						}
						else{
						$ins =mysqli_query($con,"INSERT into pin (admission,teller_no,fees_id,dates,pin)VALUES('$adno','$teller','$fees','$date','$pin')");
						if(!$ins){
							die(mysqli_error($con));
						}
						else{
							?>
							<div class="alert alert-success "> 
								<a href="#" class="close" data-dismiss="alert"> 
									&times; 
								</a> 
							pin has been generated <a href="#" target="__self" class="btn">Print</a> 
							</div>
							<?php
						}
					}
					}
					?>
					<div class="form-group">
						<form method="POST">
							<input type="" name="adno" id="adno" placeholder="enter student admission no" class="form-control" required><br>

							<input type="" name="teller" id="teller" placeholder="teller no" class="form-control" required><br>
							<div id="option"></div>
							<p class="text-center"><button class="btn btn-primary" name="verify">Generate Pin</button></p>
						</form>
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
		$('#adno').change(function(event){
			var adno = $("#adno").val();
			$.ajax({
				url:"verify2.php",
				method:"POST",
				data:{adno:adno},
				success:function(data){
					$('#option').html(data);
				}
			});
		});    
	});
</script>
</body>
</html>