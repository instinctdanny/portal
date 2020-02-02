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
					<h4><span class="glyphicon glyphicon-import"></span> Import students<small>* note the file must be in csv format</small></h4>
					<br><br>
				 <form id="upload_csv" method="post" enctype="multipart/form-data">
				<input type="file" name="employee_file" style="margin-top:15px;" class="form-control" id="file" />  
                          <p class="text-center"><button type="submit" name="upload" id="upload" style="margin-top:10px;" class="btn btn-info"><span class="glyphicon glyphicon-upload"></span> Upload</button> </p>
                 
                     <div style="clear:both"></div>  
                </form>  
             	<div id="loaded2"></div>
				</div>

			</div>
			</div>
		<?php include("linkpanel.php") ?>
		</div>
	</div>
	<?php include("footer.php") ?>
<script>  
      $(document).ready(function(){  
           $('#upload_csv').on("submit", function(e){  
                e.preventDefault(); //form will not submitted  
                $('#upload').html("uploading <img src='img/loader.gif' style='width:20px; height:20px;'>");
                $.ajax({  
                     url:"export.php",  
                     method:"POST",  
                     data:new FormData(this),  
                     contentType:false,          // The content type used when sending data to the server.  
                     cache:false,                // To unable request pages to be cached  
                     processData:false,          // To send DOMDocument or non processed data file it is set to false  
                     success: function(data){  
                          if(data=='Error1')  
                          {  
                               alert("Invalid File");  
                          }  
                          else if(data == "Error2")  
                          {  
                               alert("Please Select File");  
                          }  
                          else  
                          {  
                          		 $('#upload').html("Upload")
                               $('#loaded2').html(data); 
                               $ ('#loaded').val("");
                          }  
                     }  
                })  
           });  
      });  
 </script> 