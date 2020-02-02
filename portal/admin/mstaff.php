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
					<h4>Manage staff</h4>
					<a href="cstaff.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Create new staff member</a>
				</div>
				<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-bordered">
						<tr>
							<th>Employees id</th>
							<th>First name</th>
							<th>last name</th>
							<th>department</th>
							<th>Action</th>
						</tr>
            <tr>
              <td><form method="POST"><input type="" name="empid" placeholder="by employees id" class="form-control"></form> </td>
              <td><form method="POST"><input type="" name="fname" placeholder="by frist name" class="form-control"> </form></td>
              <td><form method="POST"><input type="" name="lname" placeholder="by last name" class="form-control"></form></td>
              <td><form method="POST"><input type="" name="department" placeholder="by department" class="form-control"></form></td>
              <td></td>
            </tr>
            <tbody id="record">
					<?php
          $limit = 30;
        $pag = mysqli_query($con,"SELECT * from staff ");
        $num_of_row = mysqli_num_rows($pag);
        $no_of_pages = ceil($num_of_row/$limit);
        if(!isset($_GET['page'])){
          $page = 1;
        }
        else{
          $page = $_GET['page'];
        }

        $first_page = ($page-1)*$limit;
        //
        if(isset($_POST['empid'])){
          $empid = $_POST['empid'];
          $s2  = mysqli_query($con,"SELECT * FROM staff where employee = '$empid'  limit ".$first_page.','. $limit. " ");
        }
        elseif (isset($_POST['fname'])) {
          $fname = $_POST['fname'];
          $s2  = mysqli_query($con,"SELECT * FROM staff where fname = '$fname'  limit ".$first_page.','. $limit. " ");
        }
        elseif (isset($_POST['lname'])) {
          $lname = $_POST['lname'];
          $s2  = mysqli_query($con,"SELECT * FROM staff where lname = '$lname'  limit ".$first_page.','. $limit. " ");
        }
        elseif (isset($_POST['department'])) {
          $department = $_POST['department'];
          $s2  = mysqli_query($con,"SELECT * FROM staff where department = '$department'  limit ".$first_page.','. $limit. " ");
        }
        else{
				$s2  = mysqli_query($con,"SELECT * FROM staff limit ".$first_page.','. $limit. "");
      }
				while($sh2 = mysqli_fetch_array($s2)){
				$employee = $sh2['employee'];
				$fname= $sh2['fname'];
				$lname = $sh2['lname'];
				$department = $sh2['department'];
				$username = $sh2['username'];
				?>
						<tr>
							<td><?php echo $employee ?></td>
							<td><?php echo $fname ?></td>
							<td><?php echo $lname ?></td>
							<td><?php echo $department ?></td>
							<td><a href="edit1.php?is=<?php echo $username ?>" class=" btn btn-default"><span class="glyphicon glyphicon-pencil"></span></a></td>
							
						</tr>
						<?php
					}
					?>
        </tbody>
					</table>
           <ul class="pagination">
    <?php
    for($page=1;$page<=$no_of_pages;$page++){
      ?>
      <li><a href="mstaff.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>
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
	<?php include("footer.php") ?>
