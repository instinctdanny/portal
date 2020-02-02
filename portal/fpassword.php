<?php include("conn.php") ?>
<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/header.css">
<meta name="viewport" content="width=device-width, initial- scale=1.0">
<title>portal</title>
</head>
<style type="text/css">
body{
	margin: 0px;
	width: 100%;
	height: 100%;
	background-color: #f7f7f7;
}
	#panel_1{
		margin-top: 10%;
	}
	#btn{
		margin-left: 40%;
	}
	.panel-body a{
		color: #666;
		font-style: 12px;
		text-align: center;
	}
	#text_1{
		text-align: center;
		color: #666;
	}
	#footer{
		color: #333;
		text-align: center;
		margin-top: 10%;
	}
</style>
<body>

<div class="container">
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3" id="panel_1">
		<div class="panel panel-default" id="panel_1">
			<div class="panel-heading" id="p_heading">
				<h4>Password recovery </h4>
			</div>
				<div class="panel-body" id="p_body">
        <?php
        if(isset($_POST['reset'])){
        $email = $_POST['email'];
        $query = mysqli_query($con,"SELECT * FROM  users where email  = '$email'");
        $query2 = mysqli_num_rows($query);
        if($query2 >0){

        }
        else{
          echo "email does not exist";
        }
      }
        ?>

				<form method="POST">
				<br>
				<div class="input-group">
				<span class="input-group-addon" id="addon2"><span class="glyphicon glyphicon-envelope"></span></span>
				<input type="" name="email" placeholder="enter your email here" class="form-control" aria-describedby="addon2">
				</div>
				<br>
			</div>
			<div class="panel-footer" id="p_footer"><button type="submit" name="reset" class="btn btn-primary" id="btn">reset</button></div>
			</form>
		</div>
	</div>
</div>
</div>
<p id="footer">copyright &copy nic all right reserved</p>
<script type="text/javascript" src='jquery.js'></script>
<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>