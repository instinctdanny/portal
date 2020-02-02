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
					<h4>Manage fees</h4>
					<a href="cfee.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Create New fee</a> <a href="verify.php" class="btn btn-success">create pin</a> <a href="view_pin.php" class="btn btn-info">View existing pin</a> <a href="cleared_students.php" class="btn btn-warning">Cleared students</a>

				</div>
				<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-bordered">
						<tr>
							<td>Fees</td>
							<td>Amount</td>
							<td>Participant</td>
							<td>Action</td>
						</tr>
						<?php
				$cal  = mysqli_query($con,"SELECT * FROM  calender ");
				$sh2 = mysqli_fetch_array($cal);
				$session= $sh2['session'];
				$term= $sh2['current_term'];
				$s2  = mysqli_query($con,"SELECT * FROM fees where session = '$session' AND term = '$term' ");
				while($sh2 = mysqli_fetch_array($s2)){
				$sn = $sh2['sn'] ;
				$title = $sh2['title'];
				$amount= $sh2['amount'];
				$participant = $sh2['participant'];
				?>
						<tr>
							<th><?php echo $title ?></th>
							<th><?php echo number_format($amount) ?></th>
							<th><?php echo $participant ?></th>
							<th><a href="#" data = 'deletefees.php?is=<?php echo $sn ?>' data-toggle='modal'data-target='.bs-example-modal-smsdel' class="btn btn-default remove"><span class="glyphicon glyphicon-trash"></span></a>
								<a href="fees_details.php?is=<?php echo $sn ?>" class="btn btn-default remove"><span class="glyphicon glyphicon-list-alt"></span></a>
							</th>
							
						</tr>
						<?php
					}
					?>
						
					</table>
				</div>
				</div>
			</div>
			</div>
			<?php include("linkpanel.php") ?>
		</div>
	</div>
	<!-- modal for student delete begins -->
     <div class="modal fade bs-example-modal-smsdel" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" >
    <div class="modal-dialog modal-sm " role="document">
      <div class="modal-content" style="color: #777;">
        <div class="modal-header">
          <button class="close" data-dismiss="modal" aria-label="Close" type="button"><span aria-hidden="true" >&times;</span></button><h4 class="modal-title text-center">Delete Fees Confirmation</h4>
         <div class="modal-body">
          <p class="text-center"><span class="glyphicon glyphicon-trash"></span><br> Are you sure you want to delete this Fees?<br><small>Nb: this action cannot be reversed</small> ?</p>
         </div>
         <div class="modal-footer">
          <button class="btn btn-success" data-dismiss="modal">Cancle</button> 
          <a href="" class="btn btn-danger remove1" data="">Delete</a></div>
        </div>
      </div>
    </div>
  </div>
	<?php include("footer.php") ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.remove').click(function(){
				var dat = $('.remove').attr("data");
				$('.remove1').attr("href",dat);
			})
		})
	</script>