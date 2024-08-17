<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$db = "vieclam5chau";
global $conn;
	
$conn= mysqli_connect($servername,$username, $password);
if( !$conn){
	die('Could not connect: ' . mysqli_error($conn));
}
mysqli_select_db($conn,$db);







