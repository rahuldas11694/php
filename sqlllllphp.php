<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="INFO";
// Create connection
//$conn = new mysqli($servername, $username, $password);
$link = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($link===false) {
    die("Connection failed: " .mysqli_connect_error());
}
echo "Connected <br>";

// //creating db
// $sql = "CREATE DATABASE INFO";
// if ($conn->query($sql)===TRUE)
// {
// 	echo "database created succssefully";

// }else
// {
// echo "Error creating database". $conn->error;
// }

// $sql ="CREATE TABLE fields(
// name varchar(30) NOT NULL,
// email varchar(50) NOT NULL,
// address varchar(60),
// contact INT(10) NOT NULL 

// )";

$sql= "INSERT INTO INFO"
//mysqli_select_db($conn,"INFO");

if(mysqli_query($link, $sql))
{
	echo "table fields created <br>";
}
else
{
	echo "error creating table<br>".mysqli_error($link);
}


mysqli_close($link);
?> 