 <?php  
 if(!empty($_FILES["employee_file"]["name"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "portal");  
      $output = '';  
      $date = date('d-m-y');
      $allowed_ext = array("csv");  
      $extension = end(explode(".", $_FILES["employee_file"]["name"]));  
      if(in_array($extension, $allowed_ext))  
      {  
           $file_data = fopen($_FILES["employee_file"]["tmp_name"], 'r');  
           fgetcsv($file_data);  
           while($row = fgetcsv($file_data))  
           {  
                $userid = mysqli_real_escape_string($connect, $row[0]);  
                $password = mysqli_real_escape_string($connect, $row[1]);
                $password2 = md5($password);
                $userid2 = md5($userid);
                $fname= mysqli_real_escape_string($connect, $row[2]);
                $lname= mysqli_real_escape_string($connect, $row[3]);
                $class = mysqli_real_escape_string($connect, $row[4]);
                $batch = mysqli_real_escape_string($connect, $row[5]);
                $arm = mysqli_real_escape_string($connect,$row[6]);

                $query3 = "SELECT * FROM users where userid = '$userid'";
                $retval= mysqli_query($connect, $query3);
                $num  = mysqli_num_rows($retval);
                if($num > 0){
                  die("dubble entry of admission number");
                }
                $query = "  
                INSERT INTO users  
                     (userid,password,password2,userid2,type,dates)  
                     VALUES ('$userid','$password','$password2', '$userid2','student','$date')  
                ";  
                mysqli_query($connect, $query);  
                $query2 = "INSERT INTO students(fname,lname,admission_no,class,username,batch,arm)VALUES('$fname','$lname','$userid','$class','$userid2','$batch','$arm')";
                mysqli_query($connect,$query2);
           }   
          ?>
          <div class="alert alert-success "> 
            <a href="#" class="close" data-dismiss="alert"> 
            &times; 
            </a> 
        <span class="glyphicon glyphicon-ok"></span> completed
        </div>
          <?php
      }  
      else  
      {  
           echo 'Error1';  
      }  
 }  
 else  
 {  
      echo "no file selected";  
 }  
 ?>  