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
					<a href="cstudent.php" class="btn btn-primary">Create new student</a> <a href="student_records.php" class="btn btn-info">Students Population records</a> <a href="inactive_students.php" class="btn btn-warning">inactive students</a>
				</div>
				<div class="panel-body">
        <table class="table table-bordered">
          <tr> 
          <th>Class</th>
          <th>Boys</th>
          <th>Girls</th>
          <th>Undefined</th>
          <th>Total</th>
          </tr>
          <?php
          $q1 = mysqli_query($con,"SELECT * FROM students Where class  = 'JSS1' AND gender = 'male'");
          $n1 = mysqli_num_rows($q1);
          $q2 = mysqli_query($con,"SELECT * FROM students Where class  = 'JSS1' AND gender = 'female'");
          $n2 = mysqli_num_rows($q2);
          $q3 = mysqli_query($con,"SELECT * FROM students Where class  = 'JSS1' AND gender = ''");
          $n3 = mysqli_num_rows($q3);
          $total1 = $n1+$n2+$n3;
          ?>
          <tr>
            <th>Jss1</th>
            <th><?php echo $n1 ?></th>
            <th><?php echo $n2 ?></th>
            <th><?php echo $n3 ?></th>
            <th><?php echo $total1 ?></th>
          </tr>
          <?php
          $q4 = mysqli_query($con,"SELECT * FROM students Where class  = 'JSS2' AND gender = 'male'");
          $n4 = mysqli_num_rows($q4);
          $q5 = mysqli_query($con,"SELECT * FROM students Where class  = 'JSS2' AND gender = 'female'");
          $n5 = mysqli_num_rows($q5);
          $q6 = mysqli_query($con,"SELECT * FROM students Where class  = 'JSS2' AND gender = ''");
          $n6 = mysqli_num_rows($q6);
          $total2 = $n4+$n5+$n6;
          ?>
          <tr>
            <th>Jss2</th>
            <th><?php echo $n4 ?></th>
            <th><?php echo $n5 ?></th>
            <th><?php echo $n6 ?></th>
            <th><?php echo $total2 ?></th>
          </tr>
          <?php
          $q7 = mysqli_query($con,"SELECT * FROM students Where class  = 'JSS3' AND gender = 'male'");
          $n7 = mysqli_num_rows($q7);
          $q8 = mysqli_query($con,"SELECT * FROM students Where class  = 'JSS3' AND gender = 'female'");
          $n8 = mysqli_num_rows($q8);
          $q9 = mysqli_query($con,"SELECT * FROM students Where class  = 'JSS3' AND gender = ''");
          $n9 = mysqli_num_rows($q9);
          $total3 = $n7+$n8+$n9;
          ?>
          <tr>
            <th>Jss3</th>
            <th><?php echo $n7 ?></th>
            <th><?php echo $n8 ?></th>
            <th><?php echo $n9 ?></th>
            <th><?php echo $total3 ?></th>
          </tr>
          <?php
          $q10= mysqli_query($con,"SELECT * FROM students Where class  = 'SS1_science' AND gender = 'male'");
          $n10 = mysqli_num_rows($q10);
          $q11 = mysqli_query($con,"SELECT * FROM students Where class  = 'SS1_science' AND gender = 'female'");
          $n11 = mysqli_num_rows($q11);
          $q12 = mysqli_query($con,"SELECT * FROM students Where class  = 'SS1_science' AND gender = ''");
          $n12 = mysqli_num_rows($q12);
          $total4 = $n10+$n11+$n12;
          ?>
          <!-- SS1_science -->
          <tr>
            <th>SS1_science</th>
            <th><?php echo $n10 ?></th>
            <th><?php echo $n11 ?></th>
            <th><?php echo $n12 ?></th>
            <th><?php echo $total4 ?></th>
          </tr>
          <?php
          $q13= mysqli_query($con,"SELECT * FROM students Where class  = 'SS1_art' AND gender = 'male'");
          $n13 = mysqli_num_rows($q13);
          $q14 = mysqli_query($con,"SELECT * FROM students Where class  = 'SS1_art' AND gender = 'female'");
          $n14 = mysqli_num_rows($q14);
          $q15 = mysqli_query($con,"SELECT * FROM students Where class  = 'SS1_art' AND gender = ''");
          $n15 = mysqli_num_rows($q15);
          $total5 = $n13+$n14+$n15;
          ?>
          <!-- SS1_art -->
          <tr>
            <th>SS1_Art</th>
            <th><?php echo $n13 ?></th>
            <th><?php echo $n14 ?></th>
            <th><?php echo $n15 ?></th>
            <th><?php echo $total5 ?></th>
          </tr>
          <?php
          $q16= mysqli_query($con,"SELECT * FROM students Where class  = 'SS1_commericial   ' AND gender = 'male'");
          $n16 = mysqli_num_rows($q16);
          $q17 = mysqli_query($con,"SELECT * FROM students Where class  = 'SS1_commericial  ' AND gender = 'female'");
          $n17 = mysqli_num_rows($q17);
          $q18 = mysqli_query($con,"SELECT * FROM students Where class  = 'SS1_commericial  ' AND gender = ''");
          $n18 = mysqli_num_rows($q18);
          $total6 = $n16+$n17+$n18;
          ?>
          <!--SS1_commericial     -->
          <tr>
            <th>SS1_commericial   </th>
            <th><?php echo $n16 ?></th>
            <th><?php echo $n17 ?></th>
            <th><?php echo $n18 ?></th>
            <th><?php echo $total6 ?></th>
          </tr>
          <tr>
            <th>SS1 total</th>
            <th><?php echo $n10 + $n13 + $n16 ?></th>
            <th><?php echo $n11 + $n14 + $n17 ?></th>
            <th><?php echo $n12 + $n15 + $n18 ?></th>
            <th><?php echo $total4 + $total5 + $total6 ?></th>
          </tr>
          <?php
          $q19= mysqli_query($con,"SELECT * FROM students Where class  = 'SS2_science ' AND gender = 'male'");
          $n19 = mysqli_num_rows($q19);
          $q20 = mysqli_query($con,"SELECT * FROM students Where class  = 'SS2_science' AND gender = 'female'");
          $n20 = mysqli_num_rows($q20);
          $q21 = mysqli_query($con,"SELECT * FROM students Where class  = 'SS2_science' AND gender = ''");
          $n21 = mysqli_num_rows($q21);
          $total7 = $n19+$n20+$n21;
          ?>
          <!--SS2_science-->
          <tr>
            <th>SS2_science</th>
            <th><?php echo $n19 ?></th>
            <th><?php echo $n20 ?></th>
            <th><?php echo $n21 ?></th>
            <th><?php echo $total7 ?></th>
          </tr>
          <?php
          $q22= mysqli_query($con,"SELECT * FROM students Where class  = 'SS2_art' AND gender = 'male'");
          $n22 = mysqli_num_rows($q22);
          $q23 = mysqli_query($con,"SELECT * FROM students Where class  = 'SS2_art' AND gender = 'female'");
          $n23 = mysqli_num_rows($q23);
          $q24 = mysqli_query($con,"SELECT * FROM students Where class  = 'SS2_art' AND gender = ''");
          $n24 = mysqli_num_rows($q24);
          $total8 = $n22+$n23+$n24;
          ?>
          <!--SS2_art-->
          <tr>
            <th>SS2_art</th>
            <th><?php echo $n22 ?></th>
            <th><?php echo $n23 ?></th>
            <th><?php echo $n24 ?></th>
            <th><?php echo $total8 ?></th>
          </tr>
          <?php
          $q25= mysqli_query($con,"SELECT * FROM students Where class  = 'SS2_commericial ' AND gender = 'male'");
          $n25 = mysqli_num_rows($q25);
          $q26 = mysqli_query($con,"SELECT * FROM students Where class  = 'SS2_commericial' AND gender = 'female'");
          $n26 = mysqli_num_rows($q26);
          $q27 = mysqli_query($con,"SELECT * FROM students Where class  = 'SS2_commericial' AND gender = ''");
          $n27 = mysqli_num_rows($q27);
          $total9 = $n25+$n26+$n27;
          ?>
          <!--SS2_commericial-->
          <tr>
            <th>SS2_commericial</th>
            <th><?php echo $n25 ?></th>
            <th><?php echo $n26 ?></th>
            <th><?php echo $n27 ?></th>
            <th><?php echo $total9 ?></th>
          </tr>
          <tr>
            <th>SS2 total</th>
            <th><?php echo $n19 + $n22 + $n25 ?></th>
            <th><?php echo $n20 + $n23 + $n26 ?></th>
            <th><?php echo $n21 + $n24 + $n27 ?></th>
            <th><?php echo $total7 + $total8 + $total9 ?></th>
          </tr>
          <?php
          $q28= mysqli_query($con,"SELECT * FROM students Where class  = 'SS3_science ' AND gender = 'male'");
          $n28 = mysqli_num_rows($q28);
          $q29 = mysqli_query($con,"SELECT * FROM students Where class  = 'SS3_science' AND gender = 'female'");
          $n29 = mysqli_num_rows($q29);
          $q30 = mysqli_query($con,"SELECT * FROM students Where class  = 'SS3_science' AND gender = ''");
          $n30 = mysqli_num_rows($q30);
          $total10 = $n28+$n29+$n30;
          ?>
          <!--SS3_science-->
          <tr>
            <th>SS3_science</th>
            <th><?php echo $n28 ?></th>
            <th><?php echo $n29 ?></th>
            <th><?php echo $n30 ?></th>
            <th><?php echo $total10 ?></th>
          </tr>
          <?php
          $q31 = mysqli_query($con,"SELECT * FROM students Where class  = 'SS3_art' AND gender = 'male'");
          $n31 = mysqli_num_rows($q31);
          $q32 = mysqli_query($con,"SELECT * FROM students Where class  = 'SS3_art' AND gender = 'female'");
          $n32 = mysqli_num_rows($q32);
          $q33 = mysqli_query($con,"SELECT * FROM students Where class  = 'SS3_art' AND gender = ''");
          $n33 = mysqli_num_rows($q33);
          $total11 = $n31+$n32+$n33;
          ?>
          <!--SS3_art-->
          <tr>
            <th>SS3_art</th>
            <th><?php echo $n31 ?></th>
            <th><?php echo $n32 ?></th>
            <th><?php echo $n33 ?></th>
            <th><?php echo $total11 ?></th>
          </tr>
          <?php
          $q34 = mysqli_query($con,"SELECT * FROM students Where class  = 'SS3_commericial' AND gender = 'male'");
          $n34 = mysqli_num_rows($q34);
          $q35 = mysqli_query($con,"SELECT * FROM students Where class  = 'SS3_commericial' AND gender = 'female'");
          $n35 = mysqli_num_rows($q35);
          $q36 = mysqli_query($con,"SELECT * FROM students Where class  = 'SS3_commericial' AND gender = ''");
          $n36 = mysqli_num_rows($q36);
          $total12 = $n34+$n35+$n36;
          ?>
          <!--SS3_commericial-->
          <tr>
            <th>SS3_commericial</th>
            <th><?php echo $n34 ?></th>
            <th><?php echo $n35 ?></th>
            <th><?php echo $n36 ?></th>
            <th><?php echo $total12 ?></th>
          </tr>
          <tr>
           <th>SS3 total</th>
            <th><?php echo $n28 + $n31 + $n34 ?></th>
            <th><?php echo $n29 + $n32 + $n35 ?></th>
            <th><?php echo $n30 + $n33 + $n36 ?></th>
            <th><?php echo $total10 + $total11 + $total12 ?></th>
            </tr>
            <?php
          $q37 = mysqli_query($con,"SELECT * FROM students Where  gender = 'male'");
          $n37 = mysqli_num_rows($q37);
          $q38 = mysqli_query($con,"SELECT * FROM students Where  gender = 'female'");
          $n38 = mysqli_num_rows($q38);
          $q39 = mysqli_query($con,"SELECT * FROM students Where  gender = ''");
          $n39 = mysqli_num_rows($q39);
          $total13 = $n37+$n38+$n39;
          ?>
          <!--total-->
          <tr>
            <th>overall total</th>
            <th><?php echo $n37 ?></th>
            <th><?php echo $n38 ?></th>
            <th><?php echo $n39 ?></th>
            <th><?php echo $total13 ?></th>
          </tr>
        </table>
				</div>
			</div>
			</div>
			<?php include("linkpanel.php") ?>
		</div>
	</div>
	<?php include("footer.php") ?>