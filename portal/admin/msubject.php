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
					<h4>Manage subject</h4>
					<a href="csubject.php" class="btn btn-primary">Create new subject</a>
					<?php
					$sql = mysqli_query($con,"SELECT * FROM elective_window");
					$dop = mysqli_fetch_array($sql);
					$status_q = $dop['status'];
					if($status_q == 0){
						?>
						<a href="lock_elective.php?data=1" class="btn btn-primary"><span class="glyphicon glyphicon-lock"></span> Elective subject</a>
						<?php
							}	
						else{
							?>
							<a href="lock_elective.php?data2=0" class="btn btn-primary">open Elective subject</a>
							<?php
						}
						?>

					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-bordered">
								<tr>
									<th>Subject code</th>
									<th>Subject title</th>
									<th>department</th>
									<th>class</th>
									<th>Anchor</th>
									<th>Action</th>
								</tr>
								<tr>
									<td><form method="POST" action=""><input type="" name="code" class="form-control" placeholder="search"></form></td>
									<td><form method="POST"><input type="" name="title" class="form-control" placeholder="search"></form></td>
									<td><form method="POST"><input type="" name="dept" class="form-control" placeholder="search"></form></td>
									<td><form method="POST"><input type="" name="class" class="form-control" placeholder="search"></form></td>
									<td><form method="POST"><input type="" name="anchor" class="form-control" placeholder="search"></form></td>
									<td></td>
								</tr>
								<?php
								$limit = 20;
								$pag = mysqli_query($con,"SELECT * from subject ");
								$num_of_row = mysqli_num_rows($pag);
								$no_of_pages = ceil($num_of_row/$limit);
								if(!isset($_GET['page'])){
									$page = 1;
								}
								else{
									$page = $_GET['page'];
								}

								$first_page = ($page-1)*$limit;
								if(isset($_POST['code'])){
									$value = $_POST['code'];
									$s2  = mysqli_query($con,"SELECT * FROM subject where code = '$value' limit ".$first_page.','. $limit. "");
								}
								elseif(isset($_POST['title'])){
									$value = $_POST['title'];
									$s2  = mysqli_query($con,"SELECT * FROM subject where title = '$value' limit ".$first_page.','. $limit. "");
								}
								elseif(isset($_POST['dept'])){
									$value = $_POST['dept'];
									$s2  = mysqli_query($con,"SELECT * FROM subject where department = '$value' limit ".$first_page.','. $limit. "");
								}
								elseif(isset($_POST['class'])){
									$value = $_POST['class'];
									$s2  = mysqli_query($con,"SELECT * FROM subject where participant = '$value'limit ".$first_page.','. $limit. "");
								}
								elseif(isset($_POST['anchor'])){
									$value = $_POST['anchor'];
									$s2  = mysqli_query($con,"SELECT * FROM subject where teacher = '$value'limit ".$first_page.','. $limit. "");
								}
								else{
									$s2  = mysqli_query($con,"SELECT * FROM subject limit ".$first_page.','. $limit. "");
								}
								while($sh2 = mysqli_fetch_array($s2)){
									$sn = $sh2['sn'] ;
									$title = $sh2['title'];
									$code= $sh2['code'];
									$department = $sh2['department'];
									$participant = $sh2['participant'];
									$teacher = $sh2['teacher'];
									$sqlx = mysqli_query($con,"SELECT * FROM staff where employee = '$teacher' ");
									$sh4x = mysqli_fetch_array($sqlx);
									$name =$sh4x["lname"]." ".$sh4x["fname"];
									?>
									<tr>
										<td><?php echo $code ?></td>
										<td><?php echo $title ?></td>
										<td><?php echo $department ?></td>
										<td><?php echo $participant ?></td>
										<td><?php echo $name."($teacher)" ?></td>
										<td><a href="#" data-toggle='modal'data-target='.bs-example-modal-smsdel' class=" btn btn-default btn-sm remove1" data='deletes.php?is=<?php echo $sn ?>'><span class="glyphicon glyphicon-trash"></span></a> <a href="esubject.php?is=<?php echo $sn ?>" class=" btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></td>

									</tr>
									<?php
								}
								?>
							</table>
							<ul class="pagination">
								<?php
								for($page=1;$page<=$no_of_pages;$page++){
									?>
									<li><a href="msubject.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>
									<?php
								}
								?>
							</ul>
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
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal" aria-label="Close" type="button"><span aria-hidden="true" >&times;</span></button><h4 class="modal-title">Delete Subject Confirmation</h4>
					<div class="modal-body">
						<p class="text-center"><span class="glyphicon glyphicon-trash"></span><br> Are you sure you want to delete this subject<br><small>Nb: this action cannot be reversed</small> ?</p>
					</div>
					<div class="modal-footer">
						<button class="btn btn-success" data-dismiss="modal">Cancle</button> 
						<a href="" class="btn btn-danger remove" data="">Delete</a></div>
					</div>
				</div>
			</div>
		</div>
		<!--modal ends -->
		<?php include("footer.php") ?>
		<script type="text/javascript">

			$(document).ready(function(){
				$('.remove1').click(function(){
					var data1 = $(this).attr('data');
					$('.remove').attr("href",data1);
				})
			})
		</script>
