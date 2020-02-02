<table border="1">
<?php include("conn/conn.php") ?>
<?php
$state = array(
"Abia" ,
"Adamawa" ,
"Anambra" ,
"Akwa Ibom" ,
"Bauchi" ,
"Bayelsa" ,
"Benue" ,
"Borno" ,
"Cross River" ,
"Delta" ,
"Ebonyi" ,
"Enugu" ,
"Edo" ,
"Ekiti" ,
"Abuja" ,
"Gombe" ,
"Imo" ,
"Jigawa" ,
"Kaduna" ,
"Kano" ,
"Katsina" ,
"Kebbi" ,
"Kogi" ,
"Kwara" ,
"Lagos" ,
"Nasarawa" ,
"Niger" ,
"Ogun" ,
"Ondo" ,
"Osun" ,
"Oyo" ,
"Plateau" ,
"Rivers" ,
"Sokoto" ,
"Taraba" ,
"Yobe" ,
"Zamfara"
);
include('last_names.php');
$emaildomain = array("gmail","yahoo","co.uk","hotmail","ymail","outlook");
$gender= array("male","female");
$religion= array("christainity","islam");
for ($i=32; $i <60 ; $i++) { 
if(strlen($i)==1){
	$pre = '00';
}
elseif(strlen($i)==2){
	$pre = '0';
}
else{
	$pre = '';
}
$admin = "19/$pre$i";
$password = "password@1234";
$fname = $last_names[array_rand($last_names)];
$lname = $last_names[array_rand($last_names)];
$country  = "nigeria";
$phone = rand(100000,300000);
$phone2 = rand(10000,300000);
$phone3 = rand(10000,300000);
$class = "JSS1";
$batch = "2013/2014";
//date of birth
$day = rand(10,27);
$month = rand(1,9);
$year = rand(2000,2003);
$dob = $day."-0".$month."-".$year;
$state2 =  $state[array_rand($state)];
$gender2 =  $gender[array_rand($gender)];
$religion2=  $religion[array_rand($religion)];
$goal =  $emaildomain[array_rand($emaildomain)];
$parent = "Mr and Mrs ".$lname;
$random_email = $fname.$lname.'@'.$goal."com";
$random_email2 = $lname.'@'.$goal."com";
 $password2 = md5($password);
 $userid2 = md5($admin);
 $date = date("d-m-Y");
 $arm = "2";
echo "<tr>
	<td>$fname</td>
	<td>$lname</td>
	<td>$random_email</td>
	<td>$random_email2</td>
	<td>$password</td>
	<td>$dob</td>
	<td>$state2</td>
	<td>$country</td>
	<td>$admin</td>
	<td>$phone</td>
	<td>$phone2</td>
	<td>$phone3</td>
	<td>$class</td>
	<td>$batch</td>
	<td>$parent</td>
	<td>$gender2</td>
	<td>$religion2</td>
</tr>";
 $query = mysqli_query($con," INSERT INTO users(userid,password,password2,userid2,type,dates) VALUES ('$admin','$password','$password2', '$userid2','student','$date')");
$query2 = mysqli_query($con,"INSERT INTO students(fname,lname,admission_no,class,username,batch,email,dob,parents,parents_phone1,parents_phone2,p_email,gender,religion,country,state,phone,dates,arm)
	VALUES('$fname','$lname','$admin','$class','$userid2','$batch','$random_email','$dob','$parent','$phone2','$phone3','$random_email2','$gender2','$religion2','$country','$state2','$phone','$date','$arm')");
}
if(!$query)
{
	die("error1".mysqli_error($con));
}
elseif(!$query2)
{
	die("error2".mysqli_error($con));
}
else{
	echo "done";
}
?>

</table>
