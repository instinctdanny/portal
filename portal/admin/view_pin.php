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
					<h4>View Existing Pin</h4>
					<a href="cfee.php" class="btn btn-primary">Create New fee</a> <a href="verify.php" class="btn btn-success">create pin</a> <a href="view_pin.php" class="btn btn-info">View existing pin</a> <a href="cleared_students.php" class="btn btn-warning">Cleared students</a>

				</div>
				<div class="panel-body">
					<input type="" name="" placeholder="search for a pin" class="form-control" id="pin"><br>

					<div class="table-responsive" id="record">
						<table class="table table-bordered">
							<tr>
								<td>Pin</td>
								<td>admission</td>
								<td>Title</td>
								<td>Session</td>
								<td>Term</td>
								<td>status</td>
								<td>Date</td>
								<td>Action</td>
							</tr>
							<?php
							$s2  = mysqli_query($con,"SELECT * FROM pin order by sn desc limit 200 ");
							while($sh2 = mysqli_fetch_array($s2)){
								$sn = $sh2['sn'] ;
								$pin = $sh2['pin'];
								$admission= $sh2['admission'];
								$status = $sh2['status'];
								if($status == 0){
									$stat = "not used";
									$del="<a href='deletepin.php?is=$sn ?>' class='btn btn-default'><span class='glyphicon glyphicon-trash'></span></a> ";
								}
								else{
									$stat = "used";
									$del = " ";
								}
								$date = $sh2['dates'];
								$fee = $sh2['fees_id'];
								$title = mysqli_query($con,"SELECT * FROM fees where sn = '$fee'");
								$title2 = mysqli_fetch_array($title);
								$title3 = $title2['title'];
								$session_fees = $title2['session'];
								$term_fees = $title2['term'];
								echo"
								<tr>
								<th> $pin </th>
								<th> $admission </th>
								<th>$title3 </th>
								<th>$session_fees </th>
								<th> $term_fees </th>
								<th>$stat </th>
								<th>$date </th>
								<th>$del</th>
								</tr>";
							}
							?>
						</table>
					</div>
					<div class="table-responsive" id="record2">
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
		$('#pin').keypress(function(event){
			if(event.which==13){
				event.preventDefault();
			}
		})
		$('#pin').keypress(function(event){
			if(event.which==13){
				var pin = $("#pin").val();
				$('#record').hide();
				$('#loader').show();
				$.ajax({
					url:"searchpin.php",
					method:"POST",
					data:{pin:pin,},
					success:function(data){
						$('#record2').html(data);
						$('#loader').hide();
					}
				});
			};
		});    
	});
</script>
</body>
</html>