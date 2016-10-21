<?php

class Model
{
function showTable()
{

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

  $sql = "SELECT name, email, address , contact FROM fields";

  $result = $link->query($sql);

if($result->num_rows>0)
{
while($row= $result->fetch_assoc())
{ 
echo "<div class='model-div' >name:".$row["name"]."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"."email:".$row["email"]."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".
	"address:".$row["address"]."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"."contact:".$row["contact"]."<br> </div>";

}
}
else
{
	echo "zero results";
}
$link->close();
}

}
$model = new Model();
?>