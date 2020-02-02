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
         <h4>Manage student</h4>
         <a href="cstudent.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Create new student</a> <a href="student_records.php" class="btn btn-info"><span class="glyphicon glyphicon-stats"></span> student population record</a> <a href="inactive_students.php" class="btn btn-warning"><span class="glyphicon glyphicon-ban-circle"></span> inactive students</a>
       </div>
       <div class="panel-body">
        <div class="table-responsive" id="record">
         <table class="table table-bordered table-striped" >
          <tr>
           <th>Admission no</th>
           <th>last name</th>
           <th>First name</th>
           <th>Class</th>
           <th>Action</th>
         </tr>
         <tr>
          <td><form method="POST"><input type="" name="adno" class="form-control" placeholder="search admission no"></form></td>
          <td><form method="POST"><input type="" name="lname" class="form-control" placeholder="search  last name"></form></td>
          <td><form method="POST"><input type="" name="fname" class="form-control" placeholder="search  First name"></form></td>
          <td><form method="POST"><input type="" name="class" class="form-control" placeholder="search class"></form></td> 
          <td></td>
        </tr>
        <?php
        $limit = 50;
        $pag = mysqli_query($con,"SELECT * from students ");
        $num_of_row = mysqli_num_rows($pag);
        $no_of_pages = ceil($num_of_row/$limit);
        if(!isset($_GET['page'])){
          $page = 1;
        }
        else{
          $page = $_GET['page'];
        }

        $first_page = ($page-1)*$limit;
        if(isset($_POST['adno'])){
          $adno = $_POST['adno'];
          $s2  = mysqli_query($con,"SELECT * FROM students where admission_no = '$adno'  limit ".$first_page.','. $limit. " ");
        }
        elseif (isset($_POST['fname'])) {
          $fname = $_POST['fname'];
          $s2  = mysqli_query($con,"SELECT * FROM students where fname = '$fname'  limit ".$first_page.','. $limit. " ");
        }
        elseif (isset($_POST['lname'])) {
          $lname = $_POST['lname'];
          $s2  = mysqli_query($con,"SELECT * FROM students where lname = '$lname'  limit ".$first_page.','. $limit. " ");
        }
        elseif (isset($_POST['class'])) {
          $class = $_POST['class'];
          $s2  = mysqli_query($con,"SELECT * FROM students where class = '$class'  limit ".$first_page.','. $limit. " ");
        }
        else{
        $s2  = mysqli_query($con,"SELECT * FROM students order by lname asc limit ".$first_page.','. $limit. " ");
      }
        while($sh2 = mysqli_fetch_array($s2)){
          $sn = $sh2['sn'];
          $admission = $sh2['admission_no'];
          $lname = $sh2['lname'];
          $fname= $sh2['fname'];
          $class = $sh2['class'];
          $username = $sh2['username'];
          $active = $sh2['active'];
          if($active == '0'){
            $dis = "none";
          }
          else{
            $dis = "";
          }
          ?>
          
          <tr>
           <td><?php echo $admission?></td>
           <td><?php echo $lname ?></td>
           <td><?php echo $fname ?></td>
           <td><?php echo $class ?></td>
           <td><a href="edit2.php?is=<?php echo $username ?>" class=" btn btn-default" title="edit student"><span class="glyphicon glyphicon-pencil"></span></a>
            <a href="reset.php?is=<?php echo $username ?>" class=" btn btn-default" title='reset password'><span class="glyphicon glyphicon-edit"></span></a>
            <a href="#" data-toggle="modal" data-target=".bs-example-modal-sms" class=" btn btn-default proceed1" style="display: <?php echo $dis; ?>" title='render student inactive' data="<?php echo $admission ?>"><span class="glyphicon glyphicon-ban-circle"></span></a>
          </td>							
        </tr>
        
       <?php
     }
     ?>
   </table>
   <!-- pagenation -->
   <ul class="pagination">
    <?php
    for($page=1;$page<=$no_of_pages;$page++){
      ?>
      <li><a href="mstudent.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>
      <?php
    }
    ?>
  </ul>
</div>
</div>
</div>
</div>
<?php include("linkpanel.php") ?>
</div>
</div>
<!-- inactive modal -->
        <div class="modal fade bs-example-modal-sms" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content" style="padding: 10px; color: #666;">
              <div class="modal-header">Render The student inactive</div>
              <p style="font-weight: bold;" > Render <?php echo $fname." ".$lname ?> inactive ?<br>
                <small>
                  Please note that this action would prevent the student from accessing the portal you can activate the student again from the list of inactive students
                </small>
              </p>
              <div class="modal-footer">
                <button class="btn btn-sm btn-danger" data-dismiss="modal">cancle</button>
                <button class="btn btn-sm btn-success proceed"  data="">proceed</button>
              </div>
            </div>
          </div>
        </div>

<?php include("footer.php") ?>
<script type="text/javascript">
          $(document).ready(function(){
           $('.proceed1').click(function(){
              var  admission1 = $(this).attr('data');
            $('.proceed').attr("data",admission1);
             $('.proceed').click(function(){
             var admission = $(this).attr("data");
             $.ajax({
               url:"inactive.php",
               method:"POST",
               data:{admission:admission,},
               success:function(data){ 
                $('.modal-content').html(data);
                setTimeout(function(){
                  window.location.reload();
                },2000);
              }
            });
           });    
         });
        })
       </script>