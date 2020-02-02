<?php include('conn/conn.php') ?>
<?php session_start() ?>
<?php
$change = $_POST['tem'];
$ses = $_POST['ses'];
$uman = $_SESSION['users2']; 	
$users = $_SESSION['users'];
$s1  = mysqli_query($con,"SELECT * FROM students where username = '$users'");
$sh1 = mysqli_fetch_array($s1);
$name1 = $sh1['fname']." ".$sh1['lname'];
$class = $sh1['class'];
$admission = $sh1['admission_no'];
?>
<div class="table-responsive panel-1" style="background-color: #FFF; color: #666;">
	<table class=" table table-bordered table-striped">
		<tr>
			<th>Name</th>
			<th>Class</th>
			<th>Admission no</th>
			<th>Term</th>
			<th>Session</th>
		</tr>
		<tr>
			<td><?php echo $name1 ?></td>
			<td><?php echo $class ?></td>
			<td><?php echo $admission ?></td>
			<td><?php echo $change ?></td>
			<td><?php echo $ses ?></td>
		</tr>
	</table>
	<table class="table table-bordered">
		<tr>
			<th>subject</th>
			<th>C.A.T 1</th>
			<th>C.A.T 2</th>
			<th>C.A.T 3</th>
			<th>C.A.T total</th>
			<th>Examination</th>
			<th>Total 1</th>
			<th>last term cumul</th>
			<th>total culum</th>
			<th>grade</th>
		</tr>
		<?php
		$run3 = mysqli_query($con,"SELECT * FROM oldresult where student = '$uman' AND term = '$change' AND session  = '$ses' ");
		while($result2 = mysqli_fetch_array($run3)){
			$subject = $result2['subject'];
			$score = $result2['score'];
			$score2 = $result2['score2'];
			$score3 = $result2['score3'];
			$total1 = $score+$score2+$score3;
			$score4 = $result2['score4'];
			$last = $result2['last'];
			$total3 = $total1+$score4;
			if($last == ""){
				$total2 = $total3 ;
			}
			else{
				$total2 = intval($total3+$last)/2;
			}
			if($total2 >= 75){
				$grade = "A1";
			}
			elseif($total2 >=70){
				$grade = "B2";
			}
			elseif ($total2 >=65) {
				$grade = "B3";
			}
			elseif ($total2 >=60) {
				$grade = "C4";
			}
			elseif ($total2 >=55) {
				$grade = "C5";
			}
			elseif ($total2 >=50) {
				$grade = "C6";
			}
			elseif ($total2 >=45) {
				$grade = "D7";
			}
			elseif ($total2 >=40) {
				$grade = "E8";
			}
			else {
				$grade = "F9";
			}
			if($score<8){
				$color = "#f30";
			}
			else{
				$color = "#03f";
			}
			if($score2<8){
				$color5 = "#f30";
			}
			else{
				$color5 = "#03f";
			}
			if($score3<5){
				$color1 = "#f30";
			}
			else{
				$color1 = "#03f";
			}
			if($total1<20){
				$color2 = "#f30";
			}
			else{
				$color2 = "#03f";
			}
			if($score4<30){
				$color3 = "#f30";
			}
			else{
				$color3 = "#03f";
			}
			if($total2<50){
				$color4 = "#f30";
			}
			else{
				$color4 = "#03f";
			}
			?>
			<tr>
				<td><?php echo $subject ?></td>
				<td style="color: <?php echo $color ?>"><?php echo $score ?></td>
				<td style="color: <?php echo $color5 ?>"><?php echo $score2 ?></td>
				<td style="color: <?php echo $color1 ?>"><?php echo $score3 ?></td>
				<td style="color: <?php echo $color2 ?>"><?php echo $total1 ?></td>
				<td style="color: <?php echo $color3 ?>"><?php echo $score4 ?></td>
				<td style="color: <?php echo $color4 ?>"><?php echo $total3 ?></td>
				<td style="color: <?php echo $color4 ?>"><?php echo $last ?></td>
				<td style="color: <?php echo $color4 ?>"><?php echo $total2 ?></td>
				<td style="color: <?php echo $color4 ?>"><?php echo $grade ?></td>

			</tr>
			<?php
		}
		?>
	</table>
</div>