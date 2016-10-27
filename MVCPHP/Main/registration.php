<?php

 class Signup{
    function registration($data){
				
		$servername = "localhost";
		$server_username = "root";
		$password = "";
		$dbname = "securityDB";
		$tbl_name="auth_user"; 

		// Create connection
		//$conn = new mysqli($servername, $username, $password);
		// Check connection

		$conn= mysqli_connect($servername, $server_username, $password,$dbname);

		if ($link===false){
			die("Connection failed: " . mysqli_connect_error());
		}
		else{
			echo 'connected<br>';
		}

		$username = $data['username'];
		$email = $data['email'];
		$address = $data['address'];
		$teli = $data['teli'];
		$department = $data['department'];
		$DOJ = $data['DOJ'];
		$DOB = $data['DOB'];
		$password = $data['password'];
		$imageName    = $data['imageName'];

		if($username!=='' && $email!=='' && $password!==''){
			$sql= "insert into auth_user(username,email,address,teli,department,DOJ,DOB,password,empId) values ('$username','$email','$address','$teli','$department','$DOJ','$DOB','$password','$empId')";
				//mysql_query($conn,$sql);
				if(mysqli_query($conn,$sql)){
					return true;
					//echo "<p id ='signup' style='color:red'>new registration record inserted into db<p>";
				}
		else{
			echo "sql Error:".$sql ."<br>connection " . mysqli_error($conn);
		}

		}

		else{
			echo "Some Fields are missing";
		return false;
		}
			
	}  //function end
}   // end of class
//$signup = new Signup();
?>