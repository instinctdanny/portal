<?php  
$db_hostname = "localhost";
$db_database = "portal";
$db_username = "root";
$db_password = "";
$con= mysqli_connect("localhost","root","","portal");
if(mysqli_connect_errno()){
    echo "failed".mysqli_connect_error();
}
?>
