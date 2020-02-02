<?php include("conn/conn.php") ?>
<?php session_start() ?>
<?php
$val3 = $_POST['val3'];
$valx = $_POST['val'];
?>
<div style="height: 5px;"></div>
 <?php 
            $sl2 = mysqli_query($con,"SELECT * FROM result_query where result = '$valx' ");
            $sh2=mysqli_fetch_array($sl2);
            $status = $sh2['status'];
            if($status == 0){
              ?>
       <div class="alert alert-danger "> 
            <a href="#" class="close" data-dismiss="alert"> 
            &times; 
            </a> 
        Editing of this result is no longer possible 
        </div>

            <?php
            }
            else
            {
              ?>
<a href="editresult.php?type=<?php echo $valx ?>&&is=<?php echo $val3 ?>" class="btn btn-info">Edit this result</a>

<?php
}
?>
<div style="height: 10px;"></div>
<table class="table table-bordered">
<tr>
	<th>students</th>
	<th>scores</th>
</tr>

<?php if(isset($_POST['val'])){
$val2 = $_POST['val2'];
$val = $_POST['val'];
$run = mysqli_query($con,"SELECT * FROM result where code = '$val2' ");
while($result = mysqli_fetch_array($run)){
	$student = $result['student'];
	if($val == "CA1"){
		$score = $result['score'];
	}
	elseif($val == 'CA2'){
		$score = $result['score2'];
	}
	elseif($val == 'CA3'){
		$score = $result['score3'];
	}
	elseif($val == 'ett'){
		$score = $result['score4'];
	}
	elseif($val == 'last'){
		$score = $result['last'];
	}
	else{
		echo "";
	}
?>
<tr>
	<td><?php echo $student ?> </td>
	<td><?php echo $score ?></td>
</tr>
	<?php

}
}
?>
</table>
