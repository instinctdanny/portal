<?php include ("conn/conn.php"); ?>
<?php if(isset($_POST['pin'])){
	$pin = $_POST['pin'];
	?>
<table class="table table-bordered">
						<tr>
							<td>Pin</td>
							<td>admission</td>
							<td>fees id</td>
							<td>Title</td>
							<td>Session</td>
							<td>Term</td>
							<td>status</td>
							<td>Date</td>
							<td>Action</td>
						</tr>
						<?php
				$s2  = mysqli_query($con,"SELECT * FROM pin where pin  = '$pin'");
				while($sh2 = mysqli_fetch_array($s2)){
				$sn = $sh2['sn'] ;
				$pin = $sh2['pin'];
				$admission= $sh2['admission'];
				$status = $sh2['status'];
				if($status == 0){
					$stat = "not used";
				}
				else{
					$stat = "used";
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
							<th> $pin</th>
							<th>$admission</th>
							<th>$fee</th>
							<th>$title3 </th>
							<th>$session_fees </th>
							<th> $term_fees </th>
							<th>$stat</th>
							<th>$date</th>
							<th><a href='deletepin.php?is=<?php echo $sn ?>'' class='btn btn-default'><span class='glyphicon glyphicon-trash'></span></a></th>
						</tr>";

					}
				}
					?>
						
					</table>