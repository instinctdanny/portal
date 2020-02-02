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
					$student = $sh1['admission_no'];
					?>
					<img src="<?php echo $img ?>" id="imgs" class="img-responsive" alt="your passport here">
					<h4><?php echo $name1 ?></h4>
					<i><?php echo $class ?></i>
				</div>
				<?php include('no_words.php ') ?>
				<?php 
				$users = $_SESSION['users'];
				$s1  = mysqli_query($con,"SELECT * FROM students where username = '$users'");
				$sh1 = mysqli_fetch_array($s1);
				$name1 = $sh1['lname']." ".$sh1['fname'];
				$img = $sh1['picture'];
				$class = $sh1['class'];
				$admission = $sh1['admission_no'];
				$sn3 = $_GET['fees'];
				$student = $_GET['student'];
				$mis1 = mysqli_query($con,"SELECT * FROM paid_fees where fees_id = '$sn3' and student = '$admission' ");
				$mis2 = mysqli_fetch_array($mis1);
				$receiptid = $mis2['receiptid'];
				$amount = $mis2['amount'];
				$date = $mis2['dates'];
				$title = $mis2['title'];
				$session = $mis2['session'];
				$term = $mis2['term'];
				if($term == 1){
					$sub = 'st';
				}
				elseif($term == 2){
					$sub = 'nd';
				}
				else{
					$sub = 'rd';
				}
				?>
				<div class="panel-body">
					<div class="row">
						<div id="contentx">
						<div class="col-lg-8 col-lg-offset-2" style="border:1px solid #d7d7d7">
							<br>
							<img src="logo.png" style="width: 70px; height: 70px;">
							<h4 class="text-center" style="font-weight: bold; margin-top:-60px;">  ELYON COLLEGE</h4>
							<p style="font-weight: bold;" class="text-center">payment receipt</p>
							<table class="table">
								<tr>
									<th>Date: </th><td> <?php echo $date ?></td>
									<th>Session: </th> <td><?php echo $session ?></td>
									<th>Term: </th><td><?php echo $term ?><sup><?php echo $sub ?></sup></td>
									<th>Receipt id:</th><td><?php echo $receiptid ?></td>
								</tr>
							</table>
							<table class="table">
								<tr>
									<th>Name: </th><td> <?php echo $name1 ?></td>
								</tr>
								<tr>
									<th>Admission no: </th> <td> <?php echo $admission ?></td>
								</tr>
								<tr>
									<th>Payment For: </th> <td> <?php echo $title ?> Fees</td>
								</tr>
								<tr>
									<th>Amount in words: </th> <td><?php

									echo  number_to_word($amount)." Naria Only";  ?></td>
								</tr>
							</table>
							<table class="table">
								<tr>

									<td><b>Amount</b>: &#8358 <?php echo number_format($amount) ?>.00k</td>
									<td><b>Issued By</b> Elyon College </td>
								</tr>

							</table>

							</div>
						</div>
					</div>
					<p class="text-center"><br><button class="btn btn-info" onclick="window.print()">Print receipt</button></p>
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