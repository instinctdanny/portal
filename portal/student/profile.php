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
					<h4>profile</h4>
					<a href="edit.php?is=<?php echo $users ?>" id="btn" class="btn btn-default">Edit <span class="glyphicon glyphicon-pencil"></span></a>
					<?php
$sql1 = mysqli_query($con,"SELECT * FROM result_access");
$sql2 = mysqli_fetch_array($sql1);
$status = $sql2['jss3'];
if($status==1 && $class == "JSS3"){
?>
<a href="#" data-toggle="modal" data-target=".bs-example-modal-sm" class="btn btn-default"><span class=""></span>choose your class</a>
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content" style="padding: 10px;" id="if">
              <div class="modal-header">Choose your class for ss1</div>
              <select class="form-control" id="clas3">
              	<option value="">Select</option>
              	<option value="SS1_science">SS1_science</option>
              	<option value="SS1_art">SS1_art</option>
              	<option value="SS1_commericial">SS1_commericial</option>
              </select>
              <div class="modal-footer">
                <button class="btn btn-sm btn-danger" data-dismiss="modal">cancle</button>
                <button class="btn btn-sm btn-success" id="btn2">Save</button>
              </div>
            </div>
          </div>
        </div>
<?php
}
else{
?>
<?php
}
?>
				</div>
				<div class="panel-body">
					<table class="table table-bordered">
					<?php
					$user = $_SESSION['users'];
					$s2 = mysqli_query($con,"SELECT * FROM  students where username = '$users'");
					$sh2 = mysqli_fetch_array($s2);
					$fname = $sh2['fname'];
					$lname = $sh2['lname'];
					$mname = $sh2['mname'];
					$email = $sh2['email'];
					$phone = $sh2['phone'];
					$admission = $sh2['admission_no'];
					$gender = $sh2['gender'];
					$class = $sh2['class'];
					$address = $sh2['address'];
					$parents = $sh2['parents'];
					$parentsp1 = $sh2['parents_phone1'];
					$parentsp2 = $sh2['parents_phone2'];
					$pemail = $sh2['p_email'];
					$religion = $sh2['religion'];
					$state = $sh2['state'];
					$lga = $sh2['lga'];
					$country = $sh2['country'];
					$batch = $sh2['batch'];
					$last = $sh2['last_update'];
					$birthday = $sh2['dob'];
				function ageProcessor($bday = ''){
				$broken_pieces = explode('-',$bday);
				$dob = date_create( date('d-m-Y H:i:s', strtotime($bday)) );
				$now = date_create( date('Y-m-d H:i:s') );
				return date_diff( $dob, $now )->format('%y');}
				$ageget =  ageProcessor ($birthday); 
				$age =  $ageget;
				?>
						<tr>
							<th>Admission No</th>
							<th><?php echo $admission ?></th>
						</tr>
						<tr>
							<th>First name</th>
							<th><?php echo $fname ?></th>
						</tr>
						<tr>
							<th>Last name</th>
							<th><?php echo $lname ?></th>
						</tr>
						<tr>
							<th>Other name</th>
							<th><?php echo $mname  ?></th>
						</tr>
						<tr>
							<th>date of birth</th>
							<th><?php echo $birthday  ?></th>
						</tr>
						<tr>
							<th>age</th>
							<th><?php echo $age ?> </th>
						</tr>
						<tr>
							<th>Email</th>
							<th><?php echo $email ?></th>
						</tr>
						<tr>
							<th>Phone</th>
							<th><?php echo $phone ?></th>
						</tr>
						<tr>
							<th>gender</th>
							<th><?php echo $gender ?></th>
						</tr>
						<tr>
							<th>class</th>
							<th><?php echo $class ?></th>
						</tr>
						<tr>
							<th>Religion</th>
							<th><?php echo $religion  ?></th>
						</tr>
						<tr>
							<th>Address</th>
							<th><?php echo $address  ?></th>
						</tr>
						<tr>
							<th>Lga</th>
							<th><?php echo $lga ?></th>
						</tr>
						<tr>
							<th>State</th>
							<th><?php echo $state  ?></th>
						</tr>
						<tr>
							<th>Country</th>
							<th><?php echo $country ?></th>
						</tr>
						<tr>
							<th>parents name</th>
							<th><?php echo $parents ?></th>
						</tr>
						<tr>
							<th>Parents phone no</th>
							<th><?php echo $parentsp1 ?></th>
						</tr>
						<tr>
							<th>Parents phone no (<i>alternate<i>)</th>
							<th><?php echo $parentsp2 ?></th>
						</tr>
						<tr>
							<th>Parents email</th>
							<th><?php echo $pemail ?></th>
						</tr>
						<tr>
							<th>last update</th>
							<th><?php echo $last ?></th>
						</tr>
					</table>
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
 <script type="text/javascript">
          $(document).ready(function(){
           $('#btn2').click(function(){
             var clas3  = $('#clas3').val();  
             var id = "<?php echo $users ?>";          
             $.ajax({
               url:"mon.php",
               method:"POST",
               data:{clas3,clas3,id:id,},
               success:function(data){ 
                $('.modal-content').html(data);
                setTimeout(function(){
                  window.location.reload();
                },2000);
              }
            });
           });    
         });
       </script>