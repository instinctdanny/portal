<?php include("header.php") ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading" id="p_heading">
					<?php 
				$users = $_SESSION['users'];
				$s1  = mysqli_query($con,"SELECT * FROM staff where username = '$users'");
				$sh1 = mysqli_fetch_array($s1);
				$name1 = $sh1['fname']." ".$sh1['lname'];
				$img = $sh1['picture'];
				$department= $sh1['department'];
				if($img==""){
					$img2 = "passport/default.png";
				}
				else{
					$img2 = $img;
				}
				?>
					<img src="<?php echo $img2 ?>" id="imgs" class="img-responsive">
					<h4><?php echo $name1 ?></h4>
					<i><?php echo $department ?></i>
				</div>
				<div class="panel-body">
						</div>
				<div class="panel-body">
						<?php
						$xml = $_SESSION['users2'];
						$is = $_GET['is'];
						$run1= mysqli_query($con,"SELECT * FROM subject where sn = '$is'");
						$return = mysqli_fetch_array($run1);
							$code = $return['code'];
							$subject = $return['title'];
							echo $subject."<br>";
							?>
							<br>
							<select class="form-control" name="val" id="sel">
							<option value="">Select</option>
							<?php
						$run = mysqli_query($con,"SELECT *  FROM  result_record where code = '$code'  ");
						while ($return2 = mysqli_fetch_array($run)){
							$title = $return2['name'];
							$sn = $return2['sn'];
							$uniq = $return2['uniq'];
							$type = $return2['type'];
							$subject = $return2['subjectid'];
						?>
						<option value="<?php echo $type ?>" id="<?php echo $sn ?>"><?php echo $type ?></option>
						<?php
					}

				
				?>
					</select>
					<input type="hidden" name="val2" value="<?php echo $code ?>" id="hid">
					<input type="hidden" name="val3" value="<?php echo $subject ?>" id="hid1">
<div style="margin-left:50%; display: none;" id="loader"><img src="img/ajax-loader.gif"></div>
 

					<div id="record">
						
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	<?php include("footer.php") ?>
<script type="text/javascript" src='jquery.js'></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#sel").change(function(){
			var val = $('#sel').val();
			var val2 = $('#hid').val();
			var val3 = $('#hid1').val();
			$('#loader').show();
			$.ajax({
				method: "POST",
				url: "filter.php",
				data:{val:val,val2:val2,val3:val3},
				success: function(data){
					$('#record').html(data);
					$('#loader').hide();
				}
			})
		})
	})
</script>