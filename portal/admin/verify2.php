<?php include("conn/conn.php") ?>
<?php session_start();
if(!isset($_SESSION['users'])){
	header("location:..\index.php");
}
?>
<select class="form-control" id="fees" name="fees" class="fees">
					<option value="">Select Fees</option>
	<?php
	if(isset($_POST['adno'])){
		$adno = $_POST['adno'];
		$s1 = mysqli_query($con,"SELECT * FROM students where admission_no = '$adno'");
			if(!$s1){
				die(mysqli_error());
			}
			$num = mysqli_num_rows($s1);
				if($num == 0){
					die("<div class= 'alert alert-danger'>admission number does not exist</div>");
				}
				else{
					$shx = mysqli_fetch_array($s1);
					$class = $shx['class'];
					$query = mysqli_query($con,"SELECT * FROM fees");
						while($fetch2 = mysqli_fetch_array($query)){
							$part = $fetch2['participant'];
							$code = $fetch2['code'];
							$list = explode(',', $part);
							$hay = array('all',$class, $adno);
							if(count(array_intersect($hay, $list))>0){
								//echo "yes";
								$code1 = $code;
							}
							else{
								//echo "no";
								$code1 = '';
							}							
						$sl2 = mysqli_query($con,"SELECT * FROM fees where code = '$code1' ");
					$no = mysqli_num_rows($sl2);
					if($no == 0){
					?>
					<div class="alert alert-danger "> 
						<a href="#" class="close" data-dismiss="alert"> 
							&times; 
						</a> 
						error
					</div>
					<?php
				}
				else{
					?>
					
					<?php
			while($sh1 = mysqli_fetch_array($sl2)){
				$sn  = $sh1['sn'];
				$title = $sh1['title'];
				?>
				<option value="<?php echo $sn ?>"><?php echo $title ?></option>

				<?php
			}
		}
	}
}
}
	?>
</select><br>