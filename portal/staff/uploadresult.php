	<?php include("header.php") ?>
<script>

window.onbeforeunload = function (e) {
    e = e || window.event;

    // For IE and Firefox prior to version 4
    if (e) {
        e.returnValue = 'please ensure you click the upload button before leaving this page';
    }

    // For Safari
    return 'please ensure you click the upload button before leaving this page';
};
</script>
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
					<div class="alert alert-danger"> 
            <a href="#" class="close" data-dismiss="alert"> 
            &times; 
            </a> 
       		Please take note
       		<ul>
       			<li>Always click upload before leaving the page or closing the page </li>
       			<li>Goodluck!</li>
       		</ul>
        </div>
					<?php 
					
				if(isset($_GET['is'])){
					$is = $_GET['is'];
					$sl2 = mysqli_query($con,"SELECT * from subject where sn = '$is'" );
					$sh2 = mysqli_fetch_array($sl2);
					$code = $sh2['code'];
					$participant = $sh2['participant'];
					$type2 = $sh2['type'];
					$subject_id = $sh2['sn'];
				}
				?>
					<h4>Students taking <?php echo $code ?></h4>
					<?php 
					if($type2 == "elective"){
						$sl3 = mysqli_query($con,"SELECT * FROM elective_subject where subject_id = '$subject_id' ");
					}
					else{
					$sl3 = mysqli_query($con,"SELECT * from students where class = '$participant'" );
				}
					$num1 = mysqli_num_rows($sl3);
				?>
					<small>Total number of students:<?php echo $num1 ?></small>
				</div>
				<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-bordered">
						<tr>
							<th>Admission no</th>	
							<th>Scores</th>					
						</tr>
						<?php
						$is = $_GET['is'];
						$type = $_GET['type'];
						$run5 = mysqli_query($con,"SELECT * FROM result_record where subjectid = '$is' AND type = '$type' ");
						$return5 = mysqli_fetch_array($run5);
						$xcode = $return5['code'];
						$xsubject = $return5['subject'];
						$xtype = $return5['type'];
						if(isset($_POST['upload'])){
							foreach ($_POST['s'] as $key => $val) {
							$score1 = $val;
							$student = $_POST['student'][$key];
							if($xtype=="CA1"){
							$msql = mysqli_query($con,"UPDATE result set score = '$score1' where student = '$student' AND code = '$xcode' ");
							}
							elseif ($xtype == 'CA2'){
								$msql = mysqli_query($con,"UPDATE result set score2 = '$score1' where student = '$student' AND code = '$xcode' ");
							}
							elseif ($xtype == 'CA3'){
								$msql = mysqli_query($con,"UPDATE result set score3 = '$score1' where student = '$student' and code = '$xcode' ");
							}
							elseif ($xtype == 'ett'){
								$msql = mysqli_query($con,"UPDATE result set score4 = '$score1' where student = '$student' and code = '$xcode' ");
							}
							elseif ($xtype == 'last'){
								$msql = mysqli_query($con,"UPDATE result set last = '$score1' where student = '$student' and code = '$xcode' ");
							}
						}
						}
						?>
						<form method="POST">
						<?php 
						$limit = 20;
					if($type2 == "elective"){
						$pag = mysqli_query($con,"SELECT * FROM elective_subject where subject_id = '$subject_id' ");
					}
					else{
					$pag = mysqli_query($con,"SELECT * from students where class = '$participant'");
					}
					$num_of_row = mysqli_num_rows($pag);
					$no_of_pages = ceil($num_of_row/$limit);
					if(!isset($_GET['page'])){
						$page = 1;
					}
					else{
						$page = $_GET['page'];
					}
					$first_page = ($page-1)*$limit;
						$sqlx = mysqli_query($con,"SELECT * from result where resultid = '$is' limit ".$first_page.','. $limit. "  ");
						while($sqlxx = mysqli_fetch_array($sqlx)){
							$studenty =  $sqlxx['student'];
							if($xtype == "CA1"){
								$avaliable_score = $sqlxx['score'];
							}
							elseif($xtype == "CA2"){
								$avaliable_score = $sqlxx['score2'];
							}
							elseif($xtype == "CA3"){
								$avaliable_score = $sqlxx['score3'];
							}
							elseif($xtype == "ett"){
								$avaliable_score = $sqlxx['score4'];
							}
							elseif($xtype == "last"){
								$avaliable_score = $sqlxx['last'];
							}
						?>
						<tr>
							<th><?php echo $studenty ?></th>
							<td><input type="" name="s[]" class="form-control" value="<?php echo $avaliable_score ?>"></td>
							<input type="hidden" name="student[]" value="<?php echo $studenty ?>">
						</tr>
						<?php
					    }
					    ?>

					</table>
					</div>
					<p class="text-center"><button class="btn btn-success" name="upload">Upload</button></p>
					</form>
					<ul class="pagination">
					<?php
					    for($page=1;$page<=$no_of_pages;$page++){
					    	?>
					    	<li><a href="uploadresult.php?is=<?php echo $is ?>&&page=<?php echo $page ?>&&type=<?php echo $type ?>"><?php echo $page ?></a></li>
					    	<?php
					    }
					   ?>
					   </ul>
				</div>
			</div>
			</div>
		</div>
	</div>
	<?php include("footer.php") ?>