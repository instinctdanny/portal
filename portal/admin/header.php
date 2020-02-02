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
<title>Admin portal</title>
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
   <li class="dropdown"><a href="" class="dropdown-toggle"  data-toggle="dropdown" data-hover="dropdown" ><span class="glyphicon glyphicon-cog"></span> SETTINGS <span class="caret"></span></a>
   	<ul class="dropdown-menu">
     <li><a href="cpassword.php"><span class="glyphicon glyphicon-wrench"></span> Change password</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
   </ul>
  </li>
  </ul>
</div>
	</nav>