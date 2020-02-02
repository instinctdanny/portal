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
					<h4>Manage student</h4>
					<a href="cstudent.php" class="btn btn-primary">Create new student</a> <a href="student_records.php" class="btn btn-info"> student population record</a> <a href="inactive_students.php" class="btn btn-warning">inactive students</a>
				</div>
				<div class="panel-body">
				<div class="table-responsive" id="record">
					<table class="table table-bordered" >
						<tr>
							<th>Admission no</th>
							<th>First name</th>
							<th>last name</th>
							<th>Class</th>
							<th>Action</th>
						</tr>
					<?php
				$s2  = mysqli_query($con,"SELECT * FROM students where active = '0' ");
				while($sh2 = mysqli_fetch_array($s2)){
				$sn = $sh2['sn'];
				$admission = $sh2['admission_no'];
				$fname= $sh2['fname'];
				$lname = $sh2['lname'];
				$class = $sh2['class'];
				$username = $sh2['username'];
				?>
				
				            <tr>
							<td><?php echo $admission?></td>
							<td><?php echo $fname ?></td>
							<td><?php echo $lname ?></td>
							<td><?php echo $class ?></td>
							<td><a href="#" data-toggle="modal" data-target=".bs-example-modal-smc" class=" btn btn-default proceed" title="reactivate" data="<?php echo $admission ?>" ><span class="glyphicon glyphicon-ok-circle"></span></a>
								<a href="#" data-toggle="modal" data-target=".bs-example-modal-sms" class=" btn btn-default left" data="<?php echo $admission ?>" title="mark student as left"><span class="glyphicon glyphicon-remove-circle"></span></a>
              </td>							
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
	<!-- reactivate modal -->
	<div class="modal fade bs-example-modal-smc" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content" style="padding: 10px; color: #666;">
    <div class="modal-header">Reactivate Stdent</div>
      <p>Are you sure you want to Reactivate this Student ?<br>
      <small>
      The student must have have meet all requirement for reactivation before proceeding 
      </small>
      </p>
        <div class="modal-footer">
          <button class="btn btn-sm btn-danger" data-dismiss="modal">cancle</button>
          <button class="btn btn-sm btn-success proceed1" data="" >proceed</button>
        </div>
    </div>
  </div>
</div>
	<div class="modal fade bs-example-modal-sms" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content" style="padding: 10px; color: #666;">
    <div class="modal-header">Mark This student as left</div>
      <p>Are you sure you want to mark this student as left ?<br>
      <small>
      The student must have been inactive for at least 30 days before he can be mark as left to ensure all necessary verification is carried out
      </small>
      </p>
        <div class="modal-footer">
          <button class="btn btn-sm btn-danger" data-dismiss="modal">cancle</button>
          <button class="btn btn-sm btn-success left1" data="" >proceed</button>
        </div>
    </div>
  </div>
</div>

	<?php include("footer.php") ?>

<script type="text/javascript">
          $(document).ready(function(){
           $('.proceed').click(function(){
             var admission1 = $(this).attr("data");
             $('.proceed1').attr("data",admission1);
             $('.proceed1').click(function(){
             var admission = $(this).attr("data");
             $.ajax({
               url:"reactivate.php",
               method:"POST",
               data:{admission:admission,},
               success:function(data){ 
                $('.modal-content').html(data);
                setTimeout(function(){
                  window.location.reload();
                },2000);
              }
            });
           });    
         });
       });
       </script>
       <script type="text/javascript">
          $(document).ready(function(){
           $('.left').click(function(){
             var admission1 = $(this).attr("data");
             $('.left1').attr("data",admission1);
             $('.left1').click(function(){
             var admission = $(this).attr("data");
             $.ajax({
               url:"left.php",
               method:"POST",
               data:{admission:admission,},
               success:function(data){ 
                $('.modal-content').html(data);
                /*setTimeout(function(){
                  window.location.reload();
                },2000);*/
              }
            });
           });    
         });
        });
       </script>