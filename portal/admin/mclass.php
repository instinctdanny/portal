  <?php include("header.php") ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-9">
        <div class="panel panel-default">
          <div class="panel-heading" id="p_heading">
            <?php 
            $users = $_SESSION['users'];
            $s1  = mysqli_query($con,"SELECT * FROM admin where username = '$users'");
            $sh1 = mysqli_fetch_array($s1);
            $name1 = $sh1['fname']." ".$sh1['lname'];
            $img = $sh1['picture'];
            $position = $sh1['position'];
            if($img==""){
              $img2 = "passport/default.png";
            }
            else{
              $img2 = $img;
            }
            ?>
            <img src="<?php echo $img2 ?>" id="imgs" class="img-responsive">
            <h4><?php echo $name1 ?></h4>
            <i><?php echo $position ?></i>
          </div>

          <div class="panel-body">
             <a href="create_class.php" class="btn btn-primary">Create Class</a>

            <div class="table-responsive">
              <br>
              <table class="table table-bordered">
                <tr>
                  <th>Class</th>
                  <th>Coordinator</th>
                  <th>Action</th>
                  <th>Arm </th>
                </tr>
                <?php
                $query1 = mysqli_query($con,"SELECT * FROM class");
                while($fetch1 = mysqli_fetch_array($query1)){
                  $class  = $fetch1['class'];
                  $class_id = $fetch1['sn'];
                  $coordinator = $fetch1['coordinator'];
                  $query2 = mysqli_query($con,"SELECT * FROM staff where employee = '$coordinator'");
                  $fetch2 = mysqli_fetch_array($query2);
                  $name = $fetch2['lname']." ".$fetch2['fname'];
                  echo "<tr>
                  <td>$class</td>
                  <td>$name</td>
                   <td>"?><select class="form-control">
                    <option value="">Select Coordinator</option>
                    <?php 
                    $query3 = mysqli_query($con,"SELECT * FROM staff");
                    while($fetch3 = mysqli_fetch_array($query3)){
                    $id = $fetch3['employee'];
                    $name2 = $fetch3['lname']." ".$fetch3['fname'];
                    echo "<option value='$id' data='$class' class='change'>$name2</option>";
                  }
                  echo" </select> </td>
                  <td> <a href='m_arm.php?class_id=$class_id'  =  ' class='btn btn-primary'>Manage arm</a></td>
                  </tr>";
                }
                    ?>
                 

                  </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <?php include("linkpanel.php") ?>
    </div>
  </div>
  <div class="dada"></div>
  <?php include("footer.php") ?>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.change').click(function(){
        var clas = $(this).attr("data");
        var coordinator = $(this).attr("value");
         $.ajax({
               url:"coordinator.php",
               method:"POST",
               data:{coordinator:coordinator,clas:clas},
               success:function(data){ 
                if(data == "error"){
                  alert("this staff is a coordinator already");
                  $('.change').val();
                }
                else{
                $('.dada').html(data);
                  
                  window.location.reload();
                }
              }
            });
           });    
      })
  </script>
