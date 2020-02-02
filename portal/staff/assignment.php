
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
					$employee = $sh1['employee'];
					$department= $sh1['department'];
					$is = $_GET['is'];
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
					<a href="c_assignment.php?is=<?php echo $is ?>" class="btn">Create Assignment</a><p> </p>
					<table class="table table-bordered table-striped" >
						<tr >
							<th>Title</th>
							<th>Description</th>
							<th>Submittion deadline</th>
							<th>Action</th>

						</tr>
						<?php
						$sel_ass = mysqli_query($con,"SELECT * FROM assignment where sbj_id = '$is' order by sn desc");
						while($show_ass = mysqli_fetch_array($sel_ass)){
							$title = $show_ass['title'];
							$desc = $show_ass['description'];
							$dead = $show_ass['deadline_date'];
							$ass_id = $show_ass['ass_id'];
							echo"
							<tr>
							<td>$title</td>
							<td>$desc</td>
							<td>$dead</td>
							<td><a class='btn' href='view_ass.php?ass_id=$ass_id'><span class='glyphicon glyphicon-eye-open'></span></a>
								<a class='btn' href='edit_ass.php?ass_id=$ass_id'><span class='glyphicon glyphicon-pencil'></span></a>

								<a class='btn' href='del_ass.php?ass_id=$ass_id&&is=$is'><span class='glyphicon glyphicon-trash'></span></a>
							</td>
						</tr>
							";
						}
						?>

					</table>

					</div>

				</div>
			</div>
		</div>
	</div>
	<?php include("footer.php") ?>