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
					<h4>calendar</h4>
				</div>
				<div class="panel-body">
					<?php
					$s2  = mysqli_query($con,"SELECT * FROM  calender ");
					$sh2 = mysqli_fetch_array($s2);
					$sn = $sh2['sn'] ;
					$session= $sh2['session'];
					$term= $sh2['current_term'];
					$sstart = $sh2['s_start'];
					$sstop = $sh2['s_stop'];
					$tstart = $sh2['t_start'];
					$tstop = $sh2['t_stop'];
					$current_date = date("d-m-Y");
					?>
					<h4 class="text-center">Key Event</h4>
					<table class="table table-bordered">
						<tr>
							<th>Session</th>
							<th>Session Starts</th>
							<th>Session Ends</th>
							<th>Term</th>
							<th>Term Starts</th>
							<th>Term Ends</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
						<tr>
							<td><?php echo $session ?></td>
							<td> <?php echo $sstart ?></td>
							<td><?php echo $sstop ?></td>
							<td><?php echo $term ?></td>
							<td><?php echo $tstart ?></td>
							<td><?php echo $tstop ?></td>
							<td>
								<?php		
								echo $current_date; ?>
							</td>

							<td><?php if(strtotime($tstop) <= strtotime($current_date)){	
								echo "<br><a href='ccalendar.php' class='btn btn-success'>round off the term</a>";
							}
							else{echo "";}
							?></td>
						</tr>
					</table>
					<div id="opo">
					<h4 class="text-center">Sheduled Event for the session</h4>
					<p class="text-right"><a href="#" data-toggle="modal" data-target=".bs-example-modal-sms" class="btn"><span class="glyphicon glyphicon-plus"></span> Create New Event </a></p>
					<table class="table table-bordered">
						<tr><th>Event</th>
							<th>Date</th>
							<th>Time</th>
							<th>action</th>
						</tr>
						<tbody class="load_event">
							
						</tbody>
					</table>

					<p class="text-center"><button class="btn" type="button" onclick="window.print()"><span class="glyphicon glyphicon-print"></span> Print</button></p>
					<!-- printed version-- not visible to the page-->
					<div class="" id="contentx" style="visibility: hidden; width: 95%; height: 100%;">
						<table class="table table-bordered">
							<thead>
						<tr><th>Event</th>
							<th>Date</th>
							<th>Time</th>
						</tr>
						</thead>
						<tbody>
							<?php
							$show = mysqli_query($con,"SELECT * from event");
	while($op = mysqli_fetch_array($show)){
		$event_id = $op['sn'];
		$event = $op['event'];
		$date = $op['date'];
		$time = $op['time'];
		echo"<tr>
			<td>$event</td>
			<td>$date</td>
			<td>$time</td>";
		}?>
						</tbody>
					</table>
						
					</div>
					<!-- ends here -->
				</div>
				</div>
			</div>
		</div>
		<?php include("linkpanel.php") ?>
	</div>
</div>
<?php include("footer.php") ?>
<!-- modal for create -->
<!-- inactive modal -->
<div class="modal fade bs-example-modal-sms" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content" style="padding: 10px; color: #666;">
			<div class="modal-header"><h5 class="text-center">Create New Event</h5></div>
			<form method="post" id="add_event">
				<input type="" name="event" class="form-control" placeholder="event name" required><br>
				<input type="date" name="date" class="form-control" placeholder="date" required><br>
				<input type="time" name="time" class="form-control" placeholder="time" required><br>
				<p class="text-center"><button class="btn add" type="submit"><span class="glyphicon glyphicon-plus"></span> Add Event</button></p>
				<div class="view_result"></div>
			</form>

		</div>
	</div>
</div>
<!-- modal for edit event -->
<div class="modal fade bs-example-modal-sms2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content" style="padding: 10px; color: #666;">
			<div class="modal-header"><h5 class="text-center">Edit Event</h5></div>
			<form method="post" id="add_event">
				<input type="" name="event" class="form-control" placeholder="event name" required><br>
				<input type="" name="date" class="form-control" placeholder="date" value="" required><br>
				<input type="" name="time" class="form-control" placeholder="time" value="" required><br>
				<p class="text-center"><button class="btn add" type="submit"><span class="glyphicon glyphicon-plus"></span> Add Event</button></p>
				<div class="view_result"></div>
			</form>

		</div>
	</div>
</div>
<script type="text/javascript">
	function load_event(){
			$.ajax({				
				url:"load_event_controller.php",  
				method:"POST", 
				data:{data:"us",},           
				success: function(data){  
				$('.load_event').html(data);
				}  
			}); 
		}
	$(document).ready(function(){
		
		load_event();
	})
	$(document).ready(function(){  
		$('#add_event').on("submit", function(e){  
			e.preventDefault(); 
			$('.add').attr("disabled","disabled");
			$.ajax({  
				url:"event_controller.php",  
				method:"POST",  
				data:new FormData(this),  
				contentType:false,        
				cache:false,              
				processData:false,          
				success: function(data){  
					if(data=='error')  
					{  
						$('.view_result').html("<div class='alert alert-danger'>error</div");
						$('.add').removeAttr("disabled");
					}
					else  
					{  
						$('.view_result').html(data);
						$('.add').removeAttr("disabled");
						load_event();


					} 
							
 
				}  
			});  


		});  
	});  
</script>
