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

					<div style="border: 1px solid #d7d7d7; border-radius: 5px; padding: 5px; ">
						<h4 class="text-center"> Promotion exercise</h4>

						<?php
						$detect = mysqli_query($con,"SELECT * FROM calender");
						$tell = mysqli_fetch_array($detect);
						$term = $tell['current_term'];
						$session_stop = $tell['s_stop'];
						$current_date = date('d-m-Y');
						if($term!=3){
							die("you cannot carry promotion exercise at this time of the session");
						}
						if(strtotime($session_stop) > strtotime($current_date)){
							die("you cannot carry promotion exercise at this time of the session");	
						}
						?>
						<h4 class="text-center">select the class</h4>
						<form method="GET" action="promotion2.php">
							<select name="clas" class="form-control" id="class" >		
								<option value="">Select</option>
								<?php
								$s2 = mysqli_query($con,"SELECT * from class");
								while($sh2 = mysqli_fetch_array($s2)){
									$class = $sh2['class'];
									?>
									<option value="<?php echo $class ?>"><?php echo $class ?></option>
									<?php
								}
								?>
							</select> <br>
							<p class="text-center"><input type="submit" name="submit" class="btn btn-primary" value="Go"></p>
						</form>
						<div style="margin-left:50%; display: none;" id="loader"><img src="img/ajax-loader.gif"></div>
						<div class="table-responsive" id="record2"></div>
					</div>
				</div>
				<div class="panel-body">
					<div style="border: 1px solid #d7d7d7; border-radius: 5px; padding: 5px; ">
						<h4 class="text-center">Graduate SS3 students</h4>
						<p class="text-center"><button type="submit" class="btn btn-success" id="grad">Graduate</button></p>
						<div id="result"></div>
					</div>
				</div>
				<div class="panel-body">
					<div style="border: 1px solid #d7d7d7; border-radius: 5px; padding: 5px; ">
						<h4  class="text-center">Update class</h4>
						<p  class="text-center alert alert-info">This is done do udate the classes of promoted students to their new class Please note that this operation should be carried out after the promoion exercise for all classes have been completed</p>
						<form method="POST">
							<p class="text-center"><a href="#" class="btn btn-primary" data-toggle='modal'data-target='.bs-example-modal-smsdel' class=" btn btn-default btn-sm">Update Classes</a></p>
							<div class="modal fade bs-example-modal-smsdel" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" >
								<div class="modal-dialog modal-sm " role="document">
									<div class="modal-content" style="color: #666;">
										<div class="modal-header">
											<button class="close" data-dismiss="modal" aria-label="Close" type="button"><span aria-hidden="true" >&times;</span></button><h4 class="modal-title">Update classes Confirmation</h4>
											<div class="modal-body">
												<p class="text-center"><span class="glyphicon glyphicon-update"></span><br> Have you completed the promotion exercise for all classes? If not do not proceed with this action until you have completed the promotion exercise for all the classes</p>
											</div>
											<div class="modal-footer">
												<button class="btn btn-success" data-dismiss="modal">Cancle</button> 
												<button class="btn btn-default" name="update"> Update</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php
		if(isset($_POST['update'])){
			$request1 = mysqli_query($con,"SELECT * FROM status where status = 'promoted' ");
			if(!$request1){
				die(mysqli_error());
			}
			while($request2 = mysqli_fetch_array($request1))
			{
				$mtl = $request2['student'];
				$mtl2 = $request2['class'];
				if($mtl2=='JSS1'){
					$to = 'JSS2';
				}
				elseif($mtl2=='JSS2'){
					$to = 'JSS3';
				}
				elseif($mtl2 == 'SS1'){
					$to = 'SS2';
				}
				elseif($mtl2 == 'SS2'){
					$to = 'SS3';
				}
				$request3 = mysqli_query($con,"UPDATE students SET class = '$to' where admission_no = '$mtl' ");
				if(!$request3){
					die(mysqli_error($con));
				}
			}
		}
		?>
		<?php include("linkpanel.php") ?>
	</div>
</div>
<?php include("footer.php") ?>
<script type="text/javascript" src='jquery.js'></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#grad").click(function(){
			$("#grad").html("please wait");
			$.ajax({
				url:"graduate_ss3.php",
				method:"POST",
				data:{name:name},
				success:function(data){
					$('#grad').html("done");
					$('#result').html(data);
				}
			})
		});
	});
</script>