<?php
 error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "otp_db";

$conn = mysqli_connect($servername, $username, $password, $dbName);
if($conn) {
    // echo"Connected ";
}else{
    echo "Not Connect".mysqli_connect_error();
}
?>

