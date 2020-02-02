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
				<div class="panel-body" style="background:transparent;">
					<h4>Promotion exercise</h4>
				</div>
				<table class="table table-bordered table-striped" style="color: #000;">
					<tr>
						<td>Admission no</td>
						<td>subject & score</td>
						<td>Action</td>
					</tr>
					<?php
					$clas = $_GET['clas'];
					$s2  = mysqli_query($con,"SELECT * FROM students  where class = '$clas' ");
					if(mysqli_num_rows($s2) == 0){
						echo "no record found";
					}
					else{
						while($sh2 = mysqli_fetch_array($s2)){
							$admission = $sh2['admission_no'];
							$class = $sh2['class'];
							$username = $sh2['username'];
							?>

							<tr>
								<td><?php echo $admission?></td>
								<td><?php 
								$s6 = mysqli_query($con,"SELECT * FROM  subject where participant = '$class' ");
								while($sh6 = mysqli_fetch_array($s6)){
									$sn = $sh6['sn'];
									$s4 = mysqli_query($con,"SELECT * FROM result where student ='$admission' AND resultid = '$sn' ");
									while($sh5 = mysqli_fetch_array($s4)){
										$subject = $sh5['subject']; 
										$ca1 = $sh5['score'];
										$ca2 = $sh5['score2'];
										$ca3 = $sh5['score3'];
										$ett = $sh5['score4'];
										$last = $sh5['last'];
										$catotal = $ca1 + $ca2 + $ca3;
										$total1 = $catotal + $ett;
										if($last==""){
											$total2 = $total1;
										}
										else{
											$total2= intval(($last+$total1)/2);
										}
										if($total2>=50){
											$status = "blue";
										}
										else{
											$status = "red";
										}
									}
									echo "<p>$subject: <span style='color:$status; float:right;'>$total2</span></p>"; 
								}
								?>

							</td>
							<td>
								<?php 
								$query = mysqli_query($con,"SELECT * from status where student = '$admission'");
								$query2 = mysqli_fetch_array($query);
								$current = $query2['status'];
								$query3 = mysqli_num_rows($query);
								if($query3 == 0){
									?>
									<input type="submit" class="btn btn-success promote" data= "<?php echo $admission ?>" value="Promote"> 
									<input type="submit" class="btn btn-danger repeat" data= "<?php echo $admission ?>" value="repeat"><div class="status">

									</div></td>	
									<?php
								}
								else{
									echo $current; 
								}				
								?>
							</tr>

							<?php
						}
					}
					?>
				</table>

			</div>
		</div>
		<?php include("linkpanel.php") ?>
	</div>
</div>
<?php include("footer.php") ?>
<script type="text/javascript" src='jquery.js'></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".promote").click(function(){
			var student = $(this).attr("data");
			var stats  = "promoted";
			var clas = "<?php echo $class ?>"; 
			$.ajax({
				method:"POST",
				url:"promote3.php",
				data:{student:student,clas:clas,stats:stats},
				context:this,
				dataType:'html',
				success:function(data){
					//alert(data);
					$(this).hide();
					$(this).siblings('.repeat').hide();
					$(this).siblings('.status').html(data);

				}
			});
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".repeat").click(function(){
			var student = $(this).attr("data");
			var stats  = "to repeat";
			var clas = "<?php echo $class ?>"; 
			$.ajax({
				method:"POST",
				url:"promote3.php",
				data:{student:student,clas:clas,stats:stats},
				context:this,
				dataType:'html',
				success:function(data){
					//alert(data);
					$(this).hide();
					$(this).siblings('.promote').hide();
					$(this).siblings('.status').html(data);

				}
			});
		});
	});
</script>
</body>
</html>
