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
<link rel="stylesheet" type="text/css" href="datepicker.css">
<meta name="viewport" content="width=device-width, initial- scale=1.0">

<title>student portal</title>
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
  <script type="text/javascript" src="jquery.js"></script>
<nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header"></div>
    </div>
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
  <li class="dropdown yamm-fw"><a href="finance.php" class="dropdown-toggle"  data-hover="dropdown"><span class="glyphicon glyphicon-usd"></span> FINANCE</a>
  </li>
  <li class="dropdown yamm-fw"><a href="subject.php" class="dropdown-toggle"  data-hover="dropdown"><span class="glyphicon glyphicon-folder-open"></span> SUBJECTS</a>
  </li>
   <li class="dropdown yamm-fw"><a href="profile.php" class="dropdown-toggle"  data-hover="dropdown"><span class="glyphicon glyphicon-user"></span> PROFILE</a>
  </li>
  <li class="dropdown yamm-fw"><a href="result.php" class="dropdown-toggle"  data-hover="dropdown" ><span class="glyphicon glyphicon-file"></span> RESULT</a>
  </li>
  <li class="dropdown" id="bell"><a href="#" class="dropdown-toggle" data-toggle="dropdown"  data-hover="dropdown"><span class="glyphicon glyphicon-bell"></span> NOTIFICATION
     <?php 
  $user = $_SESSION['users'];
  $sl18 = mysqli_query($con,"SELECT * FROM notification  where admission = '$user' and status = '0' " );
  $num1 = mysqli_num_rows($sl18);

  ?>
   <span class="badge"><?php echo $num1 ?></span></a>
  <ul class="dropdown-menu">
  <?php 
  $user = $_SESSION['users'];
  $sl17 = mysqli_query($con,"SELECT * FROM notification  where admission = '$user' order by sn desc limit 4");
  while($sh17 = mysqli_fetch_array($sl17)) {
    $snx = $sh17['sn'];
   $title = $sh17['title'];
   $body = $sh17['content'];
  ?>
     <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm<?php echo $snx ?>"><?php echo $title ?></a></li>
     <?php
      }
     ?>
   </ul>
  </li>
   <li class="dropdown"><a href="" class="dropdown-toggle"  data-toggle="dropdown" data-hover="dropdown" ><span class="glyphicon glyphicon-cog"></span> SETTINGS <span class="caret"></span></a>
    <ul class="dropdown-menu">
    <li><a href="cpassword.php"><span class="glyphicon glyphicon-wrench"></span> Change password</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
   </ul>
  </li>
  </ul>
  </nav>
  <?php 
  $user = $_SESSION['users'];
  $sl190 = mysqli_query($con,"SELECT * FROM notification  where admission = '$user' order by sn desc limit 4");
  while($sh90 = mysqli_fetch_array($sl190)) {
    $snx = $sh90['sn'];
   $title = $sh90['title'];
   $body = $sh90['content'];
   $sender = $sh90['sender'];
   $date = $sh90['dates'];
  ?>
    <div class="modal fade bs-example-modal-sm<?php echo $snx ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" >
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content" style="padding: 10px;">
    <div class="modal-header">
    <?php echo $title ?>
    </div>
    <?php echo $body ?>
    <div class="modal-footer">
      <p>From:<?php echo $sender ?></p><small><i><?php echo $date ?></i></small>
    </div>
    </div>
  </div>
</div>
  <?php
}
?>
  <script type="text/javascript">
    $(document).ready(function(){
    $('#bell').click(function(){
      var bell = "bell";
      $.ajax({
        url:"upate.php",
        method:"POST",
        data:{bell:bell},
        success:function(data){
          $(".badge").html(data)
        }
      })
    })
    })
  </script>
