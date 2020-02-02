<?php include("conn.php") ?>
<?php
session_start();
if(isset($_SESSION['users'])){
  $session_type = $_SESSION['type'];
  if ($session_type == "admin"){
    header("location:admin/home.php");
  }
  elseif ($session_type == "staff"){
    header("location:staff/home.php");
  }
  elseif ($session_type == "student"){
    header("location:student/home.php");
  }
  else{
    header($_SERVER['PHP_SELF']);
  }
}

?>
<!DOCTYPE html>
<html>
<head>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial- scale=1.0">
  <link rel="stylesheet" type="text/css" href="css.css">
  <title>portal</title>
  <style type="text/css">
    body{
      background-image: url("img/bg-page.jpg");
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
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
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3" id="panel_1" style="display: none;">
        <div class="panel panel-default" id="panel_1">
          <div class="panel-heading" id="p_heading">
            <p class="text-center"><img src="img/logo.png"  class= "img-responsive logo"></p>
            <h4 class="text-center">Portal auntentication page</h4>
          </div>
          <div class="panel-body">

            <?php
            /*login function */
            function Goin()
            {
              include("conn.php");
              $passme = mysqli_real_escape_string($con,$_POST['password']);
              $username = mysqli_real_escape_string($con,$_POST['username']);
              $encript = md5($passme);
              $query = mysqli_query($con,"SELECT * FROM users where userid = '$username' AND password2= '$encript'")
              or die (mysqli_error($con)); 
              $row = mysqli_fetch_array($query);
              if(!empty($row['userid']) AND !empty($row['password2']))
              {
                setcookie('email',$username, time()+60+60*7);
                $_SESSION['users'] = $row['userid2'];
                $_SESSION['users2'] = $row['userid'];
                $_SESSION['type'] = $row['type'];
                $type = $row['type'];
                $active = $row['active'];
                $presence = $row['presence'];
                $queery2 = mysqli_query($con,"UPDATE users set status ='1' where userid2='".$_SESSION['users']."'");
                if ($type == "admin"){
                  header("location:admin/home.php");exit();
                }
                elseif ($type == "staff"){
                  header("location:staff/home.php");exit();
                }
                elseif ($type == "student"){
                  if($active == '0' AND $presence == '1'){
                    session_destroy();
                    echo"
                    <div class='alert alert-danger '> 
                    <a href='#'' class='close' data-dismiss='alert'> 
                    &times; 
                    </a> 
                    you are not an active student hence you can no longer access this portal
                    </div>";
                  }
                  elseif($presence == '0'){
                    session_destroy();
                    echo "<div class='alert alert-danger'> 
                    <a href='#' class='close' data-dismiss='alert'> 
                    &times; 
                    </a> 
                    you are no longer a student of this School hence you cannot access this portal
                    again 
                    </div>";
                  }
                  else{
                    header("location:student/home.php");exit();
                  }

                }
              }
              else{
                ?>
                <div class="alert alert-danger "> 
                  <a href="#" class="close" data-dismiss="alert"> 
                    &times; 
                  </a> 
                  wrong username or password
                </div>
                <?php
              }
            }
            if(isset($_POST['login']))
            {
              goin();
            }
            ?>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
              <div class="input-group">
                <span class="input-group-addon " id="addon1"><span class="glyphicon glyphicon-user"></span></span>
                <input type="" name="username" placeholder="Username" class="form-control" aria-describedby="addon1">
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon" id="addon2"><span class="glyphicon glyphicon-lock"></span></span>
                <input type="password" name="password" placeholder="password" class="form-control" aria-describedby="addon2">
              </div>
              <br>
              <p id="text_1"><input type="checkbox" name="remember" class="from-control" > Remember me<br></p>
              <p id="text_1"><a href="fpassword.php">click here to reset password</a></p>
            </div>
            <div class="panel-footer" id="p_footer"><p class="text-center"><button type="submit" name="login" class="btn btn-primary" id="btn">Login</button></p></div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src='jquery.js'></script>
  <script src="bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript">
    $(window).load(function(){
      $('#panel_1').fadeIn(500)
    })
  </script>
</body>
</html>