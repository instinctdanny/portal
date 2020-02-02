<?php include("header.php") ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading" id="p_heading">
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
					<h4>Finances</h4>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-bordered">
							<tr>
								<th>Fees</th>
								<th>Amount</th>
								<th>Action</th>
							</tr>
							<?php 
							$cal  = mysqli_query($con,"SELECT * FROM  calender ");
							$sh2 = mysqli_fetch_array($cal);
							$session= $sh2['session'];
							$term= $sh2['current_term'];
							$query = mysqli_query($con,"SELECT * FROM fees");
							while($fetch2 = mysqli_fetch_array($query)){
								$part = $fetch2['participant'];
								$code = $fetch2['code'];
								$list = explode(',', $part);
								$hay = array('all',$class, $admission);
								if(count(array_intersect($hay, $list))>0){
//echo "yes";
									$code1 = $code;
								}
								else{
//echo "no";
									$code1 = '';
								}							
								$sl2 = mysqli_query($con,"SELECT * FROM fees where code = '$code1' AND session = '$session' And term = '$term'");
								while($sh2 = mysqli_fetch_array($sl2)){
									$sn1 = $sh2['sn'];
									$title = $sh2['title'];
									$amount = $sh2['amount'];
									$mis3 = mysqli_query($con,"SELECT * FROM paid_fees where fees_id = '$sn1' and student = '$admission' ");
									$num1 = mysqli_num_rows($mis3);
									if($num1 != 0){
										$action = "<a href='receipt.php?fees=$sn1&&student=$admission' class='btn btn-default'>Print receipt</a>";
									}
									else{
										$action = "<a href='fees_choice.php?is=$sn1' class='btn btn-default'>make payment</a> ";
									}
									?>
									<tr>
										<td><?php echo $title ?></td>
										<td><?php echo $amount ?></td>
										<td><?php echo $action ?></td>
									</tr>
									<?php
								}
							}
							?>

						</table>
						<p class="text-center"><a href="clearance.php" class="btn btn-success">Print clearance</a></p>
					</div>
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