<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database="registration";
$con = new mysqli($servername, $username, $password);
mysqli_select_db($con, $database) 
?>