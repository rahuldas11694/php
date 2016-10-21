<?php

class  Checklogin
{
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		session_start()// start session at the beginning of the code

$username=$_POST["username"];
$password =$_POST["password"];


//to prevent SQL injection

$username=stripcslashes($username);
$password=stripcslashes($password);



$server = "localhost";
$server_username="root";
$password = "";
$dbname = "securityDB";
$tbl_name="auth_user";

$conn= mysqli_connect($server,$server_username,$password,$dbname);

if($link===false)
	{
	die("connection_aborted:" .mysqli_connect_error());

   	}
   	else
   	{
   		echo "connected <br>";
   	}



}
}

$chklgin= new Checklogin();
