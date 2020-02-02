<?php include("conn/conn.php") ?>
<?php 
$first_query = mysqli_query($con,"SELECT * from subject  ");
	while($ccc = mysqli_fetch_array($first_query)){
		$cls = $ccc['code'];
		$cls2 = $ccc['participant'];
$qx = mysqli_query($con,"SELECT * FROM calender ");
$sh3 = mysqli_fetch_array($qx);
$session = $sh3['session'];
$term = $sh3['current_term'];
$xcode = "$cls";
$xtype = 'CA1';
$class = "$cls2";
$name =  "$xcode $xtype  result for $term term of $session session ";
$query4 = mysqli_query($con,"SELECT * FROM subject where code = '$xcode'");
$mimi = mysqli_fetch_array($query4);{
	$subjectid = $mimi['sn'];
	$subject = $mimi['title'];
}
$sqlmix = mysqli_query($con,"SELECT * FROM  result_record where code = '$xcode' AND type= '$xtype'");
if(mysqli_num_rows($sqlmix) > 0){
	die("The result of this form already exist");
}
else{
	$sqlxx = mysqli_query($con,"INSERT INTO result_record (name,session,term,subject,code,type,subjectid)VALUES('$name','$session','$term','$subject','$xcode','$xtype','$subjectid')");
	if($xtype == 'CA1'){ 
		$live1 = mysqli_query($con,"SELECT * FROM students where class = '$class'");
		while($ans = mysqli_fetch_array($live1)){
			$student = $ans['admission_no'];
			$run2 = mysqli_query($con,"INSERT into result(subject,code,student,resultid,session,term)VALUES('$subject','$xcode','$student','$subjectid','$session','$term')");
		}
		if(!$run2){
			die(mysqli_error($con));
		}
	}
}

$query1 = mysqli_query($con,"SELECT * FROM students where class = '$class'");
if(!$query1){
die(mysqli_error($con));
}
while($result = mysqli_fetch_array($query1)){
$score1 =  rand(13,15);
$student = $result['admission_no'];
if($xtype == 'CA1'){
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
echo "done";
?>