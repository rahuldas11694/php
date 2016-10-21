<?php

 class Signup
 {
    public function registration($data)
    {
		$servername = "localhost";
		$server_username = "root";
		$password = "";
	    $dbname = "securityDB";
	    $tbl_name="auth_user"; 

// Create connection
//$conn = new mysqli($servername, $username, $password);
// Check connection
	
$conn= mysqli_connect($servername, $server_username, $password,$dbname);
    if ($link===false) 
	 {
      die("Connection failed: " .mysqli_connect_error());
     }
    else
     {
    	echo 'connected';
     }

		$username = $data['username'];
		$email = $data['email'];
		$address = $data['address'];
		$teli = $data['teli'];
		$department = $data['department'];
		$DOJ = $data['DOJ'];
		$DOB = $data['DOB'];
		$password = $data['password'];
		$empId    = $data['empId'];

	

   if($username!==''|| $email!=='' || $password!=='')
   {
     $sql="insert into auth_user(username,email,address,teli,department,DOJ,DOB,password) values ('$username','$email','$address','$teli','$department','$DOJ','$DOB','password')";

     if(mysql_query($conn,$sql))
     {
     	echo "<p id ='signup' style='color:red'>new registration record inserted into db<p>";
     }
     else
     {
     	echo "Error:".$sql ."<br>" . mysqli_error($conn);
     }

    }

	
	}  //function end
 }   // end of class

$signup = new Signup();
?>