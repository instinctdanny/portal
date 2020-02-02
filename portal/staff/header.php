<?php include("conn/conn.php") ?>
<?php session_start();
if(!isset($_SESSION['users'])){
header("location:..\index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<meta name="viewport" content="width=device-width, initial- scale=1.0">
<title>staff portal</title>
<style type="text/css">
#image-preview {
  width: 150px;
  height: 150px;
  position: relative;
  overflow: hidden;
  background-color: #f7f7f7;
  color: #ecf0f1;
}
#image-preview input {
  line-height: 200px;
  font-size: 200px;
  position: absolute;
  opacity: 0;
  z-index: 10;
}
#image-preview label {
  position: absolute;
  z-index: 5;
  opacity: 0.8;
  cursor: pointer;
  background-color: #bdc3c7;
  width: 130px;
  height: 50px;
  font-size: 20px;
  line-height: 50px;
  text-transform: uppercase;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  text-align: center;
}
</style>
</head>
<body>
<nav class="navbar navbar-default">
		      <div class="navbar-header" style="padding:5px;"><h4 class="logo">Elyon College</h4></div>
<div class="navbar-header">
  					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  						<span class="sr-only">Toogle navigation</span>
  						<span class="icon-bar"></span>
  						<span class="icon-bar"></span>
  						<span class="icon-bar"></span>
  					</button>
				  </div>
  <div class="navbar-collapse collapse" id="headlinks">
  <ul class="nav navbar-nav navbar-right">
  <li class="dropdown yamm-fw"><a href="home.php" class="dropdown-toggle"  data-hover="dropdown"><span class="glyphicon glyphicon-home"></span> HOME</a>
  </li>
  <li class="dropdown yamm-fw"><a href="profile.php" class="dropdown-toggle"  data-hover="dropdown"><span class="glyphicon glyphicon-user"></span> PROFILE</a>
  </li>
  <li class="dropdown yamm-fw"><a href="subject.php" class="dropdown-toggle"  data-hover="dropdown" ><span class="glyphicon glyphicon-eye-open"></span> MANAGE SUBJECT</a>
  </li>
  <li class="dropdown yamm-fw"><a href="students_performance.php" class="dropdown-toggle"  data-hover="dropdown" ><span class="glyphicon glyphicon-eye-open"></span> STUDENT PERMORMANCE</a>
  </li>
   <li class="dropdown yamm-fw"><a href="manage_class.php" class="dropdown-toggle"  data-hover="dropdown" ><span class="glyphicon glyphicon-eye-open"></span> MANAGE CLASS</a>
  </li>
  
   <li class="dropdown"><a href="" class="dropdown-toggle"  data-toggle="dropdown" data-hover="dropdown" ><span class="glyphicon glyphicon-cog"></span> SETTINGS <span class="caret"></span></a>
   	<ul class="dropdown-menu">
      <li><a href="cpassword.php"><span class="glyphicon glyphicon-wrench"></span> Change password</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
   </ul>
  </li>
  </ul>
	</nav>