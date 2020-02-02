	<div class="col-lg-3 link-panel">
				<ul class="list-group"> 
					<a class="list-group-item" href="mstaff.php"><span class="glyphicon glyphicon-user"></span> manage staff</a>
					<a class="list-group-item" href="imports.php"><span class="glyphicon glyphicon-import"></span> import student</a>
					<a class="list-group-item" href="mstudent.php"><span class="glyphicon glyphicon-user"></span> manage student</a>
					<a class="list-group-item" href="mfees.php"><span class="glyphicon glyphicon-usd"></span> manage fees</a>
					<?php
$sql1 = mysqli_query($con,"SELECT * FROM result_access");
$sql2 = mysqli_fetch_array($sql1);
$status = $sql2['status'];
if($status==1){
?>
<a class="list-group-item" href="resaccess.php"><span class="glyphicon glyphicon-remove"></span> deny result access</a>

<?php
}
else{
?>
<a class="list-group-item"  href="resaccess.php"><span class="glyphicon glyphicon-ok"></span> Allow result access</a>
<?php
}
?>
	<?php
$sql1 = mysqli_query($con,"SELECT * FROM result_access");
$sql2 = mysqli_fetch_array($sql1);
$status = $sql2['jss3'];
if($status==1){
?>
<a class="list-group-item" href="jss3.php"><span class="glyphicon glyphicon-lock"></span> close Jss3 </a>

<?php
}
else{
?>
<a class="list-group-item" href="jss3.php"><span class="glyphicon glyphicon-folder-open"></span>  open jss3</a>
<?php
}
?>
<a class="list-group-item" href="lock_result.php"><span class="glyphicon glyphicon-lock"></span> lock result </a>

					<a href="msubject.php"class="list-group-item"><span class="glyphicon glyphicon-file"></span>  manage subjects</a>
					<a href="canoucement.php" class="list-group-item"><span class="glyphicon glyphicon-bullhorn"></span> General announcement</a>
					<a href="calendar.php" class="list-group-item"><span class="glyphicon glyphicon-calendar"></span>  Calendar</a>
					<a href="students_performance.php" class="list-group-item"><span class="glyphicon glyphicon-stats"></span>  Students Performance</a>
					<a href="mclass.php" class="list-group-item"><span class="glyphicon glyphicon-briefcase"></span>  Manage class</a>
					<a href="promotion.php" class="list-group-item"><span class="glyphicon glyphicon-education"></span>  promotion exercise</a>
				</ul>
			</div>