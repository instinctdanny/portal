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
    .overlay{
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      background:#312e3b;
      opacity: 0.75;
      z-index: -1;
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
  </style>
</head>
<body>
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3" id="panel_1">
        <div class="panel panel-default" id="panel_1">
          <div class="panel-heading" id="p_heading">
            <p class="text-center"><img src="img/logo.png" style="width: 80px; height: 80px; margin-top: -60px;"></p>
            <h4 class="text-center">Portal auntentication page</h4>
          </div>
          <div class="panel-body">

            <?php
            $host = "localhost";  
            $username = "root";  
            $password = "";  
            $database = "portal";  
            try{
              $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
              $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
              if(isset($_POST["login"])) 

              {  
                $userid = $_POST['userid'];
                if(empty($_POST["userid"]) || empty($_POST["password"]))  
                {  
                  echo "<p class='alert alert-danger'>All fields are required";  
                }  
                else  
                {  
                  $query = "SELECT * FROM users WHERE userid = :userid AND password = :password";  
                  $statement = $connect->prepare($query);  
                  $statement->execute(  
                    array(  
                      'userid'     =>     $_POST["userid"],  
                      'password'     =>     $_POST["password"]  
                    )  
                  );  
                  $result = $statement->fetchAll();
                  $count = $statement->rowCount();  
                  if($count > 0)  
                  {  
                    foreach ($result as $row ) {
# code...

                      setcookie('userid',$userid, time()+60+60+7);
                      $_SESSION["userid"] = $row["userid"];
                      $_SESSION["users"] = $row["userid2"]; 
                      $_SESSION['type'] = $row['type'];
                      $type = $row['type'];
                      $active = $row['active'];
                      $presence = $row['presence'];
                      if ($type == "admin"){
                        header("location:admin/home.php");
                      } 
                      elseif ($type == "staff"){
                        header("location:staff/home.php");
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
                  }  
                  else  
                  {  
                    echo "<p class='alert alert-danger'>Wrong username or password inputed</label>";  
                  }  
                }  
              } 
            }
            catch(PDOException $error)  
            {  
              $message = $error->getMessage();  
            }  
            ?>  

            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
              <div class="input-group">
                <span class="input-group-addon " id="addon1"><span class="glyphicon glyphicon-user"></span></span>
                <input type="" name="userid" placeholder="Username" class="form-control" aria-describedby="addon1">
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
            <div class="panel-footer" id="p_footer"><button type="submit" name="login" class="btn btn-primary" id="btn">Login</button></div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src='jquery.js'></script>
  <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>